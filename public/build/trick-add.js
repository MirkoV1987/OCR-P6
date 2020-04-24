(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["trick-add"],{

/***/ "./assets/js/trick-add.js":
/*!********************************!*\
  !*** ./assets/js/trick-add.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! core-js/modules/es.array.find */ "./node_modules/core-js/modules/es.array.find.js");

__webpack_require__(/*! core-js/modules/es.array.includes */ "./node_modules/core-js/modules/es.array.includes.js");

__webpack_require__(/*! core-js/modules/es.function.name */ "./node_modules/core-js/modules/es.function.name.js");

__webpack_require__(/*! core-js/modules/es.regexp.exec */ "./node_modules/core-js/modules/es.regexp.exec.js");

__webpack_require__(/*! core-js/modules/es.string.includes */ "./node_modules/core-js/modules/es.string.includes.js");

__webpack_require__(/*! core-js/modules/es.string.replace */ "./node_modules/core-js/modules/es.string.replace.js");

/*-----------------Mirko Venturi----------------------
---------------------15.03.2020-----------------------
----------------------------------------------------*/

/**---------------------------------------------------
-----------------Textarea Counter---------------------
----------------------------------------------------**/
var textarea = document.querySelector('#trick_description');
var blockCount = document.getElementById('counterBlock');

function count() {
  // la fonction count calcule la longueur de la chaîne de caractère contenue dans le textarea
  var count = 500 - textarea.value.length; // et affche cette valeur dans la balise p#counterBlock grâce à innerHTML

  blockCount.innerHTML = count; // si le count descend sous 0 on ajoute la class red à la balise p#counterBlock

  if (count < 20) {
    blockCount.classList.add("red");
  } else if (count >= 20) {
    blockCount.classList.remove("red");
  } else {
    console.log('error');
  }
} // on pose un écouteur d'évènement keyup sur le textarea.
// On déclenche la fonction count quand l'évènement se produit et au chargement de la page


textarea.addEventListener('keyup', count);
count();
/**----------------------------------------------------
---------------------Image Add-------------------------
----------------------------------------------------**/

$('#add-image').on('click', function (e) {
  var index = +$('#image-counter').val();
  var tmpl = $('.medias').data('prototype').replace(/__name__/g, index);
  $('.medias').append(tmpl);
  $('#image-counter').val(index + 1);
  $('.custom-file-input').on('change', function (event) {
    var inputFile = event.currentTarget;
    $(inputFile).parent().find('.custom-file-label').html(inputFile.files[0].name);
  });
  displayCounter();
});
/**----------------------------------------------------
---------------------Image Delete----------------------
----------------------------------------------------**/

$('#remove-image').on('click', function (e) {
  var i;

  for (i = 0; i <= 8; i++) {
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

    reader.onload = function (e) {
      $('#upload-image').attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#trick_file").change(function () {
  readURL(this);
});
/**----------------------------------------------------
-----------------------Video Add-----------------------
----------------------------------------------------**/

$('#add-video').on('click', function () {
  var index = +$('#video-counter').val();
  var tmpl = $('.videos').data('prototype').replace(/__name__/g, index);
  $('#trick_videos').append(tmpl);
  $('#video-counter').val(index + 1);
  displayCounter();
});
/**----------------------------------------------------
---------------------Video Delete----------------------
----------------------------------------------------**/

$('#remove-video').on('click', function (e) {
  var i;

  for (i = 0; i <= 8; i++) {
    document.getElementsByClassName('custom-file-input');
    $('#trick_videos_' + [i]).remove();
  }
});
/**----------------------------------------------------
-------------Trick Add - Video Preview-----------------
----------------------------------------------------**/

$('#preview').on('click', function () {
  var video = document.getElementById('trick_videos_' + [0] + '_url').value;
  var yChain = 'watch?v=';
  var dChain = 'video';
  var finalYoutube = video.replace(yChain, 'embed/');
  var finalDailymotion = video.replace(dChain, "embed/video");

  if (finalYoutube.includes('youtube') || finalYoutube.includes('youtu.be')) {
    $('.preview-video')[0].src = finalYoutube; //console.log(finalYoutube);
  } else if (finalDailymotion.includes('dailymotion')) {
    $('.preview-video')[0].src = finalDailymotion; //console.log(finalDailymotion);
  } else {
    alert('L\'URL n\'est pas valide. Veuillez insérer une URL Youtube ou Dailymotion');
  }
});
/**----------------------------------------------------
---------------Image and Video Counters----------------
----------------------------------------------------**/

function displayCounter() {
  var countImage = +$('.medias div.form-group').length;
  var counterImage = countImage + '/8';
  $('.counter-image').text(counterImage);

  if (countImage >= 8) {
    document.getElementById('add-image').disabled = true;
    alert('vous pouvez charger jusqu\'à 4 images');
  } else {
    $('#add-image').show();
  }

  var countVideo = +$('.videos div.form-group').length;
  var counterVideo = countVideo + '/8';
  $('.counter-video').text(counterVideo);

  if (countVideo >= 8) {
    document.getElementById('add-video').disabled = true;
    alert('vous pouvez charger jusqu\'à 4 vidéos');
  } else {
    $('#add-video').show();
  }
}

function updateCounterImage() {
  var count = +$('.medias div.form-group').length;
  $('#image-counter').val(count);
}

function updateCounterVideo() {
  var count = +$('.videos div.form-group').length;
  $('#video-counter').val(count);
}

displayCounter();
updateCounterVideo();
updateCounterImage();

/***/ })

},[["./assets/js/trick-add.js","runtime","vendors~main~trick-add","vendors~trick-add"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvdHJpY2stYWRkLmpzIl0sIm5hbWVzIjpbInRleHRhcmVhIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiYmxvY2tDb3VudCIsImdldEVsZW1lbnRCeUlkIiwiY291bnQiLCJ2YWx1ZSIsImxlbmd0aCIsImlubmVySFRNTCIsImNsYXNzTGlzdCIsImFkZCIsInJlbW92ZSIsImNvbnNvbGUiLCJsb2ciLCJhZGRFdmVudExpc3RlbmVyIiwiJCIsIm9uIiwiZSIsImluZGV4IiwidmFsIiwidG1wbCIsImRhdGEiLCJyZXBsYWNlIiwiYXBwZW5kIiwiZXZlbnQiLCJpbnB1dEZpbGUiLCJjdXJyZW50VGFyZ2V0IiwicGFyZW50IiwiZmluZCIsImh0bWwiLCJmaWxlcyIsIm5hbWUiLCJkaXNwbGF5Q291bnRlciIsImkiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwicmVhZFVSTCIsImlucHV0IiwicmVhZGVyIiwiRmlsZVJlYWRlciIsIm9ubG9hZCIsImF0dHIiLCJ0YXJnZXQiLCJyZXN1bHQiLCJyZWFkQXNEYXRhVVJMIiwiY2hhbmdlIiwidmlkZW8iLCJ5Q2hhaW4iLCJkQ2hhaW4iLCJmaW5hbFlvdXR1YmUiLCJmaW5hbERhaWx5bW90aW9uIiwiaW5jbHVkZXMiLCJzcmMiLCJhbGVydCIsImNvdW50SW1hZ2UiLCJjb3VudGVySW1hZ2UiLCJ0ZXh0IiwiZGlzYWJsZWQiLCJzaG93IiwiY291bnRWaWRlbyIsImNvdW50ZXJWaWRlbyIsInVwZGF0ZUNvdW50ZXJJbWFnZSIsInVwZGF0ZUNvdW50ZXJWaWRlbyJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7Ozs7QUFJQTs7O0FBSUEsSUFBSUEsUUFBUSxHQUFHQyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsb0JBQXZCLENBQWY7QUFDQSxJQUFJQyxVQUFVLEdBQUdGLFFBQVEsQ0FBQ0csY0FBVCxDQUF3QixjQUF4QixDQUFqQjs7QUFFQSxTQUFTQyxL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TUMsVUFBVSxHQUFHLENBQUMzQyxDQUFDLENBQUMsd0JBQUQsQ0FBRCxDQUE0QlIsTUFBaEQ7QUFDQSxNQUFNb0QsWUFBWSxHQUFHRCxVQUFVLEdBQUcsSUFBbEM7QUFDQTNDLEdBQUMsQ0FBQyxnQkFBRCxDQUFELENBQW9Cd0MsSUFBcEIsQ0FBeUJJLFlBQXpCOztBQUNBLE1BQUlELFVBQVUsSUFBSSxDQUFsQixFQUFxQjtBQUNqQnpELFlBQVEsQ0FBQ0csY0FBVCxDQUF3QixXQUF4QixFQUFxQ29ELFFBQXJDLEdBQThDLElBQTlDO0FBQ0FKLFNBQUssQ0FBQyx1Q0FBRCxDQUFMO0FBQ0gsR0FIRCxNQUdPO0FBQ0hyQyxLQUFDLENBQUMsWUFBRCxDQUFELENBQWdCMEMsSUFBaEI7QUFDSDtBQUNKOztBQUVELFNBQVNHLGtCQUFULEdBQThCO0FBQzFCLE1BQU12RCxLQUFLLEdBQUcsQ0FBQ1UsQ0FBQyxDQUFDLHdCQUFELENBQUQsQ0FBNEJSLE1BQTNDO0FBQ0FRLEdBQUMsQ0FBQyxnQkFBRCxDQUFELENBQW9CSSxHQUFwQixDQUF3QmQsS0FBeEI7QUFDSDs7QUFFRCxTQUFTd0Qsa0JBQVQsR0FBOEI7QUFDMUIsTUFBTXhELEtBQUssR0FBRyxDQUFDVSxDQUFDLENBQUMsd0JBQUQsQ0FBRCxDQUE0QlIsTUFBM0M7QUFDQVEsR0FBQyxDQUFDLGdCQUFELENBQUQsQ0FBb0JJLEdBQXBCLENBQXdCZCxLQUF4QjtBQUNIOztBQUVEMkIsY0FBYztBQUNkNkIsa0JBQWtCO0FBQ2xCRCxrQkFBa0IsRyIsImZpbGUiOiJ0cmljay1hZGQuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKi0tLS0tLS0tLS0tLS0tLS0tTWlya28gVmVudHVyaS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cclxuLS0tLS0tLS0tLS0tLS0tLS0tLS0tMTUuMDMuMjAyMC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXHJcbi0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0qL1xyXG5cclxuLyoqLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXHJcbi0tLS0tLS0tLS0tLS0tLS0tVGV4dGFyZWEgQ291bnRlci0tLS0tLS0tLS0tLS0tLS0tLS0tLVxyXG4tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tKiovXHJcblxyXG52YXIgdGV4dGFyZWEgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjdHJpY2tfZGVzY3JpcHRpb24nKTtcclxudmFyIGJsb2NrQ291bnQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY291bnRlckJsb2NrJyk7XHJcblxyXG5mdW5jdGlvbiBjb3VudCgpIHtcclxuICAgIC8vIGxhIGZvbmN0aW9uIGNvdW50IGNhbGN1bGUgbGEgbG9uZ3VldXIgZGUgbGEgY2hhw65uZSBkZSBjYXJhY3TDqHJlIGNvbnRlbnVlIGRhbnMgbGUgdGV4dGFyZWFcclxuICAgIHZhciBjb3VudCA9IDUwMC10ZXh0YXJlYS52YWx1ZS5sZW5ndGg7XHJcbiAgICAvLyBldCBhZmZjaGUgY2V0dGUgdmFsZXVyIGRhbnMgbGEgYmFsaXNlIHAjY291bnRlckJsb2NrIGdyw6JjZSDDoCBpbm5lckhUTUxcclxuICAgIGJsb2NrQ291bnQuaW5uZXJIVE1MPSBjb3VudDtcclxuICAgIFxyXG4vLyBzaSBsZSBjb3VudCBkZXNjZW5kIHNvdXMgMCBvbiBham91dGUgbGEgY2xhc3MgcmVkIMOgIGxhIGJhbGlzZSBwI2NvdW50ZXJCbG9ja1xyXG5pZihjb3VudDwyMCkge1xyXG4gICAgICAgIGJsb2NrQ291bnQuY2xhc3NMaXN0LmFkZChcInJlZFwiKTtcclxufSBcclxuZWxzZSBpZihjb3VudD49MjApIHtcclxuICAgICAgICBibG9ja0NvdW50LmNsYXNzTGlzdC5yZW1vdmUoXCJyZWRcIik7XHJcbn1cclxuZWxzZXtjb25zb2xlLmxvZygnZXJyb3InKX1cclxufVxyXG5cclxuLy8gb24gcG9zZSB1biDDqWNvdXRldXIgZCfDqXbDqG5lbWVudCBrZXl1cCBzdXIgbGUgdGV4dGFyZWEuXHJcbi8vIE9uIGTDqWNsZW5jaGUgbGEgZm9uY3Rpb24gY291bnQgcXVhbmQgbCfDqXbDqG5lbWVudCBzZSBwcm9kdWl0IGV0IGF1IGNoYXJnZW1lbnQgZGUgbGEgcGFnZVxyXG50ZXh0YXJlYS5hZGRFdmVudExpc3RlbmVyKCdrZXl1cCcsIGNvdW50KTtcclxuY291bnQoKTtcclxuXHJcbi8qKi0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cclxuLS0tLS0tLS0tLS0tLS0tLS0tLS0tSW1hZ2UgQWRkLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxyXG4tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tKiovXHJcblxyXG4kKCcjYWRkLWltYWdlJykub24oJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcclxuICAgIGNvbnN0IGluZGV4ID0gKyQoJyNpbWFnZS1jb3VudGVyJykudmFsKCk7XHJcbiAgICBjb25zdCB0bXBsID0gJCgnLm1lZGlhcycpLmRhdGEoJ3Byb3RvdHlwZScpLnJlcGxhY2UoL19fbmFtZV9fL2csIGluZGV4KTtcclxuICAgICQoJy5tZWRpYXMnKS5hcHBlbmQodG1wbCk7XHJcbiAgICAkKCcjaW1hZ2UtY291bnRlcicpLnZhbChpbmRleCArIDEpO1xyXG4gICAgJCgnLmN1c3RvbS1maWxlLWlucHV0Jykub24oJ2NoYW5nZScsIGZ1bmN0aW9uIChldmVudCkge1xyXG4gICAgICAgIHZhciBpbnB1dEZpbGUgPSBldmVudC5jdXJyZW50VGFyZ2V0O1xyXG4gICAgICAgICQoaW5wdXRGaWxlKS5wYXJlbnQoKVxyXG4gICAgICAgICAgICAuZmluZCgnLmN1c3RvbS1maWxlLWxhYmVsJylcclxuICAgICAgICAgICAgLmh0bWwoaW5wdXRGaWxlLmZpbGVzWzBdLm5hbWUpXHJcbiAgICB9KTtcclxuICAgIGRpc3BsYXlDb3VudGVyKCk7XHJcbn0pO1xyXG5cclxuLyoqLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxyXG4tLS0tLS0tLS0tLS0tLS0tLS0tLS1JbWFnZSBEZWxldGUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tXHJcbi0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0qKi9cclxuXHJcbiQoJyNyZW1vdmUtaW1hZ2UnKS5vbignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xyXG4gICAgbGV0IGk7IFxyXG4gICAgZm9yIChpPTA7IGkgPD0gODsgaSsrKSB7ICBcclxuICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCdjdXN0b20tZmlsZS1pbnB1dCcpO1xyXG4gICAgICAgICQoJyN0cmlja19tZWRpYXNfJyArIFtpXSkucmVtb3ZlKCk7XHJcbiAgICB9XHJcbn0pO1xyXG5cclxuLyoqLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxyXG4tLS0tLS0tLS0tLS0tLS0tLS0tLS1JbWFnZSBQcmV2aWV3LS0tLS0tLS0tLS0tLS0tLS0tLS0tXHJcbi0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0qKi9cclxuXHJcbmZ1bmN0aW9uIHJlYWRVUkwoaW5wdXQpIHtcclxuICAgIGlmIChpbnB1dC5maWxlcyAmJiBpbnB1dC5maWxlc1swXSkge1xyXG4gICAgICB2YXIgcmVhZGVyID0gbmV3IEZpbGVSZWFkZXIoKTtcclxuICAgICAgcmVhZGVyLm9ubG9hZCA9IGZ1bmN0aW9uKGUpIHtcclxuICAgICAgICAkKCcjdXBsb2FkLWltYWdlJykuYXR0cignc3JjJywgZS50YXJnZXQucmVzdWx0KTtcclxuICAgICAgfSAgIFxyXG4gICAgICByZWFkZXIucmVhZEFzRGF0YVVSTChpbnB1dC5maWxlc1swXSk7IC8vIGNvbnZlcnQgdG8gYmFzZTY0IHN0cmluZ1xyXG4gICAgfVxyXG4gIH1cclxuICAkKFwiI3RyaWNrX2ZpbGVcIikuY2hhbmdlKGZ1bmN0aW9uKCkge1xyXG4gICAgcmVhZFVSTCh0aGlzKTtcclxufSk7XHJcblxyXG4vKiotLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXHJcbi0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tVmlkZW8gQWRkLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cclxuLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSoqL1xyXG5cclxuJCgnI2FkZC12aWRlbycpLm9uKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcclxuICAgIGNvbnN0IGluZGV4ID0gKyQoJyN2aWRlby1jb3VudGVyJykudmFsKCk7XHJcbiAgICBjb25zdCB0bXBsID0gJCgnLnZpZGVvcycpLmRhdGEoJ3Byb3RvdHlwZScpLnJlcGxhY2UoL19fbmFtZV9fL2csIGluZGV4KTtcclxuICAgICQoJyN0cmlja192aWRlb3MnKS5hcHBlbmQodG1wbCk7XHJcbiAgICAkKCcjdmlkZW8tY291bnRlcicpLnZhbChpbmRleCArIDEpO1xyXG4gICAgZGlzcGxheUNvdW50ZXIoKTtcclxufSk7XHJcblxyXG4vKiotLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXHJcbi0tLS0tLS0tLS0tLS0tLS0tLS0tLVZpZGVvIERlbGV0ZS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cclxuLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLSoqL1xyXG5cclxuJCgnI3JlbW92ZS12aWRlbycpLm9uKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XHJcbiAgICBsZXQgaTsgXHJcbiAgICBmb3IgKGk9MDsgaSA8PSA4OyBpKyspIHsgXHJcbiAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSgnY3VzdG9tLWZpbGUtaW5wdXQnKTtcclxuICAgICAgICAkKCcjdHJpY2tfdmlkZW9zXycgKyBbaV0pLnJlbW92ZSgpO1xyXG4gICAgfVxyXG59KTtcclxuXHJcbi8qKi0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cclxuLS0tLS0tLS0tLS0tLVRyaWNrIEFkZCAtIFZpZGVvIFByZXZpZXctLS0tLS0tLS0tLS0tLS0tLVxyXG4tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tKiovXHJcblxyXG4kKCcjcHJldmlldycpLm9uKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcclxuICAgIGxldCB2aWRlbyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0cmlja192aWRlb3NfJyArIFswXSArICdfdXJsJykudmFsdWU7XHJcbiAgICBjb25zdCB5Q2hhaW4gPSAnd2F0Y2g/dj0nO1xyXG4gICAgY29uc3QgZENoYWluID0gJ3ZpZGVvJztcclxuICAgIGxldCBmaW5hbFlvdXR1YmUgPSB2aWRlby5yZXBsYWNlKHlDaGFpbiwgJ2VtYmVkLycpO1xyXG4gICAgbGV0IGZpbmFsRGFpbHltb3Rpb24gPSB2aWRlby5yZXBsYWNlKGRDaGFpbiwgXCJlbWJlZC92aWRlb1wiKTtcclxuICAgICAgICBpZiAoZmluYWxZb3V0dWJlLmluY2x1ZGVzKCd5b3V0dWJlJykgfHwgZmluYWxZb3V0dWJlLmluY2x1ZGVzKCd5b3V0dS5iZScpKSB7XHJcbiAgICAgICAgICAgICQoJy5wcmV2aWV3LXZpZGVvJylbMF0uc3JjID0gZmluYWxZb3V0dWJlO1xyXG4gICAgICAgICAgICAvL2NvbnNvbGUubG9nKGZpbmFsWW91dHViZSk7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIGVsc2UgaWYgKGZpbmFsRGFpbHltb3Rpb24uaW5jbHVkZXMoJ2RhaWx5bW90aW9uJykpIHtcclxuICAgICAgICAgICAgJCgnLnByZXZpZXctdmlkZW8nKVswXS5zcmMgPSBmaW5hbERhaWx5bW90aW9uO1xyXG4gICAgICAgICAgICAvL2NvbnNvbGUubG9nKGZpbmFsRGFpbHltb3Rpb24pO1xyXG4gICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgIGFsZXJ0KCdMXFwnVVJMIG5cXCdlc3QgcGFzIHZhbGlkZS4gVmV1aWxsZXogaW5zw6lyZXIgdW5lIFVSTCBZb3V0dWJlIG91IERhaWx5bW90aW9uJyk7XHJcbiAgICAgICAgfVxyXG59KTtcclxuXHJcbi8qKi0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cclxuLS0tLS0tLS0tLS0tLS0tSW1hZ2UgYW5kIFZpZGVvIENvdW50ZXJzLS0tLS0tLS0tLS0tLS0tLVxyXG4tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tKiovXHJcblxyXG5mdW5jdGlvbiBkaXNwbGF5Q291bnRlcigpIHtcclxuICAgIGNvbnN0IGNvdW50SW1hZ2UgPSArJCgnLm1lZGlhcyBkaXYuZm9ybS1ncm91cCcpLmxlbmd0aDtcclxuICAgIGNvbnN0IGNvdW50ZXJJbWFnZSA9IGNvdW50SW1hZ2UgKyAnLzgnO1xyXG4gICAgJCgnLmNvdW50ZXItaW1hZ2UnKS50ZXh0KGNvdW50ZXJJbWFnZSk7XHJcbiAgICBpZiAoY291bnRJbWFnZSA+PSA4KSB7XHJcbiAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2FkZC1pbWFnZScpLmRpc2FibGVkPXRydWU7XHJcbiAgICAgICAgYWxlcnQoJ3ZvdXMgcG91dmV6IGNoYXJnZXIganVzcXVcXCfDoCA0IGltYWdlcycpO1xyXG4gICAgfSBlbHNlIHtcclxuICAgICAgICAkKCcjYWRkLWltYWdlJykuc2hvdygpO1xyXG4gICAgfVxyXG4gICAgY29uc3QgY291bnRWaWRlbyA9ICskKCcudmlkZW9zIGRpdi5mb3JtLWdyb3VwJykubGVuZ3RoO1xyXG4gICAgY29uc3QgY291bnRlclZpZGVvID0gY291bnRWaWRlbyArICcvOCc7XHJcbiAgICAkKCcuY291bnRlci12aWRlbycpLnRleHQoY291bnRlclZpZGVvKTtcclxuICAgIGlmIChjb3VudFZpZGVvID49IDgpIHtcclxuICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnYWRkLXZpZGVvJykuZGlzYWJsZWQ9dHJ1ZTtcclxuICAgICAgICBhbGVydCgndm91cyBwb3V2ZXogY2hhcmdlciBqdXNxdVxcJ8OgIDQgdmlkw6lvcycpO1xyXG4gICAgfSBlbHNlIHtcclxuICAgICAgICAkKCcjYWRkLXZpZGVvJykuc2hvdygpO1xyXG4gICAgfVxyXG59XHJcblxyXG5mdW5jdGlvbiB1cGRhdGVDb3VudGVySW1hZ2UoKSB7XHJcbiAgICBjb25zdCBjb3VudCA9ICskKCcubWVkaWFzIGRpdi5mb3JtLWdyb3VwJykubGVuZ3RoO1xyXG4gICAgJCgnI2ltYWdlLWNvdW50ZXInKS52YWwoY291bnQpO1xyXG59XHJcblxyXG5mdW5jdGlvbiB1cGRhdGVDb3VudGVyVmlkZW8oKSB7XHJcbiAgICBjb25zdCBjb3VudCA9ICskKCcudmlkZW9zIGRpdi5mb3JtLWdyb3VwJykubGVuZ3RoO1xyXG4gICAgJCgnI3ZpZGVvLWNvdW50ZXInKS52YWwoY291bnQpO1xyXG59XHJcblxyXG5kaXNwbGF5Q291bnRlcigpO1xyXG51cGRhdGVDb3VudGVyVmlkZW8oKTtcclxudXBkYXRlQ291bnRlckltYWdlKCk7XHJcbiJdLCJzb3VyY2VSb290IjoiIn0=