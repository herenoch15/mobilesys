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

       redirect('Administrateur/messages');

   }

    public function logout()
    {
            // Détruit la session
            $this->session->sess_destroy();
            redirect('/Administrateur/');
    }


}//FIN class
?>