<!-- search.php -->
<?php
include 'condb.php';

if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($condb, $_GET['search']);

    $sql = "SELECT * FROM tbl_list WHERE Code_Device LIKE '%$search%'";
    $result = mysqli_query($condb, $sql);

    if ($result) {
        echo "<html><head><link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css' integrity='sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu' crossorigin='anonymous'></head><body><div class='container'><h2>Search Results</h2>";

        if (mysqli_num_rows($result) > 0) {
            echo "<table class='table table-bordered'><thead><tr><th>ID</th><th>Code Device</th><th>Type Device</th><th>Room</th></tr></thead><tbody>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>{$row['ID']}</td><td>{$row['Code_Device']}</td><td>{$row['Type_Device']}</td><td>{$row['Room']}</td></tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<p>No results found.</p>";
        }

        echo "</div></body></html>";
    } else {
        echo "Error in SQL: " . mysqli_error($condb);
    }
}

mysqli_close($condb);
?>
