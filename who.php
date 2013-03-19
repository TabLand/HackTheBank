<!DOCTYPE html>
<html>
  <head>
    <title>Dine Tab - Who</title>
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
	  	  <li class="active">Who<span class="divider">/</span></li>
	    	  <li class="active">Am I broke?<span class="divider">/</span></li>
	    	  <li class="active">Checking Wallet...<span class="divider">/</span></li>
		</ul>
	  	<h1>Who?</h1><p> </p>
	  	<form action="how.php" method="get">
		  <fieldset>
		    <label>Who else is coming? Bear in mind, this app is too generous</label>
    		    <textarea rows="5"  name="people" onclick="this.innerHTML='';">Add names here</textarea><br/>
       		    <label>Num o' peeps</label><input type="text" name="numpeople" placeholder="numbahs">
       		    <input type="hidden" name="place" value="<?php echo $_GET["place"];?>">
       		    <input type="hidden" name="date" value="<?php echo $_GET["date"];?>">
      		    <input type="hidden" name="time" value="<?php echo $_GET["time"];?>">
    		    <input type="hidden" name="dur" value="<?php echo $_GET["dur"];?>">
       		    <input type="hidden" name="what" value="<?php echo $_GET["what"];?>">
		    <button type="submit" class="btn">Am I broke?</button>
		  </fieldset>
		</form>
	</div>
	<div class="span1"></div>
	    <script src="http://code.jquery.com/jquery.js"></script>
	    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
