<?php
$title = "Connexion | Mon Portfolio";

echo $alert;
echo $message;
?>

<div class="container-fluid row">


    <form class="col-4 m-auto" action="index.php?controller=login&action=connectUser" method="POST">
        <div class="form-group mt-2">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">

        </div>
        <div class="form-group mt-2">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary mt-2 ">Submit</button>
    </form>

    <a class="text-center" href="index.php?controller=login&action=add">Créer un nouveau compte</a>
</div>