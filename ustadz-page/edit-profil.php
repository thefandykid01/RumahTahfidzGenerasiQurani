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
    <link rel="stylesheet" href="edit-profil.css">
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
                <div class="title-menu">Edit Profil Ustadz</div>
                <div class="sub-right-content">
                <div class="left-box">
                        <form action="beranda.php" method="POST">
                            <div class="card-1">
                                <div class="row">
                                    <div>
                                        <label for="username">Nama Pengguna</label>
                                        <input type="text" name="username" id="" disabled>
                                    </div>
                                    <div>
                                        <label for="password">Kata Sandi</label>
                                        <input type="password" name="password" id="" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <label for="fullname">Nama Lengkap</label>
                                        <input type="text" name="fullname" id="" disabled>
                                    </div>
                                    <div>
                                        <label for="birth">Tanggal Lahir</label>
                                        <input type="date" name="birth" id="" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <label for="gender">Jenis Kelamin</label>
                                        <select name="gender" id="" disabled>
                                            <option value="-">- Pilih Jenis Kelamin -</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="address">Alamat</label>
                                        <textarea name="address" id="" required autocomplete="off"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <label for="phone_number">Nomor Handphone</label>
                                        <input type="text" name="phone_number" id="" placeholder="0811xxx" autocomplete="off">
                                    </div>
                                    <div>
                                        <label for="entrance_year">Tahun Masuk</label>
                                        <input type="text" name="entrance_year" id="" placeholder="2020" autocomplete="off" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <label for="upload">Unggah Foto</label>
                                        <input type="file" name="upload" id="">
                                    </div>
                                    <div>
                                        <label for="status">Status</label>
                                        <select name="status" id="" disabled>
                                            <option value="#">- Pilih Status</option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Tidak AKtif">Tidak Aktif</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="level" id="" value="Ustadz" disabled>
                                <div class="row">
                                    <div class="save-btn">
                                        <button name="">Simpan Perubahan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>

</body>

</html>