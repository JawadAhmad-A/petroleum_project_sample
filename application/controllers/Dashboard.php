<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(!$this->session->userdata('uid')) {
			redirect('signin');
		}
		//$this->load->model('invoice_model');
		//$this->load->library('pagination');
	}

	public function index() {
		$data['fname'] = $this->session->userdata('fname');
		$data['fullname'] = $this->session->userdata('full_name');
		$data['role'] = $this->session->userdata('user_role');

		// $data['draft_count'] = $this->invoice_model->get_invoice_count('draft');
		// $data['sent_count'] = $this->invoice_model->get_invoice_count('sent');
		// $data['paid_count'] = $this->invoice_model->get_invoice_count('paid');
		// $data['total_count'] = $this->invoice_model->get_invoice_count('all');

		// $config['base_url'] = base_url('dashboard/index');
		// $config['total_rows'] = $this->invoice_model->get_invoice_count('all');
		// $config['per_page'] = 10;
		// $config['uri_segment'] = 3;
		
		// $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
		// $config['full_tag_close'] = '</ul>';
		// $config['num_tag_open'] = '<li class="page-item">';
		// $config['num_tag_close'] = '</li>';
		// $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		// $config['cur_tag_close'] = '</a></li>';
		// $config['next_tag_open'] = '<li class="page-item">';
		// $config['next_tag_close'] = '</li>';
		// $config['prev_tag_open'] = '<li class="page-item">';
		// $config['prev_tag_close'] = '</li>';
		// $config['first_tag_open'] = '<li class="page-item">';
		// $config['first_tag_close'] = '</li>';
		// $config['last_tag_open'] = '<li class="page-item">';
		// $config['last_tag_close'] = '</li>';
		// $config['next_link'] = '&raquo;';
		// $config['prev_link'] = '&laquo;';
		// $config['attributes'] = array('class' => 'page-link');

		// $this->pagination->initialize($config);

		// $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		// $data['recent_invoices'] = $this->invoice_model->get_recent_invoices($config['per_page'], $page);
		// $data['pagination'] = $this->pagination->create_links();

		$this->load->view('oneui/header', $data);
		$this->load->view('oneui/dash', $data);
		$this->load->view('oneui/footer');
	}
}