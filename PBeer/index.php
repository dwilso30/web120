<?php include 'includes/header.php';?>
<title>index</title>
</head>


<body>

<header>
<a href="index.php">
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
<a href="index.html"><img src="images/mobile-logo.png" alt="mobile-logo"></a>
</div>
		<ul class="primary-nav">
			<li><a href="index.html">Home</a></li>
			<li><a href="about.html">About</a></li>
            <li><a href="menu.html">Menu</a></li>
			<li><a href="beer.html">Beer</a></li>
			<li><a href="events.html">Events</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
<!--end mobile nav-->


<div class="flexslider">
          <ul class="slides">
            <li>
  	    	    <img src="images/exterior.jpg" alt="exterior" />
              <p class="flex-caption">Welcome to Pyramid!</p>
  	    		</li>
  	    		<li>
  	    	    <img src="images/curve.jpg" alt="curve"/>
              <p class="flex-caption">Year round beers</p>
  	    		</li>
  	    		<li>
  	    	    <img src="images/interior.jpg" alt="interior"/>
              <p class="flex-caption">The alehouse</p>
  	    		</li>
  	    		<li>
  	    	    <img src="images/garden.jpg" alt="garden"/>
              <p class="flex-caption">Pregame!</p>
  	    		</li>
          </ul>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="js/dropdown.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
<main>
<h1> Seattle Alehouse</h1>
<p>
The Pyramid Alehouse in Seattle is the original location for Pryamid beer. It offers a world of extraordinary tastes waiting to be explored on draft including our year-round beers, rotating seasonals, featured selections from our sister brewery the Portland Brewing Co., as well as a few unique Pyramid offerings you won’t find anywhere else. Enjoy a pint, explore a Pyramid Sampler, or order a growler of brewery fresh beer to go. Pair your brew with a tasty selection off of our full menu of classic brew house cuisine.</p>

<p>Located across the street from Safeco Field, home of the Seattle Mariners, and just a block south of CenturyLink Field - the Alehouse is a great place for friends to gather before or after a baseball, football or soccer game.
</p>
</main>
<aside>


<h3>Featured Beers</h3>
        
        <p>These beers are produced in small batches by our brewer Kim Brusco. They change seasonally and are only found exclusively at the Seattle Alehouse. The current selections are listed below:
        </p>
       
        <h3>Mctut Stout</h3>
      
        <h3>Hancock Bitter</h3>
       
        <h3>Nitro Red </h3>
        
        <h3>Citrus IPA</h3>
        
        <h3>Winter Bock</h3>
        
         <h3>Blonde Altbier</h3>
       
       


</aside>
</div>
<?php include 'includes/footer.php';?>


    <div id="valid">
<p><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fwww.wairatawilson.com%2Fweb120%2FPBeer%2Findex.html"><img id="html" src="images/html.png" alt= "html"></a></p>
</div>
<div id="css">
<p>
<a href="https://jigsaw.w3.org/css-validator/validator">
    <img style="border:0;width:68px;height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="Valid CSS!" />
    </a>
</p> 
    </div>
</body>
</html>
