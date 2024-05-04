<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="style.css">

</head>
<body>
      <!--header starts-->
<header class="header">

<section class="flex">

   <a href="home.html" class="logo">ITLMS</a>

   <form action="" meethod="post" class="search-form">
      <input type="text" name="search_box" placeholder="search courses..."
      required maxlength="100">
      <button type="submit" class="fas fa-search" name="search_box"></button>
   </form>

   <div class="icons">
      <div id="menu-btn" class="fas fa-bars"></div>
      <div id="search-btn" class="fas fa-search"></div>
      <div id="user-btn" class="fas fa-user"></div>
      <div id="toggle-btn" class="fas fa-sun"></div>
   </div>

   <div class="profile">
      <img src="Profile.jpg" alt="">
      <h3>Jade Pogi</h3>
      <span>Mala Efren</span>
      <a href="profile.php" class="btn">view profile</a>
      <div class="flex-btn">
         <a href="login.php" class="option-btn">login</a>
         <a href="register.php" class="option-btn">register</a>
      </div>
   </div>
   
</section>

</header>
   <!-- header ends-->

<div class="side-bar">

<div class="profile">
      <img src="Profile.jpg" alt="">
      <h3>Jade pogi</h3>
      <span>Mala Efren</span>
      <a href="profile.html" class="btn">view profile</a>
</div>

<nav class="navbar">
   <a href="home.php"><i class="fas fa-home"></i><span>home</span></a>
   <a href="about.php"><i class="fas fa-question"></i><span>about us</span></a>
   <a href="courses.php"><i class="fas fa-book"></i><span>courses</span></a>
   <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
   <a href="contact.php"><i class="fas fa-male"></i><span>contact us</span></a>
</nav>
</div>
<!--sidebar ends-->

<section class="playlist">

   <h1 class="heading">playlist details</h1>

   <div class="row">

      <div class="col">
         <form action="" method="post" class="save-list">
            <button type="submit" name="save_list"><i class="far fa-bookmark"></i>
         <span>save playlist</span></button>
         </form>
         <div class="thumb">
            <span>6 videos</span>
            <img src="back.jpg" alt="">
         </div>
      </div>

      <div class="col">
         <div class="tutor">
            <img src="jabi.jpg" alt="">
            <div>
               <h3>hev jabi</h3>
               <span>developer</span>
            </div>
         </div>

         <div class="details">
            <h3>complete HTML tutorials</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet libero dignissimos optio facilis dolorem quod itaque nemo? Culpa veritatis 
               voluptates soluta ipsum amet non debitis facilis, perspiciatis officia accusamus molestiae?</p>
            <div class="date"><i class="fas fa-calendar"></i>
            <span>21-25-2022</span></div>
         </div>
      </div>

   </div>

</section>

<!--playlist section ends-->

<section class="videos-container">

   <h1 class="heading">playlist videos</h1>

   <div class="box-container">

      <a href="watch-video.php" class="box">
         <i class="fas fa-play"></i>
         <img src="back.jpg" alt="">
         <h3>complete HTML tutorial (part 1)</h3>
      </a>

      <a href="watch-video.php" class="box">
         <i class="fas fa-play"></i>
         <img src="back.jpg" alt="">
         <h3>complete HTML tutorial (part 2)</h3>
      </a>

      <a href="watch-video.php" class="box">
         <i class="fas fa-play"></i>
         <img src="back.jpg" alt="">
         <h3>complete HTML tutorial (part 3)</h3>
      </a>

      <a href="watch-video.php" class="box">
         <i class="fas fa-play"></i>
         <img src="back.jpg" alt="">
         <h3>complete HTML tutorial (part 4)</h3>
      </a>

      <a href="watch-video.php" class="box">
         <i class="fas fa-play"></i>
         <img src="back.jpg" alt="">
         <h3>complete HTML tutorial (part 5)</h3>
      </a>

      <a href="watch-video.php" class="box">
         <i class="fas fa-play"></i>
         <img src="back.jpg" alt="">
         <h3>complete HTML tutorial (part 6)</h3>
      </a>


   </div>

</section>




















<footer class="footer">
   &copy; copyright @ 2022 by <span> mr.web designer </span>| all rights reserved!
</footer>


<script src="script.js"></script>

</body>
</html>