<?php
$db = new SQLite3('../../dae.db'); /* sqlLite connection */

/*
    * Function to get all tables name from the database
    * @param $db: connection to db
    * @return: all tables names
*/
function getTables($db)
{
    $query = "SELECT name FROM sqlite_master WHERE type='table' AND name NOT LIKE 'sqlite_%';";
    return $db->query($query);
}

/*
    * Function to get all data from a table
    * @param $db: connection to db
    * @param $table: table name
    * @return: all data from the table
*/
function getTableData($db, $table)
{
    $query = "SELECT * FROM $table";
    return $db->query($query);
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progetto Basi di Dati</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />

    <!-- Inclusions for css and fonts  -->
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

    <div class="content" style="font-family: 'Roboto', sans-serif;">
        <form method="POST" action="">
            <select name="select_table" id="select_table" class="formSelezioneLabel" onchange="this.form.submit()">
                <option value=""> Seleziona una tabella </option>
                <?php
                $results = getTables($db);
                while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
                    /* mantain current choice */
                    $selected = (isset($_POST['select_table']) && $_POST['select_table'] === $row['name']) ? 'selected' : '';
                    echo '<option value="' . $row['name'] . '" ' . $selected . '>' . $row['name'] . '</option>';
                }
                ?>
            </select>
        </form>

        <div id="tableCard" class="card m-5">
            <h5 class="card-header" style="background-color: #2c3e50; color: white;">  </h5>
            <div class="card-body">
                <?php
                if (isset($_POST['select_table']) && $_POST['select_table'] !== '') {
                    $table = $_POST['select_table'];
                    $dataResults = getTableData($db, $table);
                    if ($dataResults) { /* check if the selected table is non void */
                        echo "<table id='dynamicTable' class='table table-striped w-100'>";
                        echo "<thead><tr>";
                        $firstRow = $dataResults->fetchArray(SQLITE3_ASSOC);
                        if ($firstRow) {
                            foreach ($firstRow as $columnName => $value) {
                                echo "<th>" . htmlspecialchars($columnName) . "</th>";
                            }
                            echo "</tr></thead><tbody>";

                            /* first row for data check */
                            echo "<tr>";
                            foreach ($firstRow as $value) {
                                echo "<td>" . htmlspecialchars($value) . "</td>";
                            }
                            echo "</tr>";

                            /* all other rows */
                            while ($row = $dataResults->fetchArray(SQLITE3_ASSOC)) {
                                echo "<tr>";
                                foreach ($row as $value) {
                                    echo "<td>" . htmlspecialchars($value) . "</td>";
                                }
                                echo "</tr>";
                            }
                            echo "</tbody></table>";
                        } else {
                            echo "Nessun dato trovato nella tabella.";
                        }
                    } else
                        echo "Errore nel recupero dei dati.";
                } /* close tha connection */
                $db->close();
                ?>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#dynamicTable').DataTable();
            $('#tableCard').hide();
            var selectedTable = $('#select_table').val();
            if (selectedTable !== ""){
                $('.card-header').text(selectedTable);
                $('#tableCard').show();
            }
        });
    </script>

</body>

</html>