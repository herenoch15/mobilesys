
<input id="typeconnexion" type="hidden" value="<?php // print ($connexion); ?>">
<div class="row">
    <form id="frm_login" class="form-horizontal well col-xs-10 col-xs-push-1 col-xs-pull-1 col-sm-8 col-sm-push-2 col-sm-pull-2  col-md-6 col-md-push-3 col-md-pull-3" method="post" action="" >

        <div class="row">
            <div class="col-xs-4 col-sm-2 col-md-2"><img  id="logoinvovo" src="assets/images/icoinvovo.png"></div>
            <div class="col-xs-8 col-sm-10 col-md-10"><legend>Administration MobileSys</legend></div>

        </div>
        <div class="row">
            <br>
        </div>


        <div class="row">
            <div class="form-group" >
                <div class="col-xs-10 col-xs-push-1 col-xs-pull-1 input-group" >
                    <label class="input-group-addon lblfrmlogin">Login</label><input class="form-control" value="<?php //print ($login); ?>" id="login" name="login" >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-xs-10 col-xs-push-1 col-xs-pull-1 input-group" >
                    <label class="input-group-addon lblfrmlogin">Password</label>
                    <input class="form-control" type="password" id="password" name="password" value="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div  class="col-xs-6 col-xs-push-3 col-xs-pull-3" >
                    <input class="btn btn-primary btn-block" id="btnLogin" type="submit" value="Connexion">
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
 
 
