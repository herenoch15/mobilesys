
<input id="typeconnexion" type="hidden" value="<?php // print ($connexion); ?>">
<div class="row">
    <form id="frm_login" class="form-horizontal well col-xs-10 col-xs-push-1 col-xs-pull-1 col-sm-8 col-sm-push-2 col-sm-pull-2  col-md-6 col-md-push-3 col-md-pull-3" method="post" action="<?php print site_url("/Administrateur/testLogin"); ?>" >
   
        <div class="card vamiddle">
            <div class="card-block p-a-2">
                <h3 style="color:#fff">Administration MobileSys</h3>
                <br>
                <div class="row">
                    <div class="form-group" >
                        <div class="col-xs-10 col-xs-push-1 col-xs-pull-1 input-group" >
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login" type="text" class="form-control" name="login" value="" placeholder="Login">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-xs-10 col-xs-push-1 col-xs-pull-1 input-group" >
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input class="form-control" type="password" id="password" name="password" value=""  placeholder="Mot de passe">
                        </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div  class="col-xs-10 col-xs-push-1 col-xs-pull-1 input-group" >
                            <input class="btn btn-block btn-success" id="btnLogin" type="submit" value="Connexion">
                        </div>
                    </div>
                </div>

            </div>    
        </div>

    </form>
</div>



<div class="modal fade" id="infoLogin">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" datadismiss="modal">x</button>
                <h4 class="modal-title">Plus d'informations</h4>
            </div>
            <div class="modal-body">Veuilez verifier votre login et password</div>
            <div class="modal-footer panelfooter">
                <input type="button" class="btn  btn-info btn-sm btn-md btn-block" data-dismiss="modal" value="OK" >
            </div>
        </div>
    </div>
</div>
 
 
