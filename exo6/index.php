<?php
if (isset($_GET['building'])&&isset($_GET['room'])){
    echo $_GET['building']. $_GET['room'];
}elseif(isset($_GET['building'])||isset($_GET['room'])){
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
    <title>Exercice 6</title>
</head>
<body>
<a href="index.php?building=12&room=101">clic</a>
</body>
</html>