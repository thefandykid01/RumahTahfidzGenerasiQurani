<?php

session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require '../function.php';

$id = $_GET["id"];

$detail = query("SELECT * FROM tb_info WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Info | Rumah Tahfidz Generasi Qur'ani</title>
    <link rel="stylesheet" href="detail-info.css">
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
                    <a href="beranda.php">Kelola Akun</a>
                    <a href="profil.php">Profil</a>
                    <a href="info.php">Info</a>
                    <a href="hasil-belajar.php">Hasil Belajar Santri</a>
                    <a href="absensi-ustadz.php">Absensi Ustadz</a>
                </div>
                <div class="below-menu">
                    <a href="../index.php">Keluar</a>
                </div>
            </div>
            <div class="right-content">
                <div class="title-menu">Detail Informasi</div>
                <div class="sub-right-content">
                    <div class="main-box">
                        <?php foreach ($detail as $I) : ?>
                            <div class="box">
                                <div><img src="../upload/<?= $I["photo"] ?>" alt=""></div>
                                <div class="two">
                                    <div><?= $I["title"] ?></div>
                                </div>
                                <div class="three">
                                    <div>
                                        <p><?= $I["content"] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>