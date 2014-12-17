<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Appqrsocial extends CI_Controller
{    
  

  public function __construct()    
  {        
     parent::__construct();        
     $this->load->model('facebookmodel');
  
  }

    /*
    private $appId;
    private $secret;
    public function index()
    {
        $this->appId = 'appId';
        $this->secret = 'secret';
        $fb_config = array(
            'appId' => $this->appId,
            'secret' => $this->secret
        );
 
        $this->load->library('facebook', $fb_config);
 
        $user_id = $this->facebook->getUser();
        $token = $this->facebook->getAccessToken();
 
        if ($user_id) {
            try {
                $data['logout_url'] = $this->facebook->getLogoutUrl();
                $data['user_profile'] = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }else {
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'scope' => 'email,user_birthday,publish_stream,offline_access', 'redirect_uri' => 'https://apps.facebook.com/mi_aplicacion/'));
        }
        $data['titulo'] = 'Prueba aplicación facebook con codeigniter';
        //método que creamos en el modelo con una consulta fql
        $data['usuario'] = $this->facebookmodel->datos_usuario();
        $this->load->view('facebook_view',$data);

    }
    /**/


public function fbmensaje(){

    $data["titulo"]="";    
    $this->load->model("facebookmodel");


    $campaña =$this->input->get("camp");
    $zona  = $this->input->get("zona");
    $mensaje  = $this->input->get("mensaje");
        

    $data["campaña"]=$campaña;
    $data["zona"] = $zona;
    $data["mensaje"] = $mensaje;

    $result = $this->facebookmodel->getmensajebycampzonamensaje($campaña , $zona , $mensaje);                                    
    $resultdata =  $result[0]; 
    $data["result"] = $resultdata;

    $data["idmensaje"] = $resultdata["idmensaje"];
    $data["descripcion"] =  $resultdata["descripcion"];
    $data["status"] =  $resultdata["status"];
    $data["horainicio"] = $resultdata["horainicio"];
    $data["horatermino"] =  $resultdata["horatermino"];
    $data["fechainicio"] =  $resultdata["fechainicio"];
    $data["fechatermino"] = $resultdata["fechatermino"];
    $data["idzona"] =  $resultdata["idzona"];





    $this->load->view("Template/header", $data);
    $this->load->view("facebook/publicarmensaje");
    $this->load->view("Template/footer", $data);

}
}




