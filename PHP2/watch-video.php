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

   <section class="watch-video">

      <div class="video-details">
         <video src="htemel.mp4" class="video" poster="back.jpg" controls autoplay></video>
         <h3 class="title">complete HTML turorial (part 1)</h3>
         <div class="info">
            <p><i class="fas fa-calendar"></i><span>22-28-2022</span></p>
            <p><i class="fas fa-heart"></i><span>45 likes</span></p>
         </div>
         <div class="tutor">
            <img src="jabi.jpg" alt="">
            <div>
               <h3>kokey</h3>
               <span>developer</span>
            </div>
         </div>
         <form action="" method="post" class="flex">
            <a href="htemel.mp4" class="inline-btn">view playlist</a>
            <button type="submit"><i class="far fa-heart"></i><span>like</span></button>
         </form>
         <div class="description">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit libero saepe assumenda, a accusamus necessitatibus officia distinctio quis laboriosam numquam error possimus inventore, voluptatum molestiae! Deserunt aliquid ea eius ipsum.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores earum perferendis, perspiciatis magni nam iste.</p>
         </div>
      </div>

   </section>
<!--watch video ends-->

<section class="comments">

   <h1 class="heading">add a comment</h1>

   <form action="" method="post" class="add-comment">
   <textarea name="comment_box" required placeholder="write your comment..." 
   maxlength="1000"cols="30" rows="10"></textarea>
   <input type="submit" value="add comment" name="add_comment" class="inline-btn">
   </form>
   
   <h1 class="heading">6 comments</h1>
   <div class="show-comments">

      <div class="box">
         <div class="user">
            <img src="tin.jpg" alt="">
            <div>
               <h3>bonakid</h3>
               <span>04-03-1986</span>
            </div>
         </div>
         <p class="text"> hello, hi it's me from 1986</p>
         <form action="" method="post" class="flex-btn">
         <button type="submit" name="edit_comment" class="inline-option-btn">edit comment</button>
         <button type="submit" name="delete_comment" class="inline-delete-btn">delete comment</button>
         </form>   
      </div>

      <div class="box">
         <div class="user">
         <img src="dev.jpg" alt="">
            <div>
               <h3>devon gay</h3>
               <span>04-03-1995</span>
            </div>
         </div>
         <p class="text"> hello, hi it's me from 1995</p>
      </div>

      <div class="box">
         <div class="user">
         <img src="pusa.jpg" alt="">
            <div>
               <h3>pusa</h3>
               <span>01-06-2003</span>
            </div>
         </div>
         <p class="text"> Wow HTML is great</p>
      </div>

      <div class="box">
         <div class="user">
         <img src="profile.jpg" alt="">
            <div>
               <h3>jade pogi</h3>
               <span>08-07-1968</span>
            </div>
         </div>
         <p class="text"> send the source code please ty</p>
      </div>

      <div class="box">
         <div class="user">
         <img src="Chip.jpg" alt="">
            <div>
               <h3>Mark logan</h3>
               <span>11-09-1978</span>
            </div>
         </div>
         <p class="text">Now i will start my programming future!</p>
      </div>

      <div class="box">
         <div class="user">
         <img src="beluga.webp" alt="">
            <div>
               <h3>Beluga</h3>
               <span>unkown species</span>
            </div>
         </div>
         <p class="text">I will create facebook with this. Thanks!</p>
      </div>


   </div>

</section>









<footer class="footer">
   &copy; copyright @ 2022 by <span> mr.web designer </span>| all rights reserved!
</footer>


<script src="script.js"></script>

</body>
</html>