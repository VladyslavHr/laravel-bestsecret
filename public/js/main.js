var log = console.log
initializeForm();

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


  $(document).ready(function(){
    $("#order_submit").on("submit", function(){
      $("#pageloader_order").fadeIn();
    });//submit
  });//document ready


  toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }

// // Add event listeners for the checkboxes
// $("#firm_buy").change(chooseFirm);
// $("#bill_equal_address").change(chooseEqualAddress);


// var firmBuyOldValue = $("#firm_buy").is(":checked");
// var billEqualAddressOldValue = $("#bill_equal_address").is(":checked");

// if (firmBuyOldValue) {
//     $(".firm-show-js").show();
//     $(".identification-num-show-js").show();
// }else{
//     $(".firm-show-js").hide();
//     $(".identification-num-show-js").hide();
// }

// if (billEqualAddressOldValue) {
//     $("#billing_address_js").hide();

// }else{
//     $("#billing_address_js").show();
// }



function chart_select() {

    var select_gender = $('#gender_select')
    var select_category = $('#category_select')
    var product_code = $('#product_code_val')

    var gender = select_gender.val()
    var category = select_category.val()
    var product = product_code.val()

    $.post('/sizeChart/' + product,
    {
        gender: gender,
        category: category,
        product:product,
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

function choose_firm()
{
    if ($('#firm_buy').is(":checked")) {
        $(".firm-show-js").fadeIn();
        $(".identification-num-show-js").fadeIn();
    }else{
        $(".firm-show-js").hide();
        $(".identification-num-show-js").hide();
    }
}

function choose_equal_address()
{
    if ($('#bill_equal_address').is(":checked")) {
        $("#billing_address_js").hide();
    }else{
        $("#billing_address_js").fadeIn();
    }
}


function initializeForm() {
    // Get the initial values of the checkboxes
    var firmBuyOldValue = $("#firm_buy").is(":checked");
    var billEqualAddressOldValue = $("#bill_equal_address").is(":checked");

    // console.log(billEqualAddressOldValue)

    // Initialize form elements based on old values
    if (firmBuyOldValue) {
        $(".firm-show-js").show();
        $(".identification-num-show-js").show();
    } else {
        $(".firm-show-js").hide();
        $(".identification-num-show-js").hide();
    }

    if (billEqualAddressOldValue) {
        $("#billing_address_js").hide();
    } else {
        $("#billing_address_js").show();
    }
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
