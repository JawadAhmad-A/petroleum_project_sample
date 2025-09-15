<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

    private $table = 'customers';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Get all customers
    public function get_all_customers() {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    // Get single customer by ID
    public function get_customer($id) {
        $this->db->where('customer_id', $id); 
        $query = $this->db->get($this->table);
        return $query->row();
    }

    // Add new customer
    public function add_customer($data) {
        return $this->db->insert($this->table, $data);
    }

    // Update customer
    public function update_customer($id, $data) {
        $this->db->where('customer_id', $id); 
        return $this->db->update($this->table, $data);
    }

    // Delete customer
    public function delete_customer($id) {
        $this->db->where('customer_id', $id); 
        return $this->db->delete($this->table);
    }

    // Search customers
    public function search_customers($term) {
        $this->db->like('customer_name', $term);
        $this->db->or_like('customer_email', $term);
        $query = $this->db->get($this->table);
        return $query->result();
    }
} 