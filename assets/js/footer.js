let socials = document.querySelectorAll(".socials_footer")

/**
 * Appel de la fonction onload() qui vient charger les écouteurs d'évenements
 */
window.onload = onload();

function onload() {

    /**
     * Boucle qui attribue une redirection vers le lien adéquat en cliquant sur les logos de réseaux sociaux
     */
    socials.forEach(social => {
        social.style.cursor = "pointer"
        social.addEventListener("click", () => {
            switch (social.id) {
                case 'tiktok_logo':
                    window.location = "../index.php#tiktok_anchor"
                    break;
                case 'facebook_logo':
                    window.location = "../index.php#facebook_anchor"
                    break;
                case 'instagram_logo':
                    window.location = "../index.php#instagram_anchor"
                    break;
                default:
                    break;
            }
        })
    });
}