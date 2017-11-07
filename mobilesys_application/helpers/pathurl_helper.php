<?php
if ( ! defined('BASEPATH')) exit('No direct script access
allowed');


if ( ! function_exists('_pathroot'))
{
	function  _pathroot()
	{
		
			//upload image
			$repertoire = explode("/", $_SERVER["PHP_SELF"]); 
			$rep_courant = @$repertoire[1];
			
			if($rep_courant=="" || $rep_courant=="index.php" )
			$source=$_SERVER["DOCUMENT_ROOT"];
			else
			$source=$_SERVER["DOCUMENT_ROOT"]."/".$rep_courant;
			
			return 	 $source;
	}
	
	
	
	
}



if ( ! function_exists('_pathrootMenue_admin'))
{
	function  _pathrootrechMenue_()
	{
		


			$page="home";
			//upload image
			$repertoire = explode("/", $_SERVER["PHP_SELF"]); 
			$rep_courant = @$repertoire[1];

			$_string = $_SERVER["REQUEST_URI"];
			//$_pagehome = "superbe";
			if(preg_match('#'.'commande'.'#', $_string))///page commande
			{
				$page="commande";

			   /* mon code */
			}//catalogue
			else if(preg_match('#'.'catalogue'.'#', $_string))///page catalogue
			{
				$page="catalogue";

			}
			else if(preg_match('#'.'demandes'.'#', $_string))///page demandes
			{	
				$page="demandes";

			}
			else if(preg_match('#'.'contact'.'#', $_string))///page contact
			{
				$page="contact";
			}
			else if(preg_match('#'.'blog'.'#', $_string))///page blog
			{
				$page="blog";
			}
			else
			{

				$page="home";
			     /* autre code */


			}

			
			/*if($rep_courant=="" || $rep_courant=="index.php" )
			$source=$_SERVER["DOCUMENT_ROOT"];
			else
			$source=$_SERVER["DOCUMENT_ROOT"]."/".$rep_courant;*/
			
			return 	 $page;
	}
	
	
	
	
}



if ( ! function_exists('recup_extimage'))
{

     function recup_extimage($filename_)
	 {
	 			$namefile_=@$_FILES[$filename_]["name"];

		 		$typetabfich=@split('[.]',$namefile_);
				$nbr=count($typetabfich);


				//var_dump($namefile_);
				$type_fichier=$typetabfich[$nbr-1];

					//var_dump($type_fichier);
		
				 return $type_fichier;
	 }

}



if ( ! function_exists('_deletefile'))
{
	function  _deletefile($src_file)
	{
			
			
			@unlink(_pathroot().$src_file);
			//returnsource;
	}
}

if ( ! function_exists('_creer_dossier'))
{
	function  _creer_dossier($src,$nomdossier)
	{
			
			//mkdir($nomdossier);
			//@unlink(_pathroot().$src_file);
			//returnsource;
			
			
			mkdir(_pathroot().$src.$nomdossier, 0700);
	}
}


if(!function_exists('_clearDir'))
{
	
	function _clearDir($dossier)
	{
		
		
		
			   $ouverture=@opendir($dossier);
			   if (!$ouverture) return;
			
			
			   while($fichier=readdir($ouverture)) 
			   {
				  // var_dump($fichier);
				  // print ($dossier."/1".$ouverture);
				  
				  
				   if ($fichier == '.' || $fichier == '..') continue;
				   
					if (is_dir($dossier."/".$fichier))
					{
						
						//print ($dossier."/1");
					  $r=_clearDir($dossier."/".$fichier);
					  if (!$r) return false;
				
					}
					else 
					{
						//print ($dossier."/2");
					   $r=@unlink($dossier."/".$fichier);
					   if (!$r) return false;
					}
			
			   }
			   
			   closedir($ouverture);
			   $r=@rmdir($dossier);
			   if (!$r) return false;
			   
			  return true;
			  
  }//FIN clearDir
 
 }
 
 
/*if(!function_exists('rrmdir'))
{
	
	//# recursively remove a directory
	function rrmdir($dir) {
		
		$dossier=_pathroot().$dossier;
		foreach(glob($dir . '/*') as $file) {
			if(is_dir($file))
				rrmdir($file);
			else
				unlink($file);
		}
		rmdir($dir);
	}
}*/
?>
