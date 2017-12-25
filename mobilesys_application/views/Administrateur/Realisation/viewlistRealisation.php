<?php
/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 14/11/2017
 * Time: 06:11
 */?>

<div class="row">
    <div class="col-sm-12">
        <div>
Realisation LISTES</div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="<?php echo site_url('Administrateur/realisations/create');?>" class="btn btn-primary">Create realisations</a>
            <a href="<?php echo site_url('Administrateur/realisations/');?>" class="btn btn-primary">See all Realisation</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">
            <?php
            if(!empty($realisations))
            {
                echo '<table class="table table-hover table-bordered table-condensed">';
                echo '<tr><td>ID</td><td>nom Realisation </td></td><td>description</td><td>logo </td><td>Service</td><td> </td></tr>';
                foreach($realisations as $all)
                {
                    echo '<tr>';
                    echo '<td>'.$all->id.'</td><td>'.$all->titre.'</td><td>'.$all->description.' </td><td> <img height="25" width="25" src="'.site_url("/assets/uploads/".$all->image).'" /></td><td>'.$all->id_service.'</td><td>';
                    echo anchor('Administrateur/realisations/edit/'.$all->id,'<span class="glyphicon glyphicon-pencil"></span>').' '.anchor('Administrateur/realisations/suppr/'.$all->id,'<span class="glyphicon glyphicon-remove"></span>');
                    echo '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            }
            ?>
        </div>
    </div>
</div>
