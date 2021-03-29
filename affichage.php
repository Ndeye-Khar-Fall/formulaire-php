<?php
include('dbconnexion.php');
$bdd = db_connect(); //connexion à la base de donnée
  

   if(isset($_POST['delete']))
   {
       //var_dump($_POST['delete']);
        $id= $_POST['delete'];
        $req= $bdd->prepare('DELETE from personnes WHERE id=?');
        $req->execute([$id]);
        ?>
            <div class="alert alert-info">
                Suppression effectuée avec succés
            </div>

       <?php
   }

   if(isset($_POST['show']))
   {
       $id= $_POST['show'];

        ?>
       
           
      <?php
   }

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">         

<table class="table table-bordered" >
<thead>
<tr>
    <th>Identifiant</th>
<th>prenom</th>
<th>nom</th>
<th>genre</th>
<th>date_de_naissance</th>
<th>lieu_de_naissance</th>
<th>e-mail</th>
<th>niveau</th>
<th>cv</th>
<th>message</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
  $req2=$bdd ->prepare("SELECT * FROM personnes");

  $req2->execute();
while($requte= $req2->fetch(Pdo::FETCH_OBJ)) {?> 
<tr>
<td><?= $requte->id ?></td>
<td><?= $requte->prenom ?></td>
<td><?= $requte->nom ?></td>
<td><?= $requte->genre ?></td>
<td><?= $requte->date_de_naissance ?></td>
<td><?= $requte->lieu_de_naissance ?></td>
<td><?= $requte->email ?></td>
<td><?= $requte->niveau ?></td>
<td><?= $requte->cv ?></td>
<td><?= $requte->messages ?></td>

<td>
    <form method="POST" action="affichage.php" enctype="multipart/form-data" >
        <button name="delete" type="submit" value="<?= $requte->id ?>" class="btn btn-danger">Supprimer</button> |
    </form> 
    <button> 
        <a class="btn btn-primary stretched-link" name="show " href="modifier.php?id=<?= $requte->id ?>">
            modifier
        </a>
    </button> 

</td>
</tr>
<?php } ?>
</tbody>
</table> 