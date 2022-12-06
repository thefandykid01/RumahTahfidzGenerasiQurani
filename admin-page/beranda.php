<?php

session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require '../function.php';

$admin = query("SELECT idAdmin, usernameAdmin, levelAdmin, fullName FROM tb_admin");
$ustadz = query("SELECT idUstadz, usernameUstadz, levelUstadz, fullName FROM tb_ustadz");
$santri = query("SELECT idSantri, usernameSantri, levelSantri, fullName FROM tb_santri");

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
                    <a href="beranda.php">Kelola Akun</a>
                    <a href="profil.php">Profil</a>
                    <a href="info.php">Info</a>
                    <a href="hasil-belajar.php">Hasil Belajar Santri</a>
                    <a href="absensi-ustadz.php">Absensi Ustadz</a>
                </div>
                <div class="below-menu">
                    <a href="logout.php">Keluar</a>
                </div>
            </div>
            <div class="right-content">
                <div class="title-menu">Kelola Akun</div>
                <div class="sub-right-content">
                    <div class="left-box">
                        <div class="part-one">
                            <div class="admin-btn">
                                <input type="button" value="Tambah Akun Admin" onclick="location.href='admin-regist.php'">
                            </div>
                            <div class="ustadz-btn">
                                <input type="button" value="Tambah Akun Ustadz " onclick="location.href='ustadz-regist.php'">
                            </div>
                            <div class="santri-btn">
                                <input type="button" value="Tambah Akun Santri " onclick="location.href='santri-regist.php'">
                            </div>
                            <div>
                                <input type="search" name="cari-data" id="" placeholder="Search">
                            </div>
                        </div>
                        <div class="part-two">
                            <label for="show">Show</label>
                            <select name="show" id="">
                                <option value="pilih">Pilih</option>
                                <option value="lima">5</option>
                                <option value="sepuluh">10</option>
                                <option value="duapuluh">20</option>
                            </select>
                        </div>
                        <div class="part-three">
                            <table>
                                <tr>
                                    <th style="width: 20%;">Username</th>
                                    <th style="width: 40%;">Nama Lengkap</th>
                                    <th style="width: 20%;">Level Akun</th>
                                    <th style="width: 20%;">Aksi</th>
                                </tr>
                                <?php foreach ($admin as $rowA) : ?>
                                <tr>
                                    <td style="text-align: left; padding-left:5px; padding-right:5px;"><?= $rowA["usernameAdmin"]; ?></td>
                                    <td style="text-align: left; padding-left:5px; padding-right:5px;;"><?= $rowA["fullName"]; ?></td>
                                    <td style="text-align: left; padding-left:5px; padding-right:5px;;"><?= $rowA["levelAdmin"]; ?></td>
                                    <td class="group-btn">
                                        <a href="edit/edit1.php?idAdmin=<?= $rowA["idAdmin"] ?>">
                                            <div class="edit-btn">
                                                <img src="../assets/edit.png" alt="">
                                            </div>
                                        </a>
 
                                        <a href="delete/delete1.php?idAdmin=<?= $rowA["idAdmin"] ?>" onclick="
                                        return confirm('Yakin Ingin Menghapus Data?');">
                                            <div class="hapus-btn">
                                                <img src="../assets/delete.png" alt="">
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                                <?php foreach ($ustadz as $rowB) : ?>
                                <tr>
                                    <td style="text-align: left; padding-left:5px;"><?= $rowB["usernameUstadz"]; ?></td>
                                    <td style="text-align: left; padding-left:5px;"><?= $rowB["fullName"]; ?></td>
                                    <td style="text-align: left; padding-left:5px;"><?= $rowB["levelUstadz"]; ?></td>
                                    <td class="group-btn">
                                        <a href="edit/edit2.php?idUstadz=<?= $rowB["idUstadz"]?>">
                                            <div class="edit-btn">
                                                <img src="../assets/edit.png" alt="">
                                            </div>
                                        </a>
 
                                        <a href="delete/delete2.php?idUstadz=<?= $rowB["idUstadz"] ?>" onclick="
                                        return confirm('Yakin Ingin Menghapus Data?');">
                                            <div class="hapus-btn">
                                                <img src="../assets/delete.png" alt="">
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                                <?php foreach ($santri as $rowC) : ?>
                                <tr>
                                    <td style="text-align: left; padding-left:5px;"><?= $rowC["usernameSantri"]; ?></td>
                                    <td style="text-align: left; padding-left:5px;"><?= $rowC["fullName"]; ?></td>
                                    <td style="text-align: left; padding-left:5px;"><?= $rowC["levelSantri"]; ?></td>
                                    <td class="group-btn">
                                        <a href="edit/edit3.php?idSantri=<?= $rowC["idSantri"] ?>">
                                            <div class="edit-btn">
                                                <img src="../assets/edit.png" alt="">
                                            </div>
                                        </a>
 
                                        <a href="delete/delete3.php?idSantri=<?= $rowC["idSantri"] ?>" onclick="
                                        return confirm('Yakin Ingin Menghapus Data?');">
                                            <div class="hapus-btn">
                                                <img src="../assets/delete.png" alt="">
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>