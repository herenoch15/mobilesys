<?php
/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 10/11/2017
 * Time: 09:38
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Services extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $validLogin = $this->testLogin();
        $this->testLoginAdmin();

    }

    public function index()
    {
        $this->layout->set_titre("MobileSys Admin | Services");
        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("cssadmin/css");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("jsadmin/js");

        $data=array();
        $data["active"]="Services";

        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/Services/list");
        $this->layout->view("Administrateur/footerAdmin");
    }
    public  function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');


        $this->form_validation->set_rules('nom_service','Nom service','trim|required');
        $this->form_validation->set_rules('description','Desciption','trim|required');

        $this->layout->set_titre("MobileSys Admin | Services");
        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("cssadmin/css");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("jsadmin/js");


        $data=array();
        $data["active"]="Services";
        if($this->form_validation->run())
        {

        }
        else
        {
            $data["success"]="";
            $data["alert"]="";
        }





        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/services/create");
        $this->layout->view("Administrateur/footerAdmin");
    }
}
?>