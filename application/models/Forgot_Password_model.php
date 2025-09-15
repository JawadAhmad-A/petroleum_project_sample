<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_Password_model extends CI_Model {

    // Get user by email
    public function get_user_by_email($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        return $query->row();
    }

    // Store the reset token and its expiration time
    public function store_token($user_id, $token) {
        $data = array(
            'userid' => $user_id,
            'token' => $token,
            'created_at' => time() // Store the timestamp
        );
        $this->db->insert('pass_reset_tokens', $data);
    }

    // Get user by token
    public function get_user_by_token($token) {
        $this->db->where('token', $token);
        $query = $this->db->get('pass_reset_tokens');

        if ($query->num_rows() == 1) {
            $token_data = $query->row();

            // Check if the token is expired (valid for 1 hour)
            if ((time() - $token_data->created_at) <= 3600) {
                // Token is valid, return the user info
                $this->db->where('userid', $token_data->userid);
                $user_query = $this->db->get('users');
                return $user_query->row();
            }
        }

        return false; // Invalid or expired token
    }

    // Update user's password
    public function update_password($user_id, $hashed_password) {
        $this->db->where('userid', $user_id);
        $this->db->update('users', array('password' => $hashed_password));
    }

    // Delete token after password is reset
    public function delete_token($token) {
        $this->db->where('token', $token);
        $this->db->delete('pass_reset_tokens');
    }
}