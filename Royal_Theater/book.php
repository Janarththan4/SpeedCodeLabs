<?php
   include 'components/header.php';
?>
<?php 
    session_start();
    
    if(isset($_SESSION['success']))
    {
        echo $_SESSION['success']; 
        unset($_SESSION['success']);
    }

?> 

<section class="booking">

   <h1 class="heading-title">book your movie!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "10" required>
         </div>
         <div class="inputBox">
            <span>movie :</span>
            <select name="movie" id="movie" required>
               <option value="">Pick your movie</option>
               <option value="TheBatman">The Batman</option>
               <option value="TheNorthman">The Northman</option>
               <option value="DrStrangeMultiverseofMadness">Dr Strange Multiverse of Madness</option>
             </select>
         </div>
         <div class="inputBox">
            <span>date :</span>
            <input type="date" name="date" min="2022-05-24" max="2022-05-31" required>
         </div>
         <div class="inputBox">
            <span>time :</span>
            <select name="time" id="time" required>
               <option value="">Show time</option>
               <option value="9.00AM">9.00AM</option>
               <option value="12.30PM">12.30PM</option>
               <option value="4.00PM">4.00PM</option>
               <option value="6.30PM">6.30PM</option>
               <option value="9.00PM">9.00PM</option>
             </select>
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of tickets" name="tickets" min="1" max="5" required>
         </div>  
      </div>

      <input type="submit" value="submit" class="btn" name="submit">

   </form>
</section>

<?php
   include 'components/footer.php';
?>