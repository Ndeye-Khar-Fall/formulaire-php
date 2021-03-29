<?php
include('dbconnexion.php');

$conn=db_connect();

$prenom=$_POST['prenom'];

$nom=$_POST['nom'];

$genre=$_POST['genre'];

$date=$_POST['bday'];

$lieu=$_POST['lieu'];

$email=$_POST['e-mail'];

$niveau=$_POST['niveau'];

$cv=$_POST['cv'];

$message=$_POST['message'];

$sql =$conn->prepare( " INSERT INTO personnes(prenom,nom,genre,date_de_naissance,lieu_de_naissance,email,niveau,cv,messages) VALUES ('$prenom', '$nom', '$genre','$date', '$lieu', '$email', '$niveau', '$cv', '$message' ) ");

$sql->execute();

header('location: affichage.php');

?> 

