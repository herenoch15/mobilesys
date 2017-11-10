<?php
/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 10/11/2017
 * Time: 10:24
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Realisations extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $validLogin = $this->testLogin();
        $this->testLoginAdmin();

    }

    public function index()
    {

        print ("ccc");
    }
}
?>