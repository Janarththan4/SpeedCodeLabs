<?php
   include 'components/header.php';
?>

<section class="home">

            <div class="content">
               <h3>Welcome To <span>Royal Theater</span></h3>         
            </div>

            <img src="images/downarrow.png" alt="" class="down-arrow">

</section>

<section class="home-movies">

   <h1 class="heading-title"> now showing </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/batman.jpg" alt="">
         </div>
         <div class="content">
            <h3>The Batman</h3>
            <p>Platinum</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/northman.jpg" alt="">
         </div>
         <div class="content">
            <h3>The Northman</h3>
            <p>Silver</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/drstrange.jpg" alt="">
         </div>
         <div class="content">
            <h3>Doctor Strange Multiverse of Madness</h3>
            <p>Gold</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

</section>

<section class="home-about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident voluptate?</p>
   </div>

</section>

<?php
   include 'components/footer.php';
?>