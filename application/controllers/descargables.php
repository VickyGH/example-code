<?php
class Descargables extends CI_Controller {
	function __construct(){
		parent::__construct();
    $this->load->helper(array('url'));
	}

	public function index(){
    $data['title'] = ucfirst('Descargables');
    $this->load->view('templates/header',$data);
    $this->load->view('pages/descargables');
    $this->load->view('templates/footer');
  }
}
?>
