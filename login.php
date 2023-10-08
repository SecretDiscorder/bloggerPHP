<!DOCTYPE html>
<html lang="id">
    <head>
<meta name="viewport" content="width=device-width, height=device-height, maximum-scale=1">
        <title>Latihan Website</title>
        <link rel="stylesheet" href="style.css">
<style>
            .Pengaturan_tengah {
                background-image: url("background.jpg");
                text-align: center;
                 width: 100%;
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
                align: 0px auto 0px auto;
                border-radius: 10px;
                opacity: 1;
                 width: 100%;
                text-align: center;
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
  align-items: center;
  align: 0px auto 0px auto;
  justify-content: center;
 width: 100%;

  background-color: #ADE5F9;
	background-position: fixed;
	background-height: auto;
	background-repeat: no-repeat;
}
@media (max-width: 1000px){
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
                margin: 0 auto;
                padding: 2.5rem 2rem;
                border-radius: 10px;
                background-color: rgba(255, 255, 255, .5);
                box-shadow: 0 0 30px rgba(0, 0, 0, .15);
                margin: 1rem;
                position: relative;
                transform-style: preserve-3d;
                overflow: hidden;
                align: 0px auto 0px auto;
                border-radius: 30px;
                opacity: 1;
                text-align: center;
            }

            .card {
                padding: 2.5rem 2rem;
                border-radius: 10px;
                background-color: rgba(255, 255, 255, .5);
                height: auto;
                width: 100%;
                box-shadow: 0 0 30px rgba(0, 0, 0, .15);
                margin: 1rem;
                position: relative;
                transform-style: preserve-3d;
                overflow: hidden;
                align: 0px auto 0px auto;
                opacity: 1;
                text-align: center;
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
	<a href="index.php"><h1>DEV</h1></a>
</div>


<div class="header_right">
	<div class="cssmenu">
	 <ul>
     	<li><a href="index.php">Home</a></li>
     	<li><a href="gallery.php">Gallery</a></li>
     	<li><a href="about.php">Contact Us</a></li>
     	<li><a href="http://social.bimakhzdev.my.id">Social</a></li>
     </ul>
	</div>
</div>
</div>
</br>
<br>
<br>
<br>

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
<div class="main">
<div class="card_view2">
	<div class="login-form">
	<h1>ADMIN LOGIN</h1>
	<div class="head">
		<img src="web/images/user.png" alt=""/>
	</div>
    <h1>Halo, dunia!</h1>
	<p>Aku akan mempelajari HTML</p>
	<form action="proses_login.php" method="post">
	<table border="2" align="center">

	<tr>
		<td>Username</td>
		<td><input type="text" id="username" id="logintxt" name="username"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="text" id="password" id="logintxt" name="password"></td>
	</tr>
	<tr>
		<th colspan="2"><button type="submit" id="loginbtn">LOGIN</button> </th>
	</tr>
	</table>
	</form>
	</div>
</div>
</div>
</div>
</body>
</html>