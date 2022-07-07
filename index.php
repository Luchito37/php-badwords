<?php
$paragrafo = "Leonardo Sciascia nasce a Racalmuto, in provincia di Agrigento. 
Ha altri due fratelli. Suo papà Pasquale è impiegato. Sua madre Genoveffa è casalinga. 
La sua infanzia è costellata di zie e zii, che animano la casa di via Regina Margherita, 37, oggi via Leonardo Sciascia.
Nel 1935 la famiglia si trasferisce a Caltanissetta. Qui Leonardo frequenta l'istituto magistrale: tra i suoi insegnanti
c'è Vitaliano Brancati, che diventerà fondamentale nell'istruzione del futuro scrittore. Legge gli autori francesi e forma la propria 
coscienza civile sulle opere di Voltaire, Montesquieu, Cesare Beccaria, Pietro Verri. Proprio a Caltanissetta 
vive gli anni più importanti della sua vita.";
$parolaDaCensurare = $_GET["parolaDaCensurare"];

var_dump($_GET);


if (stripos($paragrafo, $parolaDaCensurare) !== false) {
    $paragrafo = str_ireplace($parolaDaCensurare, "***", $paragrafo);
}

?>

<h1>PARAGRAFO : <?php echo $paragrafo ?></h1>

<h2>LUNGHEZZA PARAGRAFO : <?php echo  strlen($paragrafo) ?></h2>