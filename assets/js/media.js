/**----------------------------------------------------
--------------Show Medias on small screens-------------
----------------------------------------------------**/

$(function () {
    $("#loadMedia").on('click', function (e) {
        e.preventDefault();
        $("div.load-media").removeClass('d-none');
        $("#loadMedia").addClass('d-none');
        $("#hideMedia").removeClass('d-none');
    });
    $("#hideMedia").on('click', function (e) {
        e.preventDefault();
        $("div.load-media").addClass('d-none');
        $("#loadMedia").removeClass('d-none');
        $("#hideMedia").addClass('d-none');
    });
});

/**----------------------------------------------------
--------------Show Button if comments------------------
----------------------------------------------------**/

$(function () {
    $("div.comments").slice(0, 6).show();
    $("#loadComments").on('click', function (e) {
        e.preventDefault();
        if ($("div.comments:hidden").length < 6) {
            $("#loadComments").hide('slow');
        }
        else {
            $("#loadComments").show('slow');
        }
    });
});