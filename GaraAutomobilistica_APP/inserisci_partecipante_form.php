<?php

$nome=$_POST['nome'];
$conome=$_POST['cognome'];
$nazionalita=$_POST['nazionalita'];
$numero=$_POST['numero'];
$casa_automoblistica=$_POST['casa_auto'];


//QUA DEVO FARE LA RICHIESTA DI CREATE AL SERVER

echo 'dati elaborati correttamente';


INCLUDE 'inserisci_partecipante.php';  //rimane sulla stessa pagina e attacca sotto il file confirm.php



//header('location:confirm.php');
