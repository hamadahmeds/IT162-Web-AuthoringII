<!DOCTYPE html>
<html lang="en">
<head>
<title> IT162–Web Authoring II</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Ahmed Hamad's Portal:IT162–Web Authoring II </a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Sara</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/ahmed.jpeg" class="desktop" alt="main-photo" />
 <img src="images/pic-iphone.png" class="phone" alt="myphotos" />
 <p>My name is Ahmed,that is my second quatre in Seattle Central College  I am pursuing Web Development certificate. my previous job was Arabic Translator/Cultural Adviser the federal Government, with that job I had to stay overseas for many months assisting the government representatives which was not easy to away from my family. so, I have to change my career to more stable and in demand career that allows me to work chose to my kids. <p>  I thought about the Web Development career and I find it really matching with my goals. My goals of taking these classes is to develop myself as much as I can and understand every single technique from the professors to apply it into my future job, in order to satisfy the company that will hire me.</p>
<p>I do like to have a good time with my kids and I like to run and work out accouple times a week. I also like to socialize with people who had some experience with the web development field so I can get more information about their experiences in this field.</p>
    
 
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Right Column</h3>
 <img src="images/pic-table.png" class="tablet" alt="myphoto" />
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<footer>
  <p><small>&copy; 2020-<?=date('Y')?> by <a href="contactme.php" target="_blank">Ahmed Hamad</a>, All Rights Reserved ~ <a href="https://validator.w3.org/nu/?showoutline=yes&doc=http%3A%2F%2Fwww.hamadacodes.com%2Fweb-2-it162%2F" target=" https://validator.w3.org/nu/?showoutline=yes&doc=http%3A%2F%2Fwww.hamadacodes.com%2Fweb-2-it162%2F ">Valid HTML</a> ~ <a href=" http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fwww.hamadacodes.com%2Fweb-2-it162%2F&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en#css" target="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fwww.hamadacodes.com%2Fweb-2-it162%2F&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en#css">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</body>
</html>
