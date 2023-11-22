<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "2106147_rulimk";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $kelas = $_POST["kelas"];

    $sql = "INSERT INTO siswa (nama, alamat, tanggal_lahir, jenis_kelamin, kelas)
            VALUES ('$nama', '$alamat', '$tanggal_lahir', '$jenis_kelamin', '$kelas')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan ke dalam database.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
