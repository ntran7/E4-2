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

        <section id="produit">
            <img src="../images/Produit/peintures_feux-arrieres.jpg" width="400" alt="Produit"><br>
            Peinture feux-arrières couleur noir 150 ml<br>
            Référence : MTP74880<br>
            7.80 € TTC<br>
            Quantité : <button> + </button> 0 <button> - </button><br>
            Peinture transparente pour accentuer la visibilité des feux arrières.<br>
            D’une brillance durable la peinture résiste aux rayures, aux chocs et aux coups.<br>
            La peinture résiste également à l’essence, aux produits chimiques et aux conditions atmosphériques.<br>
            La peinture pour feux-arrières MoTip Backlight est disponible en quatre couleurs.
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
