$(document).ready(function() {
    var owl = $("#owl");
    owl.owlCarousel({
        loop:true,
        navigation : false,
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        autoHeight : true,
        autoplay: true,
        autoplayTimeout: 7500,
        autoplayHoverPause: true
    });
    owl.trigger('owl.play', 7500);
});
