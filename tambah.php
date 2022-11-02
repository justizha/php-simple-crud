<?php
session_start();

if ( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
//koneksi

require 'functions.php';
//cek apakahh tombol submit sudah ditekan atau belum
if( isset($_POST['submit'])){
   
    //cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'siswa.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'siswa.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="main.css?v=<?= time();?>">

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
<style>

body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
.container{
    width: 50%;
    max-width: 650px;
    padding: 28px;
    margin: 0 28px;
}
.title{
    font-size: 26px;
    font-weight: 600;
    text-align: left;
    padding-bottom: 6px;
    color: black;
    border-bottom: 1px solid black;
}
.nisn{
            display: flex;
            flex-wrap: wrap;
            width: 60% ;
        }
        .nisn label{
            width: 95%;
            color: black;
            font-size: 20px;
            font-weight: 400;
            margin: 5px 0;
        }
        .nama{
            display: flex;
            flex-wrap: wrap;
            width: 60%;
        }
        .nama label{
            width: 95%;
            color: black;
            font-size: 20px;
            font-weight: 400;
            margin: 5px 0;
        }
        .kelas{
            display: flex;
            flex-wrap: wrap;
            width: 60%;
        }
        .kelas label{
            width: 95%;
            color: black;
            font-size: 20px;
            font-weight: 400;
            margin: 5 0px;
        }
        .nisn input,.nama input,.kelas input {
            height: 40px;
            width: 95%;
            border-radius: 7px;
            outline: none;
            border: 1px solid grey;
            padding: 0 10px;
        }
        .submit input{
            margin-top: 40px;
        }
        .submit input{
            display: block;
            width: 35%;
            margin-top: 10px;
            font-size: 20px;
            padding: 10px;
            border: none;
            border-radius: 6px;
            background-color: rgba(63, 114, 76, 0.5);
            cursor: pointer;
        }
        .submit input :hover{
            background: rgba(56, 204, 93, 0.7);
            color: rgba(255, 255, 255);
        }
        @media(max-width: 600px){
        .container{
            min-width: 280px;

        }
        .nisn{
            margin-bottom: 12px;
            width: 100%;
        }
        .nama{
            margin-bottom: 12px;
            width: 100%;
        }
        .kelas{
            margin-bottom: 12px;
            width: 100%;
        }
    }


</style>


<div class="container">
        <form class="tambah" action="" method="POST">
            <h1 class="title">Tambah data</h1>
            <div class="nisn">
                <label for="nisn">Nisn :</label>
                <input type="text" name="nisn" id="nisn" required>
            </div>
            <div class="nama">
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama"required>
           </div>   
           <div class="kelas">
                <label for="kelas">Kelas :</label>
                <input type="text" name="kelas" id="kelas"required>
           </div>     
           <div class="submit">
                <input type="submit" name="submit" value="Submit">
           </div>
</div>            

        </form>
    <script src="main.js"></script>
</body>
</html>