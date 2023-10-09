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

// Query untuk mengambil data postingan dari database
$sql = "SELECT * FROM postingan";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="id">
    <head>
        <title>Latihan Website</title>
        <link rel="stylesheet" href="style.css">
        <style>
            .Pengaturan_tengah {
                background-image: url("background.jpg");
                width: 100%;
                margin: 0px auto 0px auto;
                margin-left: auto;
                margin-right: auto;
            }

            nav {
                margin: auto;
                text-align: center;
                width: 100%;
                font-family: arial;
            }

            .foo {
                width: 1000px;
            }

            // Mobile:
            @media (max-width: 600px) {
                .foo {
                    width: 500px;
                }
            }

            nav ul {
                background: #37988e;
                padding: 0 20px;
                list-style: none;
                position: relative;
                display: inline-table;
                width: 100%;
            }

            nav ul li {
                float: left;
            }

            nav ul li:hover {
                background: #d68d9a;
            }

            nav ul li:hover a {}

            nav ul li a {
                display: block;
                padding: 25px;
                text-decoration: none;
            }

            .card-view3 {
                border-radius: 10px;
                margin: 0px auto 0px auto;
                opacity: 1;
                width: 100%;
                background-color: gray;
            }

            h1,
            p,
            h2,
            b {
                opacity: 100%;
            }

            table,
            th,
            td {
                background-color: cyan;
                border: 5px solid;
                border-radius: 20px;
                border-color: cyan;
                text-align: left;
            }

            ul,
            li {
                border-radius: 20px;
            }

            .card img {
                box-shadow: 0 0 0 5px #FFF;
                justify-content: center;
            }

            .infos {
                margin-left: 1.5rem;
            }

            .name {
                margin-bottom: 1rem;
            }
#btn{
	width: 99%;
	padding: 3%;
	margin-bottom: 8%;
	background: cyan;
	font-family: 'Open Sans', sans-serif;
	color: #ECECEC;
	box-shadow: inset 0px 0px 10px #666464;
	-webkit-text-shadow: 0px 0px 3px #000;
	-moz-text-shadow: 0px 0px 3px #000;
	-o-text-shadow: 0px 0px 3px #000;
	-ms-text-shadow: 0px 0px 3px #000;
	font-size: 20px;
	outline: none;
	border: none;
	cursor: pointer;
	font-weight:500;
	border-radius: 5px;
	transition: 0.5s;
	-webkit-appearance:none;
	-webkit-transition: 0.5s;
	-moz-transition: 0.5s;
	-o-transition: 0.5s;
	-ms-transition: 0.5s;
}

#btn:hover{
	background: cyan;
	color:#fff;
}
            .name h2 {
                font-size: 1.3rem;
            }

            .name h4 {
                font-size: .8rem;
                color: #333
            }

            .text {
                font-size: .9rem;
                margin-bottom: 1rem;
            }

            body {
                font-family: 'Poppins', sans-serif;
                margin: 0;
                width: 100%;
                background-color: #ADE5F9;
                background-position: fixed;
                background-height: auto;
                background-repeat: no-repeat;
            }

            @media (max-width: 1000px) {
                .body {
                    width: 100%;
                }
            }

            .button {
                border-radius: 30%;
                background-color: rgba(255, 255, 255, .5);
                box-shadow: 0 0 30px rgba(0, 0, 0, .15);
                opacity: 1;
                text-align: center;
            }

            .card_view2 {
                opacity: 0.5;
                width: 100%;
                position: absolute;
                left: 0;
                right: 0;
                margin: 0;
                padding: 2.5rem 2rem;
                border-radius: 10px;
                background-color: rgba(255, 255, 255, .5);
                box-shadow: 0 0 30px rgba(0, 0, 0, .15);
                margin: 0px auto 0px auto;
                position: relative;
                transform-style: preserve-3d;
                overflow: hidden;
                border-radius: 30px;
                opacity: 1;
            }

            .card {
                padding: 2.5rem 2rem;
                border-radius: 10px;
                background-color: rgba(255, 255, 255, .5);
                height: auto;
                width: 100%;
                box-shadow: 0 0 30px rgba(0, 0, 0, .15);
                margin: 0px auto 0px auto;
                position: relative;
                transform-style: preserve-3d;
                overflow: hidden;
                opacity: 1;
            }
        </style>
        <title>Belajar HTML Dasar | Jago Ngoding</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
        <link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!--<link href="web/css/login.css" rel="stylesheet" type="text/css" media="all" />-->
        <!--slider-->
        <link href="web/css/camera.css" rel="stylesheet" type="text/css" media="all" />
        <script type='text/javascript' src="web/js/jquery.min.js"></script>
        <script type='text/javascript' src="web/js/jquery.mobile.customized.min.js"></script>
        <script type='text/javascript' src="web/js/jquery.easing.1.3.js"></script>
        <script type='text/javascript' src="web/js/camera.min.js"></script>
        <title>Belajar HTML Dasar | Jago Ngoding</title>
    </head>
    <body>
        <div class="pengaturan_tengah" align="center">
            <div class="card_view2">
                <div class="logo">
                    <a href="index.php">
                        <h1>DEV</h1>
                    </a>
                </div>
                <div class="header_right">
                    <div class="cssmenu">
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="gallery.php">Gallery</a>
                            </li>
                            <li>
                                <a href="about.php">Contact Us</a>
                            </li>
                            <li>
                                <a href="login.php">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </br>
            <br>
            <br>
            <br>

                <div class="card_view2">
                    <div class="img" align="center">
                        <img src="img.png" height="150" width="150" align="left">
                    </div>
                    <div class="name">
                        <h2>AdhiKHz</h2>
                        <h4>@SecretDiscorder</h4>
                    </div>
                    <div class="audio-container">
                        <iframe src="lagu.mp3" allow="autoplay" id="audio" style="display: none">
                            <audio id="player" autoplay loop>
                                <source src="lagu.mp3" type="audio/mpeg">
                            </audio>
                            <audio id="myaudio" autoplay>
                                <source src="lagu.mp3" type="audio/mpeg">
                            </audio>
                            <script>
                                document.getElementById('myaudio').play();
                            </script>
                        </iframe>
                    </div>
                    <p class="text"> I'm a Basic Developer, follow me to be the first who see my new work. </p>
                    <ul class="stats">
                        <li>
                            <h3>0</h3>
                            <h4>Views</h4>
                        </li>
                        <li>
                            <h3>8</h3>
                            <h4>Projects</h4>
                        </li>
                        <li>
                            <h3>0</h3>
                            <h4>Followers</h4>
                        </li>
                    </ul>
                    <div class="card">
                        <table border="2" align="center">
                            <th>
                                <h1>Name Card</h1>
                            </th>
                            <tr>
                                <th>Nama</th>
                                <th> AdhiKHz</th>
                            </tr>
                            <tr>
                                <th>Born</th>
                                <th> Jepara 28/02/2007</th>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <th> Sendang, Kalinyamatan Jepara</th>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <th>Tidak Akan Menikah</th>
                            </tr>
                            <tr>
                                <th>Hobby</th>
                                <th> Programer</th>
                            </tr>
                            <tr>
                                <th>Favorite</th>
                                <th>Silently Situation, and Lonely</th>
                            </tr>
                            <tr>
                                <th>Skill</th>
                                <th>
                                    <ul>
                                        <li>
                                            <img alt="Static Badge" src="https://img.shields.io/badge/badge-HTML-orange">
                                        </li>
                                        <li>
                                            <img alt="Static Badge" src="https://img.shields.io/badge/badge-CSS-lightblue">
                                        </li>
                                        <li>
                                            <img alt="Static Badge" src="https://img.shields.io/badge/badge-CMS-white">
                                        </li>
                                        <li>
                                            <img alt="Static Badge" src="https://img.shields.io/badge/Kodular-JAVA-brown">
                                        </li>
                                        <li>
                                            <img alt="Static Badge" src="https://img.shields.io/badge/badge-PYTHON-yellow">
                                        </li>
                                        <li>
                                            <img alt="Static Badge" src="https://img.shields.io/badge/Informatics-Logic-black">
                                        </li>
                                    </ul>
                                </th>
                            <tr>
                                <th>Dream</th>
                                <th>
                                    <ul>
                                        <li>- A Programings teacher and software Enginering</li>
                                    </ul>
                                </th>
                            </tr>
                            </tr>
                        </table>
                        <br>
                        <br>
                    </div>
                    <br>
                    <div class="card_view2" align="center">
                        <table>
                            <tr>
                                <td>
                                    <h3>Life Map</h3>
                                    <li>2012-2013: Tarbiyatul Athfal TK</li>
                                    <li>2014-2017: SDN 1 Sendang</li>
                                    <li>2017-2019: SDN 1 Margoyoso</li>
                                    <li>2019-2022: SMP N 1 Pecangaan</li>
                                    <li>2022-Now : SMA N 1 Pecangaan</li>
                                    <li></li>
                                    <h3>Competition and Experience</h3>
                                    <li>18/04/2013: 2nd Lomba Mendongeng</li>
                                    <li>2016-02-28: Pesta Siaga at Jepara City</li>
                                    <li>2017: 2nd FLS2N Mendongeng </li>
                                    <li>2015-2018: Pararel Rank 1st</li>
                                    <li>2017: Persami Penggalang 3rd at Pendosawalan</li>
                                    <li>2018: MAPSI CERIS at Central Java</li>
                                    <li>2018: 4th Siswa Teladan City Jepara</li>
                                    <li>2018: Last UN </li>
                                    <li>2018: 1st Nihai Imtihan at Kecamatan</li>
                                    <li>2017-Dec: 3rd Pidato madrasah at Jepara</li>
                                    <li>2019: 3rd Red Cross Kudus LCC</li>
                                    <li>2019-2020: Pararel Rank</li>
                                    <li>2022: EIF Olympiad 1st</li>
                                    <li>2022:Silver PSSO Sociology</li>
                                    <li>2023:Bronze Computer IYSO</li>
                                    <li> OSN/year but never won</li>
                                    <li>Scout, RedCroos, Programing ExtraCuricula</li>
                                    <li> never had PIP, but i always PIP INSTALL JUSTICE</li>
                                    <li>Now Passion and my skill is Pemrograman Basic wkwkwk :)</li>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
                    <p></p>
                    <br>
                    <marquee width="60%" direction="left" height="100px">"Demi Masa, sesungguhnya manusia berada dalam kerugian, Kecuali Orang yang beriman, sabar dan menasehati dalam kebaikan"</marquee>
                    <script src="./script.js"></script>
                    <br>
                    <h2>
                        <b> Follow Me On</b>
                        <i align="center">SecretDiscorder©</i>
                    </h2>
                    <br>
                    <br>
                    <div class="main">
                        <!-- HTML: Wrap the icons in a div container -->
                        <div class="card_view2">
                            <h1>Daftar Postingan Blog</h1>
                            <ul> <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
																												
																															
																													<a href=index.php?id=" . $row["id"] . "'>
																														<button id=loginbtn>". $row["judul"] ."</button>
																													</a>";
            }
        } else {
            echo "Tidak ada postingan.";
        }
        ?> </ul>
                            <button>
                                <a href="login.php">Tambah Postingan Baru</a>
                            </button>
                            <a href="https://github.com/SecretDiscorder" class="button">
                                <img src="github.png" height="25" width="25">
                            </a>
                            <a href="" class="button">
                                <img src="yt.png" height="25" width="25">
                            </a>
                            <a href="" class="button">
                                <img src="ig.png" height="25" width="25">
                            </a>
                        </div>
                    </div>
                    <p>Nama Saya Bima Adhi Pratama Kharis</p>
                </div>

        </div>
    </body>
</html> <?php
// Tutup koneksi ke database
$conn->close();
?>