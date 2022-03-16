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
<form action="" method = "POST">
    <div class="mb-3">
        <label for="numero" class="form-label">Numéro : </label>
        <input type="text" class="form-control" id="numero" name="numero" >
    </div>
    <div class="mb-3">
        <label for="libelle" class="form-label">Libellé : </label>
        <input type="text" class="form-control" id="libelle" name="libelle" >
    </div>
    <div class="mb-3">
        <label for="categorie" class="form-label">Catégorie : </label>
        <input type="text" class="form-control" id="categorie" name="categorie" >
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
        <button type="submit" class="btn btn-info" name="transferer" id="transferer"
                value="transferer">Transférer</button>
    </div>
</form>
</div>
</body>

