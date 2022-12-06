<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mutaba'ah | Rumah Tahfidz Generasi Qur'ani</title>
    <link rel="stylesheet" href="mutabaah.css">
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
                        <div class="sub-title-menu">Mutaba'ah</div>
                        <div class="selectsantri">
                            <select name="select-santri">
                                <option value="#" selected> - Pilih Santri -</option>
                                <option value="smt-1">Arie Bagas Azzy</option>
                                <option value="smt-2">Fandy Hidayat</option>
                                <option value="smt-3">Muhammad Yusuf Qardhawi</option>
                            </select>
                        </div>
                        <div class="tabelmutabaah">
                            <table>
                                <tr>
                                    <th style="width: 15%;">Tanggal</th>
                                    <th style="width: 30%;">Surat</th>
                                    <th>Ayat</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                </tr>
                                <tr>
                                    <td> 1 </td>
                                    <td> 2 </td>
                                    <td> 3 </td>
                                    <td> 4 </td>
                                    <td> 5 </td>
                                </tr>
                                <tr>
                                    <td> 1 </td>
                                    <td> 2 </td>
                                    <td> 3 </td>
                                    <td> 4 </td>
                                    <td> 5 </td>
                                </tr>
                                <tr>
                                    <td> 1 </td>
                                    <td> 2 </td>
                                    <td> 3 </td>
                                    <td> 4 </td>
                                    <td> 5 </td>
                                </tr>
                                <tr>
                                    <td> 1 </td>
                                    <td> 2 </td>
                                    <td> 3 </td>
                                    <td> 4 </td>
                                    <td> 5 </td>
                                </tr>
                            </table>
                        </div>
                        <form action="">
                            <div class="section">
                                <div class="part-one"><input type="date" name="tanggal" id=""></div>
                                <div class="part-two">
                                    <div>
                                        <label for="surat">Surat</label>
                                        <input type="text" name="surat">
                                    </div>
                                    <div>
                                        <label for="ayat">Ayat</label>
                                        <input type="text" name="ayat">
                                    </div>
                                </div>
                                <div class="part-three">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea name="keterangan" cols="40" rows="5"></textarea>
                                </div>
                                <div class="part-four">
                                    <select name="select-status">
                                        <option value="#" selected> - Pilih Status -</option>
                                        <option value="smt-1">Ulang</option>
                                        <option value="smt-2">Lanjut</option>
                                    </select>
                                </div>
                            </div>
                            <div class="section-2">
                                <div><input type="submit" value="Edit"></div>
                                <div><input type="submit" value="Simpan"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

</body>

</html>