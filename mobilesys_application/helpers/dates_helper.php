<?php
if ( ! defined('BASEPATH')) exit('No direct script access
allowed');






if ( ! function_exists('_datefimMoisencours'))
{
	function  _datefimMoisencours($m='',$anne)
	{
		$mois = mktime( 0, 0, 0, $m, 1,$anne); 
		$dernierjrs=date("t",$mois);
		return 	$dernierjrs;	
	}



}


if ( ! function_exists('_datenewFormat'))
{
	function  _datenewFormat($date='')
	{
		$Jour=substr($date,0,2);
		$Mois=substr($date,3,2);
		$Annee=substr($date,6,4);

		return 	$Annee."-".$Mois."-".$Jour;		
	}
}


if ( ! function_exists('_datenewDeFormat'))
{
	function  _datenewDeFormat($date='')
	{
		$Jour=substr($date,2,2);
		$Mois=substr($date,5,2);
		$Annee=substr($date,0,4);
		return $Jour."-".$Mois."-".$Annee;	
	}

}


if ( ! function_exists('_dateStr'))
{
	function  _dateStr($date='')
	{
		 $tabAnnee= substr($date,0,4);
		$tabMois= substr($date,5,2);
		$tabJour= substr($date,8,2);
		$tab= array('Janv','Fév','Mars','Avril','Mai','Juin','Juil','Aout','Sept','Oct','Nov','Déc');
		$heure=substr($date,10,strlen($date));

							
		$STR_Mois=$tab[$tabMois-1];		
		return 	$tabJour." ".$STR_Mois." ".$tabAnnee." ".$heure;		
	}
}


if ( ! function_exists('_MoisStr'))
{
	function  _MoisStr($indiceMois='')
	{

		$tab= array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septempbre','Octobre','Novembre','Décembre');
		return $tab[$indiceMois-1];			
	}
}



if ( ! function_exists('_nbrjrs_intervaldates'))
{
	function  _nbrjrs_intervaldates($date1='',$date2='')
	{
		
		// On transforme les 2 dates en timestamp
		$date1 = strtotime($date1);
		$date2 = strtotime($date2);
		 
		// On récupère la différence de timestamp entre les 2 précédents
		$nbJoursTimestamp = $date2 - $date1;
		 
		// ** Pour convertir le timestamp (exprimé en secondes) en jours **
		// On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
		$nbJours = $nbJoursTimestamp/86400; // 86 400 = 60*60*24
		return $nbJours;
		
	}

}



?>