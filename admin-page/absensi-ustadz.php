<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Ustadz | Rumah Tahfidz Generasi Qur'ani</title>
    <link rel="stylesheet" href="absensi-ustadz.css">
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
                <div class="separated">
                    <div class="title-menu">Absensi Ustadz</div>
                </div>
                <div class="sub-right-content">
                    <div class="main-box">
                        <div class="box">
                            Statistik
                        </div>
                        <div class="two">
                            <div>
                                <label for="qty">Show</label>
                                <select name="qty" id="">
                                    <option value="#">Pilih</option>
                                    <option value="#">5</option>
                                    <option value="#">10</option>
                                </select>
                            </div>
                            <div>
                                <label for="search">Search</label>
                                <input type="search" name="search" id="">
                            </div>
                        </div>
                        <div class="three">
                            <table>
                                <tr>
                                    <th style="width: 5%;">No.</th>
                                    <th style="width: 10%;">Tanggal</th>
                                    <th style="width: 10%;">Username</th>
                                    <th style="width: 15%;">Nama</th>
                                    <th style="width: 10%;">Kelas</th>
                                    <th style="width: 25%;">Keterangan</th>
                                    <th style="width: 20%;">Aksi</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>24/05/2022</td>
                                    <td>dikta01</td>
                                    <td>Dikta Saputra</td>
                                    <td>Tahfidz</td>
                                    <td>Masuk</td>
                                    <td>
                                        <div class="group-btn">
                                            <a href="edit-account.php">
                                                <div class="edit-btn">
                                                    Terima
                                                </div>
                                            </a>

                                            <a href="edit-account.php">
                                                <div class="hapus-btn">
                                                    Tolak
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>24/05/2022</td>
                                    <td>dikta01</td>
                                    <td>Dikta Saputra</td>
                                    <td>Tahfidz</td>
                                    <td>Masuk</td>
                                    <td>
                                        <div class="group-btn">
                                            <a href="edit-account.php">
                                                <div class="edit-btn">
                                                    Terima
                                                </div>
                                            </a>

                                            <a href="edit-account.php">
                                                <div class="hapus-btn">
                                                    Tolak
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>24/05/2022</td>
                                    <td>dikta01</td>
                                    <td>Dikta Saputra</td>
                                    <td>Tahfidz</td>
                                    <td>Masuk</td>
                                    <td>
                                        <div class="group-btn">
                                            <a href="edit-account.php">
                                                <div class="edit-btn">
                                                    Terima
                                                </div>
                                            </a>

                                            <a href="edit-account.php">
                                                <div class="hapus-btn">
                                                    Tolak
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>24/05/2022</td>
                                    <td>dikta01</td>
                                    <td>Dikta Saputra</td>
                                    <td>Tahfidz</td>
                                    <td>Masuk</td>
                                    <td>
                                        <div class="group-btn">
                                            <a href="edit-account.php">
                                                <div class="edit-btn">
                                                    Terima
                                                </div>
                                            </a>

                                            <a href="edit-account.php">
                                                <div class="hapus-btn">
                                                    Tolak
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>24/05/2022</td>
                                    <td>dikta01</td>
                                    <td>Dikta Saputra</td>
                                    <td>Tahfidz</td>
                                    <td>Masuk</td>
                                    <td>
                                        <div class="group-btn">
                                            <a href="edit-account.php">
                                                <div class="edit-btn">
                                                    Terima
                                                </div>
                                            </a>

                                            <a href="edit-account.php">
                                                <div class="hapus-btn">
                                                    Tolak
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>