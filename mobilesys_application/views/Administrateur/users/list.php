<?php
/**
 * Created by PhpStorm.
 * User: Narh
 * Date: 28/11/2017
 * Time: 11:53
 */
?>
<div class="row">
    <div class="col-sm-12">
        <div id="titrePage">Utilisateurs listes</div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="<?php echo site_url('Administrateur/users/create');?>" class="btn btn-primary">Nouveau utilisateur</a>
            <a href="<?php echo site_url('Administrateur/users');?>" class="btn btn-primary">Utilisateurs listes</a>
        </div>
    </div>
    <div  class="row">
        <div id="panel_listMobilsys" class="col-lg-12" style="margin-top: 10px;">
            <?php
            if(!empty($users))
            {				
                ?>
                <table class="table table-hover table-bordered table-condensed">
                <tr>
                    <td>ID</td><td>Nom</td></td><td>Prenom</td><td>Email</td><td>Update</td><td>Operations</td>
                </tr>
                 <?php
                foreach($users as $key => $user)
                {
                 ?>
                <tr>
                    <td><?php echo $user->id; ?></td><td><?php echo anchor('/Administrateur/users/profile/'.$user->id, $user->login,'class=""');?></td><td><?php echo $user->prenom.' '.$user->nom; ?></td></td><td><?php echo $user->email; ?></td><td><?php echo $user->date_create; ?></td><td><?php echo anchor('Administrateur/users/edit/'.$user->id,'<span class="glyphicon glyphicon-pencil"></span>');?><button  id="<?php echo $user->id; ?>"  class="btnsup_user glyphicon glyphicon-remove"></button></td>
                </tr>
                <?php
                }
                ?>
                </table>
                <?php
            }
            ?>
         <input type="hidden" id="lienUsers" value="<?php echo site_url("Administrateur/users"); ?>">
        </div>
    </div>
</div>


<div class="modal" id="infosUsers">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-
                        dismiss="modal">x</button>
                <h4 class="modal-title">Infos - Mobilesys</h4>
            </div>
            <div class="modal-body">
                &Egrave;tes vous s&ucirc;re de vouloir cette user ?
            </div>
            <div class="modal-footer panelfooter">
                <input   class="btn btn-info btn-sm btn-md" data-dismiss="modal" value="Non" >
                <input   id="btnConfirmSup_User" class="btn btn-info btn-sm btn-md" data-dismiss="modal" value="Oui" >
            </div>
        </div>
    </div>
</div>