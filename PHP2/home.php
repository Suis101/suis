<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

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


<section class="quick-select">
   <h1 class="heading">quick options</h1>


   <div class="box-container">

    <div class="box">
         <h3 class="title">likes and comments</h3>
         <p>total likes : <span>14</span></p>
         <a href="#" class="inline-btn">view likes</a>
         <p>total likes : <span>5</span></p>
         <a href="#" class="inline-btn">view comments</a>
         <p>saved playlist : <span>3</span></p>
         <a href="#" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <h3 class="title">popular topics</h3>
       <div class="flex">
       <a href="#"><i class="fas fa-code"></i><span>development</span></a>
       <a href="#"><i class="fas fa-chart-simple"></i><span>business</span></a>
       <a href="#"><i class="fas fa-pen"></i><span>design</span></a>
       <a href="#"><i class="fas fa-chart-line"></i><span>marketing</span></a>
       <a href="#"><i class="fas fa-music"></i><span>music</span></a>
       <a href="#"><i class="fas fa-camera"></i><span>photography</span></a>
       <a href="#"><i class="fas fa-cog"></i><span>software</span></a>
       <a href="#"><i class="fas fa-vial"></i><span>science</span></a>
       </div>
      </div>

      <div class="box">
         <h3 class="title">top categories</h3>
       <div class="flex">
       <a href="#"><i class="fab fa-html5"></i><span>HTML</span></a>
       <a href="#"><i class="fab fa-css3"></i><span>CSS</span></a>
       <a href="#"><i class="fab fa-js"></i><span>Javascript</span></a>
       <a href="#"><i class="fab fa-react"></i><span>React</span></a>
       <a href="#"><i class="fab fa-php"></i><span>PHP</span></a>
       <a href="#"><i class="fab fa-bootstrap"></i><span>Bootstrap</span></a>
       </div>
      </div>
      

      <div class="box tutor">
         <h3 class="title">become a tutor</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste placeat aliquam amet, esse ipsum doloremque quis aspernatur molestiae expedita voluptates vel rem laboriosam recusandae aperiam eum totam? Placeat, consequatur debitis.</p>
         <a href="register.html" class=inline-btn>get started</a>
      </div>

   </div>

</section>

<!--quick select ends-->

<section class="courses">

   <h1 class="heading">our courses</h1>
   <div class="box-container">
      
      <div class="box">
         <div class="tutor">
            <img src="lmspic.png" alt="">
            <div>
               <h3>Tuliao</h3>
               <span>09-20-2022</span>
            </div>
         </div>
         <img src="back.jpg" alt="">
         <h3 class="title">complete HTML tutorials</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="lmspic.png" alt="">
            <div>
               <h3>Llevado</h3>
               <span>09-20-2022</span>
            </div>
         </div>
         <img src="back.jpg" alt="">
         <h3 class="title">complete HTML tutorials</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="lmspic.png" alt="">
            <div>
               <h3>Crissostomo</h3>
               <span>09-20-2022</span>
            </div>
         </div>
         <img src="back.jpg" alt="">
         <h3 class="title">complete HTML tutorials</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="lmspic.png" alt="">
            <div>
               <h3>Santos</h3>
               <span>09-20-2022</span>
            </div>
         </div>
         <img src="back.jpg" alt="">
         <h3 class="title">complete HTML tutorials</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="lmspic.png" alt="">
            <div>
               <h3>Villiones</h3>
               <span>09-20-2022</span>
            </div>
         </div>
         <img src="back.jpg" alt="">
         <h3 class="title">complete HTML tutorials</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="lmspic.png" alt="">
            <div>
               <h3>Bunag</h3>
               <span>09-20-2022</span>
            </div>
         </div>
         <img src="back.jpg" alt="">
         <h3 class="title">complete HTML tutorials</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>
   </div>

   <div class="more-btn">
      <a href="courses.php" class="inline-option-btn">view more</a>
   </div>
</section>







<footer class="footer">
   &copy; copyright @ 2022 by <span> mr.web designer </span>| all rights reserved!
</footer>


<script src="script.js"></script>

</body>
</html>