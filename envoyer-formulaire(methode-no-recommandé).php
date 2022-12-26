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
    $conn =mysqli_connect($servername, $username, $password, $dbname);
    $sql = "insert into info (`nom`, `prenom`, `telephone`, `mail`, `date`, `mdp`) VALUES ('$nom','$prenom', '$telephone', '$mail', '$date', '$mdp')";
    $req = mysqli_query($conn, $sql);
}
catch (Exception $e){
    echo "erreur ", $e->getMessage();
}
?>