/*-----------------Mirko Venturi----------------------
---------------------15.03.2020-----------------------
----------------------------------------------------*/

/**----------------------------------------------------
---------------------Image Add---------------------
----------------------------------------------------**/

$('#add-image').on('click', function (e) {

    const index = +$('#image-counter').val();
    const tmpl = $('.medias').data('prototype').replace(/__name__/g, index);

    $('.medias').append(tmpl);
    $('#image-counter').val(index + 1);

    $('.custom-file-input').on('change', function (event) {
        var inputFile = event.currentTarget;

        $(inputFile).parent()
            .find('.custom-file-label')
            .html(inputFile.files[0].name)
    });

    handleDeleteButtons();
    displayCounter();
});

/**----------------------------------------------------
-----------------------Video Add-----------------------
----------------------------------------------------**/

$('#add-video').on('click', function () {

    const index = +$('#video-counter').val();
    const tmpl = $('.videos').data('prototype').replace(/__name__/g, index);
    //var videoUrl = $(this).prev().val();
    $('.videos').append(tmpl);
    $('#video-counter').val(index + 1);

    handleDeleteButtons();
    displayCounter();
});

/**----------------------------------------------------
---------------------Image Preview---------------------
----------------------------------------------------**/

$('#image-preview').on('click', function () {

    let preview = document.getElementById("trick_medias_0_mediaFile");

    //let path = "../Utenti/\Utente/\Desktop/\Mirko/\ONDACO/\VIDEO CORPORATE/\Atelier 23.02.2016/\Photos";
    let path = "img/";

    if (preview !== null) {
        let image = document.getElementById("trick_medias_0_mediaFile").files[0].name;
        $('#upload-image')[0].src = path + image;
    } else {
        alert('Aucune image n\'a été chargée !');
    }

});

/**----------------------------------------------------
---------------------Video Preview---------------------
----------------------------------------------------**/

$('#preview').on('click', function () {

    let chain = document.getElementById('trick_videos_' + [0] + '_url');

    if (chain !== null) {

        //for (i = 0; i < 5; i++) { 

        let chain = document.getElementById('trick_videos_' + [0] + '_url').value;
        let finalYoutube = chain.replace("watch?v=", "embed/");
        let finalDailymotion = chain.replace("video", "embed/video");

        if (finalYoutube.includes('youtube')) {
            $('.preview-video')[0].src = finalYoutube;
        }
        else if (finalDailymotion.includes('dailymotion')) {
            $('.preview-video')[0].src = finalDailymotion;
        } else {
            alert('L\'URL n\'est pas valide. Veuillez insérer une URL Youtube ou Dailymotion');
        }
        // }
    } else {
        alert('Aucun lien n\'a été inséré !');
    }

});

function readUrl(inputFile) {
    console.log(inputFile);

    if (inputFile.files && inputFile.files[0]) {
        var reader = new FileReader();
        //console.log(reader);
        reader.onload = function (e) {
            $('#upload-image').attr('src', e.target.result);
        }
        reader.readAsDataURL(inputFile.files[0]);
    }
}
$('.custom-file-input').change(function () {
    readURL(this);
});

function handleDeleteButtons() {
    $('button[data-action="delete"]').click(function () {
        const target = this.dataset.target;
        $(target).remove();
        updateCounterImage();
        updateCounterVideo();
        displayCounter();
    })
}

function displayCounter() {
    const countImage = +$('.medias div.form-group').length;
    const counterImage = countImage + '/8';
    $('.counter-image').text(counterImage);
    if (countImage >= 8) {
        $('#add-image').hide();
    } else {
        $('#add-image').show();
    }
    const countVideo = +$('.videos div.form-group').length;
    const counterVideo = countVideo + '/8';
    $('.counter-video').text(counterVideo);
    if (countVideo >= 8) {
        $('#add-video').hide();
    } else {
        $('#add-video').show();
    }
}

function updateCounterImage() {
    const count = +$('.medias div.form-group').length;
    $('#image-counter').val(count);
}

function updateCounterVideo() {
    const count = +$('.videos div.form-group').length;
    $('#video-counter').val(count);
}

displayCounter();
updateCounterVideo();
updateCounterImage();
handleDeleteButtons();
