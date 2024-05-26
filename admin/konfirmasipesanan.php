<?php
require "function.php";

$id = $_GET["id"];
// query data penyewa berdasarka id
$hasil = mysqli_query($conn, "SELECT * FROM temp, users WHERE temp.id = '$id' AND
        temp.email = users.email");


while ($row = mysqli_fetch_array($hasil)) {
    $nama = $row['nama'];
    $email = $row['email'];
    $alamat = $row['alamat'];
    $no_hp = $row['no_hp'];
    $layanan = $row['layanan'];
    $paket = $row['paket'];
    $harga = $row['harga'];
    $tanggal_pemesanan = $row['tanggal_pemesanan'];
}



    $query = "INSERT INTO services   VALUES ('$id', '$nama', '$email', '$alamat' , '$no_hp', '$layanan', '$paket', $harga, '$tanggal_pemesanan' )";

    $updatedesk = "UPDATE temp SET desk = 'Pesanan Telah Dikonfirmasi'
        WHERE id = '$id'";


if ($conn->query($query) === TRUE && $conn->query($updatedesk) === TRUE) {
    header("location: konfirmasi.php?sukses=true");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
