/**
 * Created by herenoch on 09/11/2017.
 */
$(document).ready(function (e)
{

        $(".modal .close").click(function (e)
        {
            $(".modal").modal("hide");
        });


        $("#btnLogin").click(function (e)
        {

            loginVal=$("#frm_login #login").val();
            passwordVal=$("#frm_login #password").val();
             if(loginVal==""  || passwordVal=="" )
             {
                 $("#infoLogin").modal({
                     keyboard:true,
                     show:true
                 });
             }
            return false;

        });
})