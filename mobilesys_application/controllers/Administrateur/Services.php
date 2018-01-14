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
		$this->load->model('services_model','all');

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
		$data["service"] = $this->all->read();
        $data["active"]="Services";

        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/Services/viewlistServices");
        $this->layout->view("Administrateur/footerAdmin");

    }
    public function create()
    {
        $this->layout->set_titre("MobileSys Admin | Services");
        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("cssadmin/css");
        $this->layout->ajouter_css("cssadmin/fileinput.min");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("jsadmin/fileinput.min");
        $this->layout->ajouter_js("jsadmin/fileinput_locale_fr");
        $this->layout->ajouter_js("jsadmin/js");


        $data=array();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nom','Nom service','trim|required');
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
                'nom_service' => $this->input->post('nom'),
                'description'  => $this->input->post('description')
            );
			
			
				$config['upload_path'] = './assets/images/services';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['overwrite'] = FALSE;

				$this->load->library('upload', $config);
                        $data['error']= "fichier tsy lasa";
				
                if ( ! $this->upload->do_upload('logo'))
                {
                        $data['error']= $this->upload->display_errors();
                }
                else
                {
					$file_name = "services/".$this->upload->data('file_name');


                    $data['error'] = 'success';
					$data_echape = array_merge($data_echape,array(
                	'logo_service' => $file_name));
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
        $data["active"]="Services";

        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/Services/create");
        $this->layout->view("Administrateur/footerAdmin");

    }
    public function edit($id = null)
    {
		if(is_null($id)) redirect("Administrateur/services/create");
        $this->layout->set_titre("MobileSys Admin | Services");
        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("cssadmin/css");
        $this->layout->ajouter_css("cssadmin/fileinput.min");


        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("jsadmin/fileinput.min");
        $this->layout->ajouter_js("jsadmin/fileinput_locale_fr");
        $this->layout->ajouter_js("jsadmin/js");



        $data=array();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nom','Nom service','trim|required');
        $this->form_validation->set_rules('description','Description','trim');
		
			$data['service'] = $this->all->read('*',array("id"=>$id))[0];
        if($this->form_validation->run()===FALSE)
        {
            $this->load->helper('form');
			$data["success"]="";
			$data["alert"]="";
        }
        else
        {

            $data_echape = array(
                'nom_service' => $this->input->post('nom'),
                'description'  => $this->input->post('description')
            );
			$data['error']= "tsy misy fichier";
			
				$config['upload_path'] = './assets/images/services';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['overwrite'] = FALSE;

				$this->load->library('upload', $config);
                        $data['error']= "upload fichier";
				
                if ( ! $this->upload->do_upload('logo'))
                {
					$data['error']= $this->upload->display_errors();
                }
                else
                {
					$file_name = "services/".$this->upload->data('file_name');
                    $data['error'] = 'success';
					$data_echape = array_merge($data_echape,array(
                	'logo_service' => $file_name));
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
        $data["active"]="Services";

        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/Services/edit");
        $this->layout->view("Administrateur/footerAdmin");

    }
    public function suppr($id = NULL)
    {
			if($this->all->delete(array('id' => $id))){
				redirect("Administrateur/Services/");
			}else{
				$data["success"]="Error";
				$data["alert"]="danger";
			}
		
	}
}
?>