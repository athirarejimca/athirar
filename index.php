
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


.dropbtn {
     text-align: center;
     display:block;
     text-decoration: none;
	 cursor: pointer;
	 line-height:27px;
	 color:white;
     background:url(images/menu_bg.jpg) no-repeat center;
    }
.dropdown {
    position: relative;
    display: inline-block;
    }
.dropdown-content {
	display: none;
    position: absolute;
    background:#A8ABAC  ;
	min-width: 70px;
	 box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	}
.dropdown-content a {
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    }
.dropdown:hover .dropdown-content {
    display:inline-block;
	}
	button{
		 border: none;
	}
	.footer1 {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #FADBD8;
   color: black;
   text-align: center;
   
}

#google_translate_element img{
	    height: 2vh;
    width: 5vw;
}

</style>
<title>Flower Shop</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrap">
  <div class="header">
    <div class="logo"><a href="#"><img src="images/logo.png" alt="" border="0" /></a></div>
    <div id="menu">
      <ul>
        <li class="selected"><a href="#">home</a></li>
        <li><a href="about.php">about us</a></li>
        
		<li><div class="dropdown">
		 <button onclick="" class="dropbtn">Gallery</button>
         <div id="myDropdown" class="dropdown-content">
		  <a href="seedcat.php">Seed</a>
       <a href="category.php">flower</a>
  </div></div></li>
        <li><a href="myaccount.php">my account</a></li>
        <li><a href="register.php">register</a></li>
        <li><a href="contact.php">contact</a></li>
      </ul>
    </div>
  </div>
       <div class="prodbg"> 
        
      <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/New folder/flr.jpg" style="width:850px;height:350px">
  <div class="text">floweraura</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/New folder/flowerarrangements.jpg" style="width:850px;height:350px">
  <div class="text">floweraura</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/New folder/rose.jpg" style="width:850px;height:350px">
  <div class="text">floweraura</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

 </div>
   <div class="footer">
    <div class="left_footer"><img src="images/footer_logo.gif" alt="" /><br />
    <a href="http://csscreme.com"><img src="images/csscreme.gif" alt="" border="0" /></a></div>
    <div class="right_footer"> <a href="#">home</a> <a href="#">about us</a>  <a href="#">contact us</a> </div>
  </div>
  <div class="footer1">
<div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'hi,ml,ta', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
</div>
 
</body>
</html>
