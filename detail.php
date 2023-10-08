<?php
    $servername = "sql309.infinityfree.com"; // Ganti dengan nama server Anda
    $username = "if0_34779797"; // Ganti dengan username database Anda
    $password = "02FM1qW5Y1cxxt"; // Ganti dengan password database Anda
    $dbname = "if0_34779797_post"; // Ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Ambil ID postingan dari parameter URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mengambil data postingan berdasarkan ID
    $sql = "SELECT * FROM postingan WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $judul = $row["judul"];
        $konten = $row["konten"];
    } else {
        echo "Postingan tidak ditemukan.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link href='style.css' rel='stylesheet' type='text/css'>

<link href='web/css/style.css' rel='stylesheet' type='text/css'>
    <title>Detail Postingan</title>
</head>
<body>
<div class="body">
<div class="pengaturan_tengah">
<div class="card-view3">
    <h1><?php echo $judul; ?></h1>
    <p><?php echo $konten; ?></p>
    <a href="index.php">Kembali ke Daftar Postingan</a>
</div>
</div>
</div>
</body>

</html>

<?php
// Tutup koneksi ke database
$conn->close();
?>