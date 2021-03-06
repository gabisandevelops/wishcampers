<?php

include 'php/database.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">


    <!--Owl Carousel-->

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!--Owl Carousel-->


    <script src="https://kit.fontawesome.com/441287fbd4.js" crossorigin="anonymous"></script>
    <title>Blogger</title>
</head>
<body>
    
<nav class="nav">
    <div class="nav-menu flex-row">

        <div class="nav-brand">
            
            <a href="index.html" class="text-gray"><img src="assets/wishcamper_logowhite.png" alt=""></a>
        </div>

        <div class="toggle-collapse">
            <div class="toggle-icons">
                <i class="fas fa-bars"></i>
            </div>
        </div>

        <div>
            <ul class="nav-items">
                <li class="nav-link">
                    <a href="company.html">Company</a>
                </li>

                <li class="nav-link">
                    <a href="impact.html">Impact</a>
                </li>


                <li class="nav-link">
                    <a href="#">Projects</a>
                </li>

                <li class="nav-link">
                    <a href="news.html">News</a>
                </li>

                <li class="nav-link">
                    <a href="login.html">Login</a>
                </li>
            </ul>
        </div>
        <div class="social text-gray">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            

        </div>
    </div>
</nav>

<!--            main                  -->

<main>
    <!-- Hero -->

    <section class="site-hero">
        
        <div class="hero-background">
            
            <h3>Wishcamper Development Partners</h3>
            <h1>Uploading projects</h1>
            <button class="btn"> Company </button> 
   
        </div>
   
    </section>



    <!-- Hero -->



    <section class="contact">
        <h2>Get in Touch</h2>
        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">

            <input type="text" placeholder="Project Name" id="p_name" name="p_name">  <br><br>
            <input type="text" placeholder="year" id="p_year" name="p_year" > <br><br>
            <input type="file" placeholder="Image" id="p_image" name="p_image" > <br><br>
            <input type="text" placeholder="Location" id="p_location" name="p_location"> <br><br>
           
            <input type="text" placeholder="Project Class" id="p_class" name="p_class"> <br><br>
                       
            <input type="text" placeholder="Resident Profile" id="resident_prof" name="resident_prof"> <br><br>

            <input type="text" placeholder="Subsidies" id="subsidies" name="subsidies" > <br><br>

            
            <input type="text" placeholder="Financing" id="financing"  name="financing"> <br><br>

            
            <input type="text" placeholder="Agency" id="agency" name="agency"> <br><br>

            
            <input type="text" placeholder="Joint Venture Partners" id="joint_ven_part" name="joint_ven_part"> <br><br>

            
            <button type="submit" class="btn" name="boton"  id="boton"> </button>
        </form>
  
         <br><br>


    </section>


    <?php
  
    /* $submit = $_POST['submit']; */
    
    
    if(isset($_POST['boton'])){
      echo '<br> llego';
        $pname = $_POST['p_name'];
        $pyear = $_POST['p_year'];
        $plocation = $_POST['p_location'];
        $pimage = $_POST['p_image'];
        $pclass = $_POST['p_class'];
        $resident = $_POST['resident_prof'];
        $subsidies = $_POST['subsidies'];
        $financing = $_POST['financing'];
        $agency = $_POST['agency'];
        $joint = $_POST['joint_ven_part'];
    
    
        
    
        $insertar = "INSERT INTO projects(p_name,p_year,p_image,p_location, p_class, resident_prof, subsidies, financing, agency, joint_ven_part) VALUES ('{$pname}','{$pyear}', '{$pimage}', '{$plocation}', '{$pclass}', '{$resident}','{$subsidies}', '{$financing}', '{$agency}', '{$joint}');";
    
    
        $res_insert = mysqli_query($connect, $insertar);
    
        /* echo $res_insert; */
    
        if ($res_insert == true) {
            echo '<script> alert("Su registro ha sido exitoso") </script>';
          } else {
            echo 'Error, no se pudo registrar';
          }
    
    }
    else{
      echo '<br> no llego el submit';
    }
    
    
    
    ?>






</main>





    <footer class="footer">
        <div class="container">
        
            <div class="about-us">
                <h2>About us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quasi harum placeat deserunt iusto quis nam, a ad ut modi.</p>
            </div>
        
        
            <div class="newsletter">
                <h2>Newsletter</h2>
                <p>Stay update with our latest</p>
    
                <div class="form-element">
                    <input type="text" placeholder="Email"><span><i class="far fa-arrow-alt-circle-right"></i></span>
                </div>
            </div>
        
        
            <div class="instagram">
                <h2>Instagram</h2>
                <div class="flex-row">
                    <img src="./assets/instagram/thumb-card3.png" alt="insta1">
                    <img src="./assets/instagram/thumb-card4.png" alt="insta2">
                    <img src="./assets/instagram/thumb-card5.png" alt="insta3">
                  
                </div>
    
                <div class="flex-row">
                    <img src="./assets/instagram/thumb-card6.png" alt="insta4">
                    <img src="./assets/instagram/thumb-card7.png" alt="insta5">
                    <img src="./assets/instagram/thumb-card8.png" alt="insta6">
                    
                </div>
    
            </div>
        
            <div class="follow">
                <h2>Follow us</h2>
                <p>Let us be social</p>
                <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-google"></i>
            </div>
            
    
            
    
        </div>
        
    
    </footer>
    
    <!--Footer-->
    
    
    
    <!--            main                 -->
    
    
    <script src="js/jquery3.6.0.min.js"></script>
    
    
        <!--Owl Carousel js-->
    
        <script src="js/owl.carousel.min.js"></script>
    
        <!--Owl Carousel js-->
    
    <script src="js/main.js"></script>
    