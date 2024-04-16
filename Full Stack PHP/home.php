<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <link rel="shortcut icon" href="../thenorthbengalbuzz/images/The Northbengal Buzz.png" type="image/png" />

   <!-- JQuery CDN -->
   <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>


</head>

<body>

   <!-- Animated cursor Start -->
   <div class="cursor"></div>
   <!-- Animated cursor End -->

   <!-- header section starts  -->

   <section class="header">

      <div class="logo-container">
         <a href="home.php" class="logo">
            <img src="../thenorthbengalbuzz/images/The Northbengal Buzz.png" alt="Company Logo">
         </a>
      </div>
      <h1 class="header-title">The Northbengal Buzz</h1>

      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="about.php">about</a>
         <a href="package.php">package</a>
         <a href="book.php">book</a>

      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

      <!-- Login Button -->
      <div class="login-button">
         <a href="login.php"><img src="../thenorthbengalbuzz/images/profile-pic.png" alt="Logo"></a>
      </div>

   </section>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/home-slide-4.jpg) no-repeat">
               <div class="content">
                  <span>Jet Set and Go</span>
                  <h3>Your Ultimate Guide to Exploration!</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-5.jpg) no-repeat">
               <div class="content">
                  <span>Unlock the Secrets of North Bengal</span>
                  <h3>Your Ultimate Guide to Exploration!</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-6.jpg) no-repeat">
               <div class="content">
                  <span>Your Adventure Starts Here!</span>
                  <h3>Experience the Beauty of North Bengal</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
            </div>

         </div>

         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>

      </div>

   </section>

   <!-- home section ends -->

   <!-- services section starts  -->

   <section class="services">

      <h1 class="heading-title"> our services </h1>

      <div class="box-container">

         <div class="box" style="border-radius: 20px; overflow: hidden;">
            <img src="images/icon-1.png" alt="">
            <h3>adventure</h3>
         </div>

         <div class="box" style="border-radius: 20px; overflow: hidden;">
            <img src="images/icon-2.png" alt="">
            <h3>tour guide</h3>
         </div>

         <div class="box" style="border-radius: 20px; overflow: hidden;">
            <img src="images/icon-3.png" alt="">
            <h3>trekking</h3>
         </div>

         <div class="box" style="border-radius: 20px; overflow: hidden;">
            <img src="images/icon-4.png" alt="">
            <h3>camp fire</h3>
         </div>

         <div class="box" style="border-radius: 20px; overflow: hidden;">
            <img src="images/icon-5.png" alt="">
            <h3>off road</h3>
         </div>

         <div class="box" style="border-radius: 20px; overflow: hidden;">
            <img src="images/icon-6.png" alt="">
            <h3>camping</h3>
         </div>

      </div>

   </section>

   <!-- services section ends -->

   <!-- home about section starts  -->

   <!--==================== VIDEO START ====================-->
   <section class="home-about">
      <div class="video-container">
         <video width="100%" height="auto" controls>
            <source src="../thenorthbengalbuzz/video/video.mp4" type="video/mp4">
         </video>
      </div>

      <!-- <div class="video-wrapper">
         <iframe width="560" height="315" src="https://www.youtube.com/embed/P0L9FOhgNNo?si=TS_czhbUujuqUpCD" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div> -->

      <div class="content">
         <h3>about us</h3>
         <p>The Northbengal Buzz: Your Ultimate Companion to Adventure in Dooars, Siliguri, Alipur, Sikkim, and Darjeeling. Dive into the Heart of North Bengal with our Latest News, Comprehensive Travel Guides, and Insider Reviews. Discover Hidden Gems, Uncover Culinary Delights, and Find Your Perfect Retreat. Join us on a Journey of Exploration and Experience the Thrill of North Bengal Like Never Before!</p>
         <a href="about.php" class="btn">read more</a>
      </div>
   </section>
   <!--==================== VIDEO END ====================-->



   <!-- home about section ends -->


   <!-- home packages section starts  -->

   <section class="home-packages">

      <h1 class="heading-title"> our packages </h1>

      <div class="box-container">

         <div class="box">
            <div class="image">
               <img src="images/img-13.jpg" alt="">
            </div>
            <div class="content">
               <h3>Sandakphu and Phalut</h3>
               <p>Trekking destinations offering stunning views of the Himalayan peaks including Mount Everest, Kanchenjunga, and Makalu.</p>
               <a href="book.php" class="btn" style="border-radius: 10px; overflow: hidden;">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/img-14.jpg" alt="">
            </div>
            <div class="content">
               <h3>Tinchuley</h3>
               <p>A serene and offbeat destination nestled in the Himalayan foothills, offering panoramic views of the surrounding mountains, tea gardens, and orange orchards, along with opportunities for hiking, birdwatching, and experiencing local culture.</p>
               <a href="book.php" class="btn" style="border-radius: 10px; overflow: hidden;">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/img-15.jpg" alt="">
            </div>
            <div class="content">
               <h3>Kalimpong</h3>
               <p>Nestled in the Himalayas, known for its pleasant climate, Buddhist monasteries, and panoramic views of the surrounding mountains.</p>
               <a href="book.php" class="btn" style="border-radius: 10px; overflow: hidden;">book now</a>
            </div>
         </div>

      </div>

      <div class="load-more"> <a href="package.php" class="btn" style="border-radius: 10px; overflow: hidden;">load more</a> </div>

   </section>

   <!-- home packages section ends -->

   <!-- home offer section starts  -->

   <section class="home-offer">
      <div class="content">
         <h3>upto 50% off</h3>
         <p>Get Ready to Save Big! Enjoy Up to 50% Off on Your Next Adventure. Don't Miss Out, Limited Time Offer!</p>
         <a href="book.php" class="btn" style="border-radius: 10px; overflow: hidden;">book now</a>
      </div>
   </section>

   <!-- home offer section ends -->

















   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         </div>

         <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         </div>

         <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91-74782-86972 </a>
            <a href="#"> <i class="fas fa-phone"></i> +91-1800-333333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> thenorthbengalbuzz@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Siliguri, West Bengal-734001 </a>

         </div>

         <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/thenorthbengalbuzz" target="_blank"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://twitter.com/northbengalbuzz" target="_blank"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://www.instagram.com/thenorthbengalbuzz" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="https://www.youtube.com/thenorthbengalbuzz" target="_blank"> <i class="fab fa-youtube"></i> youtube </a>
         </div>

      </div>

      <div class="credit"> © 2024 <span>The Northbengal Buzz</span> | All rights reserved. </div>


   </section>

   <!-- footer section ends -->









   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>