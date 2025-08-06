<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_sekolah";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
function select($query) {
    global $conn;
    $result = $conn->query($query);
    $rows = [];
    if ($result && $result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    }
    return $rows;
}