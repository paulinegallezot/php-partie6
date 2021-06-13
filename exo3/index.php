<?php


if (isset($_GET['startDate'])&&isset($_GET['endDate'])){
    echo $_GET['startDate']. $_GET['endDate'];
}elseif(isset($_GET['startDate'])||isset($_GET['endDate'])){
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
    <title>Exercice 2</title>
</head>
<body>
<a href="index.php?startDate=2/05/2016&endDate=27/11/2016">clic</a>
</body>
</html>