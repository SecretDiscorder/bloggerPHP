<?php
if (isset($_POST['submit3'])) {
		$nama = $_FILES['upload']['name'];
		$lokasi = $_FILES['upload']['tmp_name'];
		$namabaru = "gambar_3.jpg";
		move_uploaded_file($lokasi, "gambar/".$namabaru);
		header("Location: halaman_gallery.php");
		echo "gambar telah diupload !";
	}
?>