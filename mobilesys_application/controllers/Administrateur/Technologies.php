<?php
/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 10/11/2017
 * Time: 09:38
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Technologies extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $validLogin = $this->testLogin();
        $this->testLoginAdmin();
        $this->load->model('technologies_model','all');



    }

    /**
     * Liste des technologies utilisé
     * */
    public  function index()
    {
        $this->layout->set_titre("MobileSys Admin | Tehnologies");
        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("cssadmin/css");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("jsadmin/js");


        $data=array();
        $data["active"]="Technologies";
        $data["technologies"] = $this->all->read();


        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/Technologies/viewlistTechnologies");
        $this->layout->view("Administrateur/footerAdmin");
    }
    /**
     * Creation dun nouveau tehnologie
     * */
    public function create()
    {
        $this->layout->set_titre("MobileSys Admin | Tehnologies");
        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("cssadmin/css");
        $this->layout->ajouter_css("cssadmin/fileinput.min");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("jsadmin/fileinput.min");
        $this->layout->ajouter_js("jsadmin/fileinput_locale_fr");
        $this->layout->ajouter_js("jsadmin/js");



        $data=array();
        $data["active"]="Technologies";

        $this->load->model('services_model','Svc');
        $data["services"] = $this->Svc->read();


        $this->load->library('form_validation');
        $this->form_validation->set_rules('nom_techno','Nom technologie','trim|required');
        $this->form_validation->set_rules('description','Description','trim');
        if($this->form_validation->run()===FALSE)
        {
            $this->load->helper('form');
            $data["success"]="";
            $data["alert"]="";
        }
        else
        {
            $data_echape=$this->input->post();

            $config['upload_path'] = './assets/images/technologies';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['overwrite'] = FALSE;

            $this->load->library('upload', $config);
            $data['error']= "fichier tsy lasa";

            if ( ! $this->upload->do_upload('logo_techno'))
            {
                $data['error']= $this->upload->display_errors();
            }
            else
            {
                $file_name = "technologies/".$this->upload->data('file_name');
                $data['error'] = 'success';
                $data_echape = array_merge($data_echape,array(
                    'logo_techno' => $file_name));
            }

            if($this->all->create($data_echape))
            {
                redirect("Administrateur/technologies");
                $data["success"]="Successfull";
                $data["alert"]="success";
                unset($_POST);
                $this->form_validation->reset_validation();
            }else{
                $data["success"]="Error";
                $data["alert"]="danger";
            }

        }



        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/Technologies/create");
        $this->layout->view("Administrateur/footerAdmin");
    }

    /**
     * Edition & modif technologie
     * */
    public function edit($id)
    {
        $this->layout->set_titre("MobileSys Admin | Tehnologies");
        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("cssadmin/css");
        $this->layout->ajouter_css("cssadmin/fileinput.min");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("jsadmin/fileinput.min");
        $this->layout->ajouter_js("jsadmin/fileinput_locale_fr");
        $this->layout->ajouter_js("jsadmin/js");


        $data=array();
        $data["active"]="Technologies";


        $this->load->model('services_model','Svc');
        $data["services"] = $this->Svc->read();
        $data['technologie'] = $this->all->read('*',array("id"=>$id))[0];


        $this->load->library('form_validation');
        $this->form_validation->set_rules('nom_techno','Nom technologie','trim|required');
        $this->form_validation->set_rules('description','Description','trim');
        if($this->form_validation->run()===FALSE)
        {
            $this->load->helper('form');
            $data["success"]="";
            $data["alert"]="";
        }
        else
        {
            $data_echape=$this->input->post();

            $config['upload_path'] = './assets/images/technologies';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['overwrite'] = FALSE;

            $this->load->library('upload', $config);
            $data['error']= "upload fichier";

            if ( ! $this->upload->do_upload('logo_techno'))
            {
                $data['error']= $this->upload->display_errors();
            }
            else
            {
                $file_name = "technologies/".$this->upload->data('file_name');
                $data['error'] = 'success';
                $data_echape = array_merge($data_echape,array(
                    'logo_techno' => $file_name));
            }



            if($this->all->update(array("id"=>$id),$data_echape))
            {
                $data["success"]="Successfull";
                $data["alert"]="success";
            }else
                {
                $data["success"]="Error";
                $data["alert"]="danger";
            }



        }

        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/Technologies/edit");
        $this->layout->view("Administrateur/footerAdmin");
    }

    /**
     * Suppresion technologie
     * */
    public function suppr($id = NULL)
    {
        if($this->all->delete(array('id' => $id))){
            redirect("Administrateur/technologies/");
        }else{
            $data["success"]="Error";
            $data["alert"]="danger";
        }

    }

}
?>