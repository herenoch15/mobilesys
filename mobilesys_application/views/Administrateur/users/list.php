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
        <div>Utilisateur</div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="<?php echo site_url('Administrateur/users/create');?>" class="btn btn-primary">Nouveau</a>
            <a href="<?php echo site_url('Administrateur/users');?>" class="btn btn-primary">Users</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">
            <?php
            if(!empty($users))
            {				
                echo '<table class="table table-hover table-bordered table-condensed">';
                echo '<tr><td>ID</td><td>Username</td></td><td>Name</td><td>Email</td><td>Update</td><td>Operations</td></tr>';
                foreach($users as $key => $user)
                {
                    echo '<tr>';
                    echo '<td>'.$user->id.'</td><td>'.anchor('/Administrateur/users/profile/'.$user->id, $user->login,'class=""').'</td><td>'.$user->prenom.' '.$user->nom.'</td></td><td>'.$user->email.'</td><td>'.$user->date_create.'</td><td>'; echo anchor('Administrateur/users/edit/'.$user->id,'<span class="glyphicon glyphicon-pencil"></span>').' '.anchor('Administrateur/users/suppr/'.$user->id,'<span class="glyphicon glyphicon-remove"></span>');
                    
                    echo '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            }
            ?>
        </div>
    </div>
</div>
