<?php
$paragrafo = "Leonardo Sciascia nasce a Racalmuto, in provincia di Agrigento. 
Ha altri due fratelli. Suo papà Pasquale è impiegato. Sua madre Genoveffa è casalinga. 
La sua infanzia è costellata di zie e zii, che animano la casa di via Regina Margherita, 37, oggi via Leonardo Sciascia.
Nel 1935 la famiglia si trasferisce a Caltanissetta. Qui Leonardo frequenta l'istituto magistrale: tra i suoi insegnanti
c'è Vitaliano Brancati, che diventerà fondamentale nell'istruzione del futuro scrittore. Legge gli autori francesi e forma la propria 
coscienza civile sulle opere di Voltaire, Montesquieu, Cesare Beccaria, Pietro Verri. Proprio a Caltanissetta 
vive gli anni più importanti della sua vita.";
$parolaDaCensurare = $_GET["parolaDaCensurare"];
$nuovoParagrafo = "";
var_dump($_GET);


if (stripos($paragrafo, $parolaDaCensurare) !== false) {
    $nuovoParagrafo = str_ireplace($parolaDaCensurare, "***", $paragrafo);
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>PARAGRAFO : </h1>
<p><?php echo $paragrafo ?></p>

<h2>LUNGHEZZA PARAGRAFO : <?php echo  strlen($paragrafo) ?></h2>

<h1>NUOVO PARAGRAFO :</h1>
<p><?php echo $nuovoParagrafo ?></p>

<h2>LUNGHEZZA PARAGRAFO : <?php echo  strlen($nuovoParagrafo) ?></h2>

</body>
</html>

