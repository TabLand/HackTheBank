<!DOCTYPE html>
<html>
  <head>
    <title>Dine Tab - Am I broke</title>
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
	  	  <li class="active"><a href="where.php">Where</a><span class="divider">/</span></li>
	  	  <li class="active"><a href="who.php">Who</a><span class="divider">/</span></li>
	    	  <li class="active">Am I broke?<span class="divider">/</span></li>
	    	  <li class="active">Checking Wallet...<span class="divider">/</span></li>
		</ul>
	  	<h1>Am I broke?</h1><p> </p>
	  	<form action="calc.php" method="get">
		  <fieldset>
		    <label>How much is it going to cost, per head?</label>

       		    <label>Wallet Thrashing Coefficient in &pound;Sterling</label>
       		    <input type="text" name="cost" placeholder="&pound;&pound;&pound;&pound;">
       		    <input type="hidden" name="people" value="<?php echo $_GET["people"];?>">
       		    <input type="hidden" name="numpeople" value="<?php echo $_GET["numpeople"];?>">
       		    <input type="hidden" name="place" value="<?php echo $_GET["place"];?>">
       		    <input type="hidden" name="date" value="<?php echo $_GET["date"];?>">
      		    <input type="hidden" name="time" value="<?php echo $_GET["time"];?>">
    		    <input type="hidden" name="dur" value="<?php echo $_GET["dur"];?>">
       		    <input type="hidden" name="what" value="<?php echo $_GET["what"];?>"><br/>
		    <button type="submit" class="btn">FIRE!</button>
		  </fieldset>
		</form>
	</div>
	<div class="span1"></div>
	    <script src="http://code.jquery.com/jquery.js"></script>
	    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
