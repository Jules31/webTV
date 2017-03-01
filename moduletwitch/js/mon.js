$(document).ready(function() {
    console.log("Document pret");

    $("#Ami n°1 de chao").click(function() {
        $("#live").attr("src", "");
        $("#tchat").attr("src", "");
    });
    $("#Ami n°2 de chao").click(function() {
        $("#live").attr("src", "");
        $("#tchat").attr("src", "");
    });
    $("#Amis n°3 de chao").click(function() {
        $("#live").attr("src", "");
        $("#tchat").attr("src", "");
    });
}); 

function agrandir() {
    if ($("#contentStream").hasClass("container")) {
        $('#contentStream').removeClass("container");
        $('#contentStream').addClass("container-fluid");
        $("#live").animate({ width: "102%",height: "820px" }, "slow");
        $("#tchat").animate({ width: "102%", height: "820px"}, "slow");
    } else if ($("#contentStream").hasClass("container-fluid")) {
        $('#contentStream').removeClass("container-fluid");
        $('#contentStream').addClass("container");
        $("#live").animate({ width: "100%", height: "500px" }, "slow");
        $("#tchat").animate({ width: "100%", height: "500px" }, "slow");       
    }
}