<?php

session_start();

require '../function.php';

$class = query("SELECT id, className FROM tb_classes");

if (isset($_POST["register"])) {


    if (registrasiSantri($_POST) > 0) {
        echo "<script>
                    alert('Santri Baru Berhasil Ditambahkan!');
                    document.location.href = 'beranda.php';
                  </script>";
    } else {
        echo "<script>
                    alert('Data Gagal Ditambahkan!');
                    document.location.href = 'ustadz-regist.php';
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
    <title>Registrasi Santri</title>
    <link rel="stylesheet" href="santri-regist.css">
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
                <div class="title-menu">Registrasi Akun Santri</div>
                <div class="sub-right-content">
                    <div class="left-box">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="card-1">
                                <div class="row">
                                    <div>
                                        <label for="username">Nama Pengguna</label>
                                        <input type="text" name="username" id="" autocomplete="off" required pattern="[A-Za-z0-9_]{1,15}" title="Gunakan Huruf Kecil, Angka dan Tanpa Spasi!">
                                    </div>
                                    <div>
                                        <label for="password">Kata Sandi</label>
                                        <input type="password" name="password" id="" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <label for="fullname">Nama Lengkap</label>
                                        <input type="text" name="fullname" id="" required>
                                    </div>
                                    <div>
                                        <label for="birth">Tanggal Lahir</label>
                                        <input type="date" name="birth" id="" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <label for="gender">Jenis Kelamin</label>
                                        <select name="gender" id="" required>
                                            <option value="-">- Pilih Jenis Kelamin -</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="father_name">Nama Orangtua</label>
                                        <input type="text" name="father_name" id="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <label for="phone_number">Nomor Handphone</label>
                                        <input type="text" name="phone_number" id="" placeholder="0811xxx" autocomplete="off">
                                    </div>
                                    <div>
                                        <label for="entrance_year">Tahun Masuk</label>
                                        <input type="text" name="entrance_year" id="" placeholder="2020" autocomplete="off">
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <label for="upload">Unggah Foto</label>
                                        <input type="file" name="upload" id="">
                                    </div>
                                    <div>
                                        <label for="address">Alamat</label>
                                        <textarea name="address" id="" required autocomplete="off"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <label for="classes">Kelas</label>
                                        <select name="classes" id="" required>
                                            <option value="-">- Pilih Kelas -</option>
                                            <option value="<?= $class[0]["id"] ?>"><?= $class[0]["className"] ?></option>
                                            <option value="<?= $class[1]["id"] ?>"><?= $class[1]["className"] ?></option>
                            
                                        </select>
                                    </div>
                                    <div>
                                        <label for="status">Status</label>
                                        <select name="status" id="">
                                            <option value="#">- Pilih Status -</option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Tidak AKtif">Tidak Aktif</option>
                                        </select>
                                    </div>
                                </div>

                                <input type="hidden" name="level" id="" value="Santri">

                                <div class="row">
                                    <div class="save-btn">
                                        <button name="register" type="submit">Registrasi</button>
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