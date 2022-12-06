<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Santri| Rumah Tahfidz Generasi Qur'ani</title>
    <link rel="stylesheet" href="ujian.css">
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
                <div class="title-menu">Hasil Belajar Santri</div>
                <div class="sub-right-content">
                    <div class="left-box">
                        <div class="sub-title-menu">Ujian</div>
                        <div class="selectsantri">
                            <select name="pilih_santri" id="">
                                <option value="#">- Pilih Santri -</option>
                                <option value="#">Santri 1</option>
                                <option value="#">Santri 2</option>
                                <option value="#">Santri 3</option>
                            </select>
                        </div>
                        <div class="form_input_nilai">
                            <h3>Form Input Nilai Ujian</h3>
                            <form action="">
                                <div>
                                    <label for="fashohah">Fashohah</label>
                                    <input type="text" name="fashohah" id="fashohah">
                                </div>
                                
                            </form>

                        </div>
                    </div>
                    <div class="left-box">
                        <div class="sub-title-menu">Rapot</div>
                        <div class="selectsantri">
                            <select name="pilih_santri" id="">
                                <option value="#">- Pilih Santri -</option>
                                <option value="#">Santri 1</option>
                                <option value="#">Santri 2</option>
                                <option value="#">Santri 3</option>
                            </select>
                            <button class="cetak-btn">Cetak</button>
                        </div>
                       
                    </div>
                </div>
            </div>

        </div>

</body>

</html>