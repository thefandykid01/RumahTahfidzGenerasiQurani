<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require '../function.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="beranda.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo"><img src="../assets/logo-rumah-tahfidz.png" alt="Logo Rumah Tahfidz"></div>
            <div class="tag-username">Hello, <?= $_SESSION['username'] ?></div>
        </div>
        <div class="content">
            <div class="left-content">
                <div class="above-menu">
                    <a href="#">Beranda</a>
                    <a href="/santri/hasil-belajar-santri.html">Hasil Belajar</a>
                    <a href="/santri/santri-profil.html">Profil</a>
                    <a href="/santri/page-info.html">Info</a>
                </div>
                <div class="below-menu">
                    <a href="../index.php">Keluar</a>
                </div>
            </div>
            <div class="right-content">
                <div class="title-menu">Beranda</div>
                <div class="sub-right-content">
                    <div class="left-box">
                        Konten Kiri
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam maxime dolorem mollitia quae
                        doloribus? Odio, dolorem aut libero sit repudiandae, delectus expedita in sed quam sint tenetur
                        quod quisquam nam dolore iusto accusantium voluptatum. In provident eum earum alias ab mollitia
                        error ullam, perferendis non tenetur numquam, repudiandae officiis esse cum. Id consequatur
                        minima blanditiis inventore, neque fugiat atque fuga.
                    </div>
                    <div class="right-box">
                        <div>
                            <div class="sub-box"></div>
                            <div class="sub-box"></div>
                        </div>
                        <div>
                            <div class="sub-box"></div>
                            <div class="sub-box"></div>
                        </div>
                    </div>
                </div>
                <div class="sub-right-content-2">
                    <div id="overflow">
                        <div>Visi & Misi</div>

                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>