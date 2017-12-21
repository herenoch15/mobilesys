<?php
/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 10/11/2017
 * Time: 10:24
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Realisations extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $validLogin = $this->testLogin();
        $this->testLoginAdmin();
        $this->load->model('realisations_model');

    }

    public function index()
    {

        $this->layout->set_titre("MobileSys Admin | Realisations");
        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("cssadmin/css");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("jsadmin/js");

        $data=array();
        $data["active"]="Realisations";
        $data["realisations"] = $this->realisations_model->read();



        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/Realisations/list");
        $this->layout->view("Administrateur/footerAdmin");
    }
    public function  create()
    {

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('titre','Nom service','trim|required');
        $this->form_validation->set_rules('description','Desciption','trim|required');

        $this->layout->set_titre("MobileSys Admin | Realisations");
        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("cssadmin/css");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("jsadmin/js");

        $data=array();
        $data["active"]="Realisations";
        if($this->form_validation->run())
        {
            //Si valide
            $options_echappees=array();
            $options_non_echappees=array();
            $options_echappees=$this->input->post();

            $this->realisations_model->create($options_echappees,$options_non_echappees);

        }
        else
            {
            $data["success"] = "";
            $data["alert"] = "";
        }

        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/Realisations/create");
        $this->layout->view("Administrateur/footerAdmin");
    }
    public  function edit($id)
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

            $this->realisations_model->create($options_echappees,$options_non_echappees);

        }
        else
        {
            $data["success"]="";
            $data["alert"]="";

            $realisation = $this->realisations_model->read('*',array('id'=>$id));
            $data["realisation"]=$realisation[0];

        }

        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/realisations/edit");
        $this->layout->view("Administrateur/footerAdmin");
    }
}
?>