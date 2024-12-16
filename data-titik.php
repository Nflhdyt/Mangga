<?php
$servername = "localhost";
$username = "root"; // Ganti dengan username Anda
$password = ""; // Ganti dengan password Anda
$dbname = "manggaindramayu"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data koordinat
$sql = "SELECT latitude, longitude, nama FROM kebun_mangga";
$result = $conn->query($sql);

// Membuat array untuk menyimpan data GeoJSON
$geojson = array(
    'type' => 'FeatureCollection',
    'features' => array()
);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $feature = array(
        'type' => 'Feature',
        'geometry' => array(
            'type' => 'Point',
            'coordinates' => array((float)$row['longitude'], (float)$row['latitude'])
        ),
        'properties' => array(
            'nama' => $row['nama']
        )
    );
    $geojson['features'][] = $feature;
}}

// Menampilkan data dalam format JSON
header('Content-Type: application/json');
echo json_encode($geojson);

// Menutup koneksi
$conn->close();
?>
