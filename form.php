<!DOCTYPE html>
<html>

<head>
    <!-- Tambahkan Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto&display=swap"
            rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <integrity="sha384-EOaRdIlalImWBlbo5+EbCNSu2R10ERDpSNmIuRfiBFts2UrGaS08qjTUlrdg4FgH" crossorigin="anonymous" />
        <title>Mangga</title>
    
        <link rel="stylesheet" href="styles.css">

    <style>
        body {
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    padding-top: 10px; /* Jarak tambahan untuk navbar */
    align-items: center;
    height: 200vh;
}

        /* Form Responsif yang Lebih Lebar */
        form {
    background-color: #e0e0e0;
    padding: 10px 20px;
    border-radius: 15px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    max-width: 1500px;
    width: 100%;
    margin: 30px auto;
    box-sizing: border-box;
    z-index: 1; /* Menjamin form tidak tertutup navbar */
    position: relative; /* Menghindari form tertutup oleh navbar */
    padding-top: 25px; /* Memberikan ruang agar form tidak tumpang tindih dengan navbar */
}

/* Table Container Responsif yang Lebih Luas */
.table-container {
    overflow-x: auto; /* Menambahkan scroll horizontal jika tabel terlalu lebar */
    margin-top: 20px;
}
input[type="text"] {
    width: 100%;
    padding: 12px 10px 12px 35px; /* Menambah padding untuk kenyamanan */
    border: 1px solid #ccc;
    border-radius: 10px;
    font-size: 16px;
    color: #333;
    background-color: #f7f7f7;
    transition: border-color 0.3s ease;
    box-sizing: border-box;
}
.table {
    width: 100%;
    margin: auto;
    table-layout: fixed; /* Agar kolom lebih rata */
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    form {
        padding: 20px;
    }

    input[type="text"], input[type="submit"] {
        font-size: 14px;
        padding: 10px;
    }

    .table {
        font-size: 14px; /* Ukuran teks tabel lebih kecil di layar lebih kecil */
    }
}

@media (max-width: 480px) {
    form {
        padding: 15px;
        box-shadow: none; /* Hilangkan bayangan di layar kecil */
    }

    input[type="text"], input[type="submit"] {
        font-size: 14px;
        padding: 8px;
    }

    h2 {
        font-size: 20px;
    }

    .info-box {
        font-size: 12px;
        padding: 10px;
    }

    .table {
        font-size: 12px; /* Ukuran teks lebih kecil */
    }
}

/* Tabel Basis Data */
body {
    font-family: Arial, sans-serif;
    background-color: #e9f5e9; /* Latar belakang hijau muda */
    margin: 0;
    padding: 20px;
}

h1 {
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

table {
    width: 80%; /* Ukuran tabel lebih sempit */
    margin: 0 auto; /* Centering the table */
    border-collapse: collapse;
    font-size: 18px;
    background-color: #fefefe; /* Latar belakang tabel */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    outline: 2px solid #4CAF50; /* Garis outline berwarna hijau */
    transition: transform 0.2s; /* Animasi saat hover */
}
table thead {
    background-color: #87ceeb;
    color: white;
}

table th, table td {
    padding: 15px 20px; /* Menambah padding kiri dan kanan */
    border-bottom: 1px solid #ddd;
    text-align: center;
}

table tr:last-child td {
    border-bottom: none;
}

table td a {
    color: #ff5c5c; /* Warna link */
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s; /* Animasi saat hover pada link */
}

table td a:hover {
    color: #ff1a1a; /* Warna link saat hover */
}


        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        .input-container {
            position: relative;
            margin-bottom: 15px;
        }

        .input-container i {
            position: absolute;
            top: 12px;
            left: 10px;
            color: #666;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px 10px 10px 35px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
            color: #333;
            background-color: #f7f7f7;
            transition: border-color 0.3s ease;
            box-sizing: border-box;
        }

        input[type="text"]:focus {
            border-color: #4caf50;
            outline: none;
            background-color: #fff;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #3b82f6;
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        input[type="submit"]:hover {
            background-color: #e11d48;
            transform: scale(1.05);
        }

        input[type="submit"]:active {
            transform: scale(1);
        }

        #informasi {
            color: #e11d48;
            font-size: 14px;
            text-align: center;
            margin-top: 15px;
        }

        .divider {
            width: 100%;
            height: 1px;
            background-color: #ddd;
            margin: 20px 0;
        }

        .info-box {
    background-color: #b3e5fc;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    color: #0288d1;
    font-weight: bold;
    margin-bottom: 25px; /* Memberikan jarak lebih besar antar elemen */
        }

        .info-box:hover {
            background-color: #81d4fa;
        }

        @media (max-width: 768px) {
            form {
                max-width: 90%;
                /* Di layar lebih kecil, form jadi 90% lebar layar */
            }

            input[type="text"],
            input[type="submit"] {
                font-size: 14px;
                padding: 8px;
            }
        }

        @media (max-width: 480px) {
            form {
                padding: 15px;
                width: 100%;
                box-shadow: none;
            }

            input[type="text"],
            input[type="submit"] {
                font-size: 14px;
                padding: 8px;
            }
        }

        /* Mengatur Navbar tanpa latar belakang */
        nav.navbar {
            background: none;
            padding: 10px 0;
            border-bottom: 1px solid #e0e0e0;
            z-index: 10;
            /* Garis tipis di bawah navbar */
        }

        nav a.nav-link {
            font-weight: normal;
            font-size: 16px;
            text-transform: uppercase;
            margin-right: 15px;
            transition: color 0.3s ease;
        }

        nav a.nav-link:hover {
            color: #6b8e23;
            /* Hijau gelap saat hover */
            text-decoration: none;
        }
        .table-container {
    overflow-x: auto;
    margin-top: 30px; /* Memberikan jarak yang lebih besar di atas tabel */
}

/* Padding untuk button submit lebih besar */
input[type="submit"] {
    width: 100%;
    padding: 14px;
    background-color: #3b82f6;
    color: white;
    border: none;
    border-radius: 50px;
    font-size: 18px; /* Mengubah ukuran font untuk lebih besar */
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}
    </style>
</head>

<body>
    <!-- Sticky Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <!-- Brand Logo -->
            <a class="navbar-brand" href="./Index.html">Mangga</a>
            <!-- Toggle Button for Responsive Navbar -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="./Index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./map.html">Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./form.html">Form</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Statistik.html">Statistic</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <form action="input.php" onsubmit="return validateForm()" method="post">
        <h2 class="text-center">Formulir Penginputan Kebun</h2>

        <div class="info-box">
            <i class="bi bi-info-circle"></i> Masukkan data dengan benar!
        </div>

        <label for="nama">Nama Kebun:</label>
        <div class="input-container">
            <i class="bi bi-building"></i>
            <input type="text" id="nama" name="nama" placeholder="Nama Kebun" />
        </div>

        <label for="latitude">Latitude:</label>
        <div class="input-container">
            <i class="bi bi-geo-alt"></i>
            <input type="text" id="latitude" name="latitude" placeholder="Latitude" />
        </div>

        <label for="longitude">Longitude:</label>
        <div class="input-container">
            <i class="bi bi-geo-alt-fill"></i>
            <input type="text" id="longitude" name="longitude" placeholder="Longitude" />
        </div>

        <input type="submit" value="Submit" />

        <p id="informasi"></p>
    </form>


    <!-- Table -->
    <div class="container mt-4 table-container">
    <h3 class="text-center">Data Kebun Mangga</h3>
    <table class="table table-hover table-bordered">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Nama Kebun</th>
                <th>Latitude</th>
                <th>Longitude</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = new mysqli("localhost", "root", "", "manggaindramayu");
            if ($conn->connect_error) die("Koneksi gagal: " . $conn->connect_error);
            $result = $conn->query("SELECT id, nama, latitude, longitude FROM kebun_mangga");
            if ($result->num_rows > 0) {
                $no = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$no}</td>
                        <td>{$row['nama']}</td>
                        <td>{$row['latitude']}</td>
                        <td>{$row['longitude']}</td>
                    </tr>";
                    $no++;
                }
            } else echo "<tr><td colspan='4' class='text-center'>Tidak ada data</td></tr>";
            $conn->close();
            ?>
        </tbody>
    </table>
</div>




    <script>
        function validateForm() {
            const latitude = document.getElementById("latitude").value;
            const longitude = document.getElementById("longitude").value;

            let errorMessage = "";

            // Validasi latitude
            if (isNaN(latitude) || latitude < -90 || latitude > 90) {
                errorMessage += "Latitude harus berupa angka antara -90 dan 90.<br>";
            }

            // Validasi longitude
            if (isNaN(longitude) || longitude < -180 || longitude > 180) {
                errorMessage += "Longitude harus berupa angka antara -180 dan 180.<br>";
            }

            // Tampilkan pesan kesalahan jika ada
            if (errorMessage) {
                document.getElementById("informasi").innerHTML = errorMessage;
                return false; // Hentikan submit form
            }
            return true; // Lolos validasi
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAJ8IuBi1o0j3U02fSiOjCu3ABR"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-MrcW6ZMFy5mURk35SpNpUhBVfBfiCVcxYGTBUtsBIFjZDZ10vo50I1y3JE6dNX+j"
        crossorigin="anonymous"></script>
</body>

</html>