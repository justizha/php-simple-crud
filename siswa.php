<?php 
session_start();

if ( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
error_reporting(E_ALL);
require 'functions.php';
$siswa = query("SELECT * FROM daftarsiswa  ORDER BY nama ASC");
//tombol cari di tekan
if(isset($_POST["cari"])){
    $siswa = cari($_POST["keyword"]);
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN ADMIN SISWA</title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="main.css?v=<?= time();?>">
<style>
    .btn{
        display: block;
        
        
    }
    .btn a{
        padding: 10px;
        color: #000;
        text-align: center;
        text-decoration: none;
        font-size: 14px;
        transition: 0.3s;
    }
    .btn:hover{
        color: #009879;
	    background-color: #009789;
    }
   .table{
        width: 60%;
        border-collapse: collapse;
        margin-left: auto;
        margin-right: auto;
    }
    .table a{
        text-decoration: none;
    }

    .table td,.table th{
        padding:12px 15px;
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


<h1>Daftar Siswa</h1>

<br>
<button class="btn"><a style="text-decoration: none;" href="tambah.php">Tambah data Siswa</a></button>
<br><br>
<button class="btn"><a style="text-decoration: none;" href="print.php">Cetak ke PDF</a></button>

<br><br>

<form  action="" method="POST">

    <input type="text" name="keyword" size="30" autofocus 
    placeholder="masukan keyword pencarian" autocomplete="off" id="keyword">
    <br>
    <button type="submit" name="cari" id="src-btn">Cari</button>

</form>
<br>
<div id="container">

        <table class="table" id="tabel-siswa" >
            <thead>
                    <tr> 
                    
                        <th>No.</th>
                        <th>Nisn</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                        
                
            
                <?php $i = 1; ?>
                <?php foreach( $siswa as $row) :?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $i; ?></td>
                    
                    <td><?= $row["nisn"];?></td>
                    <td><?= $row["nama"];?></td>
                    <td><?= $row["kelas"];?></td>
                    <td>
                        <div>
                        <a href="ubah.php?id=<?=  $row["idsiswa"];?>">ubah</a> |
                        <a href="hapus.php?id=<?= $row["idsiswa"];?>" 
                        onclick="return confirm('apakah yakin untuk menghapus data ini?');">hapus</a>
                        </div>
                </td>
            </tr>
            <?php $i++?>
            <?php endforeach;?>
            </tbody>
        </table>

</div>
<br><br>
<script src="main.js"></script>
<script src="js/script.js"></script>
</body>
</html>