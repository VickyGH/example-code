<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beneficiarios extends CI_Controller {
	function __construct(){
		parent::__construct();
    $this->load->helper(array('url'));
	}
	public function index()
	{
		$data['title'] = ucfirst('Beneficiarios');
    $this->load->view('templates/header',$data);
    $this->load->view('pages/inicio');
    $this->load->view('templates/footer');
	}
}
