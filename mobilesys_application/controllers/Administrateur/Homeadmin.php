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
        $this->loginAdmin();
    }


}//FIN class
?>