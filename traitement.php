<?php
include('dbconnexion.php');
$bdd = db_connect(); //connexion à la base de donnée

if(isset($_POST['envoyer']))
{
    //isset: verifier l'existance d'une variable
    //empy : vérifier si le contenu d'une variable est vide
    if(!empty($_POST['prenom'])&&!empty($_POST['nom'])&&!empty($_POST['genre'])&&!empty($_POST['bday'])&&!empty($_POST['lieu'])&&!empty($_POST['email'])&&!empty($_POST['niveau'])&&!empty($_POST['cv'])&&!empty($_POST['messge'])) {
         
            //requete

            $req= $bdd->prepare('INSERT INTO personnes(prenom,nom,genre,date_de_naissance,lieu_de_naissance,email,niveau,cv,messages) VALUES ($prenom,$nom,$genre,$date_de_naissance,$lieu,$email,$niveau,$cv,$messages)');
            $req->execute([$_POST['prenom'],$_POST['nom'],$_POST['genre'],$_POST['bday'],$_POST['lieu'],$_POST['e-mail'],$_POST['niveau'],$_POST['cv'],$_POST['message']]);

        }else
        {
                echo'contenu vide';
        }
}
        $person= new person($_POST['prenom'],$_POST['nom'],$_POST['genre'],$_POST['bday'],$_POST['lieu'],$_POST['e-mail'],$_POST['niveau'],$_POST['cv'],$_POST['message']);
            //recuperation des informations .

            //recupération d'information
            if($person->getgenre()=="masculin")
            {
                echo 'Bonjour monsieur' . ' ' . $person->getnom() . ' ' . $person->getprenom();
            }else{
                echo 'Bonjour madame' . ' ' . $person->getnom() . ' ' . $person->getprenom();
            }
            //modification d'information
             echo 'nom réel'. $person->getnom() .'<br>';
             echo 'nom modifier'. $person->setnom('totoy');

            
