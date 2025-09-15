<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts_Model extends CI_Model
{
    public function create_customer() {
        $data = array(
            'account_name' => $this->input->post('account_name'),
            'account_number' => $this->input->post('account_number'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => NULL,
            'status' => 1
        );

        $query = $this->db->insert('customers', $data);

        if ($query) {
            redirect('contacts/newcustomer');
            return true;
        } else {
            redirect('contacts/newcustomer');
            return false;
        }
    }

    public function get_customers() {
        $query = $this->db->get('customers');
        return $query->result();
    }

    public function get_customer_by_id($id) {
        $query = $this->db->get_where('customers', array('customer_id' => $id));
        return $query->row();
    }

    public function update_customer($id) {
        $data = array(
            'updated_at' => date('Y-m-d H:i:s')
        );

        $this->db->where('customer_id', $id);
        $query = $this->db->update('customers', $data);
        return $query;
    }

    public function delete_customer($id) {
        $query = $this->db->delete('customers', array('customer_id' => $id));   
        return $query;
    }

    public function count_customers() {
        $query = $this->db->count_all('customers');
        return $query;
    }
}