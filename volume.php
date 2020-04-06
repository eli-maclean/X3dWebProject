<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>
<html>
	<head>
		<script type="text/javascript" src="//code.jquery.com/jquery-1.7.1.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>3D Models</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		body{
			 background-color: #FAFAFA;
				margin:0;
				padding:0;

		 }
		img {
					max-width: 100%;
					max-height: 100%;
		}
		.cell {
					display:block;
					float: left;
			background: #ffffff;
			margin: 15px 0px 30px 30px;
			border: #E0E0E0 1px solid;

		 }
		.thumbnail{
			height: 155px;
			width: 250px;
			background-color: #FFF;

			border:1px solid black;
			
			
		}
		.title {
			padding: 15px 15px 0px 15px;
			overflow: auto;
			text-align: center;
			background-color: #D4D4D4; 
			border:1px solid black;
		}
		.hidden {
			display: none;
		}
		nav>ul {
			height: 50px;
			line-height: 50px;
			text-align: center;
			background-color: #333;
		}

		nav>ul>li {
			display: inline-block;
			position: relative;
			background-color: #333;
			border-radius: 5px;
			padding: 0 20px;
		}

		nav ul li a {
			text-decoration: none;
			display: block;
			color: white;
		}

		nav ul li a:hover {
			color: 88ACFF;
		}	
		</style>
	   
	</head>
	<body>
		<nav>
			<ul><!-- Just change the link to whichever folder your using -->
			  <li><a href="X3dwebprojecthome.html">Home</a></li>
			  <li><a href="basic.php">Basic</a></li>
			  <li><a href="decomposable.php">Decomposable</a></li>
			  <li><a href="volume.php">Volume</a></li>
			</ul>
		</nav>
			 
		<h1><i><center>Which Volume 3D Model Would You Like to View?<center></i></h1>
		


			
		<div class="allcategories"><?php
			$product_array = $db_handle->runQuery("SELECT * FROM models");
			if (!empty($product_array)) {
				foreach($product_array as $key=>$value){
					if ($product_array [$key]["type"]=="volume"){
			?>
				<div class="cell">
					<div class="thumbnail"><a href="<?php echo $product_array[$key]["adr"]; ?>"><img src="<?php echo $product_array[$key]["thumbnail"]; ?>"></a></div>
					<div class="title"><?php echo $product_array[$key]["name"]; ?></div>
				</div>
			<?php
					}
				}
			}
			?>
		</div>
	</body>
</html>