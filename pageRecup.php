<?php
include 'lib/Jeu.class.php';
include 'lib/TrancheAge.class.php';
session_start();
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
<?php
$jeu = null;
if(!empty($_POST['valider'])){
    $jeu= new Jeu(intval($_POST['numero']), htmlspecialchars($_POST['libelle']),
        htmlspecialchars($_POST['categorie']), intval($_POST['agemin']), intval($_POST['agemax']));
    $_SESSION['jeu']=$jeu;
}
if(!empty($_POST['controle'])){
    $jeu = $_SESSION['jeu'];
}
?>
<div class="container">
    <h2 class="m-3">La Programmation Objet en Php </h2>
    <form action="pageRecup.php" method = "POST">
        <div class="mb-3">
            <label for="numero" class="form-label">Numéro : </label>
            <input type="text" class="form-control" id="numero" name="numero" disabled value="<?php echo $jeu->getNumero()?>">
        </div>
        <div class="mb-3">
            <label for="Libelle" class="form-label">Libellé : </label>
            <input type="text" class="form-control" id="libelle" name="libelle" disabled value="<?php echo $jeu->getLibelle()?>">
        </div>
        <div class="mb-3">
            <label for="categorie" class="form-label">Catégorie : </label>
            <input type="text" class="form-control" id="categorie" name="categorie" disabled value="<?php echo $jeu->getCategorie()?>">
        </div>

        <div class="mb-3">
            <label for="ageDem" class="form-label">Age Cherché : </label>
            <input type="number" value="0" min="00" max="99"
                   class="form-control" id="ageDem" name="ageDem">
        </div>
        <div class="row">
            <button class="btn btn-primary" type="submit" name="controle" id="controle"
                    value="controler">Controler</button>
        </div>
        <p class="lead" >
        <h4 id="result" name="result">
            <?php
            if(!empty($_POST['controle']))
            {
                $ageDem = $_POST['ageDem'];
                if($ageDem >= $jeu->getAgeMini() && $ageDem<=$jeu->getAgeMax()){
                    echo $ageDem." ans: jeu autorisé";
                }
                else
                    echo $ageDem." ans: jeu non autorisé";
            }
            else{
                echo "resultat ...";
            }
            ?>
        </h4>
        </p>
    </form>
</div>
</body>
