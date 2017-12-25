<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homeadmin extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

    }
    public function index()
    {

        if($this->testLogin()==true)
            $this->_Principale();
        else
            $this->loginAdmin();

    }

   public function _Principale()
   {

       $this->layout->set_titre("MobileSys Admin | Accueil");
       $this->layout->ajouter_css("bootstrap/css/bootstrap");
       $this->layout->ajouter_css("cssadmin/css");

       $this->layout->ajouter_js("jquery-3.2.1");
       $this->layout->ajouter_js("bootstrap.min");
       $this->layout->ajouter_js("jsadmin/js");


       $data=array();
       $data["active"]="Accueil";

       $this->layout->views("Administrateur/headerAdmin",$data);
       $this->layout->views("Administrateur/homepageAdmin");
       $this->layout->view("Administrateur/footerAdmin");

   }

    public function logout()
    {
            // Détruit la session
            $this->session->sess_destroy();
            redirect('/Administrateur/');
    }


}//FIN class
?>