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



function chart_select() {

    var select_gender = $('#gender_select')
    var select_category = $('#category_select')

    var gender = select_gender.val()
    var category = select_category.val()

    $.post('/sizeChart',
    {
        gender: gender,
        category: category,
        type: 'general',
        _token: $('meta[name="csrf-token"]').attr('content'),
    }, function function_name(data) {
        if (data.status === 'ok') {
            // if (data.date) {
            //     toastr.warning(data.date)
            // }
            // if (data.toastr) {
            //     toastr.error(data.toastr)
            // }
            $('#chart_size_result').html(data.chart_size_view)
        }
    }, 'json')
}
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
