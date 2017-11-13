<?php
/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 10/11/2017
 * Time: 09:44
 */
?>
<div id="headerAdmin" class="row" >
    <div class="col-md-12">
        <ul class="nav nav-tabs" role="tablist">
            <li <?php if($active=="Accueil") {?>  class="active" <?php } ?>><a href="<?php print site_url("Administrateur"); ?>">Accueil</a></li>
            <li <?php if($active=="Services") {?>  class="active" <?php } ?>><a href="<?php print site_url("Administrateur/services"); ?>">Services</a></li>
            <li <?php if($active=="Realisations") {?>  class="active" <?php } ?>><a href="<?php print site_url("Administrateur/realisations"); ?>">Réalisation</a></li>
            <li <?php if($active=="Messages") {?>  class="active" <?php } ?>><a href="<?php print site_url("Administrateur/messages"); ?>">Messages</a></li>
            <li id="logout"><a href="<?php print (site_url('Administrateur/logout')); ?>"><img  height="25" width="25" src="<?php print site_url("/assets/images/images_admin/imglogoout.png"); ?>"></a></li>
        </ul>

    </div>
</div>
