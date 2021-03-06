<?php


defined('BASEPATH') OR exit('No direct script access allowed');
class Realisations extends CI_Controller 
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// PAGE Réalisation PRINCIPALE
	public function index()
	{
        $data=array();
		$this->layout->set_titre("MobileSys | Nos réalisations");

        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("css");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("ajax_nav");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("js");

        $data["menueActive"]="Realisations";
        $this->layout->Entete("Entetepage",$data);
        $this->layout->Pied("Pied_page");
        $this->layout->view("Realisations/view_realisation");
	}
}
