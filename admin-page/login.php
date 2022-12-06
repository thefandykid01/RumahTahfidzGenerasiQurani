<?php
    session_start();
    require '../function.php';

    if(isset($_POST["login"])){

        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE usernameAdmin = '$username'");
        
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])){
                $_SESSION["login"] = true;
                $_SESSION["username"] = $username;
                header("Location: beranda.php");
                exit;
            }
        }
        $error = true;
       
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <?php if(isset($error)) : ?>
            <div style="color: red;" >
            <script>
                alert('Username atau Password Tidak Sesuai!');
            </script>
            </div>
        <?php endif; ?>
        <div class="login-card">
            <div class="login-title">Login</div>
            <form action="" method="POST">
                <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" required>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <div class="grup-login-form">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Remember Username
                        </label>
                    </div>
                    <div id="" class="form-text"><a href="#">Lupa Password?</a></div>
                </div>
                <input type="submit" class="btn btn-primary" name="login" value="Login">
            </form>
        </div>

    </div>


</body>

</html>