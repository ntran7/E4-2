<!DOCTYPE html>
<html lang="fr">
<?php
    include('../include/header.php');  
?>

<body>
    <?php
        include('../include/menu.php');
    ?>
    <!--FIN HEADER-->
    <main class="flex">
        <section id="menu">
            <?php
                include('../include/menu2.php');
            ?>
        </section>

        <!--CONTENT-->
        <section id="produit">
            <img src="../images/Produit/peintures_jantes.jpg" width="400" alt="Produit"><br>
            Peinture jantes couleur noir 500 ml<br>
            Référence : MTP74881<br>
            12.80 € TTC<br>
            Quantité : <button> + </button> 0 <button> - </button><br>
            Peinture acrylique de longue durée spécial jantes. Peinture acrylique à séchage rapide.<br>
            De brillance durable, pour le traitement de jantes et enjoliveurs, traités et non-traités, en acier et en alliage léger.<br>
            La peinture a un bon pouvoir couvrant, une excellente adhérence et une bonne dureté superficielle.<br>
            La peinture pour jantes résiste à l’essence, aux produits chimiques et conditions extérieures.<br>
            La peinture est inaltérable et résistante aux rayons-UV, à l’usure et aux rayures.<br>
            La peinture pour Jantes MoTip est disponible en 5 couleurs : blanc, argent, or, noir (brillant et mat) et acier, en aérosols de 500 ml.
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
