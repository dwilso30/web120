<?php include 'includes/header.php';?>
        <title>Contact</title>
</head>

<body>
<header>
<a href="index.html">
<img src="images/banner.jpg" id="banner" alt="banner"></a>
<nav>
<ul id="nav">
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="menu.php">Menu</a></li>
<li><a href="beer.php">Beer</a></li>
<li><a href="events.php">Events</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</nav>
</header>
<div id="wrapper">

<!--/*start mobile nav*/-->
<button class="nav-button">Toggle Navigation</button>
<div class="mobile-logo">
<a href="contact.php"><img src="images/mobile-logo.png" alt="mobile-logo"></a>
</div>
		<ul class="primary-nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
            <li><a href="menu.php">Menu</a></li>
			<li><a href="beer.php">Beer</a></li>
			<li><a href="events.php">Events</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
<!--end mobile nav-->






<principal>
<form action="formhandler.php" method="post">
<fieldset>
<legend>Contact Us</legend>
<input placeholder="Name" name="Name" >
<input placeholder="Email" name="Email" >
<input placeholder="Phone" name="Phone" >

<label>Contact Method</label>
<p><input type="radio" name="Contact Method" value="email" >Email</p>
<p class="last"><input type="radio" name="Contact Method" value="phone" >Phone</p>
</fieldset>
<fieldset>
<legend>Inquiries</legend>
<p><input type="checkbox" name="inquires[]" value="reservations" >Reservations</p>
<p class="last"><input type="checkbox" name="inquires[]" value="private" >Private Events</p>
<p class="last"><input type="checkbox" name="inquires[]" value="product" >Product Info</p>
<p class="last"><input type="checkbox" name="inquires[]" value="other" >Other</p>
<label>Message</label>
<textarea name="comments" rows="8"></textarea>

<input type="submit" value="Submit">
</fieldset>
</form>
</principal>
<aside id="con">
<img src="images/blue.png" alt="blue" id="blue">

</aside>
</div>
<?php include 'includes/footer.php';?>
     <div id="valid">
<p><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fwww.wairatawilson.com%2Fweb120%2FPBeer%2Fcontact.html"><img id="html" src="images/html.png" alt= "html"></a></p>
</div>
<div id="css">
<p>
<a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fwww.wairatawilson.com%2Fweb120%2FPBeer%2Fcontact.html&profile=css3&usermedium=all&warning=1&vextwarning=&lang=en">
    <img style="border:0;width:68px;height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="Valid CSS!" />
    </a>
</p> 

</div>

</body>
</html>
