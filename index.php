<html>
	<head>
		<title>Diseases Project</title>
	</head>
	<body>
	<script src = "js/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php
		if(isset($_POST['submit']))
		{
			$con = mysql_connect("localhost","root","null")or die("Couldn't connect");
			mysql_select_db("disease");
			// echo "Connected";
			$name = $_POST['name'];
			$symp = $_POST['symp'];
			$cure = $_POST['cure'];
			$info = $_POST['info'];
			$sql = "INSERT into search values('".$name."','".$symp."','".$cure."','".$info."')";
			$res= mysql_query($sql);
		}
	?>
	  <nav>
	    <div class="nav-wrapper">
	      <a href="#" class="brand-logo">Diseases</a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
	        <li><a href="view.php">View</a></li>
	        <li><a href="#">Insert</a></li>
	      </ul>
	    </div>
	  </nav>
	  <div class="row">
	    <form class="col s12" method="POST" action="">
	      <div class="row">
	        <div class="input-field col s6">
	          <input  id="name" type="text" class="validate" name="name">
	          <label for="first_name">Disease Name</label>
	        </div>
	        <div class="input-field col s6">
	          <input id="symp" type="text" class="validate" name="symp">
	          <label for="last_name">Symptoms</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <input  id="cure" type="text" class="validate" name="cure">
	          <label for="disabled">Cure</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <input id="info" type="text" class="validate" name="info">
	          <label for="password">Other Info.</label>
	        </div>
	      </div>
	   	 <button class="btn waves-effect waves-light"  type="submit" name="submit">Submit
	    	<i class="material-icons right">send</i>
	 	 </button>
	    </form>
	  </div>
   </body>
</html>