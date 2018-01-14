<?php
/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 14/01/2018
 * Time: 20:47
 */
?>

<div class="row">
    <div class="col-sm-12">
        <div id="titrePage">Création technologies</div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="<?php echo site_url('Administrateur/technologies/create');?>" class="btn btn-primary">Nouveau technologie</a>
            <a href="<?php echo site_url('Administrateur/technologies/');?>" class="btn btn-primary">Technologies listes</a>
        </div>
    </div>


    <div id="bodyPage" class="row">
        <div  class="col-md-6 col-md-offset-3">
            <?php
            $attributes = array('class' => 'form-horizontal', 'id' => 'form_create');
            $attribut_formcontrol=array();
            $attribut_formcontrol["class"]="form-control";
            $attribut_formcontrol["required"]="form-control";
            echo form_open_multipart('/Administrateur/technologies/create',$attributes);?>
            <div class="form-group">
                <?php
                echo form_label('Nom technologie','nom_techno',array('class'=>"col-md-3"));
                ?>
                <div class="col-md-9">
                    <?php
                    echo form_error('nom');
                    echo form_input('nom_techno',$technologie->nom_techno,$attribut_formcontrol);
                    ?>
                </div>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Service','Service',array('class'=>"col-md-3"));
                ?>
                <div class="col-md-9">
                    <?php
                    $svc = array();
                    foreach($services as $key){
                        $svc[$key->id] = $key->nom_service;
                    }
                    echo form_error('service');
                    echo form_dropdown('id_service',$svc,set_value('service'),$attribut_formcontrol);
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
                    echo form_textarea('description',$technologie->description,$attribut_formcontrol);
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
                    $attributfile["id"]="logo_techno";
                    $attributfile["accept"]="images/*";
                    $attributfile["class"]="form-control";
                    echo form_error('logo_techno');
                    echo form_upload('logo_techno',set_value('logo'),$attributfile);
                    ?>
                </div>
            </div>
            <?php echo form_submit(null, 'Enregistrer', 'class="btn btn-primary btn-lg"');?>
            <?php echo anchor('/Administrateur/technologies', 'Annuler','class="btn btn-default btn-lg"');?>
            <?php echo form_close();?>
        </div>
    </div>
</div>

<script>
    $('#logo_techno').fileinput({
        language: 'fr',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
</script>