<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    function  __construct(){
        parent::__construct();
        if(!$this->session->userdata('uid'))
		redirect('signin');
    }

    public function index()
    {
        $data['fname'] = $this->session->userdata('fname');
        $data['fullname'] = $this->session->userdata('full_name');
        $data['role'] = $this->session->userdata('user_role');

        $this->load->view('oneui/header', $data);
        $this->load->view('oneui/edit_profile', $data);
        $this->load->view('oneui/footer');
    }
}