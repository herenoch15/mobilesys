<?php


defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller 
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

	 

	 // PAGE CONTACT PRINCIPALE
	public function index()
	{

        // Load the library
        $data=array();

        /*
        $this->load->library('googlemaps');
        //$this->googlemaps->initialize();


        // Create the map. This will return the Javascript to be included in our pages <head></head> section and the HTML code to be
        // // placed where we want the map to appear.

       // $data['map'] = $this->googlemaps->create_map();







       // 107116756400389177503

        $config['center'] = '-18.8936,47.5609';
        $config['map_height'] ='410px';
        $config['zoom'] = '17';
        $config['apiKey'] = 'AIzaSyBpjw1JDoC0SmbXD6OR7ocy9AgiyJcXIy4';

        $this->googlemaps->initialize($config);

        $marker = array();
        $marker['position'] = '-18.8936,47.5609';
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();
        */









		$this->layout->set_titre("MobileSys | Contact");

        $this->layout->ajouter_css("bootstrap/css/bootstrap");
        $this->layout->ajouter_css("css");

        $this->layout->ajouter_js("jquery-3.2.1");
        $this->layout->ajouter_js("ajax_nav");
        $this->layout->ajouter_js("bootstrap.min");
        $this->layout->ajouter_js("js");

        $data["menueActive"]="Contact";
        $this->layout->Entete("Entetepage",$data);
        $this->layout->Pied("Pied_page");
        $this->layout->view("Contact/view_contactMap",$data);
   	
	}


    public function mapview()
    {


          // Load the library
         $this->layout->ajouter_js("jquery-3.2.1");

        $data=array();
        $this->load->library('googlemaps');
        //$this->googlemaps->initialize();


        // Create the map. This will return the Javascript to be included in our pages <head></head> section and the HTML code to be
        // // placed where we want the map to appear.

       // $data['map'] = $this->googlemaps->create_map();







       // 107116756400389177503

        $config['center'] = '-18.8936,47.5609';
        $config['map_height'] ='410px';
        $config['zoom'] = '17';
        $config['apiKey'] = 'AIzaSyBpjw1JDoC0SmbXD6OR7ocy9AgiyJcXIy4';

        $this->googlemaps->initialize($config);

        $marker = array();
        $marker['position'] = '-18.8936,47.5609';
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();
        $this->layout->view("Contact/viewMap",$data);



    }
      
}
