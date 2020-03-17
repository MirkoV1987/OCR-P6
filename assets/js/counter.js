/**-----------------------------
 * ------textarea-counter------*/

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