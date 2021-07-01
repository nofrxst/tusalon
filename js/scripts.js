var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#menu-items a.items").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });