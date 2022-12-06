<?php
session_start();
if (!isset($_SESSION["login"])) {
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
    <title>Profil</title>
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
                <div class="main-part">
                    <div class="title-menu">Profil</div>
                    <div class="ustadz"><a href="all-profil-ustadz.php"><button>Lihat Semua Profil Ustadz</button></a></div>
                    <div class="santri"><a href="all-profil-santri.php"><button>Lihat Semua Profil Santri</button></a></div>

                </div>
                <div class="sub-right-content">
                    <!-- <div class="top-box">
                        <div class="part-one">
                            <div>
                                <h4>Profil Ustadz</h4>
                            </div>
                            <div>
                                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                                    <div class="check">
                                        <div>
                                            <select name="id">
                                                <option value="" selected>- Pilih Ustadz -</option>
                                                <?php
                                                $sql = "SELECT idUstadz, fullName FROM tb_ustadz";
                                                $hasil = mysqli_query($koneksi, $sql);
                                                while ($data = mysqli_fetch_array($hasil)) {
                                                    $ket = "";
                                                    if (isset($_POST['id'])) {
                                                        $nik = trim($_POST['id']);
                                                        if ($nik == $data['id']) {
                                                            $ket = "selected";
                                                        }
                                                    }
                                                ?>
                                                    <option <?php echo $ket; ?> value="<?php echo $data['idUstadz']; ?>"><?php echo $data['fullName']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            <input type="submit" class="pilih-btn" value="Pilih">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="part-two-a" id="part-two-a">
                            <?php

                            if (isset($_POST['id'])) {
                                $nik = $_POST["id"];

                                $sql = "SELECT * FROM tb_ustadz WHERE idUstadz=$nik";
                                $hasil = mysqli_query($koneksi, $sql);
                                $data = mysqli_fetch_assoc($hasil);
                            }
                            ?>
                            <div class="one"><img src="../upload/<?= $data["photo"] ?>" alt=""></div>
                            <div class="two">
                                <div class="show-name"><?= $data['fullName']; ?></div>
                            </div>
                            <div class="three">
                                <div><img src="../assets/birth.png" alt=""></div>
                                <div><?= $data['birth']; ?></div>
                            </div>
                            <div class="four">
                                <div><img src="../assets/gender.png" alt=""></div>
                                <div><?= $data['gender']; ?></div>
                            </div>
                            <div class="five">
                                <div><img src="../assets/address.png" alt=""></div>
                                <div><?= $data['address']; ?></div>
                            </div>
                            <div class="six">
                                <div><img src="../assets/phone.png" alt=""></div>
                                <div><?= $data['phoneNumber']; ?></div>
                            </div>
                            <div class="seven">
                                <div><img src="../assets/entrance_year.png" alt=""></div>
                                <div><?= $data['entranceYear']; ?></div>
                            </div>
                            <div class="eight">
                                <div><img src="../assets/status.png" alt=""></div>
                                <div><?= $data['status']; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-box">
                        <div class="part-one">
                            <div>
                                <h4>Profil Santri</h4>
                            </div>
                            <div>
                                <form action="" method="GET">
                                    <div class="check">
                                        <div>
                                            <select name="id2">
                                                <?php
                                                $sql2 = "SELECT idSantri, fullName FROM tb_santri";

                                                $hasil2 = mysqli_query($koneksi, $sql2);

                                                while ($data2 = mysqli_fetch_array($hasil2)) {


                                                    $ket2 = "";
                                                    if (isset($_GET['id2'])) {
                                                        $nik2 = trim($_GET['id2']);

                                                        if ($nik2 == $data2['id2']) {
                                                            $ket2 = "selected";
                                                        }
                                                    }
                                                ?>
                                                    <option <?php echo $ket2; ?> value="<?php echo $data2['idSantri']; ?>"><?php echo $data2['fullName']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            <input type="submit" class="pilih-btn" value="Pilih">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="part-two-b">
                            <?php

                            if (isset($_GET['id2'])) {
                                $nik2 = $_GET["id2"];

                                $sql2 = "SELECT * FROM tb_santri WHERE idSantri=$nik2";
                                $hasil2 = mysqli_query($koneksi, $sql2);
                                $data2 = mysqli_fetch_assoc($hasil2);
                            }
                            ?>
                            <div class="one"><img src="../upload/<?= $data2["photo"] ?>" alt=""></div>
                            <div class="two">
                                <div class="show-name"><?= $data2['fullName']; ?></div>
                            </div>
                            <div class="three">
                                <div><img src="../assets/birth.png" alt=""></div>
                                <div><?= $data2['birth']; ?></div>
                            </div>
                            <div class="four">
                                <div><img src="../assets/gender.png" alt=""></div>
                                <div><?= $data2['gender']; ?></div>
                            </div>
                            <div class="five">
                                <div><img src="../assets/address.png" alt=""></div>
                                <div><?= $data2['address']; ?></div>
                            </div>
                            <div class="six">
                                <div><img src="../assets/phone.png" alt=""></div>
                                <div><?= $data2['phoneNumber']; ?></div>
                            </div>
                            <div class="seven">
                                <div><img src="../assets/entrance_year.png" alt=""></div>
                                <div><?= $data2['entranceYear']; ?></div>
                            </div>
                            <div class="eight">
                                <div><img src="../assets/status.png" alt=""></div>
                                <div><?= $data2['status']; ?></div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

    </div>

    <script src="../script.js"></script>

</body>

</html>