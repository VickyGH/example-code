<?php
class Pages extends CI_Controller {
  function __construct(){
		parent::__construct();
    /* */
    $this->load->helper(array('url'));

    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[10]');
		$this->form_validation->set_rules('correo', 'Correo', 'required|min_length[10]');
    $this->form_validation->set_rules('comentario', 'Comentario', 'required|min_length[10]');

    if($this->form_validation->run() === true){
        $nombre = $this->input->post('nombre');
				$correo = $this->input->post('correo');
        $comentario = $this->input->post('comentario');

        $this->load->model('Directorio_model');
        $this->Directorio_model->insertar_comentario($nombre, $correo, $comentario);
    }

	}

  public function view($page = 'home'){
    if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
            // Whoops, we don't have a page for that!
            show_404();
    }

    $data['title'] = ucfirst($page); // Capitalize the first letter
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);
  }
}
