<?php include 'functions.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tabela1.css">
    
    
    <title>PROJEKTI</title>
</head>
<header>
    <div class="headercontainer">
        <div class="imageheader">
            <img src="img/logo.png" class="photo1">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php
                 if(isset($_SESSION['klienti'])){
                 echo "<li><a href='shtoblerje.php'>Blej Tani</a></li>";
                echo "<li><a href='logout.php'>LogOut</a></li>";


                 if($_SESSION['klienti']['roli']==1) {  
                 echo "<li><a href='blerjet.php'>Blersit</a></li>";
                echo "<li><a href='klientat.php'>Klientat</a></li>";
                 echo "<li><a href='pakot.php'>Pakot</a></li>";
            }
        }
            ?> 
             <?php if(!isset($_SESSION['klienti'])){
                echo "<li><a href='login.php'>Login</a></li>";
             }
                ?>
            </ul>
        </nav>    
        </div>
    </div>
</header>

<section class="section">

</section>

<section class="web-container">
    <div class="web-content">
        <div class="row">
            <h1 class="titulli">We provide the best strategy </br>
             to grow up your business </h1>
            <p style="margin-top: 20px">
                Softy Pinko is a professional Bootstrap 4.0 theme designed by Template Mo </br>
            for your company at absolutely free of charge
            </p> 
            <br>
            <a href="#" class="diskover" >Discover More</a>
        </div>
    </div>
</section>

<section class="section1-container">
    <div class="section1-content">
        <div class="left-web">
            <div class="icon">
                <i>
                    <img src="img/featured-item-01.png" class="foto">
                </i>
            </div>
        <h5 class="web-title">Modern Strategy</h5> 
        <p> Customize anything in this template to fit your website needs </p>   
        </div>
        <div class="middle-web">
            <div class="icon">
                <i>
                    <img src="img/featured-item-01.png">
                </i>
            </div>
            <h5 class="web-title">Best Relationship</h5>
            <p>Contact us immediately if you have a question in mind</p>
        </div>  
        <div class="right-web">
            <div class="icon">
                <i>
                    <img src="img/featured-item-01.png">
                </i>
            </div>
            <h5 class="web-title">Ultimate Marketing</h5>
            <p>You just need to tell your friends about our free templates</p>

        </div> 
    </div> 
</section>