<?php

@include_once 'templates/header.php';

$config = require_once 'config/databaseConf.php';

require 'config/DBconn.php';


$db = DBconn::getDB($config);

// Query corretta con selezione di `id`
$query = 'SELECT id, nome FROM campionatoAutomobilistico.caseAutomobilistiche';

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Iscrizione Pilota</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="inserisci_partecipante_form.php">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Inserisci il nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="cognome" class="form-label">Cognome</label>
                            <input type="text" class="form-control" id="cognome" name="cognome" placeholder="Inserisci il cognome" required>
                        </div>
                        <div class="mb-3">
                            <label for="nazionalita" class="form-label">Nazionalità</label>
                            <input type="text" class="form-control" id="nazionalita" name="nazionalita" placeholder="Inserisci la nazionalità" required>
                        </div>
                        <div class="mb-3">
                            <label for="numero" class="form-label">Numero Pilota</label>
                            <input type="number" class="form-control" id="numero" name="numero" min="0" placeholder="Inserisci il numero di gara" required>
                        </div>
                        <div class="mb-3">
                            <label for="casa_auto" class="form-label">Casa Automobilistica</label>
                            <select name="casa_auto" id="casa_auto" class="form-select" required>
                                <option value="">Seleziona Casa Automobilistica</option>
                                <?php
                                try {
                                    $stm = $db->prepare($query);
                                    $stm->execute();

                                    while ($casaAuto = $stm->fetch(PDO::FETCH_ASSOC)) {
                                        echo '<option value="' . $casaAuto['id'] . '">' . $casaAuto['nome'] . '</option>';
                                    }
                                } catch (Exception $e) {
                                    DBconn::logError($e);
                                    echo '<option value="">Errore nel caricamento</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Iscrivi Pilota</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
@include_once 'templates/footer.php';
?>
