<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lat4.css">
    <title>Daftar Menu</title>
</head>
<body>
    <div id="container">
        <header>
            <h1>Daftar Menu</h1>
            <nav>
                <ul>
                    <li><a href="lat4.php?gbr=rendang">Rendang</a></li>
                    <li><a href="lat4.php?gbr=sotoayam">Soto Ayam</a></li>
                    <li><a href="lat4.php?gbr=lontongopor">Lontong Opor</a></li>
                    <li><a href="lat4.php?gbr=gadogado">Gado-gado</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <?php
                if(isset($_GET['gbr'])){
                    $gambar=$_GET['gbr'];
                    switch ($gambar) {
                        case "rendang":
                            ?><img src="rendang.jpg" alt="rendang" width=100%>
                            <?php
                            break;
                        case "sotoayam":
                            ?><img src="sotoayam.jpg" alt="sotoayam" width=100%>
                            <?php
                            break;
                        case "lontongopor":
                            ?><img src="lontongopor.jpg" alt="lontongopor" width=100%>
                            <?php
                            break;
                        case "gadogado":
                            ?><img src="gadogado.jpg" alt="gadogado" width=100%>
                            <?php
                            break;
                    }
                }
            ?>
        </main>
    </div>
</body>
</html>