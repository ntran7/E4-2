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
            <img src="../images/Produit/peintures_moteurs.jpg" width="400" alt="Produit"><br>
            Peinture moteurs couleur rouge 400 ml<br>
            Référence : MTP74883<br>
            16.80 € TTC<br>
            Quantité : <button> + </button> 0 <button> - </button><br>
            Peinture pour le traitement des blocs moteurs.<br>
            D’une bonne élasticité, la peinture est résistante aux rayures, aux chocs et aux coups, à l’essence, aux produits chimiques, aux conditions atmosphériques et aux variations de température.<br>
            La peinture a une brillance durable, est anticorrosion et anti-crasse.<br>
            La peinture pour blocs moteurs MoTip Engine Paint est disponible en cinq couleurs.
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
