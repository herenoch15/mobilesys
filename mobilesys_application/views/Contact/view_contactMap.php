
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
                        <?php //echo $map['html']; ?>
                    </div>
                </div>

            </div>

        </div>
        <div   class="col-xs-12 col-sm-4"  >
            <div id="PanelContactDroite">
                <form role="form">
                    <label id="lblLaissermsg">Pour nous laisser <br>un message !</label>
                    <label id="lblchampOblig">*Champs obligatoire</label>
                    <div class="form-group">
                        <input  placeholder="Nom*" class="form-control" id="nom">
                    </div>
                    <div class="form-group">
                        <input  placeholder="Prénom*" class="form-control" id="prenom">
                    </div>
                    <div class="form-group">
                        <input  placeholder="Email*" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <input  placeholder="Tel*" class="form-control" id="tel">
                    </div>
                    <div class="form-group">
                    <textarea rows="7"  placeholder="Votre message*" class="form-control" id="message"></textarea>
                    </div>
                    <div class="form-group">
                        <input  type="button"  class="form-control btn btn-primary" id="btnEnvoyermessage" value="Envoyer">
                    </div>

                </form>
            </div>
        </div>
    </div>

<?php
//echo $map['js'];
?>
