<?php defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');

class Targetasbasecontrollerrest extends REST_Controller{	
	/*list targetas base*/
	function listtargetasbase_GET(){


	 	$this->response("ok targetas");

	}	
	function listpotencia_GET(){


	 	$this->response("ok potencia");

	}
	function listsensores_GET(){


	 	$this->response("ok sensores");

	}
	function listcontrol_GET(){


	 	$this->response("ok control");

	}
	function listasdmodular_GET(){
		$this->response("ok diseño modular");
	}
	
	
	



}
