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
    <title>Beranda Admin | Rumah Tahfidz Generasi Qur'ani</title>
    <link rel="stylesheet" href="beranda.css">
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
                <div class="title-menu">Beranda</div>
                <div class="sub-right-content">
                    <div class="left-box">
                        Statistik Absensi  
                    </div>
                    <div class="right-box">
                        <div class="title-1"><h2>Visi & Misi</h2></div>
                        <div><h3>Visi</h3></div>
                        <div><h3>"Membumikan Al-Qur'an, Membentuk Generasi Qur'ani"</h3></div>
                       
                        <div class="title-2"><h3>Misi</h3></div>
                        <div>
                            <ul class="list">
                                <li>Mencetak generasi penghafal Al-Qur’an yang mampu menghafal dan memahami Al-Qur’an.</li>
                                <li>Memberikan edukasi yang berlandaskan AL-Qur’an dan sunnah kepada masyarakat.</li>
                                <li>Menjadi sarana penggerak di tengah masyarakat dalam pelaksanaan ibadah yang wajib dan sunnah.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</body>

</html>