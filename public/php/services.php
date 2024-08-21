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
    $db->exec("INSERT INTO Paziente (CodFiscale, Nome, Cognome, Sesso, Eta, CondMediche) VALUES ('$CodFiscale', '$Nome', '$Cognome', '$Sesso', '$Eta', '$CondMediche')");
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
    $db->exec("INSERT INTO Soccoritore (CodFiscale, Nome, Cognome, Sesso, Eta, CAP, Via, Civico, Cellulare, Email, Certificato) VALUES ('$CodFiscale', '$Nome', '$Cognome', '$Sesso', '$Eta', '$CAP', '$Via', '$Civico', '$Cellulare', '$Email', '$Certificato')");
}

// Esecuzione inserimento di un nuovo operatore
if (isset($_POST['InsertOperatore'])) {
    $CodFiscale = $_POST['CodFiscale'];
    $Nome = $_POST['Nome'];
    $Cognome = $_POST['Cognome'];
    $Sesso = $_POST['Sesso'];
    $Eta = $_POST['Eta'];
    $LineaTel = $_POST['LineaTel'];
    $db->exec("INSERT INTO Operatore (CodFiscale, Nome, Cognome, Sesso, Eta, LineaTel) VALUES ('$CodFiscale', '$Nome', '$Cognome', '$Sesso', '$Eta', '$LineaTel')");
}

// Esecuzione inserimento di un nuovo mezzo di soccorso
if (isset($_POST['InsertMezzoSoccorso'])) {
    $Targa = $_POST['Targa'];
    $Fornitore = $_POST['Fornitore'];
    $db->exec("INSERT INTO MezzoSoccorso (Targa, Fornitore) VALUES ('$Targa', '$Fornitore')");
}

// Esecuzione inserimento di un nuovo strumento di soccorso
if (isset($_POST['InsertStrumentoSoccorso'])) {
    $ID = $_POST['ID'];
    $Tipologia = $_POST['Tipologia'];
    $CAP = $_POST['CAP'];
    $Via = $_POST['Via'];
    $Civico = $_POST['Civico'];
    $Revisione = $_POST['Revisione'];
    $db->exec("INSERT INTO StrumentoSoccorso (ID, Tipologia, CAP, Via, Civico, Revisione) VALUES ('$ID', '$Tipologia', '$CAP', '$Via', '$Civico', '$Revisione')");
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
                <input type="text" name="CodFiscale" id="CodFiscale">
                <lable for="Nome">Nome:</lable>
                <input type="text" name="Nome" id="Nome">
                <lable for="Cognome">Cognome:</lable>
                <input type="text" name="Cognome" id="Cognome">
                <lable for="Sesso">Sesso:</lable>
                <input type="text" name="Sesso" id="Sesso">
                <lable for="Eta">Etá:</lable>
                <input type="text" name="Eta" id="Eta">
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
                <input type="text" name="CodFiscale" id="CodFiscale">
                <lable for="Nome">Nome:</lable>
                <input type="text" name="Nome" id="Nome">
                <lable for="Cognome">Cognome:</lable>
                <input type="text" name="Cognome" id="Cognome">
                <lable for="Sesso">Sesso:</lable>
                <input type="text" name="Sesso" id="Sesso">
                <lable for="Eta">Etá:</lable>
                <input type="text" name="Eta" id="Eta">
                <lable for="CAP">CAP:</lable>
                <input type="text" name="CAP" id="CAP">
                <lable for="Via">Via:</lable>
                <input type="text" name="Via" id="Via">
                <lable for="Civico">Civico:</lable>
                <input type="text" name="Civico" id="Civico">
                <lable for="Cellulare">Cellulare:</lable>
                <input type="text" name="Cellulare" id="Cellulare">
                <lable for="Email">Email:</lable>
                <input type="text" name="Email" id="Email">
                <lable for="Certificato">Certificato:</lable>
                <input type="text" name="Certificato" id="Certificato">
                <input type="submit" class="bottone" value="Inserisci un nuovo soccoritore">
            </form>
        </div>

        <div id="query3" class="queries">
            <h2>Inserisci un nuovo operatore</h2>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name ="InsertOperatore" value="3">
                <lable for="CodFiscale">Codice Fiscale:</lable>
                <input type="text" name="CodFiscale" id="CodFiscale">
                <lable for="Nome">Nome:</lable>
                <input type="text" name="Nome" id="Nome">
                <lable for="Cognome">Cognome:</lable>
                <input type="text" name="Cognome" id="Cognome">
                <lable for="Sesso">Sesso:</lable>
                <input type="text" name="Sesso" id="Sesso">
                <lable for="Eta">Etá:</lable>
                <input type="text" name="Eta" id="Eta">
                <lable for="LineaTel">Linea Telefonica:</lable>
                <input type="text" name="LineaTel" id="LineaTel">
                <input type="submit" class="bottone" value="Inserisci un nuovo operatore">
            </form>
        </div>

        <div id="query4" class="queries">
            <h2>Inserisci un<br>nuovo mezzo di soccorso</h2>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name="InsertMezzoSoccorso" value="4">
                <lable for="Targa">Targa:</lable>
                <input type="text" name="Targa" id="Targa">
                <lable for="Fornitore">Fornitore:</lable>
                <input type="text" name="Fornitore" id="Fornitore">
                <input type="submit" class="bottone" value="Inserire un nuovo mezzo di soccorso">
            </form>
        </div>

        <div id="query5" class="queries">
            <h2>Inserisci un nuovo<br>strumento di soccorso</h2>
            <form action="services.php" method="post" class="formQuery">
                <input type="hidden" name="InsertStrumentoSoccorso" value="5">
                <lable for="ID">ID:</lable>
                <input type="text" name="ID" id="ID">
                <lable for="Tipologia">Tipologia:</lable>
                <input type="text" name="Tipologia" id="Tipologia">
                <lable for="CAP">CAP:</lable>
                <input type="text" name="CAP" id="CAP">
                <lable for="Via">Via:</lable>
                <input type="text" name="Via" id="Via">
                <lable for="Civico">Civico:</lable>
                <input type="text" name="Civico" id="Civico">
                <lable for="text" name="Revisione" id="Revisione">
                <input type="submit" class="bottone" value="Inserire un nuovo strumento di soccorso">
            </form>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>


</html>