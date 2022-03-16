<?php
session_start();
include 'lib/Jeu.class.php';
include 'lib/TrancheAge.class.php';
if(!empty($_POST['valider'])){
    $tranche = new TrancheAge(htmlspecialchars($_POST['tranche']),
        intval($_POST['agemin']),intval($_POST['agemax']));
    $_SESSION['tranche'] = $tranche;
}
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
            <label for="codetranche" class="form-label">Code de la Tranche : </label>
            <input type="text" class="form-control" id="codetranche" name="codetranche" disabled value="<?php echo $tranche->getCode()?>">
        </div>
        <div class="mb-3">
            <label for="agemin" class="form-label">Age Minimum : </label> <?php  ?>
            <input type="text" class="form-control" id="agemin" name="agemin" disabled value="<?php echo $tranche->getAgeMini()?>">
        </div>
        <div class="mb-3">
            <label for="agemax" class="form-label">Age Maximum : </label>
            <input type="text" class="form-control" id="agemax" name="agemax" disabled value="<?php echo $tranche->getAgeMax()?>">
        </div>
        <h1>Jeu</h1>
        <div class="mb-3">
            <label for="numero" class="form-label">Numéro : </label>
            <input type="number"
                   class="form-control" id="numero" name="numero">
        </div>
        <div class="mb-3">
            <label for="libelle" class="form-label">Libellé : </label>
            <input type="number"
                   class="form-control" id="libelle" name="libelle">
        </div>
        <div class="mb-3">
            <label for="categorie" class="form-label">Catégorie : </label>
            <input type="number"
                   class="form-control" id="categorie" name="categorie">
        </div>
        <div class="row">
            <button type="submit" class="btn btn-info" name="valider" id="valider"
                    value="valider" > Valider le Jeu</button>
        </div>
    </form>
    <p class="lead" >
    <h6 id="result" name="result">
    </h6>
    </p>
</div>
</body>