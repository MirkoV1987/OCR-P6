/*-----------------Mirko Venturi----------------------
---------------------15.03.2020-----------------------
----------------------------------------------------*/

/**----------------------------------------------------
---------------------Image Add-------------------------
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
    displayCounter();
});

/**----------------------------------------------------
---------------------Image Delete----------------------
----------------------------------------------------**/

$('#remove-image').on('click', function (e) {
    let i; 
    for (i=0; i <= 8; i++) {  
        document.getElementsByClassName('custom-file-input');
        $('#trick_medias_' + [i]).remove();
    }
});

/**----------------------------------------------------
---------------------Image Preview---------------------
----------------------------------------------------**/

function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#upload-image').attr('src', e.target.result);
      }   
      reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
  }
  $("#trick_file").change(function() {
    readURL(this);
});

/**----------------------------------------------------
-----------------------Video Add-----------------------
----------------------------------------------------**/

$('#add-video').on('click', function () {
    const index = +$('#video-counter').val();
    const tmpl = $('.videos').data('prototype').replace(/__name__/g, index);
    $('#trick_videos').append(tmpl);
    $('#video-counter').val(index + 1);
    displayCounter();
});

/**----------------------------------------------------
---------------------Video Delete----------------------
----------------------------------------------------**/

$('#remove-video').on('click', function (e) {
    let i; 
    for (i=0; i <= 8; i++) { 
        document.getElementsByClassName('custom-file-input');
        $('#trick_videos_' + [i]).remove();
    }
});

/**----------------------------------------------------
---------------------Video Preview---------------------
----------------------------------------------------**/

$('#preview').on('click', function () {
    let video = document.getElementById('trick_videos_' + [0] + '_url').value;
    const yChain = 'watch?v=';
    const dChain = 'video';
    let finalYoutube = video.replace(yChain, 'embed/');
    let finalDailymotion = video.replace(dChain, "embed/video");
        if (finalYoutube.includes('youtube') || finalYoutube.includes('youtu.be')) {
            $('.preview-video')[0].src = finalYoutube;
            //console.log(finalYoutube);
        }
        else if (finalDailymotion.includes('dailymotion')) {
            $('.preview-video')[0].src = finalDailymotion;
            //console.log(finalDailymotion);
        } else {
            alert('L\'URL n\'est pas valide. Veuillez insérer une URL Youtube ou Dailymotion');
        }
});

/**----------------------------------------------------
---------------Image and Video Counters----------------
----------------------------------------------------**/

function displayCounter() {
    const countImage = +$('.medias div.form-group').length;
    const counterImage = countImage + '/8';
    $('.counter-image').text(counterImage);
    if (countImage >= 8) {
        document.getElementById('add-image').disabled=true;
        alert('vous pouvez charger jusqu\'à 4 images');
    } else {
        $('#add-image').show();
    }
    const countVideo = +$('.videos div.form-group').length;
    const counterVideo = countVideo + '/8';
    $('.counter-video').text(counterVideo);
    if (countVideo >= 8) {
        document.getElementById('add-video').disabled=true;
        alert('vous pouvez charger jusqu\'à 4 vidéos');
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
