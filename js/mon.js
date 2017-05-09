
function agrandir() {
    console.log("fonction ok, et j'aime les bites aussi");
    if ($("#contentStream").hasClass("container")) {
        $('#contentStream').removeClass("container");
        $('#contentStream').addClass("container-fluid");
        $("#live").animate({ width: "102%", height: "820px" }, "slow");
       // $("#live").animate({ height: "820px"}, "slow");
        $("#tchat").animate({ width: "102%" }, "slow");
        $("#tchat").animate ({ height: 820}, "slow");
    } else if ($("#contentStream").hasClass("container-fluid")) {
        $('#contentStream').removeClass("container-fluid");
        $('#contentStream').addClass("container");
        $("#live").animate({ width: "100%" });
        $("#live").animate({ height: 500}, "slow");
        $("#tchat").animate({ width: "100%" }, "slow");
        $("#tchat").animate ({ height: 500}, "slow");        
    }
}