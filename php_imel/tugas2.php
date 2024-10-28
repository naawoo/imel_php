<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_form.css">
    <title>Aplikasi pembayaran SPP</title>
</head>
<body>
    <div class="container">
        <header>
        <h1>Pembayaran SPP</h1>
        </header>
        <main>
            <div class="judul_form">
            <h2>Form Pembayaran</h2>
            </div>
        <form action="tugas2.php" method="post">
            <label for="NIS">NIS</label>
            <input type="text" name="NIS"><br>

            <label for="nama">Nama</label>
            <input type="text" name="nama"><br>

            <label for="SPP">SPP</label>
            <input type="number" name="SPP"><br>

            <label for="tabungan">Tabungan</label>
            <input type="number" name="tabungan"><br>

            <label for="bulan">Bulan</label>
            <select name="bulan" id="bulan">
                    <option value="januari">Januari</option>
                    <option value="februari">Februari</option>
                    <option value="maret">Maret</option>
                    <option value="april">April</option>
                    <option value="mei">Mei</option>
                    <option value="juni">Juni</option>
                    <option value="juli">Juli</option>
                    <option value="agustus">Agustus</option>
                    <option value="september">September</option>
                    <option value="oktober">Oktober</option>
                    <option value="november">November</option>
                    <option value="desember">Desember</option>
            </select> <br>

            <label for="tanggal">Tanggal Bayar</label>
                <input type="date" name="tanggal"> <br>

                <input type="submit" value="Simpan" name="simpan">
        </main>
        
        <footer>
            <h5>Dibuat oleh imel</h5>
        </form>
        </footer>
    </div>
    <?php
        if(isset($_POST['simpan'])){
            $NIS=$_POST['NIS'];
            $nama=$_POST['nama'];
            $SPP=$_POST['SPP'];
            $tabungan=$_POST['tabungan'];
            $bulan=$_POST['bulan'];
            $total=$SPP + $tabungan;
            $tanggal_bayar=$_POST['tanggal'];
        
?>
<table border=1>
    <tr>
            <td>NIS</td>
            <td>Nama</td>
            <td>SPP</td>
            <td>Tabungan</td>
            <td>Bulan</td>
            <td>Tanggal Bayar</td>
            <td>Total</td>
    </tr>
    <tr>
            <td><?=$NIS?></td>
            <td><?=$nama?></td>
            <td><?=$SPP?></td>
            <td><?=$tabungan?></td>
            <td><?=$bulan?></td>
            <td><?=$tanggal_bayar?></td>
            <td><?=$total?></td>
    </tr>
</table>
<?php
    }
    ?>
</body>
</html>