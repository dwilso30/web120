<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beer</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/humanity/jquery-ui.css">
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
 
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    
    
   <script>
    $(document).ready(function(){
    $("#tabs").tabs();
    });
    </script>
     </head>
<body>

<header>
<a href="beer.php">
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
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
            <li><a href="menu.php">Menu</a></li>
			<li><a href="beer.php">Beer</a></li>
			<li><a href="events.php">Events</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
<!--end mobile nav-->

<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Pyramid Brews</a></li>
    <li><a href="#tabs-2">Brewmaster Handles</a></li>
    <li><a href="#tabs-3">Portland Brewing Co.</a></li>
  </ul>
  <div id="tabs-1">
  <table>
<tr>
<th colspan="2"><p>Year-round award winning beers:</p></th>

</tr>

<tr>
<td><h3>Hefeweizen</h3>
<p>Unfiltered, Wheat Ale</p></td>
<td><h3>Apricot Ale</h3>
<p>Wheat Ale, Sweet</p></td>

</tr>
<tr>
<td>  <h3>Thunderhead IPA</h3>
<p>Bold Hops, Floral Aroma</p></td>
<td> <h3>Outburst Imperial IPA</h3>
<p>Massive Hops, Well Balanced</p></td>

</tr>
<tr>
<td> <h3>Alehouse Amber</h3>
<p>Malty, Unfiltered</p></td>
<td> <h3>Pyramid Pale Ale</h3>
<p>Aroma Citrus, Light Malt</p></td>

</tr>
<tr>
<td><h3>Ditto Session IPA</h3>
<p>Citrus, Topical Hops</p></td>
<td><h3>Snowcap</h3>
<p>Roasted Chocolate, Caramel Malts</p></td>

</tr>
 <tr>
<td> <h3>Super Snowcap</h3>
<p>Roasted Chocolate, Caramel Malts</p></td>
<td> <h3>Pyramid Pale Ale</h3>
<p>Aroma Citrus, Light Malt</p></td>

</tr>
<tr>
<td><h3>Barrel Aged Snowcap</h3>
<p>Citrus, Topical Hops</p></td>
<td><h3>Snowcap</h3>
<p>Hint of Bourbon, Roasted Chocolate</p></td>

</tr> 
 </table>  
   
 
    
   
    
   
    
  
  </div>
  <div id="tabs-2">
   <table>
<tr>
<th colspan="2"><p>Produced exclusively at the Seattle Alehouse:</p></th>

</tr>

<tr>
<td><h3>Blonde Altbier</h3>
<p>Bready Malt, Crisp</p></td>
<td><h3>Apricot Ale</h3>
<p>Wheat Ale, Sweet</p></td>

</tr>
<tr>
<td>  <h3>Hancock Bitter</h3>
<p>Hint of Malt, Smooth Finish</p></td>
<td> <h3>Nitro Red</h3>
<p>Hop Forward, Malt Finish</p></td>

</tr>
<tr>
<td> <h3>Mctut Stout (Nitro)</h3>
<p>Chocolate, Malt Finish</p></td>
<td>  <h3>Citrus IPA</h3>
<p>Smooth, Citrus Finish</p></td>

</tr>
<tr>
<td><h3>Winter Bock</h3>
<p>Strong Malt, European Malt Finish</p></td>


</tr>
 
 </table>
   
    </div>

  <div id="tabs-3">
      <table>
<tr>
<th colspan="2"><p>Selections from Pyramid's sister Company available at the Alehouse:</p></th>

</tr>

<tr>
<td><h3>Mac's Amber</h3>
<p>Earthy, Hint of Hops</p></td>
<td><h3>PBC IPA</h3>
<p>Citrusy IPA, Hint of Malt</p></td>

</tr>
<tr>
<td> <h3>Blackwatch</h3>
<p>Malty, Smooth</p></td>
<td> <h3>Mac's Amber (on Nitro)</h3>
<p>Hint of Malt, Creamy</p></td>

</tr>

 
 </table> 
    
  
</div>
</div>
</div>



<?php include 'includes/footer.php';?>
</body>
</html>
