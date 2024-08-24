<?php
// Connessione al database SQLite
$db = new SQLite3('../../dae.db');

ob_start(); // Inizia l'output buffering

// Esecuzione inserimento di un nuovo paziente
if (isset($_POST['insertPaziente'])) {
    $CodFiscale = $_POST['CodFiscale'];
    $Nome = $_POST['Nome'];
    $Cognome = $_POST['Cognome'];
    $Sesso = $_POST['Sesso'];
    $Eta = $_POST['EtaP'];
    $CondMediche = $_POST['CondMediche'];

    if ($CodFiscale && $Nome && $Cognome && $Sesso && $Eta) {
        $stmt = $db->prepare("INSERT INTO Paziente (CodFiscale, Nome, Cognome, Sesso, Eta, CondMediche) VALUES (:CodFiscale, :Nome, :Cognome, :Sesso, :Eta, :CondMediche)");

        $stmt->bindParam(':CodFiscale', $CodFiscale);
        $stmt->bindParam(':Nome', $Nome);
        $stmt->bindParam(':Cognome', $Cognome);
        $stmt->bindParam(':Sesso', $Sesso);
        $stmt->bindParam(':Eta', $Eta);
        $stmt->bindParam(':CondMediche', $CondMediche);

        if ($stmt->execute())
            $message = "Operazione completata con successo!";
        else
            $message = "Errore nell'inserimento del paziente!";

        echo "<script type='text/javascript'>alert('$message');</script>";
    }
        
}

// Esecuzione inserimento di un nuovo soccoritore
if (isset($_POST['InsertSoccoritore'])) {
    $CodFiscale = $_POST['CodFiscale'];
    $Nome = $_POST['Nome'];
    $Cognome = $_POST['Cognome'];
    $Sesso = $_POST['Sesso'];
    $Eta = $_POST['EtaS'];
    $CAP = $_POST['CAP'];
    $Via = $_POST['Via'];
    $Civico = $_POST['Civico'];
    $Cellulare = $_POST['Cellulare'];
    $Email = $_POST['Email'];
    $Certificato = $_POST['Certificato'];

    if($CodFiscale && $Nome && $Cognome && $Sesso && $Eta && $CAP && $Via && $Civico && $Cellulare && $Email && $Certificato) {
        $stmt = $db->prepare("INSERT INTO Soccorritore (CodFiscale, Nome, Cognome, Sesso, Eta, CAP, Via, Civico, Cellulare, Email, Certificato) VALUES (:CodFiscale, :Nome, :Cognome, :Sesso, :Eta, :CAP, :Via, :Civico, :Cellulare, :Email, :Certificato)");

        $stmt->bindParam(':CodFiscale', $CodFiscale);
        $stmt->bindParam(':Nome', $Nome);
        $stmt->bindParam(':Cognome', $Cognome);
        $stmt->bindParam(':Sesso', $Sesso);
        $stmt->bindParam(':Eta', $Eta);
        $stmt->bindParam(':CAP', $CAP);
        $stmt->bindParam(':Via', $Via);
        $stmt->bindParam(':Civico', $Civico);
        $stmt->bindParam(':Cellulare', $Cellulare);
        $stmt->bindParam(':Email', $Email);
        $stmt->bindParam(':Certificato', $Certificato);

        if ($stmt->execute())
            $message = "Operazione completata con successo!";
        else
            $message = "Errore nell'inserimento del soccorritore!";
        
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

// Esecuzione inserimento di un nuovo operatore
if (isset($_POST['InsertOperatore'])) {
    $CodFiscale = $_POST['CodFiscale'];
    $Nome = $_POST['Nome'];
    $Cognome = $_POST['Cognome'];
    $Sesso = $_POST['Sesso'];
    $Eta = $_POST['EtaO'];
    $LineaTel = $_POST['LineaTel'];

    if($CodFiscale && $Nome && $Cognome && $Sesso && $Eta && $LineaTel) {
        $stmt = $db->prepare("INSERT INTO Operatore (CodFiscale, Nome, Cognome, Sesso, Eta, LineaTel) VALUES (:CodFiscale, :Nome, :Cognome, :Sesso, :Eta, :LineaTel)");

        $stmt->bindParam(':CodFiscale', $CodFiscale);
        $stmt->bindParam(':Nome', $Nome);
        $stmt->bindParam(':Cognome', $Cognome);
        $stmt->bindParam(':Sesso', $Sesso);
        $stmt->bindParam(':Eta', $Eta);
        $stmt->bindParam(':LineaTel', $LineaTel);

        if ($stmt->execute())
            $message = "Operazione completata con successo!";
        else
            $message = "Errore nell'inserimento dell'operatore!";

        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

// Esecuzione inserimento di un nuovo mezzo di soccorso
if (isset($_POST['InsertMezzoSoccorso'])) {
    $Targa = $_POST['Targa'];
    $Fornitore = $_POST['Fornitore'];
    $OraArrivo = $_POST['OraArrivo'];
    $segnalazioneMezzo = $_POST['segnalazioneMezzo'];

    if($Targa && $Fornitore && $OraArrivo && $segnalazioneMezzo) {
        $stmt = $db->prepare("INSERT INTO MezzoDiSoccorso (Targa, Fornitore, OraArrivo, Segnalazione) VALUES (:Targa, :Fornitore, :OraArrivo, :segnalazioneMezzo)");

        $stmt->bindParam(':Targa', $Targa);
        $stmt->bindParam(':Fornitore', $Fornitore);
        $stmt->bindParam(':OraArrivo', $OraArrivo);
        $stmt->bindParam(':segnalazioneMezzo', $segnalazioneMezzo);

        if ($stmt->execute())
            $message = "Operazione completata con successo!";
        else
            $message = "Errore nell'inserimento del mezzo di soccorso!";

        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

// Esecuzione inserimento di un nuovo strumento di soccorso
if (isset($_POST['InsertStrumentoSoccorso'])) {
    $ID = $_POST['ID'];
    $Tipologia = $_POST['Tipologia'];
    $CAP = $_POST['CAP'];
    $Via = $_POST['Via'];
    $Civico = $_POST['Civico'];
    $Revisione = $_POST['Revisione'];

    if($ID && $Tipologia && $CAP && $Via && $Civico && $Revisione) {
        $stmt = $db->prepare("INSERT INTO DispositivoMedico (ID, Tipologia, CAP, Via, Civico, Revisione) VALUES (:ID, :Tipologia, :CAP, :Via, :Civico, :Revisione)");

        $stmt->bindParam(':ID', $ID);
        $stmt->bindParam(':Tipologia', $Tipologia);
        $stmt->bindParam(':CAP', $CAP);
        $stmt->bindParam(':Via', $Via);
        $stmt->bindParam(':Civico', $Civico);
        $stmt->bindParam(':Revisione', $Revisione);

        if ($stmt->execute())
            $message = "Operazione completata con successo!";
        else
            $message = "Errore nell'inserimento dello strumento di soccorso!";

        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

//inserisci una nuova chiamata
if (isset($_POST['InsertChiamata'])) {
    $PazienteChiamata = $_POST['PazienteChiamata'];
    $OperatoreChiamata = $_POST['OperatoreChiamata'];
    $Data = $_POST['Data'];
    $Ora = $_POST['Ora'];
    $CAP = $_POST['CAP'];
    $Via = $_POST['Via'];
    $Civico = $_POST['Civico'];

    if($PazienteChiamata && $OperatoreChiamata && $Data && $Ora && $CAP && $Via && $Civico) {
        $stmt = $db->prepare("INSERT INTO Chiamata (Paziente, Operatore, Data, Ora, CAP, Via, Civico) VALUES (:Paziente, :Operatore, :Data, :Ora, :CAP, :Via, :Civico)");

        $stmt->bindParam(':Paziente', $PazienteChiamata);
        $stmt->bindParam(':Operatore', $OperatoreChiamata);
        $stmt->bindParam(':Data', $Data);
        $stmt->bindParam(':Ora', $Ora);
        $stmt->bindParam(':CAP', $CAP);
        $stmt->bindParam(':Via', $Via);
        $stmt->bindParam(':Civico', $Civico);

        if ($stmt->execute())
            $message = "Operazione completata con successo!";
        else
            $message = "Errore nell'inserimento della chiamata!";

        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

//inserisci una nuova Segnalazione
if (isset($_POST['InsertSegnalazione'])) {
    $OperatoreSegnalazione = $_POST['OperatoreSegnalazione'];
    $SoccorritoreSegnalazione = $_POST['SoccorritoreSegnalazione'];
    $MezzoSoccorsoSegnalazione = $_POST['MezzoSoccorsoSegnalazione'];
    $Data = $_POST['Data'];
    $Ora = $_POST['Ora'];
    $Priorita = $_POST['Priorita'];

    if($OperatoreSegnalazione && $SoccorritoreSegnalazione && $MezzoSoccorsoSegnalazione && $Data && $Ora && $Priorita) {
        $stmt = $db->prepare("INSERT INTO Segnalazione (Operatore, Soccorritore, MezzoSoccorso, Data, Ora, Priorita) VALUES (:Operatore, :Soccorritore, :MezzoSoccorso, :Data, :Ora, :Priorita)");

        $stmt->bindParam(':Operatore', $OperatoreSegnalazione);
        $stmt->bindParam(':Soccorritore', $SoccorritoreSegnalazione);
        $stmt->bindParam(':MezzoSoccorso', $MezzoSoccorsoSegnalazione);
        $stmt->bindParam(':Data', $Data);
        $stmt->bindParam(':Ora', $Ora);
        $stmt->bindParam(':Priorita', $Priorita);

        if ($stmt->execute())
            $message = "Operazione completata con successo!";
        else
            $message = "Errore nell'inserimento della segnalazione!";

        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

//inserisci una nuova manovra di soccorso
if (isset($_POST['InsertManovraSoccorso'])) {
    $OperatoreManovra = $_POST['OperatoreManovra'];
    $SoccorritoreManovra = $_POST['SoccorritoreManovra'];
    $MezzoSoccorsoManovra = $_POST['MezzoSoccorsoManovra'];
    $Tipologia = $_POST['Tipologia'];
    $cIdentificativo = $_POST['cIdentificativo'];

    if($OperatoreManovra && $SoccorritoreManovra && $MezzoSoccorsoManovra && $Tipologia && $cIdentificativo) {
        $stmt = $db->prepare("INSERT INTO ManovraSoccorso (Operatore, Soccorritore, MezzoSoccorso, Tipologia, cIdentificativo) VALUES (:Operatore, :Soccorritore, :MezzoSoccorso, :Tipologia, :cIdentificativo)");

        $stmt->bindParam(':Operatore', $OperatoreManovra);
        $stmt->bindParam(':Soccorritore', $SoccorritoreManovra);
        $stmt->bindParam(':MezzoSoccorso', $MezzoSoccorsoManovra);
        $stmt->bindParam(':Tipologia', $Tipologia);
        $stmt->bindParam(':cIdentificativo', $cIdentificativo);

        if ($stmt->execute())
            $message = "Operazione completata con successo!";
        else
            $message = "Errore nell'inserimento della manovra di soccorso!";

        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

// Esecuzione della query 11
if (isset($_POST['query']) && $_POST['query'] == 11) {
    $dataOdierna = date('Y-m-d');
    $result = $db->query("SELECT * FROM StrumentoSoccorso WHERE Revisione < '$dataOdierna'");
    $strumenti = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $strumenti[] = $row;
    }
}

// Esecuzione della query 12
if (isset($_POST['query']) && $_POST['query'] == 12) {
    $result = $db->query("SELECT * FROM Soccorritore WHERE CodFiscale IN (SELECT Soccorritore FROM ManovraSoccorso)");
    $soccorritori = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $soccorritori[] = $row;
    }
}

// Esecuzione della query 13
if (isset($_POST['query']) && $_POST['query'] == 13) {
    $Soccorritore = $_POST['Soccorritore'];
    $dataOdierna = date('Y-m-d');
    $result = $db->query("SELECT * FROM Chiamata WHERE Data = '$dataOdierna' AND Operatore = '$Soccorritore'");
    $chiamate = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $chiamate[] = $row;
    }
}

// Esecuzione della query 14
$result = $db->query("SELECT AVG(Eta) AS eta_media FROM Paziente");
$eta_media = $result->fetchArray(SQLITE3_ASSOC)['eta_media'];

ob_end_flush();
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progetto Basi di Dati</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
            <label for="query">Scegli una query:</label>
            <select name="query" id="query">
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
            <h2>Inserisci un nuovo paziente</h2>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name="insertPaziente" value="1">
                <label for="CodFiscale">Codice Fiscale:</label>
                <input type="text" name="CodFiscale" id="CodFiscale" required>
                <label for="Nome">Nome:</label>
                <input type="text" name="Nome" id="Nome" required>
                <label for="Cognome">Cognome:</label>
                <input type="text" name="Cognome" id="Cognome" required>
                <label for="Sesso">Sesso:</label>
                <input type="text" name="Sesso" id="Sesso" required>
                <label for="EtaP">Etá:</label>
                <span id="rangeValueP"></span>
                <input type="range" min="0" max="120" name="EtaP" id="EtaP" required>
                <label for="CondMediche">Condizioni mediche rilevanti:</label>
                <input type="text" name="CondMediche" id="CondMediche">
                <input type="submit" class="bottone" value="Inserisci un nuovo paziente">
            </form>
        </div>

        <div id="query2" class="queries">
            <h2>Inserisci un nuovo soccoritore</h2>
            <form action="services.php" method="post"  class="formQuery no_gap">
                <input type="hidden" name="InsertSoccoritore" value="2">
                <label for="CodFiscale">Codice Fiscale:</label>
                <input type="text" name="CodFiscale" id="CodFiscale" required>
                <label for="Nome">Nome:</label>
                <input type="text" name="Nome" id="Nome" required>
                <label for="Cognome">Cognome:</label>
                <input type="text" name="Cognome" id="Cognome" required>
                <label for="Sesso">Sesso:</label>
                <input type="text" name="Sesso" id="Sesso" required>
                <label for="EtaS">Etá:</label>
                <span id="rangeValueS"></span>
                <input type="range" min="0" max="120" name="EtaS" id="EtaS" required>
                <label for="CAP">CAP:</label>
                <input type="number" name="CAP" id="CAP" required>
                <label for="Via">Via:</label>
                <input type="text" name="Via" id="Via" required>
                <label for="Civico">Civico:</label>
                <input type="number" name="Civico" id="Civico" required>
                <label for="Cellulare">Cellulare:</label>
                <input type="tel" name="Cellulare" id="Cellulare" required>
                <label for="Email">Email:</label>
                <input type="email" name="Email" id="Email" required>
                <label for="Certificato">Certificato:</label>
                <input type="text" name="Certificato" id="Certificato" required>
                <input type="submit" class="bottone" value="Inserisci un nuovo soccoritore">
            </form>
        </div>

        <div id="query3" class="queries">
            <h2>Inserisci un nuovo operatore</h2>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name ="InsertOperatore" value="3">
                <label for="CodFiscale">Codice Fiscale:</label>
                <input type="text" name="CodFiscale" id="CodFiscale" required>
                <label for="Nome">Nome:</label>
                <input type="text" name="Nome" id="Nome" required>
                <label for="Cognome">Cognome:</label>
                <input type="text" name="Cognome" id="Cognome" required>
                <label for="Sesso">Sesso:</label>
                <input type="text" name="Sesso" id="Sesso" required>
                <label for="EtaO">Etá:</label>
                <span id="rangeValueO"></span>
                <input type="range" min="0" max="120" name="EtaO" id="EtaO" required>
                <label for="LineaTel">Linea Telefonica:</label>
                <input type="tel" name="LineaTel" id="LineaTel" required>
                <input type="submit" class="bottone" value="Inserisci un nuovo operatore">
            </form>
        </div>

        <div id="query4" class="queries">
            <h2>Inserisci un<br>nuovo mezzo di soccorso</h2>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name="InsertMezzoSoccorso" value="4">
                <label for="Targa">Targa:</label>
                <input type="text" name="Targa" id="Targa" required>
                <label for="Fornitore">Fornitore:</label>
                <input type="text" name="Fornitore" id="Fornitore" required>
                <label for="OraArrivo">Ora di arrivo:</label>
                <input type="time" name="OraArrivo" id="OraArrivo" required>
                <label for="segnalazioneMezzo">Segnalazione:</label>
                <input type="text" name="segnalazioneMezzo" id="segnalazioneMezzo" required>
                <input type="submit" class="bottone" value="Inserire un nuovo mezzo di soccorso">
            </form>
        </div>

        <div id="query5" class="queries">
            <h2>Inserisci un nuovo<br>strumento di soccorso</h2>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name="InsertStrumentoSoccorso" value="5">
                <label for="ID">ID:</label>
                <input type="number" name="ID" id="ID" required>
                <label for="Tipologia">Tipologia:</label>
                <input type="text" name="Tipologia" id="Tipologia" required>
                <label for="CAP">CAP:</label>
                <input type="number" name="CAP" id="CAP" required>
                <label for="Via">Via:</label>
                <input type="text" name="Via" id="Via" required>
                <label for="Civico">Civico:</label>
                <input type="number" name="Civico" id="Civico" required>
                <label for="Revisione">Revisione:</label>
                <input type="date" name="Revisione" id="Revisione" required>
                <input type="submit" class="bottone" value="Inserire un nuovo strumento di soccorso">
            </form>
        </div>

        <div id="query6" class="queries">
            <h2>inserisci una nuova chiamata</h2>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name="InsertChiamata" value="6">
                <label for="PazienteChiamata">Paziente:</label>
                <input type="text" name="PazienteChiamata" id="PazienteChiamata" required>
                <label for="OperatoreChiamata">Operatore:</label>
                <input type="text" name="OperatoreChiamata" id="OperatoreChiamata" required>
                <label for="Data">Data:</label>
                <input type="date" name="Data" id="Data" required>
                <label for="Ora">Ora:</label>
                <input type="time" name="Ora" id="Ora" required>
                <label for="CAP">CAP:</label>
                <input type="number" name="CAP" id="CAP" required>
                <label for="Via">Via:</label>
                <input type="text" name="Via" id="Via" required>
                <label for="Civico">Civico:</label>
                <input type="number" name="Civico" id="Civico" required>
                <input type="submit" class="bottone" value="Inserire una nuova chiamata">
            </form>
        </div>

        <div id="query7" class="queries">
            <h2>inserisci una nuova segnalazione</h2>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name="InsertSegnalazione" value="7">
                <label for="OperatoreSegnalazione">Operatore:</label>
                <input type="text" name="OperatoreSegnalazione" id="OperatoreSegnalazione"  required>
                <label for="SoccorritoreSegnalazione">Soccorritore:</label>
                <input type="text" name="SoccorritoreSegnalazione" id="SoccorritoreSegnalazione"  required>
                <label for="MezzoSoccorsoSegnalazione">Mezzo di Soccorso:</label>
                <input type="text" name="MezzoSoccorsoSegnalazione" id="MezzoSoccorsoSegnalazione" required>
                <label for="Data">Data:</label>
                <input type="date" name="Data" id="Data" required>
                <label for="Ora">Ora:</label>
                <input type="time" name="Ora" id="Ora" required>
                <label for="Priorita">Priorità:</label>
                <input type="number" name="Priorita" id="Priorita" required>
                <input type="submit" class="bottone" value="Inserire una nuova segnalazione">
            </form>
        </div>

        <div id="query8" class="queries">
            <h2>inserisci una nuova manovra di soccorso</h2>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name="InsertManovraSoccorso" value="8">
                <label for="OperatoreManovra">Operatore:</label>
                <input type="text" name="OperatoreManovra" id="OperatoreManovra" required>
                <label for="SoccorritoreManovra">Soccorritore:</label>
                <input type="text" name="SoccorritoreManovra" id="SoccorritoreManovra" required>
                <label for="MezzoSoccorsoManovra">Mezzo di Soccorso:</label>
                <input type="text" name="MezzoSoccorsoManovra" id="MezzoSoccorsoManovra" required>
                <label for="Tipologia">Tipologia:</label>
                <input type="text" name="Tipologia" id="Tipologia" required>
                <label for="cIdentificativo">Codice Identificativo:</label>
                <input type="number" name="cIdentificativo" id="cIdentificativo" required>
                <input type="submit" class="bottone" value="Inserire una nuova manovra di soccorso">
            </form>
        </div>

        <div id="query9" class="queries">
            <h2>visualizzazione segnalazioni</h2>
            <p>selezionare una data per visualizzare<br>le annesse segnalazioni</p>
            <form id="formQuery9" action="query.php" method="post" class="formQuery">
                <input type="hidden" name="query" value="9">
                <label for="Data">Data:</label>
                <input type="date" name="Data" id="Data" required>
                <button id="button9" type="submit"> Visualizza Segnalazioni</button>
            </form>
            <div id="table9"></div>
        </div>

        <div id="query10" class="queries">
            <h2>visualizzazione chiamate</h2>
            <p>selezionare una data per visualizzare<br>le annesse chiamate</p>
            <form id="formQuery10" action="query.php" method="post" class="formQuery">
                <input type="hidden" name="query" value="10">
                <label for="Data">Data:</label>
                <input type="date" name="Data" id="Data" required>
                <button id="button10" type="submit"> Visualizza chiamate</button>
            </form>
            <div id="table10"></div>
        </div>

        <div id="query11" class="queries">
            <h2>Revisioni da Aggiornare</h2>
            <p>visualizzazione dei dispositivi medici<br>la cui revisione è scaduta in data</p>
            <h3><span id="dataOdierna11"></span></h3>
        </div>

        <div id="query12" class="queries">
            <h2>Soccorritori - Pazienti</h2>
            <p>
                visualizzazione dei soccorritori che sono<br>
                stati associati ad un paziente,<br>
                per l'esecuzione di una manovra di soccorso
            </p>
        </div>

        <div id="query13" class="queries">
            <h2>Chiamate ricevute</h2>
            <p>selezionare un soccoritore per visualizzare<br>le chiamate ricevute in data</p>
            <h3><span id="dataOdierna13"></span></h3>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name="query" value="13">
                <label for="Soccorritore">Soccorritore:</label>
                <input type="text" name="Soccorritore" id="Soccorritore" required>
                <input type="submit" class="bottone" value="Visualizza chiamate ricevute">
            </form>
        </div>

        <div id="query14" class="queries">
            <h2>Età media dei pazienti</h2>
            <p>l'eta media dei pazienti risulta essere:</p>
            <h3 id="media"><?php echo floor($eta_media); ?></h3>
        </div>

        <div id="query15" class="queries">
            <h2>Mezzi di Soccorso</h2>
            <p>selezionare un ente fornitore per visualizzare<br>i mezzi di soccorso forniti</p>
            <form id="formQuery15" action="query.php" method="post" class="formQuery">
                <input type="hidden" name="query" value="15">
                <label for="Fornitore">Fornitore:</label>
                <input type="text" name="Fornitore" id="Fornitore" required>
                <button id="button15" type="submit">Visualizza mezzi di soccorso</button>
            </form>
            <div id="table15"></div>
        </div>

        <div id="query16" class="queries">
            <h2>Manovre di Soccorso</h2>
            <p>selezionare una tipologia di manovra di<br>soccorso per visualizzare quelle eseguite</p>
            <form id="formQuery16" action="query.php" method="post" class="formQuery">
                <input type="hidden" name="query" value="16">
                <label for="Tipologia">Tipologia:</label>
                <input type="text" name="Tipologia" id="Tipologia" required>
                <button id="button16" type="submit">Visualizza manovre di soccorso</button>
            </form>
            <div id="table16"></div>
        </div>

    </div>
    <script src="../js/script.js"></script>
</body>


</html>
<?php
// Chiusura della connessione al database
$db->close();
?>