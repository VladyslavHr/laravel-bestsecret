var log = console.log

$(document).ready(function(){
    $('.owl-carousel').owlCarousel();
  });

Livewire.on('urlChange', param => {
    history.pushState(null, null, param);
})

$(document).on('click', '.pagination .page-item', function (e) {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });


//   $(function() {
//     // Owl Carousel
//     var owl = $(".owl-carousel");
//     owl.owlCarousel({
//       items: 3,
//       margin: 10,
//       loop: true,
//       nav: true
//     });
//   });
