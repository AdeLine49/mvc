<?php
$title = "Modifier ".$select['title']." | Mon Portfolio"
?>

<form enctype="multipart/form-data" action="index.php?controller=creation&action=modifyBdd&id=<?php echo $select['id_creation']?>" method="POST" class="m-5">

<h2>Création n°<?php echo $select['id_creation']?></h2>
<div class="mb-3">
<label for="title" class="form-label">Titre</label>
<input type="text" class="form-control" name="title" value="<?php echo $select['title']?>">
</div>
<div class="mb-3">
  <label for="description" class="form-label">Description</label>
  <textarea class="form-control" name="description" rows="3"><?php echo $select['description']?></textarea>
</div>

<button class="btn btn-primary" type="submit">Valider</button>

</form>