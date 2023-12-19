<?php
$title = "Ajouter une création | Mon Portfolio"
?>

<form enctype="multipart/form-data" action="index.php?controller=creation&action=addBdd" method="POST" class="m-5">

  <!-- Possibilité de mettre un # en action mais il faut conditionner dans la méthode :
if (isset($_POST['submit']) si on a validé le formulaire){ 
  alors on peut faire le traitement
} 
-->

  <?= $message ?>

  <div class="mb-3">
    <label for="title" class="form-label">Titre</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" name="description" rows="3"></textarea>
  </div>
  <div class="mb-3">
    <label for="date" class="form-label">Date</label>
    <input type="datetime-local" class="form-control" name="date">
  </div>
  <div class="input-group mb-3">
    <input type="file" class="form-control" name="picture">

  </div>
  <div class="input-group mb-3">
    <input type="file" class="form-control" name="picture">

  </div>

  <button class="btn btn-primary" type="submit">Valider</button>









</form>