(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["media"],{

/***/ "./assets/js/media.js":
/*!****************************!*\
  !*** ./assets/js/media.js ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports) {

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

/***/ })

},[["./assets/js/media.js","runtime"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvbWVkaWEuanMiXSwibmFtZXMiOlsiJCIsIm9uIiwiZSIsInByZXZlbnREZWZhdWx0IiwicmVtb3ZlQ2xhc3MiLCJhZGRDbGFzcyJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7O0FBQUE7OztBQUlBQSxDQUFDLENBQUMsWUFBWTtBQUNWQSxHQUFDLENBQUMsWUFBRCxDQUFELENBQWdCQyxFQUFoQixDQUFtQixPQUFuQixFQUE0QixVQUFVQyxDQUFWLEVBQWE7QUFDckNBLEtBQUMsQ0FBQ0MsY0FBRjtBQUNBSCxLQUFDLENBQUMsZ0JBQUQsQ0FBRCxDQUFvQkksV0FBcEIsQ0FBZ0MsUUFBaEM7QUFDQUosS0FBQyxDQUFDLFlBQUQsQ0FBRCxDQUFnQkssUUFBaEIsQ0FBeUIsUUFBekI7QUFDQUwsS0FBQyxDQUFDLFlBQUQsQ0FBRCxDQUFnQkksV0FBaEIsQ0FBNEIsUUFBNUI7QUFDSCxHQUxEO0FBTUFKLEdBQUMsQ0FBQyxZQUFELENBQUQsQ0FBZ0JDLEVBQWhCLENBQW1CLE9BQW5CLEVBQTRCLFVBQVVDLENBQVYsRUFBYTtBQUNyQ0EsS0FBQyxDQUFDQyxjQUFGO0FBQ0FILEtBQUMsQ0FBQyxnQkFBRCxDQUFELENBQW9CSyxRQUFwQixDQUE2QixRQUE3QjtBQUNBTCxLQUFDLENBQUMsWUFBRCxDQUFELENBQWdCSSxXQUFoQixDQUE0QixRQUE1QjtBQUNBSixLQUFDLENBQUMsWUFBRCxDQUFELENBQWdCSyxRQUFoQixDQUF5QixRQUF6QjtBQUNILEdBTEQ7QUFPSCxDQWRBLENBQUQsQyIsImZpbGUiOiJtZWRpYS5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qKi0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cclxuLS0tLS0tLS0tLS0tLS1TaG93IE1lZGlhcyBvbiBzbWFsbCBzY3JlZW5zLS0tLS0tLS0tLS0tLVxyXG4tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tKiovXHJcblxyXG4kKGZ1bmN0aW9uICgpIHtcclxuICAgICQoXCIjbG9hZE1lZGlhXCIpLm9uKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XHJcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG4gICAgICAgICQoXCJkaXYubG9hZC1tZWRpYVwiKS5yZW1vdmVDbGFzcygnZC1ub25lJyk7XHJcbiAgICAgICAgJChcIiNsb2FkTWVkaWFcIikuYWRkQ2xhc3MoJ2Qtbm9uZScpO1xyXG4gICAgICAgICQoXCIjaGlkZU1lZGlhXCIpLnJlbW92ZUNsYXNzKCdkLW5vbmUnKTtcclxuICAgIH0pO1xyXG4gICAgJChcIiNoaWRlTWVkaWFcIikub24oJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcclxuICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICAgICAgJChcImRpdi5sb2FkLW1lZGlhXCIpLmFkZENsYXNzKCdkLW5vbmUnKTtcclxuICAgICAgICAkKFwiI2xvYWRNZWRpYVwiKS5yZW1vdmVDbGFzcygnZC1ub25lJyk7XHJcbiAgICAgICAgJChcIiNoaWRlTWVkaWFcIikuYWRkQ2xhc3MoJ2Qtbm9uZScpO1xyXG4gICAgfSk7XHJcblxyXG59KTsiXSwic291cmNlUm9vdCI6IiJ9