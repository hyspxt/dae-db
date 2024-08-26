<?php
$db = new SQLite3('../../dae.db');

// Esecuzione della query 14
$result = $db->query("SELECT AVG(Eta) AS eta_media FROM Paziente");
$eta_media = $result->fetchArray(SQLITE3_ASSOC)['eta_media'];
echo"<script>document.getElementById('media').innerHTML = $eta_media';</script>";

$db->close();
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progetto Basi di Dati</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="navbar">
        <ul>
            <li><a href="../../index.html"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="sample.php"><i class="fas fa-info-circle"></i> Database </a></li>
            <li><a href="services.php" class="active"><i class="fas fa-cogs"></i> Query </a></li>
        </ul>
    </div>
    
    <div class="contentSample">
        <form action="services.php" method="post" class="formSelezioneQ">
            <label for="query" class="formSelezioneLabel">Scegli una query:</label>
            <select name="query" id="query" class="query1section">
                <option value="1">Query 1</option>
                <option value="2">Query 2</option>
                <option value="3">Query 3</option>
                <option value="4">Query 4</option>
                <option value="5">Query 5</option>
                <option value="6">Query 6</option>
                <option value="7">Query 7</option>
                <option value="8">Query 8</option>
                <option value="9">Query 9</option>
                <option value="10">Query 10</option>
                <option value="11">Query 11</option>
                <option value="12">Query 12</option>
                <option value="13">Query 13</option>
                <option value="14">Query 14</option>
                <option value="15">Query 15</option>
                <option value="16">Query 16</option>
            </select>
        </form>
        <div id="query1" class="queries">
            <h3>Inserisci un nuovo paziente</h3>
            <form id="formQuery1" action="query.php" method="post" class="formQuery">
                <input type="hidden" name="insertPaziente" value="1">
                <label for="CodFiscale">Codice Fiscale:</label>
                <input type="text" class="form-control" name="CodFiscale" id="CodFiscale" required>
                <label for="Nome">Nome:</label>
                <input type="text" class="form-control" name="Nome" id="Nome" required>
                <label for="Cognome">Cognome:</label>
                <input type="text" class="form-control" name="Cognome" id="Cognome" required>
                <label for="Sesso">Sesso:</label>
                <input type="text" class="form-control" name="Sesso" id="Sesso" required>
                <label for="EtaP">Etá:</label>
                <span id="rangeValueP"></span>
                <input type="range" min="0" max="120" name="EtaP" id="EtaP" required>
                <label for="CondMediche">Condizioni mediche rilevanti:</label>
                <input type="text" class="form-control" name="CondMediche" id="CondMediche">
                <button id="button1" class="btn c" type="submit"> Inserisci un nuovo paziente </button>
            </form>
        </div>

        <div id="query2" class="queries">
            <h3>Inserisci un nuovo soccoritore</h3>
            <form id="formQuery2" action="query.php" method="post"  class="formQuery no_gap">
                <input type="hidden" name="InsertSoccoritore" value="2">
                <label for="CodFiscale">Codice Fiscale:</label>
                <input type="text" class="form-control" name="CodFiscale" id="CodFiscale" required>
                <label for="Nome">Nome:</label>
                <input type="text" class="form-control" name="Nome" id="Nome" required>
                <label for="Cognome">Cognome:</label>
                <input type="text" class="form-control" name="Cognome" id="Cognome" required>
                <label for="Sesso">Sesso:</label>
                <input type="text" class="form-control" name="Sesso" id="Sesso" required>
                <label for="EtaS">Etá:</label>
                <span id="rangeValueS"></span>
                <input type="range" min="0" max="120" name="EtaS" id="EtaS" required>
                <label for="CAP">CAP:</label>
                <input type="number" class="form-control" name="CAP" id="CAP" required>
                <label for="Via">Via:</label>
                <input type="text" class="form-control" name="Via" id="Via" required>
                <label for="Civico">Civico:</label>
                <input type="number" class="form-control" name="Civico" id="Civico" required>
                <label for="Cellulare">Cellulare:</label>
                <input type="tel" class="form-control" name="Cellulare" id="Cellulare" required>
                <label for="Email">Email:</label>
                <input type="email" class="form-control" name="Email" id="Email" required>
                <label for="Certificato">Certificato:</label>
                <input type="text" class="form-control" name="Certificato" id="Certificato" required>
                <button id="button2" class="btn c" type="submit"> Inserisci un nuovo soccorritore </button>
            </form>
        </div>

        <div id="query3" class="queries">
            <h3>Inserisci un nuovo operatore</h3>
            <form id="formQuery3" action="query.php" method="post" class="formQuery">
                <input type="hidden" name ="InsertOperatore" value="3">
                <label for="CodFiscale">Codice Fiscale:</label>
                <input type="text" class="form-control" name="CodFiscale" id="CodFiscale" required>
                <label for="Nome">Nome:</label>
                <input type="text" class="form-control" name="Nome" id="Nome" required>
                <label for="Cognome">Cognome:</label>
                <input type="text" class="form-control" name="Cognome" id="Cognome" required>
                <label for="Sesso">Sesso:</label>
                <input type="text" class="form-control" name="Sesso" id="Sesso" required>
                <label for="EtaO">Etá:</label>
                <span id="rangeValueO"></span>
                <input type="range" min="0" max="120" name="EtaO" id="EtaO" required>
                <label for="LineaTel">Linea Telefonica:</label>
                <input type="tel" class="form-control" name="LineaTel" id="LineaTel" required>
                <button id="button3" class="btn c" type="submit"> Inserisci un nuovo operatore </button>
            </form>
        </div>

        <div id="query4" class="queries">
            <h3>Inserisci un<br>nuovo mezzo di soccorso</h3>
            <form id="formQuery4" action="query.php" method="post" class="formQuery">
                <input type="hidden" name="InsertMezzoSoccorso" value="4">
                <label for="Targa">Targa:</label>
                <input type="text" class="form-control" name="Targa" id="Targa" required>
                <label for="Fornitore">Fornitore:</label>
                <input type="text" class="form-control" name="Fornitore" id="Fornitore" required>
                <button id="button4" class="btn c" type="submit"> Inserisci un nuovo mezzo di soccorso </button>
            </form>
        </div>

        <div id="query5" class="queries">
            <h3>Inserisci un nuovo<br>strumento di soccorso</h3>
            <form id="formQuery5" action="query.php" method="post" class="formQuery">
                <input type="hidden" name="InsertStrumentoSoccorso" value="5">
                <label for="ID">ID:</label>
                <input type="number" class="form-control" name="ID" id="ID" required>
                <label for="Tipologia">Tipologia:</label>
                <input type="text" class="form-control" name="Tipologia" id="Tipologia" required>
                <label for="CAP">CAP:</label>
                <input type="number" class="form-control" name="CAP" id="CAP" required>
                <label for="Via">Via:</label>
                <input type="text" class="form-control" name="Via" id="Via" required>
                <label for="Civico">Civico:</label>
                <input type="number" class="form-control" name="Civico" id="Civico" required>
                <label for="Revisione">Revisione:</label>
                <input type="date" class="form-control" name="Revisione" id="Revisione" required>
                <button id="button5" class="btn c" type="submit"> Inserisci un nuovo strumento di soccorso </button>
            </form>
        </div>

        <div id="query6" class="queries">
            <h3>Inserisci una nuova chiamata</h3>
            <form id="formQuery6" action="query.php" method="post" class="formQuery">
                <input type="hidden" name="InsertChiamata" value="6">
                <label for="PazienteChiamata">Paziente:</label>
                <input type="text" class="form-control" name="PazienteChiamata" id="PazienteChiamata" required>
                <label for="OperatoreChiamata">Operatore:</label>
                <input type="text" class="form-control" name="OperatoreChiamata" id="OperatoreChiamata" required>
                <label for="Data">Data:</label>
                <input type="date" class="form-control" name="Data" id="Data" required>
                <label for="Ora">Ora:</label>
                <input type="time" class="form-control" name="Ora" id="Ora" required>
                <label for="CAP">CAP:</label>
                <input type="number" class="form-control" name="CAP" id="CAP" required>
                <label for="Via">Via:</label>
                <input type="text" class="form-control" name="Via" id="Via" required>
                <label for="Civico">Civico:</label>
                <input type="number" class="form-control" name="Civico" id="Civico" required>
                <button id="button6" class="btn c" type="submit"> Inserisci una nuova chiamata </button>
            </form>
        </div>

        <div id="query7" class="queries">
            <h3>Inserisci una nuova segnalazione</h3>
            <form id="formQuery7" action="query.php" method="post" class="formQuery">
                <input type="hidden" name="InsertSegnalazione" value="7">
                <label for="OperatoreSegnalazione">Operatore:</label>
                <input type="text" class="form-control" name="OperatoreSegnalazione" id="OperatoreSegnalazione"  required>
                <label for="Data">Data:</label>
                <input type="date" class="form-control" name="Data" id="Data" required>
                <label for="Ora">Ora:</label>
                <input type="time" class="form-control" name="Ora" id="Ora" required>
                <label for="Priorita">Priorità:</label>
                <input type="number" class="form-control" name="Priorita" id="Priorita" required>
                <button id="button7" class="btn c" type="submit"> Inserisci una nuova segnalazione </button>
            </form>
        </div>

        <div id="query8" class="queries">
            <h3>Inserisci una nuova manovra di soccorso</h3>
            <form id="formQuery8" action="query.php" method="post" class="formQuery">
                <input type="hidden" name="InsertManovraSoccorso" value="8">
                <label for="PazienteManovra">Paziente:</label>
                <input type="text" class="form-control" name="PazienteManovra" id="PazienteManovra" required>
                <label for="Tipologia">Tipologia:</label>
                <input type="text" class="form-control" name="Tipologia" id="Tipologia" required>
                <label for="cIdentificativo">Codice Identificativo:</label>
                <input type="number" class="form-control" name="cIdentificativo" id="cIdentificativo" required>
                <button id="button8" class="btn c" type="submit"> Inserisci una nuova manovra di soccorso </button>
            </form>
        </div>

        <div id="query9" class="queries">
            <h3>Visualizzazione segnalazioni</h3>
            <p>selezionare una data per visualizzare<br>le annesse segnalazioni</p>
            <form id="formQuery9" action="query.php" method="post" class="formQuery">
                <input type="hidden" name="query" value="9">
                <label for="Data">Data:</label>
                <input type="date" class="form-control" name="Data" id="Data" required>
                <button id="button9" class="btn c" type="submit"> Visualizza Segnalazioni</button>
            </form>
            <div id="table9" class="card m-5">
                <div class="card-body"></div>
            </div>
        </div>

        <div id="query10" class="queries">
            <h3>Visualizzazione chiamate</h3>
            <p>selezionare una data per visualizzare<br>le annesse chiamate</p>
            <form id="formQuery10" action="query.php" method="post" class="formQuery">
                <input type="hidden" name="query" value="10">
                <label for="Data">Data:</label>
                <input type="date" class="form-control" name="Data" id="Data" required>
                <button id="button10" class="btn c" type="submit"> Visualizza chiamate</button>
            </form>
            <div id="table10" class="card m-5">
                <div class="card-body"></div>
            </div>
        </div>

        <div id="query11" class="queries">
            <h3>Revisioni da Aggiornare</h3>
            <p>visualizzazione dei dispositivi medici<br>la cui revisione è scaduta in data</p>
            <h3><span id="dataOdierna11"></span></h3>
            <div id="table11" class="card m-5">
                <div class="card-body"></div>
            </div>
        </div>

        <div id="query12" class="queries">
            <h3>Soccorritori - Pazienti</h3>
            <p>
                visualizzazione dei soccorritori che sono<br>
                stati associati ad un paziente,<br>
                per l'esecuzione di una manovra di soccorso
            </p>
            <div id="table12" class="card m-5">
                <div class="card-body"></div>
            </div>
        </div>

        <div id="query13" class="queries">
            <h3>Chiamate ricevute</h3>
            <p>selezionare un operatore per visualizzare<br>le chiamate ricevute in data</p>
            <h3><span id="dataOdierna13"></span></h3>
            <form id="formQuery13" action="query.php" method="post" class="formQuery">
                <input type="hidden" name="query" value="13">
                <label for="Operatore">Operatore:</label>
                <input type="text" class="form-control" name="Operatore" id="Operatore" required>
                <button id="button13" class="btn c" type="submit"> Visualizza chiamate ricevute</button>
            </form>
            <div id="table13" class="card m-5">
                <div class="card-body"></div>
            </div>
        </div>

        <div id="query14" class="queries">
            <h3>Età media dei pazienti</h3>
            <p>l'eta media dei pazienti risulta essere:</p>
            <h3 id="media"></h3>
        </div>
        <div id="query15" class="queries">
            <h3>Mezzi di Soccorso</h3>
            <p>selezionare un ente fornitore per visualizzare<br>i mezzi di soccorso forniti</p>
            <form id="formQuery15" action="query.php" method="post" class="formQuery">
                <input type="hidden" name="query" value="15">
                <label for="Fornitore">Fornitore:</label>
                <input type="text" class="form-control" name="Fornitore" id="Fornitore" required>
                <button id="button15" class="btn c" type="submit">Visualizza mezzi di soccorso</button>
            </form>
            <div id="table15" class="card m-5">
                <div class="card-body"></div>
            </div>
        </div>

        <div id="query16" class="queries">
            <h3>Manovre di Soccorso</h3>
            <p>selezionare una tipologia di manovra di<br>soccorso per visualizzare quelle eseguite</p>
            <form id="formQuery16" action="query.php" method="post" class="formQuery">
                <input type="hidden" name="query" value="16">
                <label for="Tipologia">Tipologia:</label>
                <input type="text" class="form-control" name="Tipologia" id="Tipologia" required>
                <button id="button16" class="btn c" type="submit">Visualizza manovre di soccorso</button>
            </form>
            <div id="table16" class="card m-5">
                <div class="card-body"></div>
            </div>
        </div>

    </div>
    <script src="../js/script.js"></script>
</body>

</html>