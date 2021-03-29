<?php
 
    $bdd=new PDO('mysql:host=localhost;dbname=tp_base','root','');
    //connexion à phpmyadmin
      
    $id=$_POST['personnes'];
    $prenom=$_POST['prenom'];

    $nom=$_POST['nom'];

    $genre=$_POST['genre'];

    $date=$_POST['bday'];

    $lieu=$_POST['lieu'];

    $email=$_POST['e-mail'];

    $niveau=$_POST['niveau'];

    $cv=$_POST['cv'];

    $message=$_POST['message'];
    

        $sql =$bdd->prepare( "UPDATE personnes set prenom='$prenom', nom='$nom', genre='$genre', date_de_naissance='$date', lieu_de_naissance='$lieu', email='$email', niveau='$niveau', cv='$cv', messages='$message'  WHERE id='$id' ");

    //exécution de la requéte
    $executeIsok= $sql->execute(); 

    if($executeIsok){
        $message='Mise à jour effectué';
    }
    else{
        $message='Echec de la mise à jour';
    }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modification: resultat</title>
</head>
<body>
    <h1>Resultat de la modification</h1>
    <p><?=$message ?></p>
</body>
</html>