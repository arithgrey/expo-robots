<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function index(){}

	function usuarioregistro(){



			$data["titulo"]="Home";
			$this->load->view("Template/header", $data);
			$this->load->view("usuario/registrousuario");
			$this->load->view("Template/footer" , $data);

	}
	
}

