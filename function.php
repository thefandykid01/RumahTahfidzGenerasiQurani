<?php 

    $koneksi = mysqli_connect(
        "localhost",
        "root",
        "",
        "db_rumah_tahfidz"
    );

    function query($query){

        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while(
            $row = mysqli_fetch_assoc($result)){
                $rows [] = $row;
            }
            return $rows;
    }

    function registrasiAdmin($dataAdmin){

        global $koneksi;

        $username   = htmlspecialchars(strtolower(stripslashes($dataAdmin["username"])));

        $password     = htmlspecialchars(mysqli_real_escape_string($koneksi, $dataAdmin["password"]));
        $password     = password_hash($password, PASSWORD_DEFAULT);

        $fullName     = htmlspecialchars($dataAdmin["fullname"]);

        $birth        = htmlspecialchars($dataAdmin["birth"]);

        $gender       = htmlspecialchars($dataAdmin["gender"]);

        $address      = htmlspecialchars($dataAdmin["address"]);

        $phoneNumber  = htmlspecialchars($dataAdmin["phone_number"]);

        $status       = htmlspecialchars($dataAdmin["status"]);

        $level        = $dataAdmin["level"];

        $query = "INSERT INTO tb_admin (usernameAdmin, password, fullName, birth, gender, address,
                  phoneNumber, status, levelAdmin) 
                  VALUES ('$username','$password','$fullName','$birth','$gender','$address',
                  '$phoneNumber','$status','$level') 
            ";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }
    
    function tambahInfo($info){
        global $koneksi;

        $photo = upload();
        if(!$photo){
            return false;
        }

        $title   = htmlspecialchars(strtoupper(stripslashes($info["title"])));

        $article = htmlspecialchars(stripslashes($info["article"]));

        $query = "INSERT INTO tb_info VALUES ('','$photo','$title','$article')";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function registrasiUstadz($data){

        global $koneksi;

        $username     = htmlspecialchars(strtolower(stripslashes($data["username"])));

        $password     = htmlspecialchars(mysqli_real_escape_string($koneksi, $data["password"]));
        $password     = password_hash($password, PASSWORD_DEFAULT);

        $fullName     = htmlspecialchars($data["fullname"]);

        $birth        = htmlspecialchars($data["birth"]);

        $gender       = htmlspecialchars($data["gender"]);

        $address      = htmlspecialchars($data["address"]);

        $phoneNumber  = htmlspecialchars($data["phone_number"]);

        $entranceYear = htmlspecialchars($data["entrance_year"]);


        //upload photo
        $photo = upload();
        if(!$photo){
            return false;
        }

        $status       = htmlspecialchars($data["status"]);

        $level        = $data["level"];

        $query = "INSERT INTO tb_ustadz (usernameUstadz, password, fullName, birth, gender, address,
                  phoneNumber, entranceYear, photo, status, levelUstadz) 
                  VALUES ('$username','$password','$fullName','$birth','$gender','$address',
                  '$phoneNumber','$entranceYear','$photo','$status','$level') 
            ";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function registrasiSantri($dataSantri){

        global $koneksi;

        $username     = htmlspecialchars(strtolower(stripslashes($dataSantri["username"])));

        $password     = htmlspecialchars(mysqli_real_escape_string($koneksi, $dataSantri["password"]));
        $password     = password_hash($password, PASSWORD_DEFAULT);

        $fullName     = htmlspecialchars($dataSantri["fullname"]);

        $birth        = htmlspecialchars($dataSantri["birth"]);

        $gender       = htmlspecialchars($dataSantri["gender"]);
       
        $fatherName   = htmlspecialchars($dataSantri["father_name"]);

        $address      = htmlspecialchars($dataSantri["address"]);

        $class      = htmlspecialchars($dataSantri["classes"]);

        $phoneNumber  = htmlspecialchars($dataSantri["phone_number"]);

        $entranceYear = htmlspecialchars($dataSantri["entrance_year"]);


        //upload photo
        $photo = upload();
        if(!$photo){
            return false;
        }

        $status       = htmlspecialchars($dataSantri["status"]);

        $level        = $dataSantri["level"];

        $query = "INSERT INTO tb_santri (usernameSantri, password, fullName, birth, gender, address,
                  phoneNumber, entranceYear, fatherName, photo, status, levelSantri, class_id) 
                  VALUES ('$username','$password','$fullName','$birth','$gender','$address',
                  '$phoneNumber','$entranceYear','$fatherName','$photo','$status','$level','$class') 
            ";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }
    
    function upload(){

        $fileName = $_FILES['upload']['name'];
        $fileSize = $_FILES['upload']['size'];
        $error    = $_FILES['upload']['error'];
        $tmpName  = $_FILES['upload']['tmp_name'];

        //Cek apakah tidak ada gambar yang di upload
        if($error === 4){
            echo "<script>
                    alert('Silahkan Pilih Foto Terlebih Dahulu!');
                </script>";
                return false;
        }

        //Cek apakah yang di upload gambar atau bukan
        $extValidImg = ['jpg', 'jpeg', 'png'];
        $extImg      = explode('.', $fileName);
        $extImg      = strtolower(end($extImg));
        if(!in_array($extImg, $extValidImg)){
            echo "<script>
            alert('Pastikan Hanya Mengupload File Photo Berekstensi .jpg, .jpeg atau .png!');
            </script>";
            return false;
        }

        //Cek Ukuran Upload Maksimal
        if($fileSize > 3000000){
            echo "<script>
            alert('Ukuran Gambar Terlalu Besar, Pastikan Tidak Lebih Dari 3Mb');
            </script>";
            return false; 
        }

        //Penamaan Foto Agar Unique
        date_default_timezone_set('Asia/Jakarta');
        $uniqueName = date("dmY_His"). "." .$extImg;

        //Lolos Pengecekan
        move_uploaded_file($tmpName, '../upload/' . $uniqueName);
        return $uniqueName;
    }

    function delete1($id1){
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM tb_admin WHERE idAdmin = $id1");
        return mysqli_affected_rows($koneksi);
    }

    function delete2($id2){
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM tb_ustadz WHERE idUstadz = $id2");
        return mysqli_affected_rows($koneksi);
    }

    function delete3($id3){
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM tb_santri WHERE idSantri = $id3");
        return mysqli_affected_rows($koneksi);
    }

    function ubahAdmin($dataAdmin){
        global $koneksi;

        $id = $dataAdmin["id"];

        $username   = htmlspecialchars(strtolower(stripslashes($dataAdmin["username"])));

        // $password     = htmlspecialchars(mysqli_real_escape_string($koneksi, $dataAdmin["password"]));
        // $password     = password_hash($password, PASSWORD_DEFAULT);

        $fullName     = htmlspecialchars($dataAdmin["fullname"]);

        $birth        = htmlspecialchars($dataAdmin["birth"]);

        $gender       = htmlspecialchars($dataAdmin["gender"]);

        $address      = htmlspecialchars($dataAdmin["address"]);

        $phoneNumber  = htmlspecialchars($dataAdmin["phone_number"]);

        $status       = htmlspecialchars($dataAdmin["status"]);

        $level        = $dataAdmin["level"];

        $query = "UPDATE tb_admin SET 
                    usernameAdmin = '$username',
                    fullName = '$fullName',
                    birth = '$birth',
                    gender = '$gender',
                    address = '$address',
                    phoneNumber = '$phoneNumber',
                    status = '$status'
                    WHERE idAdmin = $id
                ";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function ubahUstadz($dataUstadz){
        global $koneksi;

        $id = $dataUstadz["id"];

        $username     = htmlspecialchars(strtolower(stripslashes($dataUstadz["username"])));

        // $password     = htmlspecialchars(mysqli_real_escape_string($koneksi, $dataUstadz["password"]));
        // $password     = password_hash($password, PASSWORD_DEFAULT);

        $fullName     = htmlspecialchars($dataUstadz["fullname"]);

        $birth        = htmlspecialchars($dataUstadz["birth"]);

        $gender       = htmlspecialchars($dataUstadz["gender"]);

        $address      = htmlspecialchars($dataUstadz["address"]);

        $phoneNumber  = htmlspecialchars($dataUstadz["phone_number"]);

        $entranceYear = htmlspecialchars($dataUstadz["entrance_year"]);

        $oldPhoto = $dataUstadz["oldPhoto"];

        if($_FILES['upload']['error'] === 4){
            $photo = $oldPhoto;
        }else{
            $photo = upload2();
        }
       

        $status       = htmlspecialchars($dataUstadz["status"]);

        $level        = $dataUstadz["level"];

        $query = "UPDATE tb_ustadz SET 
                    usernameUstadz = '$username',
                    fullName = '$fullName',
                    birth = '$birth',
                    gender = '$gender',
                    address = '$address',
                    phoneNumber = '$phoneNumber',
                    entranceYear = '$entranceYear',
                    photo = '$photo',
                    status = '$status'
                    WHERE idUstadz = $id
                ";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function ubahSantri($dataSantri){
        global $koneksi;

        $id = $dataSantri["id"];

        $username     = htmlspecialchars(strtolower(stripslashes($dataSantri["username"])));

        // $password     = htmlspecialchars(mysqli_real_escape_string($koneksi, $dataSantri["password"]));
        // $password     = password_hash($password, PASSWORD_DEFAULT);

        $fullName     = htmlspecialchars($dataSantri["fullname"]);

        $birth        = htmlspecialchars($dataSantri["birth"]);

        $gender       = htmlspecialchars($dataSantri["gender"]);

        $fatherName   = htmlspecialchars($dataSantri["father_name"]);

        $phoneNumber  = htmlspecialchars($dataSantri["phone_number"]);

        $entranceYear = htmlspecialchars($dataSantri["entrance_year"]);

        $class      = htmlspecialchars($dataSantri["classes"]); 

        $address      = htmlspecialchars($dataSantri["address"]);

        $oldPhoto = $dataSantri["oldPhoto"];

        if($_FILES['upload']['error'] === 4){
            $photo = $oldPhoto;
        }else{
            $photo = upload2();
        }
       

        $status       = htmlspecialchars($dataSantri["status"]);

        $level        = $dataSantri["level"];

        $query = "UPDATE tb_santri SET 
                    usernameSantri = '$username',
                    fullName = '$fullName',
                    birth = '$birth',
                    gender = '$gender',
                    address = '$address',
                    phoneNumber = '$phoneNumber',
                    entranceYear = '$entranceYear',
                    fatherName = '$fatherName',
                    photo = '$photo',
                    status = '$status',
                    class_id = '$class'
                    WHERE idSantri = $id
                ";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function upload2(){

        $fileName = $_FILES['upload']['name'];
        $fileSize = $_FILES['upload']['size'];
        $error    = $_FILES['upload']['error'];
        $tmpName  = $_FILES['upload']['tmp_name'];

        //Cek apakah tidak ada gambar yang di upload
        if($error === 4){
            echo "<script>
                    alert('Silahkan Pilih Foto Terlebih Dahulu!');
                </script>";
                return false;
        }

        //Cek apakah yang di upload gambar atau bukan
        $extValidImg = ['jpg', 'jpeg', 'png'];
        $extImg      = explode('.', $fileName);
        $extImg      = strtolower(end($extImg));
        if(!in_array($extImg, $extValidImg)){
            echo "<script>
            alert('Pastikan Hanya Mengupload File Photo Berekstensi .jpg, .jpeg atau .png!');
            </script>";
            return false;
        }

        //Cek Ukuran Upload Maksimal
        if($fileSize > 3000000){
            echo "<script>
            alert('Ukuran Gambar Terlalu Besar, Pastikan Tidak Lebih Dari 3Mb');
            </script>";
            return false; 
        }

        //Penamaan Foto Agar Unique
        date_default_timezone_set('Asia/Jakarta');
        $uniqueName = date("dmY_His"). "." .$extImg;

        //Lolos Pengecekan
        move_uploaded_file($tmpName, '../../upload/' . $uniqueName);
        return $uniqueName;
    }
?>