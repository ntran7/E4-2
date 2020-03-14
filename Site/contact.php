<!DOCTYPE html>
<html lang="fr">

<?php
    include('../include/header.php');  
?>

<body>
    <!--HEADER-->
    <?php
        include('../include/menu.php');
    ?>
    <!--FIN HEADER-->

    <!--CONTENT-->
    <main>
        <section id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.2459049516556!2d2.764300115674208!3d48.85352107928698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e61cd13c1c6f0b%3A0x8df2bb5aeeef00dc!2s14+Avenue+de+l&#39;Europe%2C+77144+Mont%C3%A9vrain!5e0!3m2!1sfr!2sfr!4v1558026876066!5m2!1sfr!2sfr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
        <article>
            <section id="informations">
                <h1><a href="#"><img src="../images/Logo/gps_icone.svg" width="50" alt="GPS Icône "></a></h1>

                <p>14 avenue de l'Europe<br> 77144 Montévrain
            </section>
            <section>
                <h1><a href="#"><img src="../images/Logo/e-mail_icone.svg" width="50" alt="E-mail Icône "></a></h1>

                <a href="mailto:contact@maan.com">contact@laan.com</a>
            </section>
            <section id="tel">
                <h1><a href="#"><img src="../images/Logo/telephone_icone.svg" width="50" alt="Téléphone Icône "></a></h1>

                <a href="tel:+330664660191">01.81.80.77.10 </a>
            </section>
        </article>
        <section id="form">
            <h1>Envoyez-nous un message !</h1>

            <form action="#">
                <label for="site-search"></label>
                <input type="search" id="site-search" placeholder="Nom" name="#" aria-label="">
            </form>

            <form action="#">
                <label for="site-search"></label>
                <input type="search" id="site-search" placeholder="E-mail" name="#" aria-label="">
            </form>

            <form action="#">
                <label for="site-search"></label>
                <input type="search" id="site-search" placeholder="Message" name="#" aria-label="">
            </form>
            <button>Envoyer</button>
            <br>
            <br>
        </section>
        <!--FIN CONTENT-->
    </main>
    <!--FOOTER-->
    <?php
        include('../include/footer.php');
    ?>
    <!--FIN FOOTER-->

</body>

</html>
