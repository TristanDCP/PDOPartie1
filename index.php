<?php
try{
    $basededonnee = new PDO('mysql:host=localhost:3308;dbname=colyseum;charset=utf8', 'root', '');
}

catch(Exception $error){
    die('Erreur : ' . $error->getMessage());
}
    ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
    <title>Exo PDO</title>
</head>

<body>
    <div class="container-fluid">
    <h2 class="text-center text-danger col-12-lg text1">Exercice 1</h2>
        <div class="row text-center justify-content-center">
            <div class="row">
                <div class="border border-black mt-2 exo1">
                    <?php
$reponse = $basededonnee->query('SELECT `clients`.`firstName`, `clients`.`lastName` FROM `clients`;');

while($donnee = $reponse->fetch()){
?>
                    <?= '<p><b>Prénom : </b>'.  $donnee['firstName'] . '</p>' ?>
                    <?= '<p><b>Nom de famille : </b>'.  $donnee['lastName'] . '</p>' ?>
                    <?= '<hr>' ?>
                    <?php
       }
       ?>
       <?php $reponse->closeCursor(); ?>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
    <h2 class="text-center text2">Exercice 2</h2>
        <div class="row text-center justify-content-center">
            <div class="row">
                <div class="border border-black mt-2 exo2">
                    <?php
$reponse2 = $basededonnee->query('SELECT `showtypes`.`type` FROM `showtypes`;');

while($donnee = $reponse2->fetch()){
?>
                    <?= '<p><b>Type de show : </b>'.  $donnee['type'] . '</p>' ?>
                    <?= '<hr>' ?>
                    <?php
       }
       ?>
       <?php $reponse2->closeCursor(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    <h2 class="text-center text3">Exercice 3</h2>
        <div class="row text-center justify-content-center">
            <div class="row">
                <div class="border border-black mt-2 exo3">
                    <?php
$reponse3 = $basededonnee->query('SELECT `clients`.`id`, `clients`.`lastName`, `clients`.`firstName` FROM `clients` WHERE `clients`.`id` <= 20 ;');

while($donnee = $reponse3->fetch()){
?>
                    <?= '<p><b>ID : </b>'.  $donnee['id'] . '</p>' ?>
                    <?= '<p><b>Prénom : </b>'.  $donnee['firstName'] . '</p>' ?>
                    <?= '<p><b>Nom de famille : </b>'.  $donnee['lastName'] . '</p>' ?>
                    <?= '<hr>' ?>
                    <?php
       }
       ?>
       <?php $reponse3->closeCursor(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    <h2 class="text-center text4">Exercice 4</h2>
        <div class="row text-center justify-content-center">
            <div class="row">
                <div class="border border-black mt-2 exo4">
                    <?php
$reponse4 = $basededonnee->query('SELECT `clients`.`firstName`, `clients`.`lastName`, `clients`.`card`, `cardtypes`.`type`, `cards`.`cardNumber` FROM `clients` INNER JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber` INNER JOIN `cardtypes` ON `cards`.`cardTypesId` = `cardtypes`.`id` WHERE `cardtypes`.`id` = 1 ;');

while($donnee = $reponse4->fetch()){
?>
                    <?= '<p><b>Type : </b>'.  $donnee['cardNumber'] . '</p>' ?>
                    <?= '<p><b>Card : </b>'.  $donnee['card'] . '</p>' ?>
                    <?= '<p><b>Prénom : </b>'.  $donnee['firstName'] . '</p>' ?>
                    <?= '<p><b>Nom de famille : </b>'.  $donnee['lastName'] . '</p>' ?>
                    <?= '<hr>' ?>
                    <?php
       }
       ?>
       <?php $reponse4->closeCursor(); ?>
                </div>
            </div>
        </div>
    </div>

    
    <div class="container">
    <h2 class="text-center text5">Exercice 5</h2>
        <div class="row text-center justify-content-center">
            <div class="row">
                <div class="border border-black mt-2 exo5">
                    <?php
$reponse5 = $basededonnee->query('SELECT `clients`.`firstName`, `clients`.`lastName` FROM `clients` WHERE `clients`.`lastName` LIKE "M%" ORDER BY `clients`.`lastName`');

while($donnee = $reponse5->fetch()){
?>
                    <?= '<p><b>Prénom : </b>'.  $donnee['firstName'] . '</p>' ?>
                    <?= '<p><b>Nom de famille : </b>'.  $donnee['lastName'] . '</p>' ?>
                    <?= '<hr>' ?>
                    <?php
       }
       ?>
       <?php $reponse5->closeCursor(); ?>
                </div>
            </div>
        </div>
    </div>


        
    <div class="container">
    <h2 class="text-center text6">Exercice 6</h2>
        <div class="row text-center justify-content-center">
            <div class="row">
                <div class="border border-black mt-2 exo6">
                    <?php
$reponse6 = $basededonnee->query('SELECT `shows`.`title`, `shows`.`performer`, `shows`.`date`, `shows`.`startTime` FROM `shows` ');

while($donnee = $reponse6->fetch()){
?>
                    <?= '<p><b>Titre : </b>'.  $donnee['title'] . '</p>' ?>
                    <?= '<p><b>Artiste : </b>'.  $donnee['performer'] . '</p>' ?>
                    <?= '<p><b>Date : </b>'.  $donnee['date'] . '</p>' ?>
                    <?= '<p><b>Début : </b>'.  $donnee['startTime'] . '</p>' ?>
                    <?= '<hr>' ?>
                    <?php
       }
       ?>
       <?php $reponse6->closeCursor(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    <h2 class="text-center text7">Exercice 7</h2>
        <div class="row text-center justify-content-center">
            <div class="row">
                <div class="border border-black mt-2 exo7">
                    <?php
$reponse7 = $basededonnee->query('SELECT `clients`.`lastName`, `clients`.`firstName`, `clients`.`birthDate`, `cards`.`cardNumber`, `cardtypes`.`type`,
CASE 
WHEN `card` = 1 THEN "OUI"
WHEN `card` = 0 THEN "NON"
END as `Cartes`
FROM `clients`
LEFT JOIN `cards` 
ON `clients`.`cardNumber` = `cards`.`cardNumber` 
LEFT JOIN `cardtypes` 
ON `cards`.`cardTypesId` = `cardtypes`.`id` 
 ');

while($donnee = $reponse7->fetch()){
?>
                    <?= '<p><b>Prénom : </b>'.  $donnee['lastName'] . '</p>' ?>
                    <?= '<p><b>DOB : </b>'.  $donnee['birthDate'] . '</p>' ?>
                    <?= '<p><b>Carte : </b>'.  $donnee['Cartes'] . '</p>' ?>
                    <?php if($donnee['Cartes'] == 'OUI'){
                        echo '<p><b>Carte numéro: </b>'.  $donnee['cardNumber'] . '</p>';
                    } else {
                        echo "";
                    }
                    ?>
                    <?= '<hr>' ?>
                    <?php
       }
       ?>
       <?php $reponse7->closeCursor(); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>