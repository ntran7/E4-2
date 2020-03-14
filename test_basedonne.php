<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=LAAN;charset=utf8', 'root', 'root');
    
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

function chaine_date($date){
    $annee = $date[6] . $date[7] . $date[8] . $date[9];
    $mois = $date[3] . $date[4];
    $jour = $date[0] . $date[1]; 
    
    $new_date = $annee . '-'. $mois . '-' . $jour;
    return $new_date;
}

function chaine_tel($tel){
    $new_tel = '';
    for($i=0;$i<10;$i++){
        if($i%2==0 && $i != 0){
            $new_tel .= '.';
        }
        $new_tel .= $tel[$i]; 
    }
    return $new_tel;
}


    
// On ajoute une entrée dans la table jeux_video
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$date = $_GET['date'];
$mail = $_GET['mail'];
$mdp = $_GET['mdp'];
$adresse = $_GET['adresse'];
$tel = $_GET['tel'];

$date = chaine_date($date);
$tel = chaine_tel($tel);

echo $date . '<br>';
echo $tel;



$req = $bdd->prepare('INSERT INTO Client(Nom, Prenom, DateDeNaissance, Email, MDP, Adresse, Telephone) VALUES(:Nom, :Prenom, :DateDeNaissance, :Email, :MDP, :Adresse,:Telephone)');
$req->execute(array(
	'Nom' => $nom,
	'Prenom' => $prenom,
	'DateDeNaissance' => $date,
	'Email' => $mail,
	'MDP' => $mdp,
	'Adresse' => $adresse,
    'Telephone' => $telephone
	));

//echo 'Le jeu a bien été ajouté !';


$reponse = $bdd->query('SELECT * FROM Client');
    
    

while ($donnees = $reponse->fetch())
{
?>
<p>
    <strong>Nom</strong> :
    <?php echo $donnees['Nom']; ?><br />
    <strong>Prenom</strong> :
    <?php echo $donnees['Prenom']; ?><br>
    <strong>Date de naissance</strong> :
    <?php echo $donnees['DateDeNaissance']; ?><br>
    <strong>Email</strong> :
    <?php echo $donnees['Email']; ?><br>
    <strong>Mot de passe</strong> :
    <?php echo $donnees['MDP']; ?><br>
    <strong>Adresse</strong> :
    <?php echo $donnees['Adresse']; ?><br>
    <strong>Tel</strong> :
    <?php echo $donnees['Telephone']; ?><br>
    <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

    ?>
    <p>Bonjour
        <?php echo $nom; ?>
        <?php echo $prenom; ?> !<br>
        ton mail est
        <?php echo $mail; ?> !<br>
        ton mdp est
        <?php echo $mdp; ?> !<br>
        ta date de naissance est
        <?php echo $date; ?> !<br>
        ton adresse est
        <?php echo $adresse; ?> !<br>
        ton tel est
        <?php echo $tel; ?> !<br>

    </p>
    <!--change base de donnée-->
    <!--?php
$req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
$req->execute(array(
	'nom' => $nom,
	'possesseur' => $possesseur,
	'console' => $console,
	'prix' => $prix,
	'nbre_joueurs_max' => $nbre_joueurs_max,
	'commentaires' => $commentaires
	));

echo 'Le jeu a bien été ajouté !';
?-->
