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

    }

    public function index()
    {

    }
}
?>