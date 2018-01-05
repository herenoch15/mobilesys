<?php
/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 10/11/2017
 * Time: 09:38
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Realisations extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $validLogin = $this->testLogin();
        $this->testLoginAdmin();
		$this->load->model('realisations_model','all');

    }

    public function index()
    {
        $this->layout->set_titre("MobileSys Admin | Realisation");
        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("cssadmin/css");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("jsadmin/js");


        $data=array();
		$data["realisations"] = $this->all->read();
        $data["active"]="Realisations";

        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/Realisation/viewlistRealisation");
        $this->layout->view("Administrateur/footerAdmin");

    }
    public function create()
    {
        $this->layout->set_titre("MobileSys Admin | Realisation");
        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("cssadmin/css");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("jsadmin/js");


        $data=array();
			$this->load->model('services_model','svc');
			$data["services"] = $this->svc->read();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('service','service','required');
        $this->form_validation->set_rules('titre','Titre','trim|required');
        $this->form_validation->set_rules('description','Description','trim');
        if($this->form_validation->run()===FALSE)
        {
            $this->load->helper('form');
			$data["success"]="";
			$data["alert"]="";
        }
        else
        {

            $data_echape = array(
                'id_service' => $this->input->post('service'),
                'titre' => $this->input->post('titre'),
                'description'  => $this->input->post('description')
            );
			
			
				$config['upload_path'] = './assets/uploads/';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['overwrite'] = FALSE;

				$this->load->library('upload', $config);
                        $data['error']= "fichier tsy lasa";
				
                if ( ! $this->upload->do_upload('image'))
                {
                        $data['error']= $this->upload->display_errors();
                }
                else
                {
					$file_name = $this->upload->data('file_name');
                    $data['error'] = 'success';
					$data_echape = array_merge($data_echape,array(
                	'image' => $file_name));
                }
			if($this->all->create($data_echape)){
				$data["success"]="Successfull";
				$data["alert"]="success";
				unset($_POST);
				$this->form_validation->reset_validation();
			}else{
				$data["success"]="Error";
				$data["alert"]="danger";
			}
		}
        $data["active"]="Realisations";

        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/Realisation/create");
        $this->layout->view("Administrateur/footerAdmin");

    }
    public function edit($id = null)
    {
		if(is_null($id)) redirect("Administrateur/Realisation/create");
        $this->layout->set_titre("MobileSys Admin | Realisation");
        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("cssadmin/css");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("jsadmin/js");


        $data=array();
			$this->load->model('services_model','svc');
			$data["services"] = $this->svc->read();

        $this->load->library('form_validation');
        $this->form_validation->set_rules('service','service','required');
        $this->form_validation->set_rules('titre','Titre','trim|required');
        $this->form_validation->set_rules('description','Description','trim');
			$data['realisations'] = $this->all->read('*',array("id"=>$id))[0];
		
        if($this->form_validation->run()===FALSE)
        {
            $this->load->helper('form');
			$data["success"]="";
			$data["alert"]="";
        }
        else
        {

            $data_echape = array(
                'id_service' => $this->input->post('service'),
                'titre' => $this->input->post('titre'),
                'description'  => $this->input->post('description')
            );
			
			
				$config['upload_path'] = './assets/uploads/';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['overwrite'] = FALSE;

				$this->load->library('upload', $config);
                        $data['error']= "fichier tsy lasa";
				
                if ( ! $this->upload->do_upload('image'))
                {
                        $data['error']= $this->upload->display_errors();
                }
                else
                {
					$file_name = $this->upload->data('file_name');
                    $data['error'] = 'success';
					$data_echape = array_merge($data_echape,array(
                	'image' => $file_name));
                }

			if($this->all->update(array("id"=>$id),$data_echape)){
				$data["success"]="Successfull";
				$data["alert"]="success";
				//unset($_POST);
				//$this->form_validation->reset_validation();
			}else{
				$data["success"]="Error";
				$data["alert"]="danger";
			}
		}
        $data["active"]="Realisations";


        $data["id"]=$id;

        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/Realisation/edit");
        $this->layout->view("Administrateur/footerAdmin");

    }
    public function suppr($id = NULL)
    {
			if($this->all->delete(array('id' => $id))){
				redirect("Administrateur/Realisation/index");
			}else{
				$data["success"]="Error";
				$data["alert"]="danger";
			}
		
	}
}
?>