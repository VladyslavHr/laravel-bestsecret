var log = console.log



Livewire.on('urlChange', param => {
    history.pushState(null, null, param);
})

$(document).on('click', '.pagination .page-item', function (e) {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });


