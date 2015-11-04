<html>
	<head>
		<title>Diseases</title>
	</head>
	<body>
		<script src="js/materialize.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
		<nav>
	    <div class="nav-wrapper">
	      <a href="#" class="brand-logo">Diseases</a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
	        <li><a href="#">View</a></li>
	        <li><a href="index.php">Insert</a></li>
	      </ul>
	    </div>
	  </nav>
    <?php		
			$con = mysql_connect("localhost","root","null")or die("Couldn't connect");
			mysql_select_db("disease");
			// echo "Connected";
			$sql = "SELECT * from search WHERE 1";
			$res = mysql_query($sql);
			echo	"<div class='row'>";
			while($row = mysql_fetch_array($res))
			{					
      					echo "<div class='col s2 m4'>
        			 	<div class='card-panel teal'>
        			  	<span class='white-text'>"; 
        			  	echo "Diesease Name : ".$row{'name'};
        			  	echo "<br>Symptoms : ".$row{'symp'};
        			  	echo "<br>Cure : ".$row{'cure'};
        			  	echo "<br>Info: ".$row{'info'};
          				echo " </span>
       				 	</div>
      			   		</div>";  			 		
			}
		echo "</div>";
	?>         
	</body>
</html>