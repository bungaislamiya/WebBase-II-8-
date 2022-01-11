<html>
    <head>
        <title>Tiket</title>
    </head>
    <body>
        <?php
         $np=$_POST['np'];
         $studio=$_POST['studio'];
         if ($stduio = "studio1"){
             $bt="Opick";
         }else
         {$bt="Raihan"; }
         $jk=$_POST['jk'];
         if($jk="vip"){
             $harga=250000;
         }else{
             $harga=500000;
         }
         $tiket=$_POST['tiket'];
         $th=$tiket * $harga;
        ?> <pre>
            <h1>KONSER AMAL INDAHNYA BERBAGI</h1>
            <hr>
        Nama Pemesan    :<?php echo $np;?><br>
        Kode Studio     :<?php echo $studio;?><br>
        Bintang Tamu    :<?php echo $bt;?><br>
        Jenis Kelas     :<?php echo $jk;?><br>
        Harga           :<?php echo $harga;?><br>
        Jumlah Tiket    :<?php echo $tiket;?>
        <hr>
        Total Harga     :<?php echo $th;?><br>
        <a href="l1i.php" align="center">Kembali ke awal</a>
    </pre>
    </body>
</html>