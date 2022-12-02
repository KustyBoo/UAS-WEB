<?php

    session_start();

    if(!isset($_SESSION['USERNAME'])){
        echo "<script>
                alert('Access Denied, Please Login');
                document.location.href = 'login.php';
            </script>";
    }

    require "config.php";
    
    $review = [];
    $akun = [];

    if(isset($_GET['search'])){
        $keyword = $_GET['keyword'];
        $result = mysqli_query($conn, "SELECT * FROM feedback WHERE USERNAME_AKUN LIKE '%$keyword%'
                OR NAME LIKE '%$keyword%' OR EMAIL LIKE '%$keyword%' OR FEEDBACK LIKE '%$keyword%'
                OR SUBJECT LIKE '%$keyword%'");
        while($row = mysqli_fetch_assoc($result)){
            $review[] = $row;
        }
        $panjang = 0;
        foreach($review as $x) {
            $panjang++;
        }
    } else{
        $result = mysqli_query($conn, "SELECT * FROM feedback");
        while($row = mysqli_fetch_assoc($result)){
            $review[] = $row;
        } 
        $panjang = 0;
        foreach($review as $x) {
            $panjang++;
        }
    }

    if(isset($_GET['search1'])){
        $keyword1 = $_GET['keyword1'];
        $result1 = mysqli_query($conn, "SELECT * FROM akun WHERE USERNAME LIKE '%$keyword1%'
                OR EMAIL LIKE '%$keyword1%'");
        while($row = mysqli_fetch_assoc($result1)){
            $akun[] = $row;
        }
        $panjang = 0;
        foreach($akun as $x) {
            $panjang++;
        }
    } else{
        $result1 = mysqli_query($conn, "SELECT * FROM akun");
        while($row = mysqli_fetch_assoc($result1)){
            $akun[] = $row;
        }
        $panjang = 0;
        foreach($akun as $x) {
            $panjang++;
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
        <title>TRÈS BIEN | ADMIN</title>
    </head>

    <body>

        <header id="kotaknav">

            <div class="kotaknav">
                <div class="kotaknav1">
                    <div class="kotaklogo">
                        <a href="#">
                            TRÈS BIEN
                        </a>
                    </div>
                </div>
                <div class="isinav">
                    <div class="isinav">
                        <a href="login.php">
                            <i class="fa fa-sign-in fa-rotate-180"></i>
                            LOGOUT
                        </a>
                    </div>
                </div>
            </div>

        </header>

        <main>
            
            <br>
            <br>
            <div class="content1">
                <div class="tabel-data">
                    <div class="content1-teks1">
                        Feedback Data
                    </div>
                    <br>
                    <div class="form-search">
                        <form class="form-search-input" method="GET" action="">
                            <input type="text" placeholder="Search" name="keyword" autocomplete="off">
                            <button type="submit" class="form-search-button" name="search"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <br>
                    <table class="tabel-admin">
                        <tr>
                            <th height=50px>ID</th>
                            <th>USERNAME</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>SUBJECT</th>
                            <th>FEEDBACK</th>
                            <th>PROCESS</th>
                        </tr>
                        <?php if($panjang != 0){ ?>
                        <?php $i = 1; foreach($review as $rev): ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $rev['USERNAME_AKUN']; ?></td>
                            <td><?php echo $rev['NAME'];?></td>
                            <td><?php echo $rev['EMAIL']; ?></td>
                            <td><?php echo $rev['SUBJECT']; ?></td>
                            <td><?php echo $rev['FEEDBACK']; ?></td>
                            <td>
                                <a href="admin_update_feedback.php?ID_FEEDBACK=<?php echo $rev['ID_FEEDBACK'];?>">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>
                                <a href="admin_delete_feedback.php?ID_FEEDBACK=<?php echo $rev['ID_FEEDBACK'];?>">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php $i++; endforeach; ?>
                        <?php } else {?>
                            <td colspan=6>
                                No Data Available
                            </td>
                        <?php } ?>
                    </table><br>
                </div>
            </div>
            <div class="tabel-data-tambah">
                <a href="admin_add_feedback.php">+ Add Feedback</a>
            </div>

            <div class="content1">
                <div class="tabel-data">
                    <div class="content1-teks1">
                        User's Data
                    </div>
                    <br>
                    <div class="form-search">
                        <form class="form-search-input" method="GET" action="">
                            <input type="text" placeholder="Search" name="keyword1" autocomplete="off">
                            <button type="submit" class="form-search-button" name="search1"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <br>
                    <table class="tabel-admin">
                        <tr>
                            <th height=50px>ID</th>
                            <th>USERNAME</th>
                            <th>EMAIL</th>
                            <th>PROCESS</th>
                        </tr>
                        <?php if($panjang != 0){ ?>
                        <?php $i = 1; foreach($akun as $rev): ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $rev['USERNAME']; ?></td>
                            <td><?php echo $rev['EMAIL']; ?></td>
                            <td>
                                <a href="admin_update_akun.php?ID_AKUN=<?php echo $rev['ID_AKUN'];?>">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>
                                <a href="admin_delete_akun.php?ID_AKUN=<?php echo $rev['ID_AKUN'];?>">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php $i++; endforeach; ?>
                        <?php } else {?>
                            <td colspan=6>
                                No Data Available
                            </td>
                        <?php } ?>
                    </table><br>
                </div>
            </div>
            <div class="tabel-data-tambah">
                <a href="admin_add_akun.php">+ Add Account</a>
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
        
        <script src="javascript.js"></script>
        
    </body>

</html>