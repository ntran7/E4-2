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
            <img src="../images/Produit/peintures_pare-chocs.jpg" width="400" alt="Produit"><br>
            Peinture plastique noir 400 ml<br>
            Référence : MTP74884<br>
            11.40 € TTC<br>
            Quantité : <button> + </button> 0 <button> - </button><br>
            Spécialement étudié pour pare-chocs et spoiler en plastique. Il n'est pas nécessaire d'utiliser du primer d'accroche.
        </section>
        <!--FIN CONTENT-->
    </main>
    <!--FOOTER-->
    <?php
        include('../include/footer.php');
    ?>
</body>

</html>
