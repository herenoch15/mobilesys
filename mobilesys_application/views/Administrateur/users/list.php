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
    <div id="bodyPage" class="row">
        <div id="panel_listMobilsys" class="col-lg-12" style="margin-top: 10px;">
            <?php
            if(!empty($users))
            {				
                echo '<table class="table table-hover table-bordered table-condensed">';
                echo '<tr><td>ID</td><td>Nom</td></td><td>Prenom</td><td>Email</td><td>Update</td><td>Operations</td></tr>';
                foreach($users as $key => $user)
                {
                    echo '<tr>';
                    echo '<td>'.$user->id.'</td><td>'.anchor('/Administrateur/users/profile/'.$user->id, $user->login,'class=""').'</td><td>'.$user->prenom.' '.$user->nom.'</td></td><td>'.$user->email.'</td><td>'.$user->date_create.'</td><td>'; echo anchor('Administrateur/users/edit/'.$user->id,'<span class="glyphicon glyphicon-pencil"></span>');
					if($current_user != $user->id) echo anchor('Administrateur/users/suppr/'.$user->id,'<span class="glyphicon glyphicon-remove"></span>');
                    echo '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            }
            ?>
        </div>
    </div>
</div>
