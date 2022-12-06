<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi | Rumah Tahfidz Generasi Qur'ani</title>
    <link rel="stylesheet" href="info.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo"><img src="../assets/logo-rumah-tahfidz.png" alt=""></div>
            <div class="tag-username">Hello, <?= $_SESSION['username'] ?></div>
        </div>
        <div class="content">
            <div class="left-content">
                <div class="above-menu">
                    <a href="beranda.php">Beranda</a>
                    <a href="profil.php">Profil</a>
                    <a href="info.php">Info</a>
                    <a href="#">Hasil Belajar Santri</a>
                    <div class="sub-hbs">
                        <a href="mutabaah.php">Mutaba'ah</a>
                        <a href="absensi.php">Absensi</a>
                        <a href="ujian.php">Ujian</a>
                    </div>
                    <a href="absensi-ustadz.php">Absensi Ustadz</a>
                </div>
                <div class="below-menu">
                    <a href="../index.php">Keluar</a>
                </div>
            </div>
            <div class="right-content">
                <div class="separated">
                    <div class="title-menu">Info Seputar Rumah Tahfidz</div>
                </div>
                <div class="sub-right-content">
                    <div class="main-box">
                        <a href="detail-info.php" class="box">
                            <div><img src="../assets/bulan.jpg" alt=""></div>
                            <div class="two">
                                <div>Title Of Information</div>
                            </div>
                        </a>
                        <a href="detail-info.php" class="box">
                            <div><img src="../assets/bulan.jpg" alt=""></div>
                            <div class="two">
                                <div>Title Of Information</div>
                            </div>
                        </a>
                        <a href="detail-info.php" class="box">
                            <div><img src="../assets/bulan.jpg" alt=""></div>
                            <div class="two">
                                <div>Title Of Information</div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>

</body>

</html>