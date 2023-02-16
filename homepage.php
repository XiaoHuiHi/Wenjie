<?php
    include 'config.php';
    $email = $_GET['email'];
    $q="SELECT * From `user` where Email = '$email'";
    $query = mysqli_query($conn,$q);
    $userimage = mysqli_fetch_assoc($query);
?>


<!DOCTYPE html>
<html lang="en">
<title>Main Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}


hr.style-four {
    height: 12px;
    border: 0;
    box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);
}

.image
{
  width: 25px;
  border-radius: 50%;
}
</style>
<body>


<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="#" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="ProjectAboutUs.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">About us</a>
    <a href="ProjectContactUs.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contact us</a>

    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="product">Product <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
		<a href="allproductIn.html" class="w3-bar-item w3-button">All Product</a>   
    <a href="topIn.html" class="w3-bar-item w3-button">RPG</a>
        <a href="bottomIn.html" class="w3-bar-item w3-button">Online</a>
        <a href="bagIn.html" class="w3-bar-item w3-button">Graphic</a>
		<a href="accessoriesIn.html" class="w3-bar-item w3-button">MOBA</a>
		<a href="setIn.html" class="w3-bar-item w3-button">Set</a>
      </div>
    </div>
    
	<a href="Sign in.html" class="w3-padding-large w3-hover-white w3-hide-small w3-right" style="text-decoration:none;"><?php echo '<img src='."image/".$userimage['Image'].' class="image" >'?></a>
    <a href="Sign-in.html" class="w3-padding-large w3-hover-white w3-hide-small w3-right"><i class="fa fa-shopping-cart"></i></a>
  </div>
</div>


<div class="w3-content" style="max-width:2000px;margin-top:46px">
<h1 style="text-align:center; font-family:'Lucida Handwriting Italic';"><img src="image/gg.png" style="width:15%"></i>GG.com</h1>
  <div class="mySlides w3-display-container w3-center w3-black">
    <img src="image/apex.jpg" style="width:30%">
  </div>
  <div class="mySlides w3-display-container w3-center w3-black">
    <img src="image/ff7.jpg" style="width:30%">
  </div>
  <div class="mySlides w3-display-container w3-center w3-black">
    <img src="image/gta5.jpg" style="width:30%">
  </div>

<hr class="style-four">
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="Shop">
    <h2 class="w3-wide">About us</h2>
    <p class="w3-opacity"><i>We love game</i></p>
    <p class="w3-justify">We have to play the game when we have some free time</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Chong Wen Jie</p>
        <img src="image/XHS_XHS_166559338327801665593923774.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
		<p>Founder of this company</p>
    </div>
  </div>

  <div class="w3-black" id="product">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">Our product</h2>
      <p class="w3-opacity w3-center"><i>Our Trending Products</i></p><br>

     

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="image/gta5.jpg" alt="Top" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>RPG</b></p>
            
            <p>GTA 5</p>
            <button class="w3-button w3-black w3-margin-bottom"><a href="Sign-in.html" style="text-decoration:none;">View Details</a></button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="image/csgo.jpg" alt="Bottom" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Online</b></p>
            
            <p>CSGO</p>
            <button class="w3-button w3-black w3-margin-bottom"><a href="Sign-in.html" style="text-decoration:none;">View Details</a></button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="image/dota2.jpg" alt="Set" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>MOBA</b></p>
            
            <p>DOTA 2</p>
            <button class="w3-button w3-black w3-margin-bottom"><a href="Sign-in.html" style="text-decoration:none;">View Details</a></button>
          </div>
        </div>
      </div>
    </div>
  </div>


<hr class="style-four">

  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Having Question? Contact us!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Malaysia<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +60 183560621<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: 1211201713@student.mmu.edu.my<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
</div>
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
  <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
  <a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
  <a href="https://twitter.com/home" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
</footer> 

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}


function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
