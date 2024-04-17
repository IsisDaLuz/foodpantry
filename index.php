<?php   										// Opening PHP tag
	
	// Include the database connection script
	require 'includes/database-connection.php';

	/*
	 * Retrieve toy information from the database based on the toy ID.
	 * 
	 * @param PDO $pdo       An instance of the PDO class.
	 * @param string $id     The ID of the toy to retrieve.
	 * @return array|null    An associative array containing the toy information, or null if no toy is found.
	 */

	// Retrieve info about toy with ID '0001' from the db using provided PDO connection

	

	/*
	 * TO-DO: Retrieve info for ALL remaining toys from the db
	 */




// Closing PHP tag  ?> 

<!DOCTYPE>
<html>

	<head>
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<title>Toys R URI</title>
  		<link rel="stylesheet" href="css/style.css">
  		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
	</head>

	<body>

		<header>
			<div class="header-left">
				<div class="logo">
					<img src="imgs/logo.png" alt="Toy R URI Logo">
      			</div>

	      		<nav>
	      			<ul>
	      				<li><a href="index.php">Toy Catalog</a></li>
	      				<!-- <li><a href="about.php">About</a></li> -->
			        </ul>
			    </nav>
		   	</div>

		    <div class="header-right">
		    	<!-- <ul>
		    		<li><a href="order.php">Check Order</a></li>
		    	</ul> -->
		    </div>
		</header>

  		<main>

  				<!-- 
				  -- TO DO: Fill in the rest of the cards for ALL remaining toys from the db
  				  -->

  		</main>

	</body>
</html>



