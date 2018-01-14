<?php
/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 14/01/2018
 * Time: 16:53
 */
?>
<div class="row">
    <div class="col-sm-12">
        <div id="titrePage">Technologie listes</div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="<?php echo site_url('Administrateur/technologies/create');?>" class="btn btn-primary">Nouveau technologie</a>
            <a href="<?php echo site_url('Administrateur/technologies/');?>" class="btn btn-primary">Technologies listes</a>
        </div>
    </div>
    <div class="row">
        <div id="panel_listMobilsys" class="col-lg-12" style="margin-top: 10px;">
            <?php
            if(!empty($technologies))
            {
                ?>
                <table  class="table table-hover table-bordered table-condensed">
                    <tr>
                        <td>ID</td><td>Technologie</td></td><td>Description</td><td>Logo </td><td> </td>
                    </tr>
                    <?php
                    foreach($technologies as $all)
                    {
                        ?>
                        <tr>
                            <td><?php echo $all->id; ?></td><td><?php echo $all->nom_techno; ?></td><td><?php echo $all->description; ?></td><td> <img height="25" width="25" src="<?php echo site_url("/assets/images/".$all->logo_techno); ?>" /></td><td><?php echo anchor('Administrateur/technologies/edit/'.$all->id,'<span class="glyphicon glyphicon-pencil"></span>'); ?><button  id="<?php echo $all->id; ?>"  class="btnsup_technos glyphicon glyphicon-remove"></button></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <?php
            }
            ?>
            <input type="hidden" id="lienTechno" value="<?php echo site_url("Administrateur/technologies"); ?>">
        </div>
    </div>
</div>


<div class="modal" id="infosTechnos">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-
                        dismiss="modal">x</button>
                <h4 class="modal-title">Infos - Mobilesys</h4>
            </div>
            <div class="modal-body">
                &Egrave;tes vous s&ucirc;re de vouloir supprimer ce service ?
            </div>
            <div class="modal-footer panelfooter">
                <input   class="btn btn-info btn-sm btn-md" data-dismiss="modal" value="Non" >
                <input   id="btnConfirmSup_Techno" class="btn btn-info btn-sm btn-md" data-dismiss="modal" value="Oui" >
            </div>
        </div>
    </div>
</div>