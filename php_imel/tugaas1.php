<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <header>
            <h1>Tugas2</h1>
        </header>
        <main>
            <div class="judul_form">
                <h2>Pembayaran SPP</h2>
            </div>
            <form action="tugas2.php" method="post">
                <label for="nisn">NIS</label>
                <input type="text" name="nisn"> <br>
                
                <label for="nama">Nama</label>
                <input type="text" name="nama"> <br>

                <label for="spp">SPP</label>
                <input type="number" name="spp"> <br>
                
                <label for="tabungan">Tabungan</label>
                <input type="number" name="tabungan" id="tabungan"> <br>

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
            </form>
        </main>
        <footer>
            <h5>Dibuat oleh </h5>
        </footer>
</body>
</html>