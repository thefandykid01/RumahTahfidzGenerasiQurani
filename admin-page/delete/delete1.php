<?php

    require '../../function.php';

    $id1 = $_GET["idAdmin"];
   

    if(delete1($id1) > 0){
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