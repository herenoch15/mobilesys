<?php
/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 10/11/2017
 * Time: 09:38
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $validLogin=$this->testLogin();
        $this->testLoginAdmin();

    }
    public function index()
    {


        $this->layout->set_titre("MobileSys Admin | Messages");
        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("cssadmin/css");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("jsadmin/js");


        $data=array();
        $data["active"]="Messages";

		$this->load->model('msg_contact_model','msg');
		$data["msg"] = $this->msg->read();		
		
        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/Messages/viewlistMessages");
        $this->layout->view("Administrateur/footerAdmin");
    }


}//FIN class
?>