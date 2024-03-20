$(document).ready(function(){
    if (window.innerWidth < 790) {
        $("ul").hide();
        $(".navbutton").show();
    } else {
        $("ul").show();
        $(".navbutton").hide();
    }

    $( ".navbutton" ).on( "click", function() {
            $("ul").fadeToggle(200);
      } );
});
