<?php
$title = $select['title']." | Mon Portfolio"
?>



<h2 class="text-center">Création n°<?=$select['id_creation']?></h2>
<div class="card mb-3 text-center m-auto">
  <div><img src="<?=$select['picture']?>" class="card-img-top w-50" alt="..."></div>
  <div class="card-body">
    <h5 class="card-title"><?=$select['title']?></h5>
    <p class="card-text"><?=$select['description']?></p>
    <p class="card-text"><small class="text-body-secondary"><?=$select['created_at']?></small></p>
  </div>
</div>