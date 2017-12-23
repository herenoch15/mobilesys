<?php
/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 17/12/2017
 * Time: 06:43
 */
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<div class="row">
    <div class="col-sm-12">
        <div>Nouveau réalisations</div>
    </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="<?php echo site_url('Administrateur/realisations/create');?>" class="btn btn-primary">Nouveau</a>
            <a href="<?php echo site_url('Administrateur/realisations');?>" class="btn btn-primary">Réalisations</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Nouveau Réalisation</h1>
            <?php
            $attributes = array('class' => 'form-horizontal', 'id' => 'form_create', 'role'=>'form');
            echo form_open('/Administrateur/realisations/create',$attributes);?>
            <div class="form-group">
                <?php
                echo form_label('Titre réalisation','titre',array('class'=>"col-md-3"));
                ?>
                <div class="col-md-9">
                    <?php
                    echo form_error('titre');
                    echo form_input('titre',set_value('titre'),'class="form-control"');
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
                echo form_label('Service','Service',array('class'=>"col-md-3"));
                ?>
                <div class="col-md-9">
                <?php
                $options = array(
                    'small'         => 'Small Shirt',
                    'med'           => 'Medium Shirt',
                    'large'         => 'Large Shirt',
                    'xlarge'        => 'Extra Large Shirt',
                    );

                    $shirts_on_sale = array('small', 'large');
                    echo form_dropdown('service', $options, 'large','class="form-control"');
                ?>
                </div>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Photo','logo_realisation',array('class'=>"col-md-3"));
                ?>
                <div class="col-md-9">
                    <?php
                    echo form_error('logo_realisation');
                    echo form_upload('logo_realisation',set_value('logo_realisation'),'class="form-control"');
                    ?>
                </div>
            </div>


            <?php echo form_submit('', 'Enregistrer', 'class="btn btn-primary btn-lg"');?>
            <?php echo form_reset('', 'Anuller','class="btn btn-default btn-lg"');?>
            <?php echo form_close();?>
        </div>
    </div>

</div>