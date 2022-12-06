<?php

    session_start();

    require '../../function.php';

    $idAdmin = $_GET["idAdmin"];

    $admin = query("SELECT * FROM tb_admin WHERE idAdmin = $idAdmin")[0];

    if(isset($_POST["submit"])){


        if(ubahAdmin($_POST) > 0){
            echo "<script>
                    alert('Data Berhasil Di Ubah!');
                    document.location.href = '../beranda.php';
                  </script>";
        }else{
            echo "<script>
                    alert('Data Gagal Di Ubah!');
                    document.location.href = 'edit1.php';
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
    <title>Edit Data Admin</title>
    <link rel="stylesheet" href="edit1.css">
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
                <div class="title-menu">Edit Data Akun Admin</div>
                <div class="sub-right-content">
                    <div class="left-box">
                        <form action="" method="POST">
                            <div class="card-1">
                                <div>
                                    <label for="username">Nama Pengguna</label>
                                    <input type="text" name="username" id="" autocomplete="off" 
                                    required pattern="[A-Za-z0-9_]{1,15}" 
                                    title="Gunakan Huruf Kecil, Angka dan Tanpa Spasi!"
                                    value="<?= $admin["usernameAdmin"] ?>">
                                </div>
                                
                                <div>
                                    <label for="fullname">Nama Lengkap</label>
                                    <input type="text" name="fullname" id="" required  value="<?= $admin["fullName"] ?>">
                                </div>
                                <div>
                                    <label for="birth">Tanggal Lahir</label>
                                    <input type="date" name="birth" id="" required  value="<?= $admin["birth"] ?>">
                                </div>
                                <div>
                                    <label for="gender">Jenis Kelamin</label>
                                    <select name="gender" id="" required>
                                        <?php
                                        if($admin["gender"] == "Laki-Laki"){
                                            echo "<option value='Laki-Laki' selected>Laki-Laki</option>";
                                        }else{
                                            echo "<option value='Perempuan'>Perempuan</option>";
                                        }
                                        ?>

                                    </select>
                                </div>
                                <div>
                                    <label for="address">Alamat</label>
                                    <textarea name="address" id="" required autocomplete="off"><?= $admin["address"] ?></textarea>
                                </div>
                                <div>
                                    <label for="phone_number">Nomor Handphone</label>
                                    <input type="text" name="phone_number" id="" placeholder="0811xxx" autocomplete="off" value="<?= $admin["phoneNumber"] ?>">
                                </div>
                                <div>
                                    <label for="status">Status</label>
                                    <select name="status" id="">
                                        <option value="#">- Pilih Status -</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak AKtif">Tidak Aktif</option>
                                        <?php
                                        if($admin["status"] == "Tidak Aktif"){
                                            echo "<option value='Tidak Aktif' selected>Tidak Aktif</option>";
                                        }else{
                                            echo "<option value='Aktif' selected>Aktif</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <input type="hidden" name="level" id="" value="Administrator">
                                <input type="hidden" name="id" value="<?= $admin["idAdmin"] ?>">

                                <div class="save-btn">
                                    <button type="submit" name="submit">Simpan</button>
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