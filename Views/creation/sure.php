<?php
$title = "Suppression | Mon Portfolio"
?>

<form action="index.php?controller=creation&action=validDelete&id=<?= $id ?>" method="POST">

    <h3>Voulez-vous vraiment supprimer cette création ?</h3>
    <input type="submit" value="oui">
</form>
<a href="index.php?controller=creation&action=index"><input type="button" value="non"></a>