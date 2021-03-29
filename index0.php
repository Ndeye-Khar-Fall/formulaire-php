<?php 
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="forme.css">
    <title>Formulaire PHP</title>
   </head>
<body>
    <a href="affichage.php">afficher</a>
     <form method ="post" action ="target.php" >
         
     <fieldset id="f">
        <legend align="center"> <h1 id="h1" > Formulaire d'inscription</h1> </legend>
       
        <p>
             <label for="prenom">Entrez votre prénom:</label>
             <input type="text" name="prenom" id="prenom"/>
         </p>
         <p>
             <label for="nom">Entrez votre nom:</label>
             <input type="text" name="nom" id="nom"/>
         </p>
         <p>Genre:
           <input type="radio" id="Féminin" name="genre" value="Féminin" > 
           <label for="Féminin">Fminin</label>
            
             <input type="radio" id="Masculin" name="genre" value="Masculin">
             <label for="Masculin">Masculin</label>
         </p>
         <p>
         <label for="bday">Date de naissance:
           <input type="date" name="bday" >
           <span class="validity"></span>
         </label>
         <label for="lieu">lieu de naissance:</label>
         <input type="text" name="lieu" id="lieu"/>
         </p>
         <p>
             <label for="e-mail">Entrez votre E-mail:</label>
             <input type="e-mail" name="e-mail" id="e-mail"/>
         </p>
       <p> <label for="option-select">Niveau d'étude:</label>

        <select name="niveau" id="option-select">
             <option value="">choisir une option</option>
             <option value="licence1">licence1</option>
             <option value="licence2">licence2</option>
             <option value="licence3">lience3</option>
             <option value="Master1">Master1</option>
             <option value="Master2">Master2</option>
        </select>
        </p>

          <p  action="upload.php" method="post" enctype="multipart/form-data">CV 
           
           <input type="file" name="cv" id="cv"> 

            </p>
         <p>
        <textarea name="message" id="message" cols="50" rows="10">message:
        </textarea>
        </p>

         <p>
             <input type="submit" value="Envoyez"/>
         </p>

         </fieldset>
    </form>

</body>
</html>