<?php
if ( ! defined('BASEPATH')) exit('No direct script access
allowed');


if ( ! function_exists('_titremin'))
{
    function  _titremin($titre='')
    {
        if(strlen($titre)>20)
        $titre=substr($titre,0,20)."..";
        return 	$titre;
    }

}

if ( ! function_exists('_strmin_def'))
{
    function  _strmin_def($titre='',$nbr=20)
    {
        if(strlen($titre)>$nbr)
        $titre=substr($titre,0,$nbr)."..";
        return 	$titre;
    }

}
?>