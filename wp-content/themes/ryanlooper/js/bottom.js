document.getElementById('hamburgler').addEventListener('click', checkNav);
window.addEventListener("keyup", function (e) {
    if (e.keyCode == 27) closeNav();
}, false);

function checkNav() {
    if (document.body.classList.contains('hamburgler-active')) {
        closeNav();
    }
    else {
        openNav();
    }
}

function closeNav() {
    document.body.classList.remove('hamburgler-active');
    $('#myModal').modal('hide');
}

function openNav() {
    $("#arrow").hide();
    console.log("Opening...");
    document.body.classList.add('hamburgler-active');
    $("#myModal").modal();
}
$(window).resize(function () {
    $("#log").append("<div>Handler for .resize() called.</div>");
    var winHeight = $(window).height()
        , docHeight = $(document).height()
        , progressBar = $('progress')
        , max, value;
    /* Set the max scrollable area */
    max = docHeight - winHeight;
    progressBar.attr('max', max);
    $(document).on('scroll', function () {
        value = $(window).scrollTop();
        progressBar.attr('value', value);
    });
});