//NOUS CONTACT BTN OK
//
$(document).ready(function (e)
{


    $("#btnOK").click(function (e)
    {

        email_=$("#Emailcct").val();
        if(email_!="")
        {

            email_valid=Test_adresse_email(email_);//appel fonction test si l'adresse email est valide ou non
            if(email_valid==true)
            {
                $("#Emailcctmessage").val(email_);

                $("#Msgbox_nouscantacter").modal({
                    keyboard: true,
                    show: true});
                //$("#frm_contactcmcas #nom_cct_").focus();
                //$("#nom_cct_").val("");


                //alert("email invalid");


            }
            else
            {

                $("#Emailcct").attr("placeholder","Saisissez a nouveau votre email");
                $("#Emailcct").val("");

            }



        }

        //return false;

    });


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