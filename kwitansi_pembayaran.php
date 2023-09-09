<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwitansi Pembayaran</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php

    $jenis_kwh=$_POST["jenis"];

    if($jenis_kwh==450){
        $harga_per_meter=300;
    } elseif ($jenis_kwh==900){
        $harga_per_meter=400;
    } elseif ($jenis_kwh==1300){
        $harga_per_meter=500;
    } else {
        $harga_per_meter=0;
    }

    $denda=$_POST['keterlambatan'] * 1000;
    $total_tagihan=$harga_per_meter * $_POST['jumlah'] - $denda;


    ?>




    <div class="box-kwitansi" id="box-kwitansi">
        <center>
            <img src="imgs/logo2.png" alt="logo_perusahaan" width="75">
            <h2>PT SINAR NUSANTARA BERSAMA</h2>
            <h5>Kwitansi Pembayaran Listrik Pascabayar</h5>
        </center>

        <table width="80%" align="center" cellpadding="5" border="0">
            <tr>
                <td>ID Pelanggan</td>
                <td>: <?php echo $_POST['id_pelanggan']; ?></td>
                <td>Tahun-Bulan-Tanggal</td>
                <td>: <?php echo $_POST['tanggal']; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?php echo $_POST['nama_pembeli']; ?></td>
                <td>Stand Meter</td>
                <td>: IASDHIUE99823487</td>
            </tr>
            <tr>
                <td>Tarif/Daya</td>
                <td colspan="3">: <?php echo $_POST['jenis']; ?></td>
            </tr>
            <tr>
                <td>RP Tagihan </td>
                <td colspan="3">: <?php echo $total_tagihan; ?></td>
            </tr>
            <tr>
                <td>No Ref</td>
                <td colspan="3">: 7628372ATA987987666</td>
            </tr>
        </table>    
        <center>
            <p style="font-size: 11px; margin-top: 8px;">
                PT Sinar Nusantara Bersama menyatakan struk ini sebagai bukti pembayaran yang sah <br>
                Terima Kasih <br>
                *Informasi Hubungi Call Center 777 atau Hub Kantor Terdekat*
            </p>
        </center>
    </div>
    <p align="center">
        <button class="btn btn-success" onclick="print()">Cetak</button>
    </p>

    <script>
        function print(){
            console.log(document.getElementsByClassName("box-kwitansi"))
            var divContents = document.getElementById("box-kwitansi").innerHTML;
            var a = window.open('', '', "height=500, width=500");
            a.document.write('<html>'); 
            a.document.write('<body>'); 
            a.document.write(divContents); 
            a.document.write('</body></html>'); 
            a.document.close(); 
            a.print();
        }
    </script>
</body>

</html>