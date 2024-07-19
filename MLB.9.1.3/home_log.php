<?php
session_start();
    ?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600;700&display=swap" rel="stylesheet"> 
        <title>State Bank of SriLanka | Homepage</title>
    <link rel="icon" type="image/x-icon" href="img/sbslogo.png"></link>
    <link rel="stylesheet" href="home.css">

    </head>
    <body>
        <div class="nav-position" style="position: sticky; top: 0;">
        <div>
            <img class="logoimg" src="img/SBS.png" alt="logo" ></img>
        </div>
          <div class="nav" style="background-color: #bebebe;">
            <ul>
              <li class="logo" href="home.html"> State Bank of SriLanka </li>
              <div class="topnav">
                <li><a class="active" href="home.html"> Home </a></li>
                <li><a href="moneytransfer.html"> Money-Transfer </a></li>
                <li><a href="loan.html"> Apply Loan </a></li>
                <li><a href="paybills.html"> Pay Bills </a></li>
                <li><a href="about.html"> About Us </a></li>
				<li><a href="help.html">Help</a></li>
                </div>
                <li class="searchbar">
                  <input type="text" placeholder="search">
                  <label class="search-icon">
                      <span type="submit">&#128269;</span>
                  </label>
              </li>
              <li >
                  <button class="login-button" ><a href="profile.php" style="text-decoration:none;">Profile</a></button>
              </li>
			  <li >
                  <button class="login-button"><a href="logout.php" style="text-decoration:none;">LogOut</a> </button>
              </li>
            </ul>
        </div>
    </div>
          <div class="header"> 
             <div class="image" style="max-width:500px">
                  <img class="mySlides" src="Slide/1.png" style="width:auto">
                  <img class="mySlides" src="Slide/2.png" style="width:auto">
                  <img class="mySlides" src="Slide/3.png" style="width:auto">
                  <img class="mySlides" src="Slide/4.png" style="width:auto">
              </div>
          </div>
          
          <script >
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
              setTimeout(carousel, 2000); // Change image every 2 seconds
            }
            //reference for JS: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_slideshow_auto
            </script>
        <div class="content">
        <div class="container">
            <div class="wrapper">
                <div class="image-slide">
                    <a href="/Slide/4.png" target="_blank"><img src="Slide/4.png"></a> 
                </div>
                <div class="image-slide">
                     <a href="/Slide/3.png" target="_blank"><img src="Slide/3.png"></a> 
                </div>
                <div class="image-slide">
                     <a href="/Slide/2.png" target="_blank"><img src="Slide/2.png"></a> 
                </div>
                 <div class="image-slide">
                     <a href="/Slide/1.png" target="_blank"><img src="Slide/1.png"></a> 
                 </div>
            </div>
             </div>
            <div class="box">
                    <iframe src="https://english.newsfirst.lk/latest" ></iframe>
            </div>
        </div>
        
        <div style="border-bottom: 1px solid gray" ></div>

       <div class="footer">
            <div class="logo">
                <a href="home.html"><img src="img/SBS.png" alt="Bank-logo"></img></a>
            </div>
            <div class="info">
                <ul>
                    <li class="Name"><a href="/home.html">State Bank of SriLanka</a></li>
                    <li><a href="#map">&#128205; SriLanka</a></li>
                    <li><a href="#phone">&phone; +94 11 5978224</a></li>
                    <li><a href="#web">&#127760; www.sbs.lk</a></li>
                    <li><a href="mailto:support@sbs.com">&#9993;support@sbs.com</a></li>
                </ul>
            </div>
        </div>
        <div style="border-bottom: 1px solid gray" ></div>
         <div class="lowfoot">
                <div class="contact">
                    <p>Connect With Us</p>
                    <ul>
                        <li><a href="https://www.facebook.com/worldbank/photos/" target="_blank" style="text-decoration: none;"><i class="fa fa-facebook"></i>FaceBook/StateBankOfSriLanka</a></li><br>
                        <li><a href="https://twitter.com/wbg_gov?lang=en" target="_blank" style="text-decoration: none;";><i class="fa fa-twitter"></i>Twitter/StateBankOfSriLanka</a></li><br>
                        <li><a href="https://www.youtube.com/worldbank" target="_blank" style="text-decoration: none";><i class="fa fa-youtube"></i>Youtube/StateBankOfSriLanka</a></li><br>
                        <li><a href="https://www.linkedin.com/company/the-world-banks" target="_blank" style="text-decoration: none";><i class="fa fa-linkedin"></i>Linkedin/StateBankOfSriLanka</a></li><br>
                    </ul>
                </div>
             <div class="quickcontact">
                <p>Quick Contact</p>
                <form method="post" action="comments.php">
                    <input type="text" name="Name" placeholder="Name" autocomplete="off">
                    <input type="email" name="Email" placeholder="Email" autocomplete="off">
                    <input type="text" name="Subject" placeholder="Subject" autocomplete="off">
                    <input type= "text" name="Message" placeholder="Message" class="message" autocomplete="off">
                    <button name="submit">SUBMIT</button>
                </form>
            </div>
            
        </div>
        <div class="copyright" style="background-color: #bebebe; border-top: solid black;">
        <div style="border-bottom: 1px solid gray" ></div>
        <p style="text-align: center; color: grey;">&copy; Copyright 2023| State Bank of Sri Lanka </p>
        <div style="border-bottom: 1px solid gray" ></div>
        </div>
    </body>
</html>

