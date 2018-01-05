<?php
/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 14/11/2017
 * Time: 06:11
 */?>

<div class="row">
    <div class="col-sm-12">
        <div id="titrePage">Service listes</div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="<?php echo site_url('Administrateur/services/create');?>" class="btn btn-primary">Nouveau service</a>
            <a href="<?php echo site_url('Administrateur/services/');?>" class="btn btn-primary">Services listes</a>
        </div>
    </div>
    <div class="row">
        <div id="panel_listMobilsys" class="col-lg-12" style="margin-top: 10px;">
            <?php
            if(!empty($service))
            {
                echo '<table  class="table table-hover table-bordered table-condensed">';
                echo '<tr><td>ID</td><td>Service</td></td><td>Description</td><td>Logo </td><td> </td></tr>';
                foreach($service as $all)
                {
                    echo '<tr>';
                    echo '<td>'.$all->id.'</td><td>'.$all->nom_service.'</td><td>'.$all->description.' </td><td> <img height="25" width="25" src="'.site_url("/assets/uploads/".$all->logo_service).'" /></td><td>';
                    echo anchor('Administrateur/services/edit/'.$all->id,'<span class="glyphicon glyphicon-pencil"></span>').' '.anchor('Administrateur/services/suppr/'.$all->id,'<span class="glyphicon glyphicon-remove"></span>');
                    echo '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            }
            ?>
        </div>
    </div>
</div>
