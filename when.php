<!DOCTYPE html>
<html>
  <head>
    <title>Dine Tab - When</title>
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
	  	  <li class="active">When<span class="divider">/</span></li>
	  	  <li class="active">Where<span class="divider">/</span></li>
	  	  <li class="active">Who<span class="divider">/</span></li>
	    	  <li class="active">How much?<span class="divider">/</span></li>
	    	  <li class="active">Checking Wallet...<span class="divider">/</span></li>
		</ul>
	  	<h1>When?</h1><p> </p>
	  	<form action="when.php" method="get">
		  <fieldset>
		    <label>Select a date, time and duration:</label>
		    <input type="text" placeholder="What?">
		    <button type="submit" class="btn">And Where?</button>
		  </fieldset>
		</form>
	</div>
	<div class="span1"></div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
