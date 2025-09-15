<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {

	//Validating login
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('uid'))
		redirect('signin');

		$this->load->model('Contacts_Model');
	}
	
	public function index()
	{
		$data['fname'] = $this->session->userdata('fname');
        $data['fullname'] = $this->session->userdata('full_name');
		$data['role'] = $this->session->userdata('user_role');

		$this->load->view('oneui/header', $data);
		$this->load->view('oneui/customers');
		$this->load->view('oneui/footer');
	}

	public function all()
	{
		$data['fname'] = $this->session->userdata('fname');
        $data['fullname'] = $this->session->userdata('full_name');
		$data['role'] = $this->session->userdata('user_role');

		$this->load->view('oneui/header', $data);
		$this->load->view('oneui/all_contacts');
		$this->load->view('oneui/footer');
	}

	public function customers()
	{
		$data['fname'] = $this->session->userdata('fname');
        $data['fullname'] = $this->session->userdata('full_name');
		$data['role'] = $this->session->userdata('user_role');

		$this->load->view('oneui/header', $data);
		$this->load->view('oneui/customers');
		$this->load->view('oneui/footer');
	}

	public function customer()
	{
		$data['fname'] = $this->session->userdata('fname');
        $data['fullname'] = $this->session->userdata('full_name');
		$data['role'] = $this->session->userdata('user_role');

		$this->load->view('oneui/header', $data);
		$this->load->view('oneui/customer_details');
		$this->load->view('oneui/footer');
	}

	public function suppliers()
	{
		$data['fname'] = $this->session->userdata('fname');
        $data['fullname'] = $this->session->userdata('full_name');
		$data['role'] = $this->session->userdata('user_role');

		$this->load->view('oneui/header', $data);
		$this->load->view('oneui/suppliers');
		$this->load->view('oneui/footer');
	}

	public function newcustomer()
	{
		// Form Validation
		$this->form_validation->set_rules('account_name', 'Account Name', 'required');
		$this->form_validation->set_rules('account_number', 'Account Number', 'required');
		$this->form_validation->set_rules('first_name', 'First Name', 'required|regex_match[/^[a-zA-Z\s]+$/]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|regex_match[/^[a-zA-Z\s]+$/]');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('address', 'Address', 'required');

		if ($this->form_validation->run()) {
			$this->load->model('Contacts_Model');
			$this->Contacts_Model->create_customer();
		}
		$data['fname'] = $this->session->userdata('fname');
        $data['fullname'] = $this->session->userdata('full_name');
		$data['role'] = $this->session->userdata('user_role');

		$this->load->view('oneui/header', $data);
		$this->load->view('oneui/new_customer');
		$this->load->view('oneui/footer');
	}

	public function newsupplier()
	{
		$data['fname'] = $this->session->userdata('fname');
        $data['fullname'] = $this->session->userdata('full_name');
		$data['role'] = $this->session->userdata('user_role');

		$this->load->view('oneui/header', $data);
		$this->load->view('oneui/new_supplier');
		$this->load->view('oneui/footer');
	}
}