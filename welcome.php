<html>
      <head>
	  <title>gr8 website</title>
	  <script src="login.js"></script>
	  <link rel="stylesheet" type="text/css" href="forgot.css">
	  <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
	  </head>
	  
	  <body>
	  
	   <h1>welcome</h1>
	    
		<?php
		if ($_POST["username"]==""&& $_POST["password"]=="" )
		{   
             echo "Je bent vergeten alles in te vullen!";
			echo' <div id="menu">
		       <ul id="opties">
			       <li id="login"> <a href= index.php>Log in</a></li>
				   <li id="newaccount"> <a href= +acc.html>Account aanmaken</a></li>
			   </ul>
		 </div>';	
		}
		else{
			echo $_POST["username"];
			echo $_POST["password"];
		}
		?>
		<!--
		 <div id="menu">
		       <ul id="opties">
			       <li id="login"> <a href= index.php>Log in</a></li>
				   <li id="newaccount"> <a href= +acc.html>Account aanmaken</a></li>
			   </ul>
		 </div>
		 -->
		 <?php
	  //$username=$_POST["username"];
	  //echo $_POST["username"];
	  ?>
	  </body>


</html>