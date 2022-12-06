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
    <link rel="stylesheet" href="all-profil-santri.css">
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
                </div>
                <div class="sub-right-content">
                    <div class="top-box">
                        <div class="part-one">
                            <div>
                                <h4>Profil Santri</h4>
                            </div>
                            <div>
                                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
                                    <div class="check">
                                        <div>
                                            <select name="idSantri">
                                                <?php
                                                $sql = "SELECT idSantri, fullName FROM tb_santri";
                                                $hasil = mysqli_query($koneksi, $sql);
                                                while ($data = mysqli_fetch_array($hasil)) {
                                                    $ket = "";
                                                    if (isset($_GET['idSantri'])) {
                                                        $idSantri = trim($_GET['idSantri']);
                                                        if ($idSantri == $data['idSantri']) {
                                                            $ket = "selected";
                                                        }
                                                    }
                                                ?>
                                                    <option <?php echo $ket; ?> value="<?php echo $data['idSantri']; ?>"><?php echo $data['fullName']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            <button type="submit" name="pilih" class="pilih-btn">Pilih</button>
                                        </div>
                                    </div>
                                </form>
                                <?php

                                if (isset($_GET['idSantri'])) {
                                    $idSantri = $_GET["idSantri"];
                                    $sql = "SELECT * FROM tb_santri WHERE idSantri=$idSantri";
                                    $hasil = mysqli_query($koneksi, $sql);
                                    $data = mysqli_fetch_assoc($hasil);
                                }
                                ?>
                            </div>
                        </div>
                        <?php if(isset($_GET["pilih"])) : ?>
                        <div class="part-two-a" id="part-two-a">
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
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="../script.js"></script>

</body>

</html>