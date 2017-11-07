<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller 
{

	 function __construct()
	 {
	       parent::__construct();
          $this->load->model('Lieux_model');
          $this->load->model('Contact_model');
          

	 }

	 public function index()
	 {

        $data=array();
        $data["listlieux"]=$this->Lieux_model->read('*',array());

        $this->layout->set_titre("Happy Loc - Nous contacter");
        $this->layout->ajouter_css("style");
         $this->layout->ajouter_css("responsive");
        $this->layout->ajouter_css("jquery-ui");
                
        $this->layout->ajouter_css("jquery.lightbox");
        $this->layout->ajouter_css("jquery.timepicker");
        $this->layout->ajouter_css("animate");
        $this->layout->ajouter_css("slikr");
        $this->layout->ajouter_css("icono.min");

        $this->layout->ajouter_csshref(site_url("/slick/slick.css"));
        $this->layout->ajouter_csshref(site_url("/slick/slick-theme.css"));


        $this->layout->ajouter_js("jquery-2.1.3.min");
        $this->layout->ajouter_js("jquery-ui");
        $this->layout->ajouter_js("jquery.ui.datepicker-fr");
        $this->layout->ajouter_js("jquery.timepicker");
        $this->layout->ajouter_js("jquery.lightbox.min");
        $this->layout->ajouter_js("wow.min");
        $this->layout->ajouter_js("layout");
        $this->layout->ajouter_jshref(site_url("/slick/slick.js"));

        $this->layout->ajouter_js("cookiechoices");

        
        $this->layout->ajouter_js("js");
        $this->layout->ajouter_js("js_contact");

        
                



       

                
                
        $this->layout->views("Entetepage",$this->dataconnexion);

        $this->layout->views("view_rechvehiculelocation",$data);
        $this->layout->views("view_contacteznous");

       
        

        $this->layout->view("Pied_page");

	 }



     // ************* ENVOYER EMAIL DE CONTACT ******************
     public function envoyer_enregistrementcctemail()
     {
                $options_echappees=array();
                $options_non_echappees=array();

                 $options_echappees["nom_prenom"]=$this->input->post('nom');
                 $options_echappees["email"]=$this->input->post('email');
                 $options_echappees["adresse"]=$this->input->post('adresse');
                 $options_echappees["sujet"]=$this->input->post('sujet');
                 $options_echappees["message"]=$this->input->post('message');

                

              

               
        
                 $this->Contact_model->create($options_echappees,$options_non_echappees);


                //envoyer un email   
                $titre_email=$this->input->post('sujet');
                $message=$this->input->post('message');
                $nom_prenom=$this->input->post('nom');
                $email_expediteur=$this->input->post('email');


                $email_destinataire="herenoch15@yahoo.com";

                // $email_destinataire="madaitech@gmail.com";

               /* $config['protocol'] = 'smtp';
                $config['smtp_host'] = 'mail.happyloc.org';
                $config['smtp_port'] = 26;
                $config['smtp_user'] = 'contact';
                $config['smtp_pass'] = 'kwY5dU239';
                $config['crlf'] = '\r\n';
                $config['newline'] = '\r\n';
                $config['mailtype'] = 'html';*/

                  $config['protocol'] = 'sendmail';
            $config['mailtype'] = 'html';
            $config['charset'] = 'UTF-8';
            $config['wordwrap'] = TRUE;
            $config['priority'] = 5;


                $this->email->initialize($config);
                $this->email->from($email_expediteur,$nom_prenom);
                $this->email->to($email_destinataire);
                $this->email->subject($titre_email);
                $this->email->message($message);                        
                $this->email->send();


                                   /* $codehtml=
                    "<html><body>
                    <br>Bonjour $pseudo,
                    <br>Vous venez de choisir l'offre Artiste de Muzik-in. Votre inscription est prise en compte, voici vos identifiants :
                    <br>Login: $login
                    <br>Mot de passe : $password
                    <br>Pour activer votre compte connectez vous sur <a href='http://muzik-in.com/inscription/valider.php?Id_valid=$Id&email=$login' target='_blank'>www.muzik-in.com/inscription/valider.php?Id_valid=$Id&email=$login</a>
                    <br> L'&eacute;quipe Muzik-In vous remercie de votre confiance et vous souhaite la bienvenue
                    <br><br>L'&eacute;quipe MuzikIn.
                    <br><img height='30' width='40' src='http://muzik-in.com/images/logo_principalemin.png'>
                    </body></html>";

                     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
                         $headers  = 'MIME-Version: 1.0' . "\r\n";
                         $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                         // En-têtes additionnels
                         $headers .='From: Happyloc contact <contact@happyloc.com>' . "\r\n";
                        

                    @mail($destinataire,"Confirmation d'inscription  sur Muzik-In",$codehtml,$headers); */


                 print ("OKenregcontact");
                
     }
     // *************  FIN ENVOYER EMAIL DE CONTACT *************


}


?>