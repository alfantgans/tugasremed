<!DOCTYPE html>
<html>
<head>
    <title>Hasil Gaji Pegawai</title>
    <style>
        body{
            font-family: Arial;
            margin: 40px auto;
            width: 420px;
        }
        .box{
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 10px;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Hasil Perhitungan Gaji Pegawai</h2>

<div class="box">

<?php
if($_POST){

    $nama        = $_POST['nama'];
    $tahunmasuk  = $_POST['tahunmasuk'];
    $jabatan     = $_POST['jabatan'];

    // Lama kerja
    $lamakerja = 2025 - $tahunmasuk;

    // Gaji pokok
    if($jabatan == "Manager"){
        $gapok = 10000000;
    } else {
        $gapok = 8000000;
    }

    // Tunjangan
    $tunjangan = 0.05 * $gapok * $lamakerja;

    // Total
    $gajitotal = $gapok + $tunjangan;

    echo "Nama Pegawai : <b>$nama</b><br><br>";
    echo "Jabatan : <b>$jabatan</b><br><br>";
    echo "Lama Kerja : <b>$lamakerja Tahun</b><br><br>";
    echo "Gaji Pokok : <b>Rp " . number_format($gapok,0,',','.') . "</b><br><br>";
    echo "Tunjangan : <b>Rp " . number_format($tunjangan,0,',','.') . "</b><br><br>";
    echo "<h3>Gaji Total : Rp " . number_format($gajitotal,0,',','.') . "</h3>";
}
?>

</div>

<br>
<a href="form_gaji.php">Kembali</a>

</body>
</html>
