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
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //lancer l operation
        if(isset($_POST['envoyer'])){

            $sql = "INSERT INTO `info`(`nom`, `prenom`, `telephone`, `mail`, `date`, `mdp`) VALUES (:nom,:prenom,:telephone,:mail,:date,:mdp)";
            $stmt=$conn->prepare($sql);

            $stmt->bindParam(':nom',$nom);
            $stmt->bindParam(':prenom',$prenom);
            $stmt->bindParam(':nummero',$numero);
            $stmt->bindParam(':mail',$mail);
            $stmt->bindParam(':date',$date);
            $stmt->bindParam(':mdp',$mdp);

            $stmt->execute();

        }

    }
    catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
    ?>