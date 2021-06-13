<?php
if (isset($_GET['language'])&&isset($_GET['server'])){
    echo $_GET['language']. $_GET['server'];
}elseif(isset($_GET['language'])||isset($_GET['server'])){
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
<a href=" index.php?language=PHP&server=LAMP">clic</a>
</body>
</html>