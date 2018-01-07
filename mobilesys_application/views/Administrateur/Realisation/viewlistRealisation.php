<?php
/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 14/11/2017
 * Time: 06:11
 */?>

<div class="row">
    <div class="col-sm-12">
        <div id="titrePage">Réalisation listes</div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="<?php echo site_url('Administrateur/realisations/create');?>" class="btn btn-primary">Nouveau realisation</a>
            <a href="<?php echo site_url('Administrateur/realisations/');?>" class="btn btn-primary">Réalisations listes</a>
        </div>
    </div>
    <div class="row">
        <div id="panel_listMobilsys" class="col-lg-12" style="margin-top: 10px;">
            <?php
            if(!empty($realisations))
            {
                ?>
                <table class="table table-hover table-bordered table-condensed">
                    <tr>
                        <td>ID</td><td>Realisation </td></td><td>Description</td><td>Logo </td><td>Service</td><td> </td>
                    </tr>
                <?php
                foreach($realisations as $all)
                {
                    ?>
                    <tr>
                        <td><?php echo $all->id ?></td><td><?php echo $all->titre ?></td><td><?php echo $all->description ?></td><td> <img height="25" width="25" src="<?php echo site_url("/assets/uploads/".$all->image); ?>" /></td><td><?php echo$all->id_service ?></td><td><?php echo anchor('Administrateur/realisations/edit/'.$all->id,'<span class="glyphicon glyphicon-pencil"></span>');?><button  id="<?php echo $all->id; ?>"  class="btnsup_realisation glyphicon glyphicon-remove"></button></td>
                    </tr>
                    <?php
                }
                ?>
                </table>
                <?php
            }
            ?>
            <input type="hidden" id="lienReal" value="<?php echo site_url("Administrateur/realisations"); ?>">
        </div>
    </div>
</div>


<div class="modal" id="infosRealisation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-
                        dismiss="modal">x</button>
                <h4 class="modal-title">Infos - Mobilesys</h4>
            </div>
            <div class="modal-body">
                &Egrave;tes vous s&ucirc;re de vouloir supprimer ce realisation ?
            </div>
            <div class="modal-footer panelfooter">
                <input   class="btn btn-info btn-sm btn-md" data-dismiss="modal" value="Non" >
                <input   id="btnConfirmSup_Realisation" class="btn btn-info btn-sm btn-md" data-dismiss="modal" value="Oui" >
            </div>
        </div>
    </div>
</div>
