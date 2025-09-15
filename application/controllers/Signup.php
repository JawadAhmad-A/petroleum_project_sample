<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
    
    public function index() {
        $this->form_validation->set_rules('fullname', 'Full Name', 'required|regex_match[/^[a-zA-Z\s]+$/]', array(
            'regex_match' => 'The %s field must contain only letters and spaces.'
        ));
        $this->form_validation->set_rules('emailid', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|min_length[6]|matches[password]');
        $this->form_validation->set_message('is_unique', 'This email is already exists.');

        if ($this->form_validation->run()) {
            $fullname = $this->input->post('fullname');
            $emailid = $this->input->post('emailid');
            $password = $this->input->post('password');
            
            $name_parts = explode(' ', trim($fullname), 2);
            $first_name = $name_parts[0];
            $last_name = isset($name_parts[1]) ? $name_parts[1] : '';
            $this->load->model('Signup_Model');
            $this->Signup_Model->registerUser($first_name, $last_name, $emailid, $password);
        } else {
            $this->load->view('oneui/signup');
        }
    }
}