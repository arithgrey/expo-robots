<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Expomain extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}


	function costos(){

			$data["titulo"]="COSTOS";
			$this->load->view("Template/header", $data);
			$this->load->view("mainexpoview/costosview" , $data);
			$this->load->view("Template/footer" , $data);
		

	}
	function robots(){

			$data["titulo"]="ROBOTS";
			$this->load->view("Template/header", $data);
			$this->load->view("mainexpoview/robotsview" , $data);
			$this->load->view("Template/footer" , $data);
		

	}
	function conferencias(){


			$data["titulo"]="CONFERENCIAS";
			$this->load->view("Template/header", $data);
			$this->load->view("mainexpoview/conferenciasview" , $data);
			$this->load->view("Template/footer" , $data);	

	}

	function talleres(){


			$data["titulo"]="TALLERES";
			$this->load->view("Template/header", $data);
			$this->load->view("mainexpoview/talleresview" , $data);
			$this->load->view("Template/footer" , $data);	

	}


	function eventos(){


			$data["titulo"]="TALLERES";
			$this->load->view("Template/header", $data);
			$this->load->view("mainexpoview/eventosview" , $data);
			$this->load->view("Template/footer" , $data);	

	}

	function nosotros(){


			$data["titulo"]="NOSOTROS";
			$this->load->view("Template/header", $data);
			$this->load->view("mainexpoview/nosotrosview" , $data);
			$this->load->view("Template/footer" , $data);	

	}
	function materialeducativo(){


			$data["titulo"]="MATERIAL EDUCATIVO";
			$this->load->view("Template/header", $data);
			$this->load->view("mainexpoview/materialeducativoview" , $data);
			$this->load->view("Template/footer" , $data);	

	}
		
	function targetasbase(){
		
			$data["titulo"]="TARGETAS BASE";
			$this->load->view("Template/header", $data);
			$this->load->view("mainexpoview/targetasbaseview" , $data);
			$this->load->view("Template/footer" , $data);	

	}
	function llamativos(){
			$data["titulo"]="LLAMATIVOS";
			$this->load->view("Template/header", $data);
			$this->load->view("mainexpoview/llamativosview" , $data);
			$this->load->view("Template/footer" , $data);	

	}
	function decompetencia(){
			$data["titulo"]="DE COMPETENCIA";
			$this->load->view("Template/header", $data);
			$this->load->view("mainexpoview/decompetenciaview" , $data);
			$this->load->view("Template/footer" , $data);				
	}
	function softwareinteractivo(){
			$data["titulo"]="SOFTWARE INTERACTIVO";
			$this->load->view("Template/header", $data);
			$this->load->view("mainexpoview/softwareinteractivoview" , $data);
			$this->load->view("Template/footer" , $data);					
	}
	function estructuras(){
			$data["titulo"]="ESTRUCTURAS";
			$this->load->view("Template/header", $data);
			$this->load->view("mainexpoview/estructurasview" , $data);
			$this->load->view("Template/footer" , $data);						
	}
	function gratuitas(){
			$data["titulo"]="GRATUITAS";
			$this->load->view("Template/header", $data);
			$this->load->view("mainexpoview/gratuitasview" , $data);
			$this->load->view("Template/footer" , $data);						

	}


}

