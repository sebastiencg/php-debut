<?php
$servername = "localhost";
$username = "seb";
$password = "12345678";
$dbname = "user";
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$telephone = htmlspecialchars($_POST['telephone']);
$mail = htmlspecialchars($_POST['mail']);
$date = htmlspecialchars($_POST['date']);
$mdp = htmlspecialchars($_POST['mdp']);
//______________________________________


try {
    //On se connecte à la BDD
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $sql = "insert into info (`nom`, `prenom`, `telephone`, `mail`, `date`, `mdp`) VALUES ('$nom','$prenom', '$telephone', '$mail', '$date', '$mdp')";
    $lancer = $conn->query($sql);

}
catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>