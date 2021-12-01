<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Persyaratan TNI/Porli</legend>
        <form action="proses_tni.php" method = "post">
            <input type="text" name="nama" placeholder="Masukan Nama"><br>
            <input type="radio" name="jk" value="Perempuan">Perempuan
            <input type="radio" name="jk" value="Laki-laki">Laki-laki <br>
            <input type="number" name="tb" placeholder="Tinggi Badan Anda"><br>
            <input type="number" name="bb" placeholder="Berat Badan Anda"><br>
            <button name="save">simpan</button>
        </form>
    </fieldset>
</body>
</html>