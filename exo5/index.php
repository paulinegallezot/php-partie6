<?php
if (isset($_GET['week'])){
    echo $_GET['week'];
}else{
    echo 'la variable n\'existe pas';
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
<a href="index.php?week=12">clic</a>
</body>
</html>