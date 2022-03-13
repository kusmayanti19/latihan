<!DOCTYPE html>
<html>
<head>
    <title>Tugas6_NoviaKusmayanti</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <?php
    if(isset($_POST['hitung'])){ //isset digunakan untuk memeriksa ketersediaan data
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        //switch case digunakan untuk mengecek operasi yang akan dipilih sebelum form di submit
        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1+$bil2;
            break;
            case 'kurang':
                $hasil = $bil1-$bil2;
            break;
            case 'kali':
                $hasil = $bil1*$bil2;
            break;
            case 'bagi':
                $hasil = $bil1/$bil2;
            break;           
        }
    }
    ?>

    <h2><center>Membuat Kalkulator Sederhana</h2></center>
    <!- Membuat Form Kalkulator -->
    <div class="kalkulator">
        <h2 class="judul">KALKULATOR</h2>
        <form method="post" action="">           <!- Method Post digunakan untuk menangani data yang diinput -->
            <input type="text" name="bil1" class="bil"  placeholder="Masukkan Bilangan Pertama" required>
            <select class="option" name="operasi">
                <option value="tambah"> + </option>
                <option value="kurang"> - </option>
                <option value="kali"> * </option>
                <option value="bagi"> / </option>
            </select>
            <br>
            <input type="text" name="bil2" class="bil"  placeholder="Masukkan Bilangan Kedua" required>
            <center><input type="submit" name="hitung" value="Hitung" class="tombol"></center> 

            

        </form>

        <!- untuk menampilkan hasil -->
        <?php if(isset($_POST['hitung'])){ ?>
            <input type="text" value="<?php echo $hasil; ?>" class="bil">
        <?php }else{ ?>
            <input type="text" value="0" class="bil">
        <?php } ?>           
    </div>
</body>
</html>
