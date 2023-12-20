let socials = document.querySelectorAll(".socials_footer")

// boucle qui attribue une redirection vers le lien adéquat en cliquant sur les logos de réseaux sociaux

socials.forEach(social => {
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