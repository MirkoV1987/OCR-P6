(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["app"],{

/***/ "./assets/css/app.css":
/*!****************************!*\
  !*** ./assets/css/app.css ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// assets/js/app.js
__webpack_require__(/*! ../css/app.css */ "./assets/css/app.css");

console.log('Hello Webpack Encore! Edit me in assets/js/app.js'); // On selectionne l'element textarea et l'élement p#counterBlock

var textarea = document.querySelector('#trick_description');
var blockCount = document.getElementById('counterBlock');
var blockCountText = document.createElement('p');
blockCountText.textContent = 'Caractères restants : ';

function count() {
  // la fonction count calcule la longueur de la chaîne de caractère contenue dans le textarea
  var count = 600 - textarea.value.length; // et affche cette valeur dans la balise p#counterBlock grâce à innerHTML

  blockCount.innerHTML = blockCountText.textContent + count; // si le count descend sous 0 on ajoute la class red à la balise p#counterBlock

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

/***/ })

},[["./assets/js/app.js","runtime"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvY3NzL2FwcC5jc3MiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2FwcC5qcyJdLCJuYW1lcyI6WyJyZXF1aXJlIiwiY29uc29sZSIsImxvZyIsInRleHRhcmVhIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiYmxvY2tDb3VudCIsImdldEVsZW1lbnRCeUlkIiwiY291bnQiLCJ2YWx1ZSIsImxlbmd0aCIsImlubmVySFRNTCIsImNsYXNzTGlzdCIsImFkZCIsInJlbW92ZSIsImFkZEV2ZW50TGlzdGVuZXIiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7OztBQUFBLHVDOzs7Ozs7Ozs7OztBQ0FBO0FBRUFBLG1CQUFPLENBQUMsNENBQUQsQ0FBUDs7QUFFQUMsT0FBTyxDQUFDQyxHQUFSLENBQVksbURBQVosRSxDQUVDOztBQUNBLElBQUlDLFFBQVEsR0FBR0MsUUFBUSxDQUFDQyxhQUFULENBQXVCLG9CQUF2QixDQUFmO0FBQ0EsSUFBSUMsVUFBVSxHQUFHRixRQUFRLENBQUNHLGNBQVQsQ0FBd0IsY0FBeEIsQ0FBakI7O0FBRUEsU0FBU0MsS0FBVCxHQUFpQjtBQUNiO0FBQ0EsTUFBSUEsS0FBSyxHQUFHLE1BQUlMLFFBQVEsQ0FBQ00sS0FBVCxDQUFlQyxNQUEvQixDQUZhLENBR2I7O0FBQ0FKLFlBQVUsQ0FBQ0ssU0FBWCxHQUFzQkgsS0FBdEIsQ0FKYSxDQU1qQjs7QUFDQSxNQUFHQSxLQUFLLEdBQUMsRUFBVCxFQUFhO0FBQ0xGLGNBQVUsQ0FBQ00sU0FBWCxDQUFxQkMsR0FBckIsQ0FBeUIsS0FBekI7QUFDUCxHQUZELE1BR0ssSUFBR0wsS0FBSyxJQUFFLEVBQVYsRUFBYztBQUNYRixjQUFVLENBQUNNLFNBQVgsQ0FBcUJFLE1BQXJCLENBQTRCLEtBQTVCO0FBQ1AsR0FGSSxNQUdEO0FBQUNiLFdBQU8sQ0FBQ0MsR0FBUixDQUFZLE9BQVo7QUFBcUI7QUFDekIsQyxDQUVEO0FBQ0E7OztBQUNBQyxRQUFRLENBQUNZLGdCQUFULENBQTBCLE9BQTFCLEVBQW1DUCxLQUFuQztBQUNBQSxLQUFLLEciLCJmaWxlIjoiYXBwLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luIiwiLy8gYXNzZXRzL2pzL2FwcC5qc1xyXG5cclxucmVxdWlyZSgnLi4vY3NzL2FwcC5jc3MnKTtcclxuXHJcbmNvbnNvbGUubG9nKCdIZWxsbyBXZWJwYWNrIEVuY29yZSEgRWRpdCBtZSBpbiBhc3NldHMvanMvYXBwLmpzJyk7XHJcblxyXG4gLy8gT24gc2VsZWN0aW9ubmUgbCdlbGVtZW50IHRleHRhcmVhIGV0IGwnw6lsZW1lbnQgcCNjb3VudGVyQmxvY2tcclxuIHZhciB0ZXh0YXJlYSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyN0cmlja19kZXNjcmlwdGlvbicpO1xyXG4gdmFyIGJsb2NrQ291bnQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY291bnRlckJsb2NrJyk7XHJcblxyXG4gZnVuY3Rpb24gY291bnQoKSB7XHJcbiAgICAgLy8gbGEgZm9uY3Rpb24gY291bnQgY2FsY3VsZSBsYSBsb25ndWV1ciBkZSBsYSBjaGHDrm5lIGRlIGNhcmFjdMOocmUgY29udGVudWUgZGFucyBsZSB0ZXh0YXJlYVxyXG4gICAgIHZhciBjb3VudCA9IDQwMC10ZXh0YXJlYS52YWx1ZS5sZW5ndGg7XHJcbiAgICAgLy8gZXQgYWZmY2hlIGNldHRlIHZhbGV1ciBkYW5zIGxhIGJhbGlzZSBwI2NvdW50ZXJCbG9jayBncsOiY2Ugw6AgaW5uZXJIVE1MXHJcbiAgICAgYmxvY2tDb3VudC5pbm5lckhUTUw9IGNvdW50O1xyXG4gICAgIFxyXG4gLy8gc2kgbGUgY291bnQgZGVzY2VuZCBzb3VzIDAgb24gYWpvdXRlIGxhIGNsYXNzIHJlZCDDoCBsYSBiYWxpc2UgcCNjb3VudGVyQmxvY2tcclxuIGlmKGNvdW50PDIwKSB7XHJcbiAgICAgICAgIGJsb2NrQ291bnQuY2xhc3NMaXN0LmFkZChcInJlZFwiKTtcclxuIH0gXHJcbiBlbHNlIGlmKGNvdW50Pj0yMCkge1xyXG4gICAgICAgICBibG9ja0NvdW50LmNsYXNzTGlzdC5yZW1vdmUoXCJyZWRcIik7XHJcbiB9XHJcbiBlbHNle2NvbnNvbGUubG9nKCdlcnJvcicpfVxyXG4gfVxyXG5cclxuIC8vIG9uIHBvc2UgdW4gw6ljb3V0ZXVyIGQnw6l2w6huZW1lbnQga2V5dXAgc3VyIGxlIHRleHRhcmVhLlxyXG4gLy8gT24gZMOpY2xlbmNoZSBsYSBmb25jdGlvbiBjb3VudCBxdWFuZCBsJ8OpdsOobmVtZW50IHNlIHByb2R1aXQgZXQgYXUgY2hhcmdlbWVudCBkZSBsYSBwYWdlXHJcbiB0ZXh0YXJlYS5hZGRFdmVudExpc3RlbmVyKCdrZXl1cCcsIGNvdW50KTtcclxuIGNvdW50KCk7XHJcbiAiXSwic291cmNlUm9vdCI6IiJ9