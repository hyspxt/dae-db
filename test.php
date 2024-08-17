<?php
// Connessione al database SQLite
$db = new SQLite3('new.db');

// Esecuzione di una query per recuperare un dato
$result = $db->query('SELECT * FROM users LIMIT 1');
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
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <div class="navbar">
        <ul>
            <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="test.php" class="active"><i class="fas fa-info-circle"></i> Database </a></li>
            <li><a href="#services"><i class="fas fa-cogs"></i> Query </a></li>
        </ul>
    </div>
    <div class="content">
        <header>
            <h1>User Data</h1>
            <p>Username: <?php echo $user['username']; ?></p>
            <p>Email: <?php echo $user['email']; ?></p>
        </header>
    </div>
    <script src="script.js"></script>
</body>

</html>