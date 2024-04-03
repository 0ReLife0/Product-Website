window.addEventListener("load", function() {
    window.cookieconsent.initialise({
        "palette": {
            "popup": {
                "background": "#ffffff",
                "text": "#404040"
            },
            "button": {
                "background": "#056839",
                "text": "#ffffff"
            }
        },
        "theme": "classic",
        "position": "bottom-right",
        "content": {
            "message": "Deze website gebruikt cookies om ervoor te zorgen dat u de beste ervaring krijgt!",
            "dismiss": "Begrepen!",
            "link": "Meer weten?",
            "href": "#algemeneVoorwaardenOverlay"
        }
    });
});