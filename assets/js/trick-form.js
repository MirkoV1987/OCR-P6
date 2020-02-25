$(document).ready(function() {
    var description = $("#description");
    var maxlength = parseInt(description.attr("maxlength"), 10);
  
    description.on("keyup keypress change", function() {
      charCount = $(this).val().length;
      charRemain = maxlength - charCount;
      //$(this).prev().prev("span").text(charRemain + " Characters remaining");
      $(".char-remain").text(charRemain + " Characters remaining");
    });
  });