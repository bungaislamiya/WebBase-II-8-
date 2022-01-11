<html>
    <head>
        <title>TOKO CAT</title>
    </head>
    <body>
        <?php
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $jc=$_POST['jc'];
        if ($jc="MOWILEX"){
            $harga=200000;
        }else if($jc="DANAPAINT"){
            $harga=300000;
        }else{
            $harga=400000;
        }
        $w1=$_POST['w1'];
        $jb=$_POST['jb'];
        $th=$harga * $jb;
        if ($jb>=5){
            $dis=5*$th/100;
        }else if($jb>=10){
            $dis=10*$th/100;
        }else{
            $dis = 0;
        }
        
        $tb=$th-$dis;
        ?><pre>
    <h1>TOKO CAT GUNA BANGUN JAYA</h1>
    <hr>
        Nama Customer :<?php echo $nama;?><br>
        alamat        :<?php echo $alamat;?><br>
        Jenis Cat     :<?php echo $jc;?><br>
        Warna         :<?php echo $w1;?><br>
        Harga         :         <?php echo $harga;?><br>
        Jumlah Beli   :<?php echo $jb;?><br>
    <hr>
        Total Harga   :         <?php echo $th;?><br>
        Diskon        :         <?php echo $dis;?><br>
    <hr>
        Total Bayar   :         <?php echo $tb;?><br>
        <a href="l2.php">Kembali</a>
        </pre>
    </body>
    </html>