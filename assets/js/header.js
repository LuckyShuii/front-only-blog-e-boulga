let logoHeader = document.querySelector("#logo_header")
let myHeader = document.querySelector("header")
let burgerClosedIcon = document.querySelector("#closed_burger_icon")
let myFooter = document.querySelector("footer")
let burgerMenue = document.querySelector("#burger_menue")
let burgerOpennedIcon = document.querySelector("#openned_burger_icon")
let myMain = document.querySelector("main")

/**
 * Appel de la fonction onload() qui vient charger les écouteurs d'évenements
 */
window.onload = onload();

/**
 * Fonction appelée au chargement de la page avec toutes les fonctionnalités et écouteurs d'évenements
 */
function onload() {

    /**
     * / Variable mediaquerry pour le menu burger
     */
    let myMedia = window.matchMedia("(min-width: 1090px)")

    logoHeader.addEventListener("click", () => {
        window.location = "../index.php"
    })

    logoHeader.style.cursor = "pointer"
    burgerClosedIcon.style.cursor = "pointer"
    burgerOpennedIcon.style.cursor = "pointer"

    burgerClosedIcon.addEventListener("click", () => {
        openingBurger()
    })

    burgerOpennedIcon.addEventListener("click", () => {
        closingBurger()
    })

    myMediaQuerry(myMedia)

    myMedia.addEventListener('change', () => {
        myMediaQuerry(myMedia)
    });
}

/**
 * Fonction qui permet de fermer le menu burger si il est ouvert et que la fenêtre s'agrandit 
 */
function myMediaQuerry(myMedia) {
    if (myMedia.matches) {
        burgerOpennedIcon.style.display = "none"
        burgerMenue.style.display = "none"
        myFooter.style.display = "flex"
        myMain.style.display = "block"
    } else {
        burgerClosedIcon.style.display = "flex"
    }
}

/**
 * Fonction qui se déclenche à l'ouverture du menu burger
 */
function openingBurger() {
    burgerMenue.style.display = "flex"
    burgerClosedIcon.style.display = "none"
    burgerOpennedIcon.style.display = "block"
    burgerMenue.style.animation = "slide-left .5s ease-in both"
    myFooter.style.display = "none"
    myHeader.style.borderRadius = "0"
    myMain.style.display = "none"
}

/**
 * Fonction qui se déclenche à la fermeture du menu burger
 */
function closingBurger() {
    myFooter.style.display = "flex"
    burgerClosedIcon.style.display = "block"
    burgerOpennedIcon.style.display = "none"
    burgerMenue.style.animation = "slide-right .5s ease-out both"
    setTimeout(() => {
        burgerMenue.style.display = "none"
    }, 500);
    myMain.style.display = "block"

}