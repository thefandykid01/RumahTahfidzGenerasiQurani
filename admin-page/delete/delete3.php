<?php

require '../../function.php';


$id3 = $_GET["idSantri"];

if(delete3($id3) > 0){
    echo "
        <script>
            alert('Data Berhasil Di Hapus !');
            document.location.href = '../beranda.php';
        </script>
    ";
}else{
    echo "
        <script>
            alert('Data Gagal Di Hapus !');
            document.location.href = '../beranda.php';
        </script>
    ";
}
