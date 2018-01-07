<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="row">
    <div class="col-sm-12">
        <div id="titrePage">Création utilisateur</div>
    </div>
</div>

<?php if($alert!=""){ ?>
<div class="alert alert-<?php echo $alert ?>">
  <strong><?php echo ucfirst($success) ?></strong> 
</div>
<?php } ?>

<div class="container">
       <div class="row">
        <div class="col-lg-12 text-right">
            <a href="<?php echo site_url('Administrateur/users/create');?>" class="btn btn-primary">Nouveau utilisateur</a>
            <a href="<?php echo site_url('Administrateur/users');?>" class="btn btn-primary">Utilisateurs listes</a>
        </div>
    </div>
    <div id="bodyPage" class="row">
		<div class="col-md-6 col-md-offset-3">
            <?php
			$attributes = array('class' => 'form-horizontal', 'id' => 'form_create');
			echo form_open('/Administrateur/users/edit/'.$user,$attributes);?>

            <div class="form-group">
                <?php
                echo form_label('Nom','first_name',array('class'=>"col-md-3"));
                ?>
              <div class="col-md-9">
                <?php 
				  echo form_error('first_name');
                echo form_input('first_name',set_value('first_name',$users->nom),'class="form-control"');
                ?>
				</div>
            </div>
            <div class="form-group">
				<?php
				echo form_label('Prenom','last_name',array('class'=>"col-md-3"));
				?>
				<div class="col-md-9">
				<?php
				echo form_error('last_name');
				echo form_input('last_name',set_value('last_name',$users->prenom),'class="form-control"');
				?>
				</div>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Login','username',array('class'=>"col-md-3"));
                ?>
               <div class="col-md-9">
                <?php
                echo form_error('username');
                echo form_input('username',set_value('username',$users->login),'class="form-control"');
                ?>
				</div>
            </div>
            <div class="form-group">
				<?php
                echo form_label('Email','email',array('class'=>"col-md-3"));
                ?>
               <div class="col-md-9">
                <?php
                echo form_error('email');
                echo form_input('email',set_value('email',$users->email),'class="form-control"');
                ?>
				</div>
            </div>
            <div class="form-group">
				<?php
                echo form_label('Password','password',array('class'=>"col-md-3"));
                ?>
               <div class="col-md-9">
                <?php
                echo form_error('password');
                echo form_password('password','','class="form-control"');
                ?>
				</div>
            </div>
            <div class="form-group">
				<?php
                echo form_label('Confirm password','password_confirm',array('class'=>"col-md-3"));
                ?>
               <div class="col-md-9">
                <?php
                echo form_error('password_confirm');
                echo form_password('password_confirm','','class="form-control"');
                ?>
				</div>
            </div>
            <div class="form-group">
                <?php
                if(isset($groups))
                {
                    echo form_label('Groups','groups[]');
                    foreach($groups as $group)
                    {
                        echo '<div class="checkbox">';
                        echo '<label>';
                        echo form_checkbox('groups[]', $group->id, set_checkbox('groups[]', $group->id));
                        echo ' '.$group->name;
                        echo '</label>';
                        echo '</div>';
                    }
                }
                ?>
            </div>

            <?php echo form_submit('submit', 'Enregistrer', 'class="btn btn-primary btn-lg"');?>
            <?php echo anchor('/Administrateur/users', 'Annuler','class="btn btn-default btn-lg"');?>
            <?php echo form_close();?>
    </div>
    </div>
</div>