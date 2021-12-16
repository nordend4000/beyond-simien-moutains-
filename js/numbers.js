var intervalId1
var intervalId2
var intervalId3
var intervalId4
let compteurElt1 = document.getElementById("num1")
let compteurElt2 = document.getElementById("num2")
let compteurElt3 = document.getElementById("num3")
let compteurElt4 = document.getElementById("num4")

function compteur1() {
	// Conversion en nombre du texte du compteur
	var compteur11 = Number(compteurElt1.textContent)
	if (compteur11 <= 9) {
		compteurElt1.textContent = compteur11 + 1
	} else {
		// Annule l'exécution répétée
		clearInterval(intervalId1)
	}
}
function compteur2() {
	// Conversion en nombre du texte du compteur
	var compteur22 = Number(compteurElt2.textContent)
	if (compteur22 <= 1199) {
		compteurElt2.textContent = compteur22 + 1
	} else {
		// Annule l'exécution répétée
		clearInterval(intervalId2)
	}
}
function compteur3() {
	// Conversion en nombre du texte du compteur
	var compteur33 = Number(compteurElt3.textContent)
	if (compteur33 <= 4263) {
		compteurElt3.textContent = compteur33 + 1
	} else {
		// Annule l'exécution répétée
		clearInterval(intervalId3)
	}
}
function compteur4() {
	// Conversion en nombre du texte du compteur
	var compteur44 = Number(compteurElt4.textContent)
	if (compteur44 <= 4549) {
		compteurElt4.textContent = compteur44 + 1
	} else {
		// Annule l'exécution répétée
		clearInterval(intervalId4)
	}
}
function startNumbers() {
	var intervalId3 = setInterval(compteur3, 0.001)
	var intervalId4 = setInterval(compteur4, 0.001)
	var intervalId2 = setInterval(compteur2, 10)
	var intervalId1 = setInterval(compteur1, 1000)
}
