<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>It's our mission to create magical spaces and leave people feeling like they matter</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>We provide an online collections and online ordering</br>
        We also provide delivery information.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>We are a start-up flower store</br>
        Follow our new collections!</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>I recently ordered a bouquet of flowers for my sister's birthday from [Flosun], 
         and I couldn't be happier with the experience. The flowers were not only stunning but also incredibly fresh,
     and they exceeded my expectations.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John Doe</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>The online ordering process was seamless, with a user-friendly website that made it easy to browse through their beautiful selection of arrangements. I appreciated the customization options, allowing me to add a 
                personalized touch to the bouquet. 
                The checkout process was straightforward, and I received a confirmation email promptly.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Maria</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>I highly recommend [Flosun] for anyone looking for top-notch flowers and a hassle-free shopping experience. I'll definitely be a 
                returning customer for all my future floral needs!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Alex</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>I recently ordered a bouquet of flowers for my sister's birthday from [Flosun], 
         and I couldn't be happier with the experience. The flowers were not only stunning but also incredibly fresh,
     and they exceeded my expectations.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jesica</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>The bouquet itself was a work of art—vibrant colors, expertly arranged, and the fragrance filled the room. The flowers lasted longer than I expected,
                 a testament to their freshness and quality. </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mark</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>The online ordering process was seamless, with a user-friendly website that made it easy to browse through their beautiful selection of arrangements. I appreciated the customization options, allowing me to add a 
                personalized touch to the bouquet. 
                The checkout process was straightforward, and I received a confirmation email promptly.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Osheen</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>