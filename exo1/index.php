<?php


if (isset($_GET['lastname'])&&isset($_GET['firstname'])){
     echo $_GET['lastname']. $_GET['firstname'];
 }elseif(isset($_GET['lastname'])||isset($_GET['firstname'])){
     echo 'Une variable est manquante';
 }else{
     echo 'aucune variable n\'existe';
 };

 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
<a href="index.php?lastname=Nemare&firstname=Jean">clic</a>
</body>
</html>