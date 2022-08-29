<?php
    // variabel baru
    $nama = ($_POST["nama"]);
    $age = (int)$_POST["usia"];
    $ttl = (int)$_POST["lahir"];
    $height = (float)$_POST["tinggi"];
    $brt = (float)$_POST["berat"];
    $agama = ($_POST["agama"]);

    //menampilkan data
    echo "Nama = " . $nama . "<br>";
    echo "Umur = " . $age . "<br>";
    echo "Tanggal Lahir = " . $ttl . "<br>";
    echo "Tinggi Badan = " . $height . "<br>";
    echo "Berat Badan = " . $brt . "<br>";
    echo "Agama = " . $agama . "<br>";
?>