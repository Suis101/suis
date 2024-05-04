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

<section class="form-container">

   <form action="" method="post" enctype="multypart/form-data">
      <h3>update profile</h3>
      <input type="text" name="name" placeholder="Jade pogi"
      maxlength="100" class="box">
   </form>

</section>









<footer class="footer">
   &copy; copyright @ 2022 by <span> mr.web designer </span>| all rights reserved!
</footer>


<script src="script.js"></script>

</body>
</html>