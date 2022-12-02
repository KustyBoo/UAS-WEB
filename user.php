<?php

    session_start();

    require 'config.php';

    if(!isset($_SESSION['USERNAME'])){
        echo "<script>
                alert('Access Denied, Please Login');
                document.location.href = 'login.php';
            </script>";
    }

    $username = $_SESSION['USERNAME'];

    if( isset($_POST['submit'])){
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $review = htmlspecialchars($_POST['review']);

        $input = "INSERT INTO feedback VALUES ('','$username','$nama','$email','$subject','$review')";

        $hasil_input = mysqli_query($conn, $input);

        if ($hasil_input){
            echo "
            <script> 
                alert ('Thank You for Your Feedback');
                document.location.href = 'user.php';
            </script>";
        } else {
            echo "
            <script> 
                alert ('Sorry but We Failed to Place your Feedack');
                document.location.href = 'user.php';
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
        <title>TRÈS BIEN</title>
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
                        <a href="#">HOME</a>
                    </div>
                    <div class="isinav">
                        <a href="#about">ABOUT</a>
                    </div>
                    <div class="isinav">
                        <a href="#contact">CONTACT</a>
                    </div>
                    <div class="isinav">
                        <a href="logout.php">
                            <i class="fa fa-sign-in fa-rotate-180"></i>
                            LOGOUT
                        </a>
                    </div>
                </div>
            </div>

        </header>

        <main>
            
            <div class="kotak-img">
                <div class="teks-img-tengah">
                    <div class="kotak-img-tengah1">
                        MINIMALIST
                    </div>
                    <div class="kotak-img-tengah2">
                        Thriving to create a world with minimalist look.
                    </div>
                    <div class="kotak-img-learn">
                        <a href="#about">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            <div class="content1" id="about">
                <div class="content1-teks1">
                    Services
                </div>
                <div class="content1-icon-wrap">
                    <div class="content1-icon">
                        <i class="fa fa-home fa-5x"></i>
                        <br>
                        <br>
                        A commitment to build a minimalist look to your household
                    </div>
                    <div class="content1-icon">
                        <i class="fa fa-leaf fa-5x"></i>
                        <br>
                        <br>
                        Preserving plants and nurturing our ecosystem trough minimalistic look
                    </div>
                    <div class="content1-icon">
                        <i class="fa fa-id-card fa-5x"></i>
                        <br>
                        <br>
                        Designing product that you want, you need, with a minimalistic appeal
                    </div>
                </div>
                <div class="content1-teks2">
                    Founded in 2022, our company goal is to eliminate full, crowded, and noisy designs with simplistic design that just works.
                </div>
                <div class="content1-teks2">
                    We value hard work, independent ideas, and freedom of speech to the upmost respect.
                </div>
                <div class="content1-teks2">
                    Join us at our journey on making a better, simpler, and cleaner world.
                </div>
                <br>
            </div>
            
            <div class="content1">
                <div class="content1-teks1">
                    Projects
                </div>
                <div class="content1-project">
                    <div class="img-profile">
                        <img src="gambar/indodax.png" alt="">
                    </div>
                    <div class="img-profile">
                        <img src="gambar/nash.png" alt="">
                    </div>
                    <div class="img-profile">
                        <img src="gambar/pertamina.jpg" alt="">
                    </div>
                </div>
                <br>
                    <br>
                <div class="content1-teks2">
                    With the rise of Industrial Era, we as a company helped make a simpler yet functional world for all of us.
                </div>
                <div class="content1-teks2">
                    We believe, our partnership with these companies will only increase in our goal of making a minimalistic look.
                </div>
                <div class="content1-teks2">
                    Trust your projects with us.
                </div>
                <br>
            </div>

            <div class="content3">
                <div class="content1-teks1">
                    Statisctics
                </div>
                <div class="content1-statistic">
                    <div class="content1-statistic-teks">
                        Statisctics help us understand what you need and align them with our interest. Now in this case, we let them speak for themselves.
                    </div>
                    <div class="content1-statistic-bar">
                        Customer Satisfaction
                        <div class="content1-statistic-bar1">95%</div>
                        <br>
                        Product
                        <div class="content1-statistic-bar2">90%</div>
                        <br>
                        Engangement
                        <div class="content1-statistic-bar3">80%</div>
                    </div>
                    <div class="content1-statistic-teks">
                        In conclusion :
                    </div>
                    <div class="content1-team2">
                        <div class="content1-team-wrapper">
                            <div class="content1-team-icon">
                                <i class="fa fa-fighter-jet fa-2x fa-rotate-270"></i>
                            </div>
                            <div class="content1-team-teks">
                                Fast
                            </div>
                        </div>
                        <div class="content1-team-wrapper">
                            <div class="content1-team-icon">
                                <i class="fa fa-thumbs-up fa-2x"></i>
                            </div>
                            <div class="content1-team-teks">
                                Reliable
                            </div>
                        </div>
                        <div class="content1-team-wrapper">
                            <div class="content1-team-icon">
                                <i class="fa fa-clock-o fa-2x"></i>
                            </div>
                            <div class="content1-team-teks">
                                Efficient
                            </div>
                        </div>
                    </div>
                    <div class="content1-statistic-teks">
                        Based on these statistics, we as a company would hope that you will take a stand with us in changing the world to a better future.
                    </div>
                </div>
            </div>

            <div class="content1" id="contact">
                <div class="content1-teks1">
                    Reach us
                </div>
                <div class="content1-contact1">
                    <div class="content1-contact1-question">
                        <div class="content1-contact1-question-teks">
                            Frequently Asked Question
                        </div>
                        <div class="question1">
                            + Where is this company based?
                        </div>
                        <div class="content1-question-ans">
                            Samarinda, Kalimantan Timur, Indonesia.
                        </div>
                        <br>
                        <br>
                        <div class="question1">
                            + How long have this been around?
                        </div>
                        <div class="content1-question-ans">
                            We were founded in late 2022.
                        </div>
                        <br>
                        <br>
                        <div class="question1">
                            + What are your specialties?
                        </div>
                        <div class="content1-question-ans">
                            We specialize in designing, making and <br>distributing minimalistic goods
                        </div>
                    </div>
                    <div class="content1-contact1-form">
                        <form class="form-input" action="" method="POST">
                            <div class="form-input-data">
                                <input type="text" placeholder="Name" name="nama" autocomplete="off" required>
                            </div>
                            <div class="form-input-data">
                                <input type="email" placeholder="Email" name="email" autocomplete="off" required>
                            </div>
                            <div class="form-input-data">
                                <input type="text" placeholder="Subject" name="subject" autocomplete="off" required>
                            </div>
                            <div class="form-input-data">
                                <textarea placeholder="Feedback/Request" name="review" required></textarea>
                            </div>
                            <div class="form-input-tombol">
                                <button type="submit" class="tombol" name="submit">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="content1">
                <div class="content1-contact-wrap">
                    <div class="content1-contact">
                        <i class="fa fa-mobile fa-4x"></i>
                        <div class="content1-contact-text">
                            +0888-9999-1010
                        </div>
                    </div>
                    <div class="content1-contact">
                        <i class="fa fa-envelope fa-4x"></i>
                        <div class="content1-contact-text">
                            TREBIEN@gmail.com
                        </div>
                    </div>
                    <div class="content1-contact">
                        <i class="fa fa-map-marker fa-4x"></i>
                        <div class="content1-contact-text">
                            St. Louis 6th Avenue,<br> Samarinda 
                        </div>
                    </div>
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
        
        <script src="javascript.js"></script>
        
    </body>

</html>