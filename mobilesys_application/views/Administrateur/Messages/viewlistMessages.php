<?php
/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 10/11/2017
 * Time: 09:46
 */
?>
<div class="row">
    <div class="col-sm-12">
        <div>Messages</div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">

<?php
            if(!empty($msg))
            {
                foreach($msg as $mk => $mv)
                {
					?>

        <div class="row list-messages">
            <div class="col-sm-12">
                <div class="nom-prenom"><?php echo ucfirst($mv->nom)." ".ucfirst($mv->prenom) ?></div>
                <div class="titre-message">Téléphone: <?php echo $mv->tel ?></div>
                    <div class="message">
                      <div id="PanelPAge" class="row">
                       <?php echo $mv->message ?>
                       </div>
				</div>
            </div>
        </div>
<?php } ?>
<?php } ?>
	</div>
</div>