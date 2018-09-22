<?php
class Beneficiarios extends CI_Controller {
	function __construct(){
		parent::__construct();
    $this->load->helper(array('url'));
	}

	public function index(){
    $data['title'] = ucfirst('beneficiarios');
    $this->load->view('templates/header',$data);
    $this->load->view('pages/beneficiarios');
    $this->load->view('templates/footer');
  }
}
?>
