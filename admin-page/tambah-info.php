<?php
    session_start();

    require '../function.php';

    if(isset($_POST["tambah-info"])){


        if(tambahInfo($_POST) > 0){
            echo "<script>
                    alert('Informasi Berhasil Ditambahkan!');
                    document.location.href = 'info.php';
                  </script>";
        }else{
            echo "<script>
                    alert('Informasi Gagal Ditambahkan!);
                    document.location.href = 'tambah-info.php';
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
    <title>Tambah Info</title>
    <link rel="stylesheet" href="tambah-info.css">
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
                <div class="title-menu">Tambah Info</div>
                <div class="sub-right-content">
                    <div class="left-box">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="card-1">
                                <div>
                                    <label for="upload_photo">Upload Photo</label>
                                    <input type="file" name="upload" id="">
                                </div>
                                <div>
                                    <label for="title">Judul Info</label>
                                    <input type="text" name="title" id="">
                                </div>
                                <div>
                                    <label for="article">Isi Artikel</label>
                                    <textarea name="article" id=""></textarea>
                                </div>

                                <div class="save-btn">
                                    <button name="tambah-info">Tambah Info Baru</button>
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