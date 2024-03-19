const windowInnerWidth  = window.innerWidth;

$(document).ready(function(){
    if (windowInnerWidth < 790) {
        $("ul").hide();
        $(".navbutton").show();
    } else {
        $("ul").show();
        $(".navbutton").hide();
    }


    $( ".navbutton" ).on( "click", function() {
        $("ul").toggle();
      } );
});
