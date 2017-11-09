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



    public  function  testLogin()
    {

        $login=@$this->input->post('login');
        $password=@$this->input->post('password');

       // var_dump($login);
       // var_dump($password);
       // print ("TEST LOGIN");
    }



    //View login affichage administrateur si  l'admin n'est pas connecter
    public  function loginAdmin()
    {
        $this->layout->set_titre("MobileSys | Login");
        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("cssadmin/css_login");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("ajax_nav");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("jsadmin/js_login");


        $this->layout->view("Administrateur/Login/View_login");

    }

}