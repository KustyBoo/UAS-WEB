<?php

    require "config.php";
    
    $id = $_GET['ID_AKUN'];

    $failed = null;
    $duplicate = null;
    $duplicate1 = null;

    $result = mysqli_query($conn, "SELECT * FROM akun WHERE ID_AKUN = $id");

    $akun = [];

    while($row = mysqli_fetch_assoc($result)){
        $akun[] = $row;
    }

    $akun = $akun[0];

    if( isset($_POST['regbtn']) ){

        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['psw']);
        $cpassword = htmlspecialchars($_POST['cpsw']);

        if( $password === $cpassword ){
            
            $password = password_hash($password, PASSWORD_DEFAULT);

            $query = "SELECT USERNAME FROM akun WHERE USERNAME = '$username'";
            $query1 = "SELECT EMAIL FROM akun WHERE email = '$email'";

            $result = mysqli_query($conn,$query);
            $result1 = mysqli_query($conn,$query1);

            $query = "UPDATE akun SET
                        USERNAME = '$username',
                        EMAIL = '$email',
                        PSW = '$password'
                        WHERE ID_AKUN = $id";
            
            $result = mysqli_query($conn, $query);

            if(mysqli_affected_rows($conn) > 0){
                echo "<script>
                alert('- Update Success -');
                document.location.href = 'admin.php';
                </script>";
            }else{
                echo "<script>
                alert('- Update Failed -');
                document.location.href = 'admin_update_akun.php';
                </script>";
            }
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
        <title>TRÈS BIEN | REGISTER</title>
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
                        Update Account
                    </div>
                    <form class="form-input" action="" method="POST">
                        <div class="form-input-data">
                            <input type="text" placeholder="Username" name="username" value="<?php echo $akun['USERNAME'] ?>" autocomplete="off" required>
                        </div>
                        <div class="form-invalid">
                            <?php echo $duplicate ?>
                        </div>
                        <div class="form-input-data">
                            <input type="password" placeholder="Password" name="psw" autocomplete="off" required>
                        </div>
                        <div class="form-input-data">
                            <input type="password" placeholder="Confirm Password" name="cpsw" autocomplete="off" required>
                        </div>
                        <div class="form-invalid">
                            <?php echo $failed ?>
                        </div>
                        <div class="form-input-data">
                            <input type="email" placeholder="Email" name="email" value="<?php echo $akun['EMAIL'] ?>" autocomplete="off" required>
                        </div>
                        <div class="form-invalid">
                            <?php echo $duplicate1 ?>
                        </div>
                        <div class="login-form-tombol">
                            <button type="submit" class="tombol" name="regbtn">Update</button>
                        </div>
                        <div class="login-form-tombol">
                            <button type="submit" class="tombol1"><a href="admin.php">CANCEL</a></button>
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