<?php
session_start();


if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="main.css?v=<?php echo time();?>">


</head>


<body>

<header>
 <nav>
    <h1>Daftar Nilai</h1>
        
        <div class="menu">
            <a  class="is-active" href="index.php">HOME</a>
            <a href="siswa.php">SISWA</a>
            <a href="nilai.php">NILAI</a>
            <a href="logout.php">LOGOUT</a>
        </div>
        <button class="hamburger">
            <span class="material-icons">menu</span>
        </button>
 </nav>
        <div class="mobile-menu">
            <a  class="is-active" href="index.php">HOME</a>
            <a href="siswa.php">SISWA</a>
            <a href="nilai.php">NILAI</a>
            <a href="logout.php">LOGOUT</a>
        </div>
</header>


<script src="main.js"></script>

<br><br/><br><br><br><br>
<h2 style="text-align: center ;">HOME</h2>
<br>
<br>
<p style="text-align: center;"> Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>  Similique reiciendis, 
    aliquid cupiditate ipsam doloribus  <br>natus quaerat porro molestias omnis, 
    if elese id pariatur <br>deleniti amet odit velit cumque in beatae saepe Lorem ipsum 
    dolor sit amet consectetur adipisicing elit. <br>Vitae corporis, assumenda quibusdam adipisci 
    eius hic nihil tenetur labore sapiente. <br>Odio id ea in praesentium at asperiores ut reiciendis 
    quisquam ipsum!jika kita bisa Saja melakukan hal yang

</body>
</html>