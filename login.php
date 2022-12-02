<?php

    session_start();

    require "config.php";

    $failed = null;

    if(isset($_POST['login'])){
        $username = htmlspecialchars($_POST['nama']);
        $password = htmlspecialchars($_POST['psw']);

        $result = mysqli_query($conn,"SELECT * FROM akun WHERE USERNAME='$username' ");

        if(mysqli_num_rows($result) > 0){
            $data = mysqli_fetch_assoc($result);
            $psw = $data['PSW'];
            if (password_verify($password, $psw)){
                if ($username == "admin"){
                    $_SESSION['USERNAME'] = $username;
                    header("Location: admin.php");
                }else {
                    $_SESSION['USERNAME'] = $username;
                    header("Location: user.php");
                }
            }
            else{
                $failed = "Username or Password Wrong";
            }
        }else {
            $failed = "Username not registered";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel = "icon" href = "gambar/trebien.png">
        <link rel="stylesheet" href="style.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TRÈS BIEN | LOGIN</title>
    </head>

    <body>

        <header id="kotaknav">
            <div class="kotaknav">
                <div class="kotaknav1">
                    <div class="kotaklogo">
                        <a href="index.html">
                            TRÈS BIEN
                        </a>
                    </div>
                </div>
                <div class="isinav">
                    <div class="isinav">
                        <a href="index.html">HOME</a>
                    </div>
                    <div class="isinav">
                        <a href="index.html#about">ABOUT</a>
                    </div>
                    <div class="isinav">
                        <a href="index.html#contact">CONTACT</a>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="content1">
                <div class="login-form">
                    <div class="login-form-teks">
                        Login
                    </div>
                    <form class="form-input" action="" method="POST">
                        <div class="form-input-data">
                            <input type="text" placeholder="Username" name="nama" autocomplete="off" required>
                        </div>
                        <div class="form-input-data">
                            <input type="password" placeholder="Password" name="psw" autocomplete="off" required>
                        </div>
                        <div class="form-invalid">
                            <?php echo $failed ?>
                        </div>
                        <div class="login-form-register">
                            <div class="login-form-teks1">
                                Dont have an account?
                            </div>
                            <div class="login-form-teks1">
                                <a href="register.php">Register</a>
                            </div>
                        </div>
                        <div class="login-form-tombol">
                            <button type="submit" class="tombol" name="login">LOGIN</button>
                        </div>
                    </form>
                    
                </div>
            </div>

            <div class="footer">
                <div class="footer-teks">
                    <a href="https://www.instagram.com/f.chris.a/" class="fa fa-instagram"></a>
                    <a href="https://twitter.com" class="fa fa-twitter"></a>
                    <a href="https://wa.me/6281231364456" class="fa fa-whatsapp"></a>
                </div>
                <div class="footer-teks1">
                    TRÈS BIEN © 2022
                </div>
            </div>

        </main>

    </body>

</html>