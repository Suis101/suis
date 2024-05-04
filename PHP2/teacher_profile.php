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


<section class="tutor-profile">

   <h1 class="heading">profile details</h1>

   <div class="details">
      <div class="tutor">
         <img src="jabi.jpg" alt="">
         <h3>hev jabi</h3>
         <span>developer</span>
      </div>
      <div class="flex">
         <p>total playlists : <span>4</span></p>

         <p>total videos : <span>18</span></p>
         <p>tital likes : <span>1203</span></p>
         <p>total comments : <span>52</span></p>
      </div>
   </div>

</section>

<section class="courses">

   <h1 class="heading">our courses</h1>
   <div class="box-container">
      
      <div class="box">
         <img src="back.jpg" alt="">
         <h3 class="title">complete HTML tutorials</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <img src="back.jpg" alt="">
         <h3 class="title">complete JAVA tutorials</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <img src="back.jpg" alt="">
         <h3 class="title">complete PHP tutorials</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <img src="back.jpg" alt="">
         <h3 class="title">complete CSS tutorials</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>


</section>







<footer class="footer">
   &copy; copyright @ 2022 by <span> mr.web designer </span>| all rights reserved!
</footer>


<script src="script.js"></script>

</body>
</html>