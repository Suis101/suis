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

<section class="profile">

   <h1 class="heading">profile details</h1>

   <div class="details">

      <div class="user">
         <img src="Profile.jpg" alt="">
         <h3>Jade pogi</h3>
         <p>mala efren</p>
         <a href="update.html" class="inline-btn">update profile</a>
      </div>

 <div class="box-container">

      <div class="box">
         <div class="flex">
            <i class="fas fa-bookmark"></i>
               <div>
                  <h3>3</h3>
                  <span>saved playlist</span>
            </div>
         </div>
         <a href="#" class="inline-btn">view playlist</a>
      </div>

      
      <div class="box">
         <div class="flex">
            <i class="fas fa-heart"></i>
               <div>
                  <h3>55</h3>
                  <span>liked tutorials</span>
            </div>
         </div>
         <a href="#" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="flex">
            <i class="fas fa-comment"></i>
               <div>
                  <h3>15</h3>
                  <span>video comments</span>
            </div>
         </div>
         <a href="#" class="inline-btn">view comments</a>
      </div>

   </div>

</div>

</section>














<footer class="footer">
   &copy; copyright @ 2022 by <span> mr.web designer </span>| all rights reserved!
</footer>


<script src="script.js"></script>

</body>
</html>