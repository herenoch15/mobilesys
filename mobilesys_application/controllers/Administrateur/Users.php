<?php
/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 10/11/2017
 * Time: 09:38
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MY_Controller
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
		$this->load->model('users_model','user');
		$data["users"] = $this->user->read();
		$data["current_user"] = $this->session->userdata("current_id");
        $data["active"]="Users";

        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/Users/list");
        $this->layout->view("Administrateur/footerAdmin");
    }
	
    public function create()
    {
		$this->load->helper('form');


        $this->layout->set_titre("MobileSys Admin | Messages");
        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("cssadmin/css");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("jsadmin/js");


        $data=array();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name','First name','trim|required');
        $this->form_validation->set_rules('last_name','Last name','trim|required');
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','required|min_length[6]');
        $this->form_validation->set_rules('password_confirm','Password confirmation','required|matches[password]');
        if($this->form_validation->run()===FALSE)
        {
            $this->load->helper('form');
			$data["success"]="";
			$data["alert"]="";
        }
        else
        {
            $this->load->model('users_model','user');

            $data_echape = array(
                'nom' => $this->input->post('first_name'),
                'prenom'  => $this->input->post('last_name'),
                'login'  => $this->input->post('username'),
                'password'  => $this->input->post('password'),
                'email' => $this->input->post('email'),
                'date_create'  => date("Y-m-d")
            );
			
			if($this->user->create($data_echape)){
				$data["success"]="Successfull";
				$data["alert"]="success";
				unset($_POST);
				$this->form_validation->reset_validation();
			}else{
				$data["success"]="Error";
				$data["alert"]="danger";
			}
		}
        $data["active"]="user";

        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/Users/create");
        $this->layout->view("Administrateur/footerAdmin");
    }
	
    public function edit($user_id = NULL)
    {
		$this->load->helper('form');


        $this->layout->set_titre("MobileSys Admin | Messages");
        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("cssadmin/css");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("jsadmin/js");


        $data=array();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name','First name','trim|required');
        $this->form_validation->set_rules('last_name','Last name','trim|required');
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','required|min_length[6]');
        $this->form_validation->set_rules('password_confirm','Password confirmation','required|matches[password]');
            $this->load->helper('form');
			$this->load->model('users_model','user');
			$user = $this->user->read('*',array('id'=>$user_id));
			
			$data["user"]=$user_id;
			$data["users"]=$user;
        if($this->form_validation->run()===FALSE)
        {
			$data["success"]="";
			$data["alert"]="";
        }
        else
        {
            $this->load->model('users_model','user');

            $data_echape = array(
                'nom' => $this->input->post('first_name'),
                'prenom'  => $this->input->post('last_name'),
                'login'  => $this->input->post('username'),
                'password'  => $this->input->post('password'),
                'email' => $this->input->post('email'),
                'date_create'  => date("Y-m-d")
            );
			
			if($this->user->update(array('id' => $user_id),$data_echape)){
				$data["success"]="Successfull";
				$data["alert"]="success";
			}else{
				$data["success"]="Error";
				$data["alert"]="danger";
			}
		}
        $data["active"]="user";

        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/Users/edit");
        $this->layout->view("Administrateur/footerAdmin");
    }
	
    public function profile($user_id = NULL)
    {


        $this->layout->set_titre("MobileSys Admin | Messages");
        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("cssadmin/css");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("jsadmin/js");


		$data=array();
		$this->load->model('users_model','user');
		$user = $this->user->read('*',array('id'=>$user_id));

		$data["id"]=$user_id;
		$data["users"]=$user;
		$data["active"]="user";

        $this->layout->views("Administrateur/headerAdmin",$data);
        $this->layout->views("Administrateur/Users/profile");
        $this->layout->view("Administrateur/footerAdmin");
    }
    public function suppr($user_id = NULL)
    {
			$this->load->model('users_model','user');
			if($this->user->delete(array('id' => $user_id))){
				redirect("Administrateur/Users/index");
			}else{
				$data["success"]="Error";
				$data["alert"]="danger";
			}
		
	}


}//FIN class
?>