
    <div class="row" id="Pied_page">
        <div class="col-sm-push-1 col-sm-10 col-sm-pull-1">


            <div id="panelsaisie_email_reseauxsociaux" class="row">
                <div id="droite" class="col-sm-7 col-xs-12">
                    <div class="row">
                        <div class="col-sm-1 col-xs-1"><img id="enveloppe_email" src="<?php print (site_url("/assets/images/enveloppe_email.png"));?>" ></div>
                        <div class="col-sm-8 col-xs-7"> <input id="Emailcct"  placeholder="Saisissez votre email"></div>
                        <div class="col-sm-2 col-xs-3  pull-right"><input type="button"  id="btnOK" class="btn"  value="OK"></div>
                    </div>
                </div>
                <div class="clearfix visible-xs"></div>
                <div id="gauche" class="col-sm-5 col-xs-12">
                    <div class="row">
                        <a id="FB_" target="_blank" href="https://facebook.com/cmcas1mizarailayfitia/?ref=ts&fref=ts" class="col-sm-3 col-xs-3 reseaux_sociaux"></a><a id="twitter_" class="col-sm-3 col-xs-3 reseaux_sociaux"></a> <a id="gplus_" href="https://plus.google.com/107116756400389177503?hl=fr" target="_blank" class="col-sm-3 col-xs-3 reseaux_sociaux"></a> <a id="youtube_" class="col-sm-3 col-xs-3 reseaux_sociaux"></a>
                    </div>
                </div>
            </div>


            <div id="lien_piedpage" class="row">
                <div id="droite" class="col-sm-7 col-xs-12">
                    <div id="horaire"  class="list col-sm-6">

                        <label class="lbltitre_">Horaires</label>
                        <div class="panel_">

                            <ul id="srvhoraire">
                                <li><label class="lblserv">Service</label></li>
                                <li>-	Lundi au Vendredi : 8h à 12h, 13h à 17h</li>
                                <li>- Dimanche : 8h à 17h</li>

                                <?php

                                /*
                                <li><label class="lblserv">Service Maternité</label>
                                    <span>- 24H/24H 7/7</span>
                                </li>
                                */
                                ?>


                            </ul>
                        </div>
                    </div>


                    <div id="contacte_"  class="list col-sm-6">

                        <label class="lbltitre_">Contacts</label>
                        <div  class="panel_">
                            <ul id="contacts_">
                                <li>
                                    Localisation :
                                </li>
                                <li>
                                    - Soamanandrariny , PK6 Route Toamasina
                                </li>
                                <li>
                                    - Antananarivo 101
                                </li>
                                <li>E-Mail : <a target="_blank" href="mailto:mobilesys@gmail.com">mobilesys@gmail.com</a></li>
                                <li>Map : <a  target="_blank" href="https://www.google.com/maps/place/CMCAS/@-18.8935204,47.560157,16.54z/data=!4m5!3m4!1s0x0:0xe589c447a62dcbf5!8m2!3d-18.894117!4d47.562589?hl=fr">Google Map</a></li>
                                <li>Tel : <a class="PC" href="callto:+261331430654">+261 (0)33 14 306 54</a> <a class="Mobile" href="tel:+261331430654">+261 (0)33 14 306 54</a> </li>
                                <li>Tel : <a class="PC" href="callto:+261329584060">+261 (0)32 95 840 60</a> <a class="Mobile" href="tel:+261329484060">+261 (0)32 95 840 60</a></li>


                            </ul>
                        </div>

                    </div>
                </div>


                <div id="gauche" class="offre col-sm-5 col-xs-12">
                    <div class="list col-sm-12">
                        <label class="lbltitre_">Nos services</label>
                        <div class="panel_">
                            <ul>
                                <li><a href="">Développement Web</a></li>
                                <li><a href="">Applications mobiles</a></li>
                                <li><a href="">Systèmes et réseaux</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>



            <div id="copyright" class="row" >
                <div class="col-sm-12">© Copyright© 2017 MobileSys. Tous droits réservé </div>
            </div>

            <?php
              /* <div id="toTop"><img src="<?php print(site_url("/assets/images/totop.png"));  ?>"></div>*/
            ?>


        </div>
    </div>


<div class="modal fade" id="Msgbox_nouscantacter" >
    <form id="frm_contactcmcas" method="post" action="<?php print(site_url("contact/send_mail/")); ?>">


        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" datadismiss="modal">x</button>
                    <h4 class="modal-title">Concat MobileSys</h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-9 form-group"><input value="" name="nom_cct_" id="nom_cct_" placeholder="Votre nom" class="form-control" ></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9 form-group"><input value="" name="prenom_cct_" id="prenom_cct_" placeholder="Votre prenom" class="form-control" ></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9 form-group"><input value="" type="email" name="Emailcctmessage" id="Emailcctmessage" type="email" placeholder="Votre email" class="form-control" ></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group"> <textarea rows="5" name="message_" id="message_" placeholder="Message" class="form-control"></textarea></div>
                    </div>
                    <div id="panelINFOMsgcontact" class="row">
                        <div class="col-sm-12 form-group"><label id="INFOMsgcontact"></label></div>
                    </div>

                </div>
                <div class="modal-footer panelfooter_" >
                    <input id="btn_envoyermsg" type="button" class="btn btn-md btn-primary"   value="Envoyer">

                </div>
            </div>
        </div>


    </form>
</div>

<div class="modal fade" id="Info_mobileSys" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" datadismiss="modal">x</button>
                <h4 class="modal-title">Concat MobileSys</h4>
            </div>
            <div class="modal-body">
            Votre message été envoyé avec succèe
            </div>
            <div class="modal-footer panelfooter_" >
                <input id="btn_ok" type="button" class="btn btn-md btn-primary"   value="OK">
            </div>
        </div>
    </div>
</div>


<div class="modal" id="infoServices">
    <div class="modal-dialog"> <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-
                        dismiss="modal">x</button>
                <h4 class="modal-title">HTML5</h4>
            </div>
            <div class="modal-body">
                HTML est le langage de balisage du web. La version 5 est de loin la plus complète. Peu importe l’envergure de l’architecture d’un site, HTML 5 est efficace. De plus avec ses nouveaux éléments et attributs, on peut développer des sites dynamiques et géolocalisés.
            </div>
    </div> 
</div>
</div>