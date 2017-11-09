<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homeadmin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

    }
    public function index()
    {
        $this->Login();
    }
    public  function Login()
    {
        $this->layout->set_titre("MobileSys | Login");
        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("cssadmin/css_login");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("ajax_nav");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("jsadmin/js_login");


        $this->layout->view("Administrateur/Login/View_login");

    }

}//FIN class
?>