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
            <?php
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=LAAN;charset=utf8', 'root', 'root');
        }
        catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }   
            $cate = $_GET['categorie'];
            $cate = intval($cate);
            
        if( $cate >= 1){
            $query = 'SELECT * FROM Produit WHERE id_produit='.$cate;
            $reponse = $bdd->query($query);
            $donnees = $reponse->fetch()
            ?>

            <img src="../images/Produit/peintures_standard.jpg" width="400" alt="Produit"><br>
            <?php echo $donnees['Nom']?><br>
            Référence :
            <?php echo $donnees['Ref']?><br>
            Prix :
            <?php echo $donnees['Prix']?> € TTC<br>
            Quantité : <button> + </button> 0 <button> - </button><br>
            <?php echo $donnees['Description']?><br>
            <?php $reponse->closeCursor(); 
        }else{
            $reponse = $bdd->query('SELECT * FROM Produit');
            while($donnees = $reponse->fetch())
            {
            ?>
            <img src="../images/Produit/peintures_standard.jpg" width="400" alt="Produit"><br>
            <?php echo $donnees['Nom']?><br>
            Référence :
            <?php echo $donnees['Ref']?><br>
            Prix :
            <?php echo $donnees['Prix']?> € TTC<br>
            Quantité : <button> + </button> 0 <button> - </button><br>
            <?php echo $donnees['Description']?><br>
            <?php
            }
        }
            $reponse->closeCursor(); 
        ?>
        </section>

    </main>
    <!--FIN CONTENT-->

    <!--FOOTER-->
    <?php
        include('../include/footer.php');
    ?>
</body>

</html>
