<?php
$dydis = $_POST['dydis'];
$proc = $_POST['diff']
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <title>Lentelė</title>
</head>

<body>
    <div class="container col-5">
        <h1 class="text-center">Sugeneruota lentelė</h1>
        <div>
    <table class="table table-striped-columns text-center mt-3">
        <?php for($z = 0; $z < $dydis + 1; $z++) { ?> 
            <td class='table-dark'><?=($z == 0)? "😎" : $z  ?></td>
      <?php  } 
        ?>
        <?php for ($i = 1; $i < $dydis + 1; $i++) { 
            ?>
            <tr><td class="table-dark"><?= $i?></td>
                <?php for ($y = 1; $y < $dydis + 1; $y++) { ?>
                    <td class="table-danger"><?= (rand(0, 100) < $proc) ? $y * $i : '' ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
    <div class="d-flex justify-content-center">
    <a class="btn btn-primary" href="forma.php">Atgal</a>
    </div>
    </div>
</body>

</html>