<!DOCTYPE html>
<html>

<body>

<main>

<?php require("header.php");?>

<section id="homepage-header">

<div id="selfie">

<a href="<?php echo $_SERVER['PHP_SELF'];?>"><img src="images/selfie.jpeg"></a>

</div>

<div id="name">

<h1>Marlon Pempengco</h1>
<h3>Web Developer</h3>

</div>

</section>


<section id="homepage-menu">


<div class="menu-grid-item grid-item-1">
<a href="about.php">
<div class="bg-image about"></div>
<div class="fader"></div>
<h3><i class="fa fa-user-circle"></i>

About</h3>
</a>
</div>


<div class="menu-grid-item grid-item-2">
<a href="projects.php">
<div class="bg-image projects"></div>
<div class="fader"></div>
<h3>

&#60;&sol;&gt;Projects</h3>
</a>
</div>

<div class="menu-grid-item grid-item-3">
<a href="contact.php">
<div class="bg-image contact"></div>
<div class="fader"></div>
<h3><i class="fa fa-envelope"></i>Contact</h3>
</a>
</div>


<!--<div class="menu-grid-item grid-item-4">
<a href="#">
<div class="bg-image blog"></div>
<div class="fader"></div>
<h3><i class="fa fa-comment"></i>Blog</h3>
</a>
</div>-->

<div class="menu-grid-item grid-item-5 social-media-button">
<a href="https://www.freecodecamp.org/pochhhhh" target="_blank">
<div class="bg-image"></div>
<div class="fader"></div>
<i class="fa fa-free-code-camp fa-4x"></i>
</a>
</div>


<div class="menu-grid-item grid-item-6 social-media-button">
<a href="https://codepen.io/pochhhhh/" target="_blank">
<div class="bg-image"></div>
<div class="fader"></div>
<i class="fa fa-codepen fa-4x"></i>
</a>
</div>

<div class="menu-grid-item grid-item-7 social-media-button">
<a href="https://github.com/pochhhhh" target="_blank">
<div class="bg-image"></div>
<div class="fader"></div>
<i class="fa fa-github fa-4x"></i>


</a>
</div>


<div class="menu-grid-item grid-item-8 social-media-button">
<a href="https://www.linkedin.com/in/marlon-pempengco-58398881/" target="_blank">
<div class="bg-image"></div>
<div class="fader"></div>
<i class="fa fa-linkedin fa-4x"></i>
</a>
</div>

</section>

<hr>

<?php require("footer.php");?>

</main>



</body>

</html>
