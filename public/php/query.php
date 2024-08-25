<?php

// Connessione al database SQLite
$db = new SQLite3('../../dae.db');

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

        echo "<script type='text/javascript'>alert('$message'); window.location.href = 'services.php';</script>";
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
        
        echo "<script type='text/javascript'>alert('$message'); window.location.href = 'services.php';</script>";
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

        echo "<script type='text/javascript'>alert('$message'); window.location.href = 'services.php';</script>";
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

        echo "<script type='text/javascript'>alert('$message'); window.location.href = 'services.php';</script>";
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

        echo "<script type='text/javascript'>alert('$message'); window.location.href = 'services.php';</script>";
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

        echo "<script type='text/javascript'>alert('$message'); window.location.href = 'services.php';</script>";
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

        echo "<script type='text/javascript'>alert('$message'); window.location.href = 'services.php';</script>";
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

        echo "<script type='text/javascript'>alert('$message'); window.location.href = 'services.php';</script>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['query'])) {
    switch ($_POST['query']) {
        case 9:
            $Data = $_POST['Data'];
            $query = "SELECT * FROM Segnalazione WHERE Data = '$Data'";
            $tableName = "table9";
            break;

        case 10:
            $Data = $_POST['Data'];
            $query = "SELECT * FROM Chiamata WHERE Data = '$Data'";
            $tableName = "table10";
            break;

        case 11:
            $dataOdierna = date('Y-m-d');
            $query = "SELECT * FROM StrumentoSoccorso WHERE Revisione < '$dataOdierna'";
            $tableName = "table11";
            break;

        case 12:
            $query = "SELECT * FROM Soccorritore WHERE CodFiscale IN (SELECT Soccorritore FROM ManovraSoccorso)";
            $tableName = "table12";
            break;

        case 13:
            $Soccorritore = $_POST['Soccorritore'];
            $dataOdierna = date('Y-m-d');
            $query = "SELECT * FROM Chiamata WHERE Data = '$dataOdierna' AND Operatore = '$Soccorritore'";
            $tableName = "table13";
            break;

        case 15:
            $Fornitore = $_POST['Fornitore'];
            $query = "SELECT * FROM MezzoDiSoccorso WHERE Fornitore = '$Fornitore'";
            $tableName = "table15";
            break;

        case 16:
            $Tipologia = $_POST['Tipologia'];
            $query = "SELECT * FROM ManovraDiSoccorso WHERE Tipologia = '$Tipologia'";
            $tableName = "table16";
            break;

        default:
            echo "Invalid query parameter.";
            break;
    }
    $result = getResult($query);
    printTable($result, $tableName);
}

// Esecuzione della query 14
$result = $db->query("SELECT AVG(Eta) AS eta_media FROM Paziente");
$eta_media = $result->fetchArray(SQLITE3_ASSOC)['eta_media'];

// Stampa la query
function printTable($result, $tableName){
    if (empty($result)) {
        echo "<p>Nessun dato trovato nella tabella.</p>";
    } else {
        echo "<table id=$tableName class='table table-striped w-100'>";
        echo "<thead><tr>";
        $firstRow = $result[0];
        foreach ($firstRow as $columnName => $value) {
            echo "<th>" . htmlspecialchars($columnName) . "</th>";
        }
        echo "</tr></thead><tbody>";

        foreach ($result as $row) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
    }
}

// Esegue la query e restituisce i risultati
function getResult($query){
    global $db;

    $result = $db->query($query);

    $data = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $data[] = $row;
    }
    return $data;
}

// Chiude la connessione al database
$db->close();
?>