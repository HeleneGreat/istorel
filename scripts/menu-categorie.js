$(document).ready(function(){
    $('#tout').addClass("cat");

    $('#tout').click(function(){
        $('.tout').show();
        $('#conf,#sortie,#patri').removeClass("cat");
        $('#tout').addClass("cat");
    });
    $('#conf').click(function(){
        $('.tout').hide();
        $('.conf').show();
        $('#tout,#sortie,#patri').removeClass("cat");
        $('#conf').addClass("cat");
    });
    $('#sortie').click(function(){
        $('.tout').hide();
        $('.sortie').show();
        $('#conf,#tout,#patri').removeClass("cat");
        $('#sortie').addClass("cat");
    });
    $('#patri').click(function(){
        $('.tout').hide();
        $('.patri').show();
        $('#conf,#sortie,#tout').removeClass("cat");
        $('#patri').addClass("cat");
    });

});