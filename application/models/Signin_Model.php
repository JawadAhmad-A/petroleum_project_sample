<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin_Model extends CI_Model {

    public function validate_user($email, $password) {
        $this->db->where('email', $email);
        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
            $user = $query->row();

            if (password_verify($password, $user->password)) {
                return $user;
            } else {
                return false;
            }
        } else {
            return false;  // User not found
        }
    }
}