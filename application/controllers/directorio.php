<?php
class Directorio extends CI_Controller {
	function __construct(){
		parent::__construct();
    $this->load->helper(array('url'));
	}

	public function index(){
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[10]');
		$this->form_validation->set_rules('correo', 'Correo', 'required|min_length[10]');
    $this->form_validation->set_rules('comentario', 'Comentario', 'required|min_length[10]');

    if($this->form_validation->run() === true){
        //Si la validación es correcta, cogemos los datos de la variable POST
        //y los enviamos al modelo
        $nombre = $this->input->post('nombre');
				$correo = $this->input->post('correo');
        $comentario = $this->input->post('comentario');

        $this->load->model('Mdirectorio');
        $this->Mdirectorio->insertar_comentario($nombre, $correo, $comentario);
    }
		$data['title'] = ucfirst('Directorio');
		$this->load->view('templates/header',$data);
    $this->load->view('pages/directorio');
    $this->load->view('templates/footer');
	}
}
?>
