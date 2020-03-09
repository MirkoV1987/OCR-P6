
/**********ADD TRICK JS***********
*********by Mirko Venturi*********
***********9-03-2020*************/

$(document).ready(function () {

    console.log('Bonjour !');

    $('.video').on('click', function () {

        var videoUrl = $(this).prev().val();
        var finalYoutube = videoUrl.replace("watch?v=", "embed/");
        var finalDailymotion = videoUrl.replace("video", "embed/video");

        if (finalYoutube.includes('youtube')) {
            $('.preview-video')[0].src = finalYoutube;
        }
        else if (finalDailymotion.includes('dailymotion')) {
            $('.preview-video')[0].src = finalDailymotion;
        } else {
            alert('L\'URL n\'est pas valide. Veuillez insérer une URL Youtube ou Dailymotion');
        }
        console.log(finalYoutube);
    })
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#uploaded-image').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#input-media").change(function () {
    readURL(this);
});

var template = $('#videos .video:first').clone();
var image = $(this).prev().val();

var sectionsCount = 1;

//add new section
$('body').on('click', '#add', function () {

    sectionsCount++;

    $('#uploaded-image')[0].src = image;

    //loop through each input
    template.clone().find(':input').each(function () {

        //set id to store the updated section number
        var newId = this.id + sectionsCount;

        //update for label
        $(this).prev().attr('input-group-text', newId);

        //update id
        this.id = newId;

    }).end()

        //inject new section
        .appendTo('#videos');
    return false;
});

//remove section
$('#videos').on('click', '#remove', function () {
    //fade out section
    $(this).parent().fadeOut(300, function () {
        //remove parent element (main section)
        $(this).parent().empty();
        return false;
    });
    return false;
});

var imagesBlock = $('#medias .media:first').clone();

var sCount = 1;

//add new section
$('body').on('click', '#addfile', function () {

    //increment
    sCount++;

    //loop through each input
    imagesBlock.clone().find(':input').each(function () {

        //set id to store the updated section number
        var newId = this.id + sCount;

        //update for label
        $(this).prev().attr('files', newId);

        //update id
        this.id = newId;

    }).end()

        //inject new section
        .appendTo('#medias');
    return false;
});

$('#medias').on('click', '#remove', function () {
    //fade out section
    $(this).parent().fadeOut(300, function () {
        //remove parent element (main section)
        $(this).parent().empty();
        return false;
    });
    return false;
});
