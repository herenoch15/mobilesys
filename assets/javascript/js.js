//NOUS CONTACT BTN OK
$(document).ready(function (e)
{

    $("#mobilSysmenue").click(function (e){

        $("#mobilSysAccueil").click();
        $(this).addClass("active");
        return false;
    });

    //JS SERVICES
    $(document).on("click",".appDev",function (e)
    {
        $("#infoServices").modal({
            keyboard: true,
            show: true});
    });








    //Fonction fermeture fenetre
    $(".modal .close").click(function (e)
    {
        $(".modal").modal("hide");
    });


    $("#btnOK").click(function (e)
    {

        emailval=$("#Emailcct").val();
        $("#panelINFOMsgcontact").css("display","none");
        if(emailval!="")
        {

            email_valid=Test_adresse_email(emailval);//appel fonction test si l'adresse email est valide ou non
            if(email_valid==true)
            {
                $("#Emailcctmessage").val(emailval);
                $("#Msgbox_nouscantacter").modal({
                    keyboard: true,
                    show: true});
            }
            else
            {
                $("#Emailcct").attr("placeholder","Saisissez a nouveau votre email");
                $("#Emailcct").val("");
            }

        }

    });






    //********************* DEBUT BUTTON ENVOYER CONTACT *****************
    $(document).on("click", "#btnEnvoyermessage",function (e)
    {
        // Test si le nom ou prenom ou email ou message vide
        var nom_=$("#nom_cct_").val();
        var prenom_=$("#prenom_cct_").val();
        var email_=$("#Emailcct").val();
        var message_=$("#message_").val();
        var message_erreur="";

        if(nom_=="" || prenom_=="" || email_=="" || message_=="")
        {
                if(nom_=="")
                {
                    message_erreur="nom";
                }
                if(prenom_=="")
                {
                    message_erreur != "" ? message_erreur = message_erreur + " ,prenom" : message_erreur = "prenom";
                }
                if(email_=="")
                {
                    message_erreur!=""? message_erreur=message_erreur+" ,email" :message_erreur="email" ;
                }
                if(message_=="")
                {
                    message_erreur!=""?   message_erreur=message_erreur+" , message" : message_erreur="message" ;
                }
            $("#panelINFOMsgcontact").css("display","block");
            $("#INFOMsgcontact").html("Saisissez votre "+message_erreur);
        }

    });
    //*********************** FIN BUTTON ENVOYER CONTACT *******************


    //************************* DEBUT JS CONTTACT **************************

    $(document).on("submit","#frmcontact",function(e)
    {
        url=$(this).attr("action");
        datatransfert=$("#frmcontact").serializeArray();
        $.post(url,datatransfert,function(e)
        {
            //alert(e);
            
             $("#Info_mobileSys").modal({
                    keyboard: true,
                    show: true});
            return false;
        });
        return false;
    });
    //************************* FIN JS CONTTACT ****************************


/*
    $("#toTop").click(function(e)
    {
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });
*/

});






//FUNCTION TESTE ADRESSE EMAIL VALIDE OU PAS
function Test_adresse_email(email)
{
    var ok = false ;
    var p1 = email.indexOf("@") ;
    var p2 = email.lastIndexOf(".") ;
    if (p1 > -1 && p2 > -1 && p1 < p2) {
        ok = true ;
    }
    return ok ;
}