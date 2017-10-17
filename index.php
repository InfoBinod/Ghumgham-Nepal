<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ghumghamnepal.com</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="bar">
      <img src="images/logo1.png" >
      <ul>
        <li><a href="#">HOME</a></li>
          <li><a href="hotel.html">HOTELS</a></li>
          <li><a href="destination.html">DESTINATION</a></li>
          <li><a href="deals.html">DEALS</a></li>
          <li><a href="contact.html">CONTACT US</a></li>
      </ul>
      </div>
    </div>
    <div class="slideshow-container">
    <div class="mySlides fade">
      <div class="numbertext">1 / 5</div>
      <img src="images/phewatal.jpg" style="width:100%">
      <div class="text">PHEWALAKE</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 5</div>
      <img src="images/annapurna.jpg" style="width:100%">
      <div class="text">ABC</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 5</div>
      <img src="images/sarangkot.jpg" style="width:100%">
      <div class="text">SARANGKOT</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">4 / 5</div>
      <img src="images/stupa.jpg" style="width:100%">
      <div class="text">SHANTI STUPA</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">5/ 5</div>
      <img src="images/mustang.jpg" style="width:100%">
      <div class="text">MUSTANG</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
  </div>
  <script type="text/javascript">
  var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 4000); // Change image every 4 seconds
}
  </script>
  <div class="main">

<?php

if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
//someone is calling the file directly, which we don't want
    echo '<p style="font-size: 150%">Enter Details for Enquiry:-</p>
      <div style="text-align: center;" class="enquiry">
        <form class="" action="index.php" method="post">
          <input type="text" name="name" value="" placeholder="Name" required/>
          <input type="email" name="email" value="" placeholder="Email" required/>
          <input type="phone" name="phone" value="" placeholder="Phone No."/>
          <input type="text" name="date" value="" placeholder="Date of Traval"/>
          <input type="number" name="peopels" value="" placeholder="Number of Peoples" required/>
          <input type="text" name="message" value="" placeholder="Message" required/>
          <input type="submit" name="" value="Send Enquiry"/>
        </form>
      </div>';
	}
  else
	{
    include "connect.php";
    $name= $_POST["name"];
    $email = $_POST["email"];
    $phone= $_POST["phone"];
    $date= $_POST["date"];
    $peopels = $_POST["peopels"];
    $message = $_POST["message"];

    $sql = "INSERT INTO enquiry(name, email, phone, adate, peoples, message)
    VALUES ('$name','$email','$phone','$date','$peopels','$message')";
    $result = $conn-> query($sql);
    if($result)
      {
        echo '<p style="font-size: 150%; text-align: center;"><b>Thank You :)</b></p>';
      }
  }
?>
    <h1 style="color:purple;">GhumghamNepal Special</h1>
  <div>
    <hr>
    <h2>TRAVEL  &amp; FUN</h2>
    <div class="row">
      <div class="column">
        <div class="content"><a href="mustang.html">
          <img src="images/mustang.jpg" alt="Mountains" style="width:100%" ></a>
          <h3>Mustang</h3>
          <p>Nrs 20,000</p>

        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="images/sunset.jpg" alt="Lights" style="width:100%">
          <h3>My Work</h3>
          <p>Lorem ipsum..</p>
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="images/underwater.jpg" alt="Nature" style="width:100%">
          <h3>My Work</h3>
          <p>Lorem ipsum..</p>
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="images/mountain.jpg" alt="Mountains" style="width:100%">
          <h3>My Work</h3>
          <p>Lorem ipsum..</p>
        </div>
      </div>
    </div>

    <div class="content">
      <img src="images/sunset.jpg" alt="Bear" style="width:100%">
      <h3>Some Other Work</h3>
      <p>Lorem ipsum..</p>
    </div>
  </div>
  <div>
    <hr>
    <h2>HOTEL &amp; LODGE</h2>
    <div class="row">
    <div class="column">
      <div class="content">
        <img src="images/mountain.jpg" alt="Mountains" style="width:100%" >
        <h3>MOUNTAINS</h3>
        <p>our country.....</p>

      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="images/sunset.jpg" alt="Lights" style="width:100%">
        <h3>My Work</h3>
        <p>Lorem ipsum..</p>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="images/underwater.jpg" alt="Nature" style="width:100%">
        <h3>My Work</h3>
        <p>Lorem ipsum..</p>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="images/mountain.jpg" alt="Mountains" style="width:100%">
        <h3>My Work</h3>
        <p>Lorem ipsum..</p>
      </div>
    </div>
    </div>

    <div class="content">
    <img src="images/sunset.jpg" alt="Bear" style="width:100%">
    <h3>Some Other Work</h3>
    <p>Lorem ipsum..</p>
    </div>
  </div>
  <div>
    <hr>
    <h2>DEALS</h2>
    <div class="row">
    <div class="column">
      <div class="content">
        <img src="images/mountain.jpg" alt="Mountains" style="width:100%" >
        <h3>MOUNTAINS</h3>
        <p>our country.....</p>

      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="images/sunset.jpg" alt="Lights" style="width:100%">
        <h3>My Work</h3>
        <p>Lorem ipsum..</p>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="images/underwater.jpg" alt="Nature" style="width:100%">
        <h3>My Work</h3>
        <p>Lorem ipsum..</p>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="images/mountain.jpg" alt="Mountains" style="width:100%">
        <h3>My Work</h3>
        <p>Lorem ipsum..</p>
      </div>
    </div>
    </div>

    <div class="content">
    <img src="images/sunset.jpg" alt="Bear" style="width:100%">
    <h3>Some Other Work</h3>
    <p>Lorem ipsum..</p>
    </div>
  </div>
  <div>
    <hr/>
    <h2>ADVENTURE</h2>
    <div class="row">
    <div class="column">
      <div class="content">
        <img src="images/mountain.jpg" alt="Mountains" style="width:100%" >
        <h3>MOUNTAINS</h3>
        <p>our country.....</p>

      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="images/sunset.jpg" alt="Lights" style="width:100%">
        <h3>My Work</h3>
        <p>Lorem ipsum..</p>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="images/underwater.jpg" alt="Nature" style="width:100%">
        <h3>My Work</h3>
        <p>Lorem ipsum..</p>
      </div>
    </div>
    <div class="column">
      <div class="content">
        <img src="images/mountain.jpg" alt="Mountains" style="width:100%">
        <h3>My Work</h3>
        <p>Lorem ipsum..</p>
      </div>
    </div>
    </div>

    <div class="content">
    <img src="images/sunset.jpg" alt="Bear" style="width:100%">
    <h3>Some Other Work</h3>
    <p>Lorem ipsum..</p>
    </div>
  </div>
</div>

<div class="footer">
  <p>&copy; Copyright World Media Group, LLC, 2017.<br>
<a href="aboutus.html">About Us</a> | <a href="contact.html">contact Us</a> | <a href="termsofuse.html">terms of use</a>| <a href="privacy.html">Privacy & Terms</a> <br>
The ghumghamnepal.com website and domain are privately owned and are not operated by or affiliated with any government or municipal authority.</p>
</div>


</body>
</html>

  </body>
</html>
