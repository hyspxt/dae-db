<?php
$db = new SQLite3('../../dae.db');

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

function printTable($result, $tableName){
    if (empty($result)) {
        echo "<p>Nessun dato trovato nella tabella.</p>";
    } else {
        echo "<table id=$tableName>";
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
function getResult($query){
    global $db;

    // Execute the query
    $result = $db->query($query);

    $data = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $data[] = $row;
    }
    return $data;
}
$db->close();
?>