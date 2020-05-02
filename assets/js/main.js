/**----------------------------------------------------
---------------------Scroll buttons--------------------
----------------------------------------------------**/

$ (function () {
  $ ('#scrollToBottom').bind ('click', function () {
    $ ('html, body').animate ({scrollTop: $ (document).height ()}, 1200);
    return false;
  });
  $ ('#scrollToTop').bind ('click', function () {
    $ ('html, body').animate ({scrollTop: 0}, 1200);
    return false;
  });
});

/**----------------------------------------------------
--------------Display uploaded Filename----------------
----------------------------------------------------**/

$('.custom-file-input').on('change', function(event) {
  var inputFile = event.currentTarget;
  $(inputFile).parent()
      .find('.custom-file-label')
      .html(inputFile.files[0].name);
});
