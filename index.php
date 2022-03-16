<?php
include 'lib/Jeu.class.php';
include 'lib/TrancheAge.class.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.css"/>
</head>
<body>
<div class="container">
    <h2 class="m-3">La Programmation Objet en Php </h2>
<form action="pageRecup.php" method = "POST">
    <div class="mb-3">
        <label for="tranche" class="form-label">Code de la tranche : </label>
        <input type="text" class="form-control" id="tranche" name="tranche" >
    </div>
    <div class="mb-3">
        <label for="agemin" class="form-label">Age Minimum : </label>
        <input type="number" value="0" min="0" max="99"
               class="form-control" id="agemin" name="agemin">
    </div>
    <div class="mb-3">
        <label for="agemax" class="form-label">Age Maximum : </label>
        <input type="number" value="99" min="00" max="99"
               class="form-control" id="agemax" name="agemax">
    </div>
    <div class="row">
        <button type="submit" class="btn btn-info" name="valider" id="valider"
                value="valider" > Transférer le Jeu</button>
    </div>
</form>
    <p class="lead" >
    <h6 id="result" name="result">
        <?php
        if(!empty($_POST['valider']))
        {
            $tranch = new TrancheAge(htmlspecialchars($_POST['tranche']),intval($_POST['agemin']), intval($_POST['agemax']));
            /*
            $jeu= new Jeu(intval($_POST['numero']), htmlspecialchars($_POST['libelle']),
                htmlspecialchars($_POST['categorie']), );
            echo "objet n°".$tranch->getCode().":".$tranch->getLibelle();*/
        }
        ?>
    </h6>
    </p>
</div>
</body>

