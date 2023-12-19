<?php
$title = "Créer mon compte | Mon Portfolio"
?>

<form enctype="multipart/form-data" action="index.php?controller=login&action=createUser" method="POST" class="m-5">



<?= $message ?>

<div class="mb-3">
<label for="username" class="form-label">Username</label>
<input type="text" class="form-control" name="username">
</div>
<div class="mb-3">
<label for="email" class="form-label">Email</label>
<input type="email" class="form-control" name="email">
</div>
<div class="mb-3">
<label for="password" class="form-label">Password</label>
<input type="password" class="form-control" name="password">
</div>


<button class="btn btn-primary" type="submit">Valider</button>