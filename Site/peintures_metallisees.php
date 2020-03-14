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
        <!--FIN HEADER-->

        <!--CONTENT-->
        <section id="produit">
            <img src="../images/Produit/peintures_metallisees.jpg" width="400" alt="Produit"><br>
            Peinture métallisée couleur verte 400 ml<br>
            Référence : MTP74882<br>
            12.80 € TTC<br>
            Quantité : <button> + </button> 0 <button> - </button><br>
            Peinture métallisée Motip. Pour des surfaces brillantes à l'aspect métallisé attrayant.<br>
            Peut être utilisée sur des surfaces de tout type, métal, bois, pierre, verre, céramique, papier, carton, ainsi que sur différents plastiques (avec primaire d'accrochage pour plastique).<br>
            Adaptée à la mise en peinture d'objets pour l'intérieur et l'extérieur.
        </section>
        <!--FIN CONTENT-->
    </main>

    <!--FOOTER-->
    <?php
        include('../include/footer.php');
    ?>
</body>

</html>
