<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_Model extends CI_Model {
    
    public function registerUser($first_name, $last_name, $emailid, $password) {
        $data = array(
            'firstname' => $first_name,
            'lastname'  => $last_name,
            'email'      => $emailid,
            'password'   => password_hash($password, PASSWORD_DEFAULT)
        );

        $query = $this->db->insert('users', $data);

        if ($query) {
            $this->session->set_flashdata('success', 'Registration successful. Now you can login.');
            redirect('signup');
        } else {
            $this->session->set_flashdata('error', 'Something went wrong. Please try again.');
            redirect('signup');
        }
    }
}