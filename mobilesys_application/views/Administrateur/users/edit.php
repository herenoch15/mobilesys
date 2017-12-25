<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="row">
    <div class="col-sm-12">
        <div>Création utilisateur</div>
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
            <a href="<?php echo site_url('Administrateur/users/create');?>" class="btn btn-primary">Create user</a>
            <a href="<?php echo site_url('Administrateur/users');?>" class="btn btn-primary">See all users</a>
        </div>
    </div>
    <div class="row">
		<div class="col-md-6 col-md-offset-3">
            <h1>Edit user</h1>
            <?php
			$attributes = array('class' => 'form-horizontal', 'id' => 'form_create');
			echo form_open('/Administrateur/users/edit/'.$user,$attributes);?>
            <?php foreach($users as $key => $user){	?>
            <div class="form-group">
                <?php
                echo form_label('First name','first_name',array('class'=>"col-md-3"));
                ?>
              <div class="col-md-9">
                <?php 
				  echo form_error('first_name');
                echo form_input('first_name',set_value('first_name',$user->nom),'class="form-control"');
                ?>
				</div>
            </div>
            <div class="form-group">
				<?php
				echo form_label('Last name','last_name',array('class'=>"col-md-3"));
				?>
				<div class="col-md-9">
				<?php
				echo form_error('last_name');
				echo form_input('last_name',set_value('last_name',$user->prenom),'class="form-control"');
				?>
				</div>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Username','username',array('class'=>"col-md-3"));
                ?>
               <div class="col-md-9">
                <?php
                echo form_error('username');
                echo form_input('username',set_value('username',$user->login),'class="form-control"');
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
                echo form_input('email',set_value('email',$user->email),'class="form-control"');
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
<?php } ?>
            <?php echo form_submit('submit', 'Save', 'class="btn btn-primary btn-lg"');?>
            <?php echo anchor('/Administrateur/users', 'Cancel','class="btn btn-default btn-lg"');?>
            <?php echo form_close();?>
    </div>
    </div>
</div>