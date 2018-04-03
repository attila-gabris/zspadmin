$(document).ready(function(){
    
    $(".targy-edit").click(function(){
        var targyId = $(this).parent().siblings(".targy-id").text();
        var targyNev = $(this).parent().siblings(".targy-nev").text();
        $("#targy-id").val(targyId);
        $("#targy-nev").val(targyNev);
    });
    
    $(".tipus-edit").click(function(){
        var tipusId = $(this).parent().siblings(".tipus-id").text();
        var tipusNev = $(this).parent().siblings(".tipus-nev").text();
        var tipusSzorzo = $(this).parent().siblings(".tipus-szorzo").text();
        $("#tipus-id").val(tipusId);
        $("#tipus-nev").val(tipusNev);
        $("#tipus-szorzo").val(tipusSzorzo);
    });


    $(".ertek-edit").click(function(){
        var ertekOsztalyzat = $(this).parent().siblings(".ertek-osztalyzat").text();
        var ertekZsebpenz = $(this).parent().siblings(".ertek-zsebpenz").text();
        $("#ertek-osztalyzat").val(ertekOsztalyzat);
        $("#ertek-zsebpenz").val(ertekZsebpenz);
    });

    $(".datum-edit").click(function(){
        var datum = $(this).parent().siblings(".datum").text();
        $("#datum").val(datum);
    });

    $(".alap-edit").click(function(){
        var alap = $(this).parent().siblings(".alap").text();
        $("#alap").val(alap);
    });
});