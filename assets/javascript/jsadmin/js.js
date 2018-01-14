/**
 * Created by herenoch on 10/11/2017.
 */

$(document).ready(function (e)
{

    //JS SERVICES
    var idServicesup="";
    $(document).on("click",".btnsup_service",function (e)
    {
        idServicesup=$(this).attr("id");
        $("#infoServices").modal({
            keyboard: true,
            show: true});
    });

    //JS Technologies
    $(document).on("click",'.btnsup_technos',function (e)
    {
        idTechnosup=$(this).attr("id");
        $("#infosTechnos").modal({
            keyboard: true,
            show: true});
    });
    $(document).on("click","#btnConfirmSup_Techno",function (e)
    {
        window.location.href=$("#lienTechno").val()+"/suppr/"+idTechnosup;
    })


    $(document).on("click","#btnConfirmSup_SVC",function (e)
    {
        window.location.href=$("#lienSvc").val()+"/suppr/"+idServicesup;
    })

    //JS REALISATION
    var idRealisationsup="";
    $(document).on("click",".btnsup_realisation",function (e)
    {
        idRealisationsup=$(this).attr("id");
        $("#infosRealisation").modal({
            keyboard: true,
            show: true});
    });
    $(document).on("click","#btnConfirmSup_Realisation",function (e)
    {
        window.location.href=$("#lienReal").val()+"/suppr/"+idRealisationsup;
    })

    //JS USERS
    var idUsersup="";
    $(document).on("click",".btnsup_user",function (e)
    {
        idUsersup=$(this).attr("id");
        $("#infosUsers").modal({
            keyboard: true,
            show: true});
    });
    $(document).on("click","#btnConfirmSup_User",function (e)
    {
        window.location.href=$("#lienUsers").val()+"/suppr/"+idUsersup;
    })





});
