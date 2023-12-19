<?php
$title = "Créations | Mon Portfolio";

?>

<h2>Liste de mes créations</h2>
<?=$message?>
<a href="index.php?controller=creation&action=add"><button type="button" class="btn btn-primary">Ajouter une création</button></a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Created_at</th>
            <th scope="col">Picture</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($list as $value) {

        ?>

            <tr>
                <td><?php echo $value->id_creation; ?></td>
                <td><?php echo $value->title; ?></td>
                <td><?php echo $value->description; ?></td>
                <td><?php echo $value->created_at; ?></td>
                <td class="col-2"><img src=<?php echo $value->picture; ?> class="img-fluid" alt="Responsive image" width="20%"></td>



                <td><a href="index.php?controller=creation&action=unit&id=<?php echo $value->id_creation; ?>"><i class="bi bi-eye-fill"></i></a></td>
                <td><a href="index.php?controller=creation&action=modify&id=<?php echo $value->id_creation; ?>"><i class="bi bi-pencil-fill"></i></a></td>
                <td><a href="index.php?controller=creation&action=deleteBdd&id=<?php echo $value->id_creation; ?>"><i class="bi bi-trash-fill"></i></a></td>

            </tr>


        <?php


        }
        ?>
    </tbody>
</table>