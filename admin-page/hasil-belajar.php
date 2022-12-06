<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Belajar Santri | Rumah Tahfidz Generasi Qur'ani</title>
    <link rel="stylesheet" href="hasil-belajar.css">
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
                <div class="top-menu">
                    <div class="title-menu">Hasil Belajar Santri</div>
                    <div class="select-santri">
                        <select name="pilih_santri" id="">
                            <option value="#">- Pilih Santri -</option>
                            <option value="Santri 1">Santri 1</option>
                            <option value="Santri 2">Santri 2</option>
                        </select>
                    </div>
                </div>
                <div class="sub-right-content">
                    <div class="main-box">
                        <div class="box">
                            <div class="sub-title-menu">Mutaba'ah</div>
                            <div>
                                <table>
                                    <tr>
                                        <th style="width: 15%;">Tanggal</th>
                                        <th style="width: 30%;">Surat</th>
                                        <th>Ayat</th>
                                        <th>Keterangan</th>
                                        <th>Status</th>
                                    </tr>
                                    <tr>
                                        <td> 10/05/2022 </td>
                                        <td> Al Lahab </td>
                                        <td> 4 </td>
                                        <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, error? </td>
                                        <td> Lanjut </td>
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

                        </div>
                        <div class="box">
                            <div class="sub-title-menu">Absensi</div>

                        </div>
                        <div class="box">
                            <div class="sub-title-menu">Rapot</div>
                            <div class="rapot">
                                <div>
                                    <select name="pilih_semester" id="">
                                        <option value="#">- Pilih Semester -</option>
                                        <option value="#">Semester 1</option>
                                        <option value="#">Semester 2</option>
                                    </select>
                                </div>
                                <div>
                                    <button>Cetak</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>