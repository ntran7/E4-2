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
            <img src="../images/Produit/vernis.jpg" width="400" alt="Produit"><br>
            Vernis brillant de finition Motip 500 ml<br>
            Référence : MTP74885<br>
            9.80 € TTC<br>
            Quantité : - 1 + <button>Ajouter</button><br>
            Vernis haute qualité de finition et de protection pour les peintures carrosserie. Résistant aux coups, rayures et chocs. Résistant aux intempéries et aux rayons UV. À utiliser sur les supports traités ou non traités. Ce vernis de haute qualité dispose d'un séchage rapide.
        </section>
        <!--FIN CONTENT-->
    </main>
    <!--FOOTER-->
    <?php
        include('../include/footer.php');
    ?>>
    <!--FIN FOOTER-->
</body>

</html>
