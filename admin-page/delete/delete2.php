<?php

require '../../function.php';

$id2 = $_GET["idUstadz"];


if(delete2($id2) > 0){
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




?>