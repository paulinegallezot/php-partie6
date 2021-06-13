
<?php
// $getAge = $_GET['age'];
// if (isset($getAge)){
//     echo $getAge;
// }else{
//     echo 'l\'age n\'existe pas';
// }

if (isset($_GET['age'])){
     echo $age;
 }else{
     echo 'l\'age n\'existe pas';
 }
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
<a href="index.php?lastname=Nemare&firstname=Jean">clic</a>

</body>
</html>