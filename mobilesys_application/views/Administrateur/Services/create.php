<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="row">
    <div class="col-sm-12">
        <div id="titrePage">Création service</div>
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
            <a href="<?php echo site_url('Administrateur/services/create');?>" class="btn btn-primary">Nouveau service</a>
            <a href="<?php echo site_url('Administrateur/services');?>" class="btn btn-primary">Services listes</a>
        </div>
    </div>
    <div id="bodyPage" class="row">
		<div  class="col-md-6 col-md-offset-3">
            <?php
			$attributes = array('class' => 'form-horizontal', 'id' => 'form_create');
            $attribut_formcontrol=array();
            $attribut_formcontrol["class"]="form-control";
            $attribut_formcontrol["required"]="form-control";
			echo form_open_multipart('/Administrateur/services/create',$attributes);?>
            <div class="form-group">
                <?php
                echo form_label('Nom service','nom',array('class'=>"col-md-3"));
                ?>
              <div class="col-md-9">
                <?php 
				  echo form_error('nom');
                echo form_input('nom',set_value('nom'),$attribut_formcontrol);
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
				echo form_textarea('description',set_value('description'),$attribut_formcontrol);
				?>
				</div>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Logo service','logo',array('class'=>"col-md-3"));
                ?>
               <div class="col-md-9">
                <?php
                $attributfile=array();
                $attributfile["id"]="logo";
                $attributfile["accept"]="images/*";
                $attributfile["class"]="form-control";
                echo form_error('logo');
                echo form_upload('logo',set_value('logo'),$attributfile);
                ?>
				</div>
            </div>
            <?php echo form_submit('submit', 'Enregistrer', 'class="btn btn-primary btn-lg"');?>
            <?php echo anchor('/Administrateur/services', 'Annuler','class="btn btn-default btn-lg"');?>
            <?php echo form_close();?>
    </div>
    </div>
</div>



<script>
    $('#logo').fileinput({
        language: 'fr',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
</script>