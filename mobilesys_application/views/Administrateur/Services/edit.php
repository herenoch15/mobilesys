<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="row">
    <div class="col-sm-12">
        <div>Edition service</div>
    </div>
</div>

<?php if($alert!=""){ ?>
<div class="alert alert-<?php echo $alert ?>">
  <strong><?php echo ucfirst($success) ?></strong> <?php print_r($error) ?>
</div>
<?php } ?>

<div class="container">
       <div class="row">
        <div class="col-lg-12 text-right">
            <a href="<?php echo site_url('Administrateur/services/create');?>" class="btn btn-primary">Create service</a>
            <a href="<?php echo site_url('Administrateur/services');?>" class="btn btn-primary">See all services</a>
        </div>
    </div>
    <div class="row">
		<div class="col-md-6 col-md-offset-3">
            <h1>Edit service</h1>
            <?php
			foreach($service as $service){
			$attributes = array('class' => 'form-horizontal', 'id' => 'form_edit');
			echo form_open_multipart('/Administrateur/services/edit/'.$service->id,$attributes);?>
            <div class="form-group">
                <?php
                echo form_label('Nom service','nom',array('class'=>"col-md-3"));
                ?>
              <div class="col-md-9">
                <?php 
				  echo form_error('nom');
                echo form_input('nom',set_value('nom',$service->nom_service ),'class="form-control"');
                ?>
				</div>
            </div>
            <div class="form-group">
				<?php
				echo form_label('Description','description',array('class'=>"col-md-3"));
				?>
				<div class="col-md-9">
				<?php
				echo form_error('description');
				echo form_input('description',set_value('description',$service->description),'class="form-control"');
				?>
				</div>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Logo service','logo',array('class'=>"col-md-3"));
                ?>
               <div class="col-md-9">
                <?php
                echo form_error('logo');
                echo form_upload('logo',set_value('logo'),'class="form-control"');
                ?>
				</div>
            </div>
            <?php } echo form_submit('submit', 'Edit service', 'class="btn btn-primary btn-lg"');?>
            <?php echo anchor('/Administrateur/services', 'Cancel','class="btn btn-default btn-lg"');?>
            <?php echo form_close();?>
    </div>
    </div>
</div>