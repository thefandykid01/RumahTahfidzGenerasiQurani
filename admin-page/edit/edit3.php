<?php

session_start();

require '../../function.php';

$idSantri = $_GET["idSantri"];

$santri = query("SELECT * FROM tb_santri WHERE idSantri = $idSantri")[0];

$class = query("SELECT id, className FROM tb_classes");


if (isset($_POST["submit"])) {


    if (ubahSantri($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil Di Ubah!');
                    document.location.href = '../beranda.php';
                  </script>";
    } else {
        echo "<script>
                    alert('Data Gagal Di Ubah!');
                    document.location.href = 'edit3.php';
                  </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Santri</title>
    <link rel="stylesheet" href="edit3.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo"><img src="../../assets/logo-rumah-tahfidz.png" alt=""></div>
            <div class="tag-username">Hello, <?= $_SESSION['username'] ?></div>
        </div>
        <div class="content">
            <div class="left-content">
                <div class="above-menu">
                    <a href="../beranda.php">Kelola Akun</a>
                    <a href="../profil.php">Profil</a>
                    <a href="../info.php">Info</a>
                    <a href="../hasil-belajar.php">Hasil Belajar Santri</a>
                    <a href="../absensi-ustadz.php">Absensi Ustadz</a>
                </div>
                <div class="below-menu">
                    <a href="../../index.php">Keluar</a>
                </div>
            </div>
            <div class="right-content">
                <div class="title-menu">Edit Data Akun Santri</div>
                <div class="sub-right-content">
                    <div class="left-box">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="card-1">
                                <div class="row">
                                    <div>
                                        <label for="username">Nama Pengguna</label>
                                        <input type="text" name="username" id="" 
                                        autocomplete="off" required 
                                        pattern="[A-Za-z0-9_]{1,15}" 
                                        title="Gunakan Huruf Kecil, Angka dan Tanpa Spasi!"
                                        value="<?= $santri["usernameSantri"] ?>">
                                    </div>
                                    <div>
                                        <label for="fullname">Nama Lengkap</label>
                                        <input type="text" name="fullname" id="" required
                                        value="<?= $santri["fullName"] ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <label for="birth">Tanggal Lahir</label>
                                        <input type="date" name="birth" id="" required
                                        value="<?= $santri["birth"] ?>">
                                    </div>
                                    <div>
                                        <label for="gender">Jenis Kelamin</label>
                                        <select name="gender" id="" required>
                                        <?php
                                            if ($santri["gender"] == "Laki-Laki") {
                                                echo "<option value='Laki-Laki' selected>Laki-Laki</option>";
                                            } else {
                                                echo "<option value='Perempuan'>Perempuan</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <label for="father_name">Nama Orangtua</label>
                                        <input type="text" name="father_name" id="" autocomplete="off"
                                        value="<?= $santri["fatherName"] ?>">
                                    </div>
                                    <div>
                                        <label for="phone_number">Nomor Handphone</label>
                                        <input type="text" name="phone_number" id="" placeholder="0811xxx" 
                                        autocomplete="off"  value="<?= $santri["phoneNumber"] ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <label for="entrance_year">Tahun Masuk</label>
                                        <input type="text" name="entrance_year" id="" 
                                        placeholder="2020" autocomplete="off"
                                        value="<?= $santri["entranceYear"] ?>">
                                    </div>
                                    <div>
                                        <label for="classes">Kelas</label>
                                        <select name="classes" id="" required>
                                            <?php
                                                if($santri["class_id"] == 2){
                                                    echo "<option value=''>- Pilih Kelas -</option> ";
                                                    echo "<option value='1'> Tahsin </option> ";
                                                    echo "<option value='2' selected> Tahfidz </option> ";
                                                }else{
                                                    echo "<option value=''>- Pilih Kelas -</option> ";
                                                    echo "<option value='1' selected> Tahsin </option> ";
                                                    echo "<option value='2'> Tahfidz </option> ";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <label for="address">Alamat</label>
                                        <textarea name="address" id="" required autocomplete="off"><?= $santri["address"] ?></textarea>
                                    </div>
                                    <div>
                                        <label for="upload">Unggah Foto</label>
                                        <input type="file" name="upload" id="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <label for="status">Status</label>
                                        <select name="status" id="">
                                            <?php
                                                if($santri["status"] == "Tidak Aktif"){
                                                    echo "<option value='Aktif'>Aktif</option>";
                                                    echo "<option value='Tidak AKtif' selected>Tidak Aktif</option>";
                                                }else{
                                                    echo "<option value='Aktif' selected>Aktif</option>";
                                                    echo "<option value='Tidak AKtif'>Tidak Aktif</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div>
                                        <img src="../../upload/<?= $santri["photo"] ?>" alt="" width="40">
                                    </div>
                                </div>

                                <input type="hidden" name="level" id="" value="Santri">
                                <input type="hidden" name="id" value="<?= $santri["idSantri"] ?>">
                                <input type="hidden" name="oldPhoto" value="<?= $santri["photo"] ?>">

                                <div class="row">
                                    <div class="save-btn">
                                        <button name="submit" type="submit">Simpan Perubahan Data</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>