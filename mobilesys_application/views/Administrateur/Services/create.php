<?php
/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 17/12/2017
 * Time: 06:43
 */
 defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="row">
    <div class="col-sm-12">
        <div>Nouveau service</div>
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
            <a href="<?php echo site_url('Administrateur/services/create');?>" class="btn btn-primary">Nouveau</a>
            <a href="<?php echo site_url('Administrateur/services');?>" class="btn btn-primary">Services</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Nouveau service</h1>
            <?php
            $attributes = array('class' => 'form-horizontal', 'id' => 'form_create', 'role'=>'form');
            echo form_open('/Administrateur/services/create',$attributes);?>
            <div class="form-group">
                <?php
                echo form_label('Nom service','nom_service',array('class'=>"col-md-3"));
                ?>
                <div class="col-md-9">
                    <?php
                    echo form_error('nom_service');
                    echo form_input('nom_service',set_value('nom_service'),'class="form-control"');
                    ?>
                </div>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Description','Description',array('class'=>"col-md-3"));
                ?>
                <div class="col-md-9">
                    <?php
                    echo form_error('description');
                    echo form_textarea('description',set_value('description'),'class="form-control"');
                    ?>
                </div>
            </div>
            <div class="form-group">
                <?php
                echo form_label('photo','logo_service',array('class'=>"col-md-3"));
                ?>
                <div class="col-md-9">
                    <?php
                    echo form_error('logo_service');
                    echo form_upload('logo_service',set_value('logo_service'),'class="form-control"');
                    ?>
                </div>
            </div>


            <?php echo form_submit('', 'Enregistrer', 'class="btn btn-primary btn-lg"');?>
            <?php echo form_reset('', 'Anuller','class="btn btn-default btn-lg"');?>
            <?php echo form_close();?>
        </div>
    </div>
</div>