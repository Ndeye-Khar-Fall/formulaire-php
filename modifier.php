<?php
 
    $bdd=new PDO('mysql:host=localhost;dbname=tp_base','root','');
    //connexion à phpmyadmin
    $id=$_GET['id'];
    $req= $bdd->prepare('SELECT * from personnes WHERE id=?');

    $req->execute([$id]);

    $resultat=$req->fetch();

    //var_dump($resultat);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Modification</title>
    <link rel="stylesheet" href="forme.css">
</head>
<body>
     <form action="modification.php" method="post">
        <input type="hidden" name="personnes" value="<?=$resultat['id'] ?>">

     <fieldset id="f">
        <legend align="center"> <h1 id="h1" >Modification</h1> </legend>
       
        <p>
             <label for="prenom">Entrez votre prénom:</label>
             <input type="text" name="prenom" value="<?= $resultat['prenom'] ?>" id="prenom" / >
         </p>
         <p>
             <label for="nom">Entrez votre nom:</label>
             <input type="text" name="nom" value="<?= $resultat['nom'] ?>" id="nom"  />
         </p>
         <p>Genre:
           <input type="radio" id="Féminin" name="genre" value="<?= ($resultat['genre'] == "Féminin") ? "" : "" ?>"> 
           <label for="Féminin">Fminin</label> 
            
             <input type="radio" id="Masculin" name="genre" value="<?= ($resultat['genre']  == "Masculin") ? "" : "" ?>"  >
             <label for="Masculin">Masculin</label>
             <input type="radio" value="" name="genre" >
             <label for="Féminin">Fminin</label>
             <input type="radio" value="" name="genre" >
             <label for="Féminin">nasculin</label>

         </p>
         <p>
         <label for="bday">Date de naissance:
           <input type="date" value="<?= $resultat['date_de_naissance'] ?>" name="bday" >
           <span class="validity"></span>
         </label>
         <label for="lieu">lieu de naissance:</label>
         <input type="text" name="lieu" value="<?= $resultat['lieu_de_naissance'] ?>" id="lieu"  />
         </p>
         <p>
             <label for="e-mail">Entrez votre E-mail:</label>
             <input type="e-mail" name="e-mail" value="<?= $resultat['email'] ?>" id="e-mail"/>
         </p>
       <p> <label for="option-select">Niveau d'étude:</label>

        <select name="niveau" id="option-select">
             <option  value=""> <?= ($resultat['niveau'] != "") ? $resultat['niveau'] : "choisir une option" ?></option>
             <option value="licence1">licence1</option>
             <option value="licence2">licence2</option>
             <option value="licence3">lience3</option>
             <option value="Master1">Master1</option>
             <option value="Master2">Master2</option>
        </select>
        </p>

           <p  action="upload.php" method="post" enctype="multipart/form-data"> 
           
           <input type="file" name="cv" id="cv" value=""> <?= ($resultat['cv'] != "") ? $resultat['cv'] : "choisir une option" ?> 

            </p>
         <p>
        <textarea name="message" id="message" cols="50" rows="10"  value=""> <?= ($resultat['messages'] != "") ? $resultat['messages'] : "message" ?> </textarea>
        </p>

         <p>
             <input type="submit" value="Envoyez"/>
         </p>

         </fieldset>
    </form>
</body>
</html>