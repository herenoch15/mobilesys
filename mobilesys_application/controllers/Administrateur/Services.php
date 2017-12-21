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
        $this->load->model('services_model');

    }

    /**
     * Affichage list services
     */
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
        $data["services"] = $this->services_model->read();




        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/Services/list");
        $this->layout->view("Administrateur/footerAdmin");
    }


    /**
     * Ajout  services
     */
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
             //Si valide
            $options_echappees=array();
            $options_non_echappees=array();
            $options_echappees=$this->input->post();

            $this->services_model->create($options_echappees,$options_non_echappees);

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

    /**
     * Edit  services
     */
    public function edit($id)
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
            //Si valide
            $options_echappees=array();
            $options_non_echappees=array();
            $options_echappees=$this->input->post();

            $this->services_model->create($options_echappees,$options_non_echappees);

        }
        else
        {
            $data["success"]="";
            $data["alert"]="";

            $service = $this->services_model->read('*',array('idService'=>$id));
            $data["service"]=$service[0];

        }


        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/services/edit");
        $this->layout->view("Administrateur/footerAdmin");
    }


}
?>