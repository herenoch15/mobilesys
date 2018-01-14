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
    public function allRealisationSvc()
    {
        return $this->db->query("select realisations.id as 'id',realisations.id_service as 'idService',titre,nom_service,realisations.description as 'description',image,nom_service from realisations,services where realisations.id_service=services.id ")
                ->result();
    }
}