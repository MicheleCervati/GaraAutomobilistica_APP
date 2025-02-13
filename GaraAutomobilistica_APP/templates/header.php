<?php


?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu di Navigazione</title>
    <!-- Aggiungiamo Bootstrap per una navigazione reattiva -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Campionato Automobilistico</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="inserisci_partecipante.php">Inserisci Nuovo Partecipante</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="visualizza_classifica_generale.php">Visualizza Classifica Generale</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="visualizza_classifica_gara.php">Visualizza Classifica Gara</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="inserisci_risultati_gara.php">Inserisci Risultati Gara</a>
            </li>
        </ul>
    </div>
</nav>

