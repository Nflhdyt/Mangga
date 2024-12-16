<?php
$nama = $_POST['nama'];
$latitude = $_POST['latitude'];  // Menangkap nilai latitude
$longitude = $_POST['longitude'];  // Menangkap nilai longitude

// Sesuaikan dengan setting MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manggaindramayu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Query
$sql = "INSERT INTO kebun_mangga (nama, latitude, longitude)
VALUES ('$nama', $latitude, $longitude)";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

