<?php
/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 09/11/2017
 * Time: 16:30
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends  CI_Controller
{

    public $loginAdmin;
    public $passwordAdmin;

    function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        //Chargement theme admin
        $this->layout->changeTheme("admintheme"); 
    }

    //Test login
    public  function  testLogin()
    {

        $this->loginAdmin=@$this->session->userdata("loginAdmin");
        $this->passwordAdmin=@$this->session->userdata("passwordAdmin");
        if($this->loginAdmin!="" && $this->passwordAdmin!="")
        {
            return true;
        }
        else if(@$this->input->post('login')!="" &&  @$this->input->post('password')!="")
        {
            $login=@$this->input->post('login');
            $password=@$this->input->post('password');

            $user_test = array();
            $user_test['login'] = $login;
            $user_test['password'] = $password ;


            $userResult = $this->Users_model->count($user_test);
            if($userResult==1)
            {
                $this->loginAdmin=$login;
                $this->passwordAdmin=$password;

                $this->session->set_userdata('loginAdmin', '$this->loginAdmin');
                $this->session->set_userdata('passwordAdmin', '$this->passwordAdmin');

                return true;
            }

        }
        return false;



    }



    //View formulaire login  Administrateur
    public  function loginAdmin()
    {
        $this->layout->set_titre("MobileSys Admin | Login");
        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("cssadmin/css_login");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("jsadmin/js_login");

        $this->layout->view("Administrateur/Login/View_login");

    }


    //test login + redirectin vers la formulaire du login s'il nes pas connecter
    public function testLoginAdmin()
    {
        if($this->testLogin()!=true)
        {
            redirect("Administrateur");// Redirige vers la page d'accueil
        }
    }





}