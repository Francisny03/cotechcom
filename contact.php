<?php
include('include/header.php')
?>

<div class="slide_service_about_contact slide_contact space_top space_contact">
    <div class="slide_filter_service flex">
        <div class="slide_text_service space2">
            <h1>Contactez-<span class="text_color">nous</span></h1>
            <p>L'équipe de Cotechcom est à votre écoute pour répondre à
                toutes vos demandes.</p>
        </div>
    </div>
</div>

<div class="contact_card space2">
    <div class="contact_card_items flex">
        <div class="contact_left space_top space_bottom">
            <div class="write_text">
                <p>Laissez-nous un message</p>
            </div>
            <form id="contactForm">
                <div class="write_rect">
                    <input class="prenom" type="text" name="prenom" id="nom" placeholder="Nom & Prénom" required>
                </div>
                <div class="write_rect write_space">
                    <input class="mail" type="email" name="mail" id="mail" placeholder="Adresse mail" required>
                </div>
                <div class="write_rect">
                    <textarea class="texte" name="textarea" id="textarea" placeholder="Votre message ici..."
                        required></textarea>
                </div>
                <input type="submit" value="Envoyer">
            </form>
        </div>
        <div class="contact_right">
            <div class="contact_right_card flex">
                <div class="contact_right_card_items">
                    <div class="contacter flex">
                        <div class="circle_icone flex">
                            <img src="image/phones.svg" alt="">
                        </div>
                        <div class="contacter_number">
                            <p>+242 06 692 86 86</p>
                            <p>+242 04 072 96 96</p>
                        </div>
                    </div>
                    <div class="contacter flex">
                        <div class="circle_icone flex">
                            <img src="image/mail.svg" alt="">
                        </div>
                        <div class="contacter_number">
                            <p>contact@cotechcom.com</p>
                        </div>
                    </div>
                    <div class="contacter flex">
                        <div class="circle_icone flex">
                            <img src="image/placeholder.svg" alt="">
                        </div>
                        <div class="contacter_number">
                            <p>54, Avenue Félix Eboué,
                                Centre-Ville</p>
                        </div>
                    </div>
                    <div class="follow_icons flex contact_right_card_icons">
                        <a href="https://www.facebook.com/Cotechcom">
                            <div class="circle_icone facebook">
                                <img src="image/facebook.svg" alt="">
                            </div>
                        </a>
                        <a href="https://www.instagram.com/cotechcom/">
                            <div class="circle_icone insta">
                                <img src="image/insta.svg" alt="">
                            </div>
                        </a>
                        <a href="https://x.com/cotechcom">
                            <div class="circle_icone x">
                                <img src="image/X.svg" alt="">
                            </div>
                        </a>
                        <a href="https://www.linkedin.com/company/103672188/admin/page-posts/published/">
                            <div class="circle_icone linkedin">
                                <img src="image/link.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<?php
include('include/footer.php')
?>