<?php

/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 09/11/2017
 * Time: 10:27
 */
class Realisations_model extends MY_Model
{
    protected $table = 'realisations';
    /**
    * Selection Realisation
    */
    public function selectRealisationSvc()
    {
        return $this->db->query("select id,realisations.idService as 'idService',titre,nom_service,realisations.description  as 'description',logo_realisation,nom_service 
                from realisations,services 
    	 	    where realisations.idService=services.idService")
                ->result();
    }
}