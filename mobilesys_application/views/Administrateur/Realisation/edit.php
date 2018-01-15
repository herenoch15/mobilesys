<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">
    <div class="col-sm-12">
        <div id="titrePage">Edition realisation</div>
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
            <a href="<?php echo site_url('Administrateur/realisations/create');?>" class="btn btn-primary">Nouveau realisation</a>
            <a href="<?php echo site_url('Administrateur/realisations/');?>" class="btn btn-primary">Réalisations listes</a>
        </div>
    </div>
    <div id="bodyPage" class="row">
		<div class="col-md-6 col-md-offset-3">

            <?php
			$attributes = array('class' => 'form-horizontal', 'id' => 'form_edit');
            $attribut_formcontrol=array();
            $attribut_formcontrol["class"]="form-control";
            $attribut_formcontrol["required"]="form-control";
			echo form_open_multipart('/Administrateur/realisations/edit/'.$id,$attributes);?>
            

            <div class="form-group">
                <?php
                echo form_label('Nom realisation','titre',array('class'=>"col-md-3"));
                ?>
              <div class="col-md-9">
                <?php 
				  echo form_error('titre');
                echo form_input('titre',set_value('titre',$realisations->titre ),$attribut_formcontrol);
                ?>
				</div>
            </div>
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
                    echo form_dropdown('service',$svc,$realisations->id_service,$attribut_formcontrol);
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
				echo form_textarea('description',set_value('description',$realisations->description),$attribut_formcontrol);
				?>
				</div>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Logo realisation','image',array('class'=>"col-md-3"));
                ?>
               <div class="col-md-9">
                <?php
                $attributfile=array();
                $attributfile["id"]="image";
                $attributfile["accept"]="images/*";
                $attributfile["class"]="form-control";
                echo form_error('image');
                echo form_upload('image',set_value('image'),$attributfile);
                ?>
				</div>
            </div>
            <?php echo form_submit('submit', 'Enregistrer', 'class="btn btn-primary btn-lg"');?>
            <?php echo anchor('/Administrateur/realisations', 'Annuler','class="btn btn-default btn-lg"');?>
            <?php echo form_close();?>
    </div>
    </div>
</div>


<script>
    $('#image').fileinput({
        language: 'fr',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
</script>