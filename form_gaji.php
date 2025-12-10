<!DOCTYPE html>
<html>
<head>
    <title>Input Gaji Pegawai</title>
    <style>
        body{
            font-family: Arial;
            margin: 40px auto;
            width: 380px;
        }
        input, select{
            width: 100%;
            padding: 8px;
            margin: 6px 0;
        }
        button{
            width: 100%;
            padding: 10px;
            background: #0066ff;
            color: white;
            border: none;
            border-radius: 6px;
        }
    </style>
</head>
<body>

<h2>Form Gaji Pegawai</h2>

<form action="hasil_gaji.php" method="post">
    <label>Nama Pegawai</label>
    <input type="text" name="nama" required>

    <label>Tahun Masuk</label>
    <input type="number" name="tahunmasuk" required>

    <label>Jabatan</label>
    <select name="jabatan" required>
        <option value="Manager">Manager</option>
        <option value="Marketing">Marketing</option>
    </select>

    <button type="submit">Proses</button>
</form>

</body>
</html>
