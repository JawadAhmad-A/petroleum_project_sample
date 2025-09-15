<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForgotPassword extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Forgot_Password_model');
        $this->load->library('email'); // Load email library
    }

    public function index() {
        $this->load->view('oneui/forgot_password');
    }

    public function reset_link() {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run()) {
            $email = $this->input->post('email');
            $user = $this->Forgot_password_model->get_user_by_email($email);
            if ($user) {
                $token = bin2hex(random_bytes(50));
                $this->Forgot_password_model->store_token($user->id, $token);

                $reset_link = base_url('forgot_password/reset_password/' . $token);
                $this->_send_reset_email($email, $reset_link);

                $this->session->set_flashdata('message', 'A password reset link has been sent to your email.');
            } else {
                $this->session->set_flashdata('message', 'This email is not registered with us.');
            }

            redirect('forgot_password');
        } else {
            $this->load->view('forgot_password');
        }
    }

    private function _send_reset_email($email, $reset_link) {
        $this->email->from('no-reply@example.com', 'Your Website');
        $this->email->to($email);
        $this->email->subject('Password Reset Request');
        $this->email->message('Click the link below to reset your password: ' . $reset_link);
        $this->email->send();
    }

    public function reset_password($token) {
        $user = $this->Forgot_password_model->get_user_by_token($token);
        if ($user) {
            $data['token'] = $token;
            $this->load->view('reset_password', $data);
        } else {
            $this->session->set_flashdata('message', 'Invalid or expired token.');
            redirect('forgot_password');
        }
    }

    public function update_password() {
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

        $token = $this->input->post('token');

        if ($this->form_validation->run()) {
            $password = $this->input->post('password');

            $user = $this->Forgot_password_model->get_user_by_token($token);
            if ($user) {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $this->Forgot_password_model->update_password($user->id, $hashed_password);

                $this->Forgot_password_model->delete_token($token);

                $this->session->set_flashdata('message', 'Password has been reset successfully. You can now login.');
                redirect('signin');
            } else {
                $this->session->set_flashdata('message', 'Invalid or expired token.');
                redirect('forgot_password');
            }
        } else {
            $data['token'] = $token;
            $this->load->view('reset_password', $data);
        }
    }
}