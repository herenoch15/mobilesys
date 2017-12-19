<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="row">
    <div class="col-sm-12">
        <div>Profile utilisateur</div>
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
		<div class="col-md-6 col-md-offset-3">
            <h1>Profile user</h1>
            <?php foreach($users as $key => $user){	?>
    <div class="row">
			<div class="col-md-3">Nom</div>
                
              <div class="col-md-9"><?php echo $user->nom ?></div>
		</div>
    <div class="row">
			<div class="col-md-3">Prenom</div>
                
              <div class="col-md-9"><?php echo $user->prenom ?></div>
		</div>
    <div class="row">
			<div class="col-md-3">Login</div>
                
              <div class="col-md-9"><?php echo $user->login ?></div>
		</div>
    <div class="row">
			<div class="col-md-3">Email</div>
                
              <div class="col-md-9"><?php echo $user->email ?></div>
		</div>
            <div class="form-group">
                <?php
                if(isset($groups))
                {
                }
                ?>
            </div>
<?php } ?>
	<?php echo anchor('/Administrateur/users/edit/'.$id, 'Editer','class="btn btn-info btn-lg"');?>
    </div>
    </div>
</div>