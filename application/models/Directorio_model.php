<?php
class Directorio_model extends CI_Model{
  public function __construct(){
		parent::__construct();
	}

  public function insertar_comentario($nombre, $correo, $comentario){
    $data = array(
      'nombre' => $nombre,
      'correo' => $correo,
      'comentario' => $comentario
    );
    return $this->db->insert('comentarios', $data);
  }
}
?>
