<?php

    //good luck to undersatnds this 

    //koneksi ke database
    // pastikan nama dari database benar benar sama dan pastikan juga user adalah root
    $conn =  mysqli_connect('localhost','root','','project');


    function query($query) {
        global $conn;
        $result = mysqli_query($conn,$query);
        //logika
        // menyiapkan wadah kosong yang kemudian di isi oleh while yang menampilkan nilai dari tabel 
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row; // menambahkan elemen baru di arkhir array
        }
        return $rows;
    }