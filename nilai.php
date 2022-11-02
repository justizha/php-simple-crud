<?php 
session_start();

if ( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

error_reporting(E_ALL);
require 'functions.php';
$siswa = query("SELECT *  FROM vnialiavg ");

if(isset($_POST["cari2"])){
    $siswa = cari2($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN ADMIN SISWA</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="main.css?v=<?= time()?>">
</head>

<style>
    .table{
        margin-left: auto;
        margin-right: auto;
        width: 60%;
        border-collapse: collapse;
    }
    .table a{
        text-decoration: none;
    }

    .table td,.table th{
        padding:8px 10px;
        border:1px solid #ddd;
        text-align: center;
        font-size:16px;
    }

    .table th{
        background-color: #009789;
        color:#ffffff;
    }

    .table tbody tr:nth-child(even){
        background-color: #009789;
    }
</style>

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
    <br><br><br><br><br>


<h1>Daftar Nilai Siswa </h1>

<button><a href="tam.php">Tambah Data Nilai Siswa</a></button>

<br><br>
<form  action="" method="POST">

        <input type="text" name="keyword" size="30" autofocus 
        placeholder="masukan keyword pencarian" autocomplete="off" id="keyword2">
        <button type="submit" name="cari2" id="scr-btn2">Cari</button>

</form>
    <br><br>
<div id="container2">
<table class="table">
<thead>
    <tr>

        <th>No. </th>
        <th>NISN</th>
        <th>Nama</th>
        <th>UTS</th>
        <th>PAS</th>
        <th>PAT</th>
        <th>Rata</th>
        <th>Aksi</th>
        
    
   
    <?php $i = 1; ?>
    <!-- Sebagai perulangan untuk memanggil data didalam tabel -->
    <!-- Pastikan bahwa tidak ada kata yang typo/salah 
        hours wasted = 2+ -->
    <?php foreach( $siswa as $row) :?>
    </tr>
</thead>
<tbody>
    <tr>
        <td><?= $i; ?></td>
        
<!-- Pastikan bahwa isi dari arraynya sesuai dengan field di table
    hours wasted = 1+ -->
        <td><?= $row["nisn"];?></td>
        <td><?= @$row["nama"];?></td>
        <td><?= $row["UTS"];?></td>
        <td><?= $row["PAS"]?></td>
        <td><?= $row["PAT"];?></td>
        <td><?= $row["RATA"];?></td>
        <td>
             <a href="ubah2.php?id=<?= $row['idnilai']?>">ubah</a> |
             <a href="hapus2.php?id=<?= $row["idnilai"];?>" 

             onclick="return confirm('apakah yakin untuk menghapus data ini?');">hapus</a>
       </td>

        
           
    </tr>
    <?php $i++?>
    <?php endforeach;?>
    <!--  -->
</tbody>

</table>
</div>
<br><br>
<script src="js/script2.js"></script>
<script src="main.js"></script>
</body>
</html>