<?php
/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 14/11/2017
 * Time: 06:11
 */
defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="row">
    <div class="col-sm-12">
        <div>Réalisations</div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="<?php echo site_url('Administrateur/realisations/create');?>" class="btn btn-primary">Nouveau</a>
            <a href="<?php echo site_url('Administrateur/realisations');?>" class="btn btn-primary">Réalisations</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">
            <?php

            if(!empty($realisations))
            {
                ?>
                <table class="table table-hover table-bordered table-condensed">
                <tr><td>ID</td><td>Titre</td><td>Service</td></td><td>Description</td><td>Operations</td></tr>
                <?php
                foreach($realisations as $realisation)
                {
                    ?><tr>
                    <?php
                    echo '<td>'.$realisation->id.'</td><td>'.$realisation->titre.'</td><td>'.$realisation->nom_service.'</td><td>'.$realisation->description.'</td><td>'. anchor('Administrateur/realisations/edit/'.$realisation->id,'<span class="glyphicon glyphicon-pencil"></span>').' '.anchor('Administrateur/realisations/suppr/'.$realisation->id,'<span class="glyphicon glyphicon-remove"></span>').'</td>';
                    ?>
                    </tr>
                    <?php
                }
                ?>
                </table>
                <?php
            }
            ?>
        </div>
    </div>
</div>
