<?php
if(isset($_POST['nama'])){
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tb = $_POST['tb'];
    $bb = $_POST['bb'];

    if (($jk == "Laki-laki" && $tb > 170 && $bb < 90) || ($jk == "Perempuan" && $tb > 165 && $bb < 75)) {
        $ket = "Selamat Anda Diterima";
    } else {
        $ket = "Maaf Anda Tidak Diterima";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Nama : <b><?php echo $nama; ?> </b> <br>
    jenis Kelamin : <b><?php echo $jk; ?></b> <br>
    Tinggi Badan : <b><?php echo $tb; ?></b> <br>
    Berat Badan : <b><?php echo $bb; ?></b> <br>
    Keterangan : <b><?php echo "$nama , $ket";?></b>
</body>
</html>
<?php?>