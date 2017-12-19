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
        <div>Services</div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="<?php echo site_url('Administrateur/users/create');?>" class="btn btn-primary">Nouveau</a>
            <a href="<?php echo site_url('Administrateur/users');?>" class="btn btn-primary">Services</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">
            <?php
            if(!empty($services))
            {
                echo '<table class="table table-hover table-bordered table-condensed">';
                echo '<tr><td>ID</td><td>Nom services</td></td><td>Description</td><td>Operations</td></tr>';
                foreach($services as $key => $service)
                {
                    echo '<tr>';
                    echo '<td>'.$service->idService.'</td><td>'.$service->nom_service.'</td><td>'.$service->description.'</td><td>'; echo anchor('Administrateur/services/edit/'.$service->idService,'<span class="glyphicon glyphicon-pencil"></span>').' '.anchor('Administrateur/users/suppr/'.$service->idService,'<span class="glyphicon glyphicon-remove"></span>');

                    echo '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            }
            ?>
        </div>
    </div>
</div>
