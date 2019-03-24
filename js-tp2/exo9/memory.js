
// le tableau qui contient le chemin
// du fichier image pour chaque image
var array = [];

// si clicked[i] == true alors array[i] est visible
var clicked = [];

// pour décider si un clic est
// un premier clic ou non
var first_click = true;

// l'indice de la première image cliquée
var first_index = 0;

// le nombre total de paires de clics
var clicks_number = 0;

// the nombre de paires de clics réussis
// (les paires de clics qui ont découvert
// des images identiques)
var good_clicks_number = 0;

// affecte à l'attribut src des deux images d'indice i et j
// le source de l'image "point d'interrogation"
function hide(i, j) {
    let images = document.getElementsByTagName("img");
    images[i].src = "images/question-mark.png";
    images[j].src = "images/question-mark.png";


}

// gère le clic sur l'image d'indice n
function click_image(n) {

    let images = document.getElementsByTagName("img");


    if (first_click) {


        images[n].src = array[n];
        first_click = false;
        first_index = n;


    }
    else {
        images[n].src = array[n];
        if ((images[n].name != images[first_index].name)) {

            setTimeout(function () { hide(n, first_index) }, 1000);

            first_click = true;
            clicks_number++;
        }
        if (images[n].name == images[first_index].name) {
            if (n != first_index) {
                first_click = true;
                clicks_number++;
                good_clicks_number++;
                if (good_clicks_number == 8) {
                    let result = document.getElementById("result");
                    result.style.visibility = "visible";
                    result.innerHTML = "Bravo, vous avez réussi en " + clicks_number + " cliques";
                }
            }
        }
    }




}

// rempli le tableau array avec la valeur de
// l'attribut 'name' des images
function init() {


    let images = document.getElementsByTagName("img");
    for (let i = 0; i < images.length; i++) {
        array[i] = images[i].name;
        clicked[i] = false;
    }


}

window.onload = init;
