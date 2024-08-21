<?php
// Connessione al database SQLite
$db = new SQLite3('../../dae.db');

// Esecuzione di una query per recuperare un dato
$result = $db->query('SELECT * FROM Paziente WHERE CodFiscale = "RSSMRA85M01H501Z"');
$user = $result->fetchArray(SQLITE3_ASSOC);

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
            <li><a href="sample.php" class="active"><i class="fas fa-info-circle"></i> Database </a></li>
            <li><a href="services.php"><i class="fas fa-cogs"></i> Query </a></li>
        </ul>
    </div>
    <div class="content">
        <header>
            <h1>Esempio di paziente: </h1>
            <p>Codice Fiscale : <?php echo $user['CodFiscale']; ?></p>
            <p>Nome : <?php echo $user['Nome']; ?></p>
            <p>Cognome: <?php echo $user['Cognome']; ?></p>
            <p>Sesso: <?php echo $user['Sesso']; ?></p>
            <p>Etá: <?php echo $user['Eta']; ?></p>
            <p>Condizioni mediche rilevanti: <?php echo $user['CondMediche']; ?></p>
        </header>
    </div>
    <script src="../js/script.js"></script>
</body>

</html>