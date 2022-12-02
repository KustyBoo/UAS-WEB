<?php

    require "config.php";
    
    $id = $_GET['ID_FEEDBACK'];

    $failed = null;
    $duplicate = null;
    $duplicate1 = null;

    $result = mysqli_query($conn, "SELECT * FROM feedback WHERE ID_FEEDBACK = $id");

    $fdb = [];

    while($row = mysqli_fetch_assoc($result)){
        $fdb[] = $row;
    }

    $fdb = $fdb[0];

    if( isset($_POST['regbtn']) ){

        $username = htmlspecialchars($_POST['username']);
        $nama = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $review = htmlspecialchars($_POST['review']);

        $query = "UPDATE feedback SET
                    USERNAME_AKUN = '$username',
                    NAME = '$nama',
                    EMAIL = '$email',
                    SUBJECT = '$subject',
                    FEEDBACK = '$review'
                    WHERE ID_FEEDBACK = '$id'";
        
        $result = mysqli_query($conn, $query);

        if(mysqli_affected_rows($conn) > 0){
            echo "<script>
            alert('- Update Success -');
            document.location.href = 'admin.php';
            </script>";
        }else{
            echo "<script>
            alert('- Update Failed -');
            document.location.href = 'admin_update_feedback.php';
            </script>";
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
                        Update Feedback
                    </div>
                    <form class="form-input" action="" method="POST">
                        <div class="form-input-data">
                            <input type="text" placeholder="Username" name="username" value="<?php echo $fdb['USERNAME_AKUN'] ?>" autocomplete="off" required>
                        </div>
                        <div class="form-input-data">
                            <input type="text" placeholder="Email" name="name" value="<?php echo $fdb['NAME'] ?>" autocomplete="off" required>
                        </div>
                        <div class="form-input-data">
                            <input type="email" placeholder="Email" name="email" value="<?php echo $fdb['EMAIL'] ?>" autocomplete="off" required>
                        </div>
                        <div class="form-input-data">
                            <input type="text" placeholder="Email" name="subject" value="<?php echo $fdb['SUBJECT'] ?>" autocomplete="off" required>
                        </div>
                        <div class="form-input-data">
                            <textarea placeholder="Feedback/Request" name="review" required><?php echo $fdb['FEEDBACK'] ?></textarea>
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