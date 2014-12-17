<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class facebookmodel extends CI_Model {

    function __construct()
    {
        parent::__construct();        
        $this->load->database();
    }

    function getmensajebycampzonamensaje($idcampaña , $idzona , $idmensaje){

    	$this->db->where( "idmensaje" , $idmensaje);
    	$this->db->where( "idzona" , $idzona);
    	$this->db->where( "idcampaña" , $idcampaña);
    	
    	$query = $this->db->get("mensaje");
    	return $query->result_array();

    }



/*Termina el modelo*/
}



