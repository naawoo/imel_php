<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_form.css">
    <title>Penghitung Gaji</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Penghitung Gaji Karyawan</h1>
        </header>
        <main>
        <form action="tugas3.php" method="post">
                <label for="nama">Nama</label>
                <input type="text" name="nama"><br>

                <label for="kehadiran">Jumlah kehadiran</label>
                <input type="number" name="kehadiran">

                <label for="jabatan">Jabatan</label>
                <select name="jabatan" id="jabatan">
                    <option value="produksi">Produksi</option>
                    <option value="pemasaran">Pemasaran</option>
                    <option value="manajemen">Manajemen</option>
                </select>

                <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="menikah">Menikah</option>
                    <option value="lajang">Lajang</option>
                </select>
                    
                <label for="anak">Jumlah Anak</label>
                <input type="number" name="anak">

            <input type="submit" value="Simpan" name="simpan">
        </form>
        </main>
        <footer>
            <h5>Dibuat oleh imel</h5>
        </footer>
    </div>
    <?php
    if (isset($_POST['simpan'])){
        $nama=$_POST['nama'];
        $kehadiran=$_POST['kehadiran'];
        $jabatan=$_POST['jabatan'];
        $status=$_POST['status'];
        $anak=$_POST['anak'];

        if ($jabatan="produksi") {
            $gajiK=100000;
        }

        elseif ($jabatan="pemasaran") {
            $gajiK=120000;
        }

        else {
            $gajiK=150000;
        }

        if ($status = "menikah" ) {
                $tunjangan2=1000000;
             }
        else {
                $tunjangan2=0;
            }
            
            if ($anak= 1) {
                $tunjangan1=75000;
            }
            elseif ($anak= 2) {
                $tunjangan1=75000 * 2;
            }
            else {
                $tunjangan1=0;
            }
        $total=$gajiK * $kehadiran + $tunjangan1 + $tunjangan2;       
            if ($total >= 2000000) {
                        $pajak= 1/100 * 2000000;
                    }
                    else {
                        $pajak=0;
                    }
        
        $gajibersih=$total - $pajak;
    ?>
    <table border=1>
    <tr>
            <td>Nama</td>
            <td>Kehadiran</td>
            <td>Jabatan</td>
            <td>Status</td>
            <td>Anak</td>
            <td>Gaji Bersih</td>
    </tr>
    <tr>
            <td><?=$nama?></td>
            <td><?=$kehadiran?></td>
            <td><?=$jabatan?></td>
            <td><?=$status?></td>
            <td><?=$anak?></td>
            <td><?=$gajibersih?></td>
    </tr>
    </table>
<?php
    }
    ?>
</body>
</html>