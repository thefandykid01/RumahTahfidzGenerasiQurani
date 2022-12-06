<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Ustadz | Rumah Tahfidz Generasi Qur'ani</title>
    <link rel="stylesheet" href="profil.css">
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
                <div class="title-menu">Profil Ustadz</div>
                <div class="sub-right-content">
                    <div class="top-box">
                        <div class="part-one">
                            <div>
                                <h4>Profil Ustadz</h4>
                            </div>
                            <div class="group-btn">
                                <a href="edit-profil.php"><button>Edit Profil</button></a>
                                <button>Ganti Password</button>
                            </div>
                        </div>
                        <div class="part-two">
                            <div class="one"><img src="../assets/user.png" alt=""></div>
                            <div class="two">
                                <div class="show-name">Muhammad Yusuf </div>
                            </div>
                            <div class="three">
                                <div><img src="../assets/birth.png" alt=""></div>
                                <div>10/10/1999</div>
                            </div>
                            <div class="four">
                                <div><img src="../assets/gender.png" alt=""></div>
                                <div>Laki-Laki</div>
                            </div>
                            <div class="five">
                                <div><img src="../assets/address.png" alt=""></div>
                                <div>Villa Ambiru Sarasita Jl. Muncul No. 113, Pamulang, Tangerang Selatan</div>
                            </div>
                            <div class="six">
                                <div><img src="../assets/phone.png" alt=""></div>
                                <div>08112828111</div>
                            </div>
                            <div class="seven">
                                <div><img src="../assets/entrance_year.png" alt=""></div>
                                <div>2018</div>
                            </div>
                            <div class="eight">
                                <div><img src="../assets/status.png" alt=""></div>
                                <div>Aktif</div>
                            </div>
                        </div>

                    </div>
                    <div class="bottom-box">
                        <div class="part-one">
                            <div>
                                <h4>Profil Santri</h4>
                            </div>
                            <div>
                                <select name="pilih_santri" id="">
                                    <option value="#">- Pilih Santri -</option>
                                    <option value="1">Nama Santri 1</option>
                                    <option value="2">Nama Santri 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="part-two">
                            <div class="one"><img src="../assets/user.png" alt=""></div>
                            <div class="two">
                                <div class="show-name">Cindy Hapsari Maharani </div>
                            </div>
                            <div class="three">
                                <div><img src="../assets/birth.png" alt=""></div>
                                <div>10/10/2003</div>
                            </div>
                            <div class="four">
                                <div><img src="../assets/gender.png" alt=""></div>
                                <div>Perempuan</div>
                            </div>
                            <div class="five">
                                <div><img src="../assets/address.png" alt=""></div>
                                <div>Villa Ambiru Sarasita Jl. Muncul No. 113, Pamulang, Tangerang Selatan</div>
                            </div>
                            <div class="six">
                                <div><img src="../assets/phone.png" alt=""></div>
                                <div>08112828111</div>
                            </div>
                            <div class="seven">
                                <div><img src="../assets/entrance_year.png" alt=""></div>
                                <div>2018</div>
                            </div>
                            <div class="eight">
                                <div><img src="../assets/father.png" alt=""></div>
                                <div>Sulaiman</div>
                            </div>
                            <div class="nine">
                                <div><img src="../assets/class.png" alt=""></div>
                                <div>Tahsin</div>
                            </div>
                            <div class="ten">
                                <div><img src="../assets/status.png" alt=""></div>
                                <div>Aktif</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</body>

</html>