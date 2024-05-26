<?php   
 require "koneksi.php";

$id = $_GET["id"];
$query = "DELETE FROM temp WHERE id = '$id'";

if (mysqli_query($conn, $query) === TRUE) {
    header("location: ../layanan.php?batal=true");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
