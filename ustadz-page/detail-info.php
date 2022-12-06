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
            <div class="title-menu">Detail Informasi</div>
                <div class="sub-right-content">
                    <div class="main-box">
                        <div class="box">
                            <div><img src="../assets/bulan.jpg" alt=""></div>
                            <div class="two">
                                <div>Title Of Information</div>
                            </div>
                            <div class="three">
                                <div>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid perferendis provident, laborum praesentium sint magnam quos adipisci eligendi cumque accusantium illum atque dolorum a, ducimus ab amet. Quidem eum illo cum enim! Fuga, adipisci. Ipsum eos eaque reprehenderit officia placeat recusandae explicabo ducimus, incidunt tempora neque molestiae deserunt optio corporis.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci minima architecto quam obcaecati aperiam delectus sapiente veritatis et aspernatur, quae atque quia perferendis inventore nulla ex exercitationem, consectetur saepe aut in, cupiditate assumenda fuga illum. Harum nemo dolor atque in eveniet? Alias dignissimos doloremque vitae in placeat. Nihil modi non eligendi velit ea quas vel libero consequatur repellat! Omnis est voluptatum totam deserunt consequuntur, repellendus accusamus numquam commodi animi quam.
                                    </p>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>