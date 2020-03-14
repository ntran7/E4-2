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
    <main class="flex">
        <section id="menu">
            <?php
                include('../include/menu2.php');
            ?>
        </section>
        <!--FIN HEADER-->

        <!--CONTENT-->
        <section id="produit">
            <img src="../images/Produit/peintures_etrier_de_freins.jpg" width="400" alt="Produit"><br>
            Peinture étrier de freins couleur jaune 400 ml<br>
            Référence : MTP74879<br>
            13.80 € TTC<br>
            Quantité : <button> + </button> 0 <button> - </button><br>
            Peinture spéciale étrier de freins, brillant.
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
