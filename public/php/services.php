<?php
// Connessione al database SQLite
$db = new SQLite3('../../dae.db');

// Esecuzione inserimento di un nuovo paziente
if (isset($_POST['insertPaziente'])) {
    $CodFiscale = $_POST['CodFiscale'];
    $Nome = $_POST['Nome'];
    $Cognome = $_POST['Cognome'];
    $Sesso = $_POST['Sesso'];
    $Eta = $_POST['Eta'];
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
            echo "<script> mostraAlert(true); </script>";
         else 
            echo "<script> mostraAlert(false); </script>";
    }
        
}

// Esecuzione inserimento di un nuovo soccoritore
if (isset($_POST['InsertSoccoritore'])) {
    $CodFiscale = $_POST['CodFiscale'];
    $Nome = $_POST['Nome'];
    $Cognome = $_POST['Cognome'];
    $Sesso = $_POST['Sesso'];
    $Eta = $_POST['Eta'];
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
            echo "<script> mostraAlert(true); </script>";
        else 
            echo "<script> mostraAlert(false); </script>";
    }
}

// Esecuzione inserimento di un nuovo operatore
if (isset($_POST['InsertOperatore'])) {
    $CodFiscale = $_POST['CodFiscale'];
    $Nome = $_POST['Nome'];
    $Cognome = $_POST['Cognome'];
    $Sesso = $_POST['Sesso'];
    $Eta = $_POST['Eta'];
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
            echo "<script> mostraAlert(true); </script>";
        else 
            echo "<script> mostraAlert(false); </script>";
    }
}

// Esecuzione inserimento di un nuovo mezzo di soccorso
if (isset($_POST['InsertMezzoSoccorso'])) {
    $Targa = $_POST['Targa'];
    $Fornitore = $_POST['Fornitore'];

    if($Targa && $Fornitore) {
        $stmt = $db->prepare("INSERT INTO MezzoSoccorso (Targa, Fornitore) VALUES (:Targa, :Fornitore)");

        $stmt->bindParam(':Targa', $Targa);
        $stmt->bindParam(':Fornitore', $Fornitore);

        if ($stmt->execute())
            echo "<script> mostraAlert(true); </script>";
        else 
            echo "<script> mostraAlert(false); </script>";
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
        $stmt = $db->prepare("INSERT INTO StrumentoSoccorso (ID, Tipologia, CAP, Via, Civico, Revisione) VALUES (:ID, :Tipologia, :CAP, :Via, :Civico, :Revisione)");

        $stmt->bindParam(':ID', $ID);
        $stmt->bindParam(':Tipologia', $Tipologia);
        $stmt->bindParam(':CAP', $CAP);
        $stmt->bindParam(':Via', $Via);
        $stmt->bindParam(':Civico', $Civico);
        $stmt->bindParam(':Revisione', $Revisione);

        if ($stmt->execute())
            echo "<script> mostraAlert(true); </script>";
        else 
            echo "<script> mostraAlert(false); </script>";
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
            echo "<script> mostraAlert(true); </script>";
        else 
            echo "<script> mostraAlert(false); </script>";
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
            echo "<script> mostraAlert(true); </script>";
        else 
            echo "<script> mostraAlert(false); </script>";
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
            echo "<script> mostraAlert(true); </script>";
        else 
            echo "<script> mostraAlert(false); </script>";
    }
}

// Esecuzione della query 9
if (isset($_POST['query']) && $_POST['query'] == 9) {
    $Data = $_POST['Data'];
    $result = $db->query("SELECT * FROM Segnalazione WHERE Data = '$Data'");
    $segnalazioni = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $segnalazioni[] = $row;
    }
}

// Esecuzione della query 10
if (isset($_POST['query']) && $_POST['query'] == 10) {
    $Data = $_POST['Data'];
    $result = $db->query("SELECT * FROM Chiamata WHERE Data = '$Data'");
    $chiamate = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $chiamate[] = $row;
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
if (isset($_POST['query']) && $_POST['query'] == 14) {
    $result = $db->query("SELECT AVG(Eta) AS eta_media FROM Paziente");
    $eta_media = $result->fetchArray(SQLITE3_ASSOC)['eta_media'];
}

// Esecuzione della query 15
if (isset($_POST['query']) && $_POST['query'] == 15) {
    $Fornitore = $_POST['Fornitore'];
    $result = $db->query("SELECT * FROM MezzoSoccorso WHERE Fornitore = '$Fornitore'");
    $mezzi = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $mezzi[] = $row;
    }
}

// Esecuzione della query 16
if (isset($_POST['query']) && $_POST['query'] == 16) {
    $Tipologia = $_POST['Tipologia'];
    $result = $db->query("SELECT * FROM ManovraSoccorso WHERE Tipologia = '$Tipologia'");
    $manovre = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $manovre[] = $row;
    }
}

// Chiusura della connessione al database
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
                <lable for="CodFiscale">Codice Fiscale:</lable>
                <input type="text" name="CodFiscale" id="CodFiscale" required>
                <lable for="Nome">Nome:</lable>
                <input type="text" name="Nome" id="Nome" required>
                <lable for="Cognome">Cognome:</lable>
                <input type="text" name="Cognome" id="Cognome" required>
                <lable for="Sesso">Sesso:</lable>
                <input type="text" name="Sesso" id="Sesso" required>
                <lable for="Eta">Etá:</lable>
                <input type="number" name="Eta" id="Eta" required>
                <lable for="CondMediche">Condizioni mediche rilevanti:</lable>
                <input type="text" name="CondMediche" id="CondMediche">
                <input type="submit" class="bottone" value="Inserisci un nuovo paziente">
            </form>
        </div>

        <div id="query2" class="queries">
            <h2>Inserisci un nuovo soccoritore</h2>
            <form action="services.php" method="post"  class="formQuery no_gap">
                <input type="hidden" name="InsertSoccoritore" value="2">
                <lable for="CodFiscale">Codice Fiscale:</lable>
                <input type="text" name="CodFiscale" id="CodFiscale" required>
                <lable for="Nome">Nome:</lable>
                <input type="text" name="Nome" id="Nome" required>
                <lable for="Cognome">Cognome:</lable>
                <input type="text" name="Cognome" id="Cognome" required>
                <lable for="Sesso">Sesso:</lable>
                <input type="text" name="Sesso" id="Sesso" required>
                <lable for="Eta">Etá:</lable>
                <input type="number" name="Eta" id="Eta" required>
                <lable for="CAP">CAP:</lable>
                <input type="number" name="CAP" id="CAP" required>
                <lable for="Via">Via:</lable>
                <input type="text" name="Via" id="Via" required>
                <lable for="Civico">Civico:</lable>
                <input type="number" name="Civico" id="Civico" required>
                <lable for="Cellulare">Cellulare:</lable>
                <input type="tel" name="Cellulare" id="Cellulare" required>
                <lable for="Email">Email:</lable>
                <input type="email" name="Email" id="Email" required>
                <lable for="Certificato">Certificato:</lable>
                <input type="text" name="Certificato" id="Certificato" required>
                <input type="submit" class="bottone" value="Inserisci un nuovo soccoritore">
            </form>
        </div>

        <div id="query3" class="queries">
            <h2>Inserisci un nuovo operatore</h2>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name ="InsertOperatore" value="3">
                <lable for="CodFiscale">Codice Fiscale:</lable>
                <input type="text" name="CodFiscale" id="CodFiscale" required>
                <lable for="Nome">Nome:</lable>
                <input type="text" name="Nome" id="Nome" required>
                <lable for="Cognome">Cognome:</lable>
                <input type="text" name="Cognome" id="Cognome" required>
                <lable for="Sesso">Sesso:</lable>
                <input type="text" name="Sesso" id="Sesso" required>
                <lable for="Eta">Etá:</lable>
                <input type="number" name="Eta" id="Eta" required>
                <lable for="LineaTel">Linea Telefonica:</lable>
                <input type="tel" name="LineaTel" id="LineaTel" required>
                <input type="submit" class="bottone" value="Inserisci un nuovo operatore">
            </form>
        </div>

        <div id="query4" class="queries">
            <h2>Inserisci un<br>nuovo mezzo di soccorso</h2>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name="InsertMezzoSoccorso" value="4">
                <lable for="Targa">Targa:</lable>
                <input type="text" name="Targa" id="Targa" required>
                <lable for="Fornitore">Fornitore:</lable>
                <input type="text" name="Fornitore" id="Fornitore" required>
                <input type="submit" class="bottone" value="Inserire un nuovo mezzo di soccorso">
            </form>
        </div>

        <div id="query5" class="queries">
            <h2>Inserisci un nuovo<br>strumento di soccorso</h2>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name="InsertStrumentoSoccorso" value="5">
                <lable for="ID">ID:</lable>
                <input type="number" name="ID" id="ID" required>
                <lable for="Tipologia">Tipologia:</lable>
                <input type="text" name="Tipologia" id="Tipologia" required>
                <lable for="CAP">CAP:</lable>
                <input type="number" name="CAP" id="CAP" required>
                <lable for="Via">Via:</lable>
                <input type="text" name="Via" id="Via" required>
                <lable for="Civico">Civico:</lable>
                <input type="number" name="Civico" id="Civico" required>
                <lable for="Revisione">Revisione:</lable>
                <input type="date" name="Revisione" id="Revisione" required>
                <input type="submit" class="bottone" value="Inserire un nuovo strumento di soccorso">
            </form>
        </div>

        <div id="query6" class="queries">
            <h2>inserisci una nuova chiamata</h2>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name="InsertChiamata" value="6">
                <lable for="PazienteChiamata">Paziente:</lable>
                <input type="text" name="PazienteChiamata" id="PazienteChiamata" required>
                <lable for="OperatoreChiamata">Operatore:</lable>
                <input type="text" name="OperatoreChiamata" id="OperatoreChiamata" required>
                <lable for="Data">Data:</lable>
                <input type="date" name="Data" id="Data" required>
                <lable for="Ora">Ora:</lable>
                <input type="time" name="Ora" id="Ora" required>
                <lable for="CAP">CAP:</lable>
                <input type="number" name="CAP" id="CAP" required>
                <lable for="Via">Via:</lable>
                <input type="text" name="Via" id="Via" required>
                <lable for="Civico">Civico:</lable>
                <input type="number" name="Civico" id="Civico" required>
                <input type="submit" class="bottone" value="Inserire una nuova chiamata">
            </form>
        </div>

        <div id="query7" class="queries">
            <h2>inserisci una nuova segnalazione</h2>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name="InsertSegnalazione" value="7">
                <lable for="OperatoreSegnalazione">Operatore:</lable>
                <input type="text" name="OperatoreSegnalazione" id="OperatoreSegnalazione"  required>
                <lable for="SoccorritoreSegnalazione">Soccorritore:</lable>
                <input type="text" name="SoccorritoreSegnalazione" id="SoccorritoreSegnalazione"  required>
                <lable for="MezzoSoccorsoSegnalazione">Mezzo di Soccorso:</lable>
                <input type="text" name="MezzoSoccorsoSegnalazione" id="MezzoSoccorsoSegnalazione" required>
                <lable for="Data">Data:</lable>
                <input type="date" name="Data" id="Data" required>
                <lable for="Ora">Ora:</lable>
                <input type="time" name="Ora" id="Ora" required>
                <lable for="Priorita">Priorità:</lable>
                <input type="number" name="Priorita" id="Priorita" required>
                <input type="submit" class="bottone" value="Inserire una nuova segnalazione">
            </form>
        </div>

        <div id="query8" class="queries">
            <h2>inserisci una nuova manovra di soccorso</h2>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name="InsertManovraSoccorso" value="8">
                <lable for="OperatoreManovra">Operatore:</lable>
                <input type="text" name="OperatoreManovra" id="OperatoreManovra" required>
                <lable for="SoccorritoreManovra">Soccorritore:</lable>
                <input type="text" name="SoccorritoreManovra" id="SoccorritoreManovra" required>
                <lable for="MezzoSoccorsoManovra">Mezzo di Soccorso:</lable>
                <input type="text" name="MezzoSoccorsoManovra" id="MezzoSoccorsoManovra" required>
                <lable for="Tipologia">Tipologia:</lable>
                <input type="text" name="Tipologia" id="Tipologia" required>
                <lable for="cIdentificativo">Codice Identificativo:</lable>
                <input type="number" name="cIdentificativo" id="cIdentificativo" required>
                <input type="submit" class="bottone" value="Inserire una nuova manovra di soccorso">
            </form>
        </div>

        <div id="query9" class="queries">
            <h2>visualizzazione segnalazioni</h2>
            <p>selezionare una data per visualizzare<br>le annesse segnalazioni</p>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name="query" value="9">
                <lable for="Data">Data:</lable>
                <input type="date" name="Data" id="Data" required>
                <input type="submit" class="bottone" value="Visualizza segnalazioni">
            </form>
        </div>

        <div id="query10" class="queries">
            <h2>visualizzazione chiamate</h2>
            <p>selezionare una data per visualizzare<br>le annesse chiamate</p>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name="query" value="10">
                <lable for="Data">Data:</lable>
                <input type="date" name="Data" id="Data" required>
                <input type="submit" class="bottone" value="Visualizza chiamate">
            </form>
        </div>

        <div id="query11" class="queries">
            <h2>Revisioni da Aggiornare</h2>
            <p>visualizzazione dei dispositivi medici<br>la cui revisione è scaduta in data</p>
            <h3><span id="dataOdierna"></span></h3>
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
            <h3><span id="dataOdierna"></span></h3>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name="query" value="13">
                <lable for="Soccorritore">Soccorritore:</lable>
                <input type="text" name="Soccorritore" id="Soccorritore" required>
                <input type="submit" class="bottone" value="Visualizza chiamate ricevute">
            </form>
        </div>

        <div id="query14" class="queries">
            <h2>Età media dei pazienti</h2>
            <p>l'eta media dei pazienti risulta essere:</p>
        </div>

        <div id="query15" class="queries">
            <h2>Mezzi di Soccorso</h2>
            <p>selezionare un ente fornitore per visualizzare<br>i mezzi di soccorso forniti</p>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name="query" value="15">
                <lable for="Fornitore">Fornitore:</lable>
                <input type="text" name="Fornitore" id="Fornitore" required>
                <input type="submit" class="bottone" value="Visualizza mezzi di trasporto">
            </form>
        </div>

        <div id="query16" class="queries">
            <h2>Manovre si Soccorso</h2>
            <p>selezionare una tipologia di manovra di<br>soccorso per visualizzare quelle eseguite</p>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name="query" value="16">
                <lable for="Tipologia">Tipologia:</lable>
                <input type="text" name="Tipologia" id="Tipologia" required>
                <input type="submit" class="bottone" value="Visualizza manovre di soccorso">
            </form>
        </div>

    </div>
    <script src="../js/script.js"></script>
</body>


</html>