let logoHeader = document.querySelector("#logo_header")
let myHeader = document.querySelector("header")
let burgerClosedIcon = document.querySelector("#closed_burger_icon")
let myFooter = document.querySelector("footer")
let burgerMenue = document.querySelector("#burger_icon")
let burgerOpennedIcon = document.querySelector("#openned_burger_icon")
let myMain = document.querySelector("main")

window.onload = onload();

function onload() {

    burgerMenue.addEventListener("click", () => {
        burgerMenue.classList.toggle('opened');
        burgerMenue.setAttribute('aria-expanded', burgerMenue.classList.contains('opened'))
        console.warn(burgerMenue.classList[0])
        switch (burgerMenue.classList[2]) {
            case "undisplayed":
                console.warn("undisplayed")
                openingBurger()
                break;
            case "isFlexed":
                console.warn("isFlexed")
                closingBurger()
                break;
        }
    })

    let myMedia = window.matchMedia("(min-width: 1090px)")

    logoHeader.addEventListener("click", () => {
        window.location = "../index.php"
    })

    myMediaQuerry(myMedia)

    myMedia.addEventListener('change', () => {
        myMediaQuerry(myMedia)
    });
}

function myMediaQuerry(myMedia) {
    if (myMedia.matches) {
        // burgerOpennedIcon.classList.add('undisplayed')
        burgerMenue.classList.add('undisplayed')
        myFooter.classList.toggle('isFlexed')
        myMain.classList.toggle('asBlock')
    } else {
        burgerMenue.classList.remove('undisplayed')
    }
}

function openingBurger() {
    burgerMenue.classList.toggle('isFlexed')
    // burgerClosedIcon.classList.toggle('undisplayed')
    burgerOpennedIcon.classList.toggle('asBlock')
    burgerMenue.classList.toggle('easeOutAnimation')
    myFooter.classList.toggle('undisplayed')
    myMain.classList.toggle('undisplayed')
}
function closingBurger() {
    myFooter.classList.toggle('isFlexed')
    // burgerClosedIcon.classList.toggle('asBlock')
    burgerOpennedIcon.classList.toggle('undisplayed')
    burgerMenue.classList.toggle('easeOutAnimation')
    setTimeout(() => {
        burgerMenue.classList.toggle('undisplayed')
    }, 500);
    myMain.classList.toggle('asBlock')

}