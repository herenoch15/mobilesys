
<?php
/**
 * Created by PhpStorm.
 * User: herenoch
 * Date: 03/11/2017
 * Time: 10:11
 */

 //echo $map['js'];
?>


    <div class="row" id="Paneltitre">
        <div  class="col-xs-12" >
            <label id="TitrePAge">CONTACT</label>
        </div>
    </div>
    <div id="PanelPAge" class="row">
        <div  class="col-xs-12 col-sm-8"  >
            <div id="PanelContactGauche">
                <div id="Adresse" class="row">
                    <div class="col-sm-12">
                        <p id="Pays">Madagascar</p>
                        <p class="contact"> Soamanandrariny , PK6 Route Toamasina</p>
                        <p class="contact">Tel: +261 32 95 840 60</p>
                        <p class="contact">Tel: +261 33 14 306 54</p>
                        <p class="contact">Email: mobilesys@gmail.com</p>
                    </div>
                </div>
                <div id="carteGeolocalisation" class="row">
                    <div class="col-sm-12">
                        <iframe  src="<?php print(site_url("contact/mapview")); ?>"></iframe>
                        <?php //echo $map['html']; ?>
                    </div>
                </div>

            </div>

        </div>
        <div   class="col-xs-12 col-sm-4"  >
            <div id="PanelContactDroite">
                <form  id="frmcontact" method="post"  action="<?php print(site_url("contact/sendmmessage")); ?>" role="form">
                    <label id="lblLaissermsg">Pour nous laisser <br>un message !</label>
                    <label id="lblchampOblig">*Champs obligatoire</label>
                    <div class="form-group">
                        <input  placeholder="Nom*" class="form-control" required="required" id="nom" name="nom">
                    </div>
                    <div class="form-group">
                        <input  placeholder="Prénom*" class="form-control" required="required" id="prenom" name="prenom">
                    </div>
                    <div class="form-group">
                        <input  type="email" placeholder="Email*" class="form-control" required="required" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="tel"  placeholder="Tel*" class="form-control" id="tel" name="tel">
                    </div>
                    <div class="form-group">
                    <textarea rows="7"  placeholder="Votre message*" class="form-control" required="required" id="message" name="message"></textarea>
                    </div>
                    <div class="form-group">
                        <input  type="submit"  class="form-control btn btn-primary" id="btnEnvoyermessage" value="Envoyer">
                    </div>

                </form>
            </div>
        </div>
    </div>

<?php
//echo $map['js'];
?>
