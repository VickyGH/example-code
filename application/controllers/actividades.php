<?php
class Actividades extends CI_Controller {
	function __construct(){
		parent::__construct();
    $this->load->helper(array('url'));
	}

	public function index(){
    $data['title'] = ucfirst('Actividades');
    $this->load->view('templates/header',$data);
    $this->load->view('pages/actividades');
    $this->load->view('templates/footer');
  }
}
?>
