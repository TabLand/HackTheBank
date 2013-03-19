<!DOCTYPE html>
<html>
  <head>
    <title>Dine Tab - Where</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="row">
  	<div class="span1"></div>
  	<div class="span8">
	    <ul class="breadcrumb">
		  <li><a href="index.html">Welcome</a> <span class="divider">/</span></li>
	  	  <li class="active"><a href="what.html">What</a><span class="divider">/</span></li>
	  	  <li class="active"><a href="when.php"> When</a><span class="divider">/</span></li>
	  	  <li class="active">Where<span class="divider">/</span></li>
	  	  <li class="active">Who<span class="divider">/</span></li>
	    	  <li class="active">How much?<span class="divider">/</span></li>
	    	  <li class="active">Checking Wallet...<span class="divider">/</span></li>
		</ul>
	  	<h1>Where?</h1><p> </p>
	  	<form action="who.php" method="get">
		  <fieldset>
		    <label>Where are we meeting up?</label>
		    <textarea rows="5"  name="place" onclick="this.innerHTML='';">Add a restaurant name, and or address</textarea><br/>
       		    <input type="hidden" name="date" value="<?php echo $_GET["date"];?>">
      		    <input type="hidden" name="time" value="<?php echo $_GET["time"];?>">
    		    <input type="hidden" name="dur" value="<?php echo $_GET["dur"];?>">
       		    <input type="hidden" name="what" value="<?php echo $_GET["what"];?>">
		    <button type="submit" class="btn">And whose coming?</button>
		  </fieldset>
		</form>
	</div>
	<div class="span1"></div>
	    <script src="http://code.jquery.com/jquery.js"></script>
	    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
