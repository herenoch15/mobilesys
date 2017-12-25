<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="row">
    <div class="col-sm-12">
        <div>Edition realisation</div>
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
            <a href="<?php echo site_url('Administrateur/realisations/create');?>" class="btn btn-primary">Create realisation</a>
            <a href="<?php echo site_url('Administrateur/realisations/');?>" class="btn btn-primary">See all realisations</a>
        </div>
    </div>
    <div class="row">
		<div class="col-md-6 col-md-offset-3">
            <h1>Edit realisation</h1>
            <?php
			$attributes = array('class' => 'form-horizontal', 'id' => 'form_edit');
			echo form_open_multipart('/Administrateur/realisations/edit/'.$id,$attributes);?>
            
            <div class="form-group">
				<?php
				echo form_label('service','Service',array('class'=>"col-md-3"));
				?>
				<div class="col-md-9">
				<?php
					$svc = array();
					foreach($services as $key){
						$svc[$key->id] = $key->nom_service;
					}
				echo form_error('service');
				echo form_dropdown('service',$svc,$id_service,'class="form-control"');
				?>
				</div>
            </div>
               <div class="form-group">
                <?php
                echo form_label('Nom realisation','titre',array('class'=>"col-md-3"));
                ?>
              <div class="col-md-9">
                <?php 
				  echo form_error('titre');
                echo form_input('titre',set_value('titre',$titre ),'class="form-control"');
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
				echo form_input('description',set_value('description',$description),'class="form-control"');
				?>
				</div>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Logo realisation','image',array('class'=>"col-md-3"));
                ?>
               <div class="col-md-9">
                <?php
                echo form_error('image');
                echo form_upload('image',set_value('image'),'class="form-control"');
                ?>
				</div>
            </div>
            <?php echo form_submit('submit', 'Edit realisation', 'class="btn btn-primary btn-lg"');?>
            <?php echo anchor('/Administrateur/realisations', 'Cancel','class="btn btn-default btn-lg"');?>
            <?php echo form_close();?>
    </div>
    </div>
</div>