<html>
	<head>
		<script type="text/javascript" src="//code.jquery.com/jquery-1.7.1.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>3D Models Types</title>
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
					<ul>
					  <li><a href="3dmodels.php">Home</a></li> 
					</ul>
				</nav>
					 
				<h1><i><center>Which Type of 3D Model Would You Like to View?<center></i></h1>
				

					
				
				<div class="categories">
				  <div class="cell">
					<a href="basic.php"><img src="thumbnails/Basic.jpg" style="width:350px;height:300px;"></a> 
					<div class=title>Basic</div>
				  </div>

				  <div class="cell">
					<a href="decomposable.php"><img src="thumbnails/Decomposable.jpg"style="width:350px;height:300px;"></a>
					<div class=title>Decomposable</div>
				  </div>

				  <div class="cell">
					<a href="volume.php"><img src="thumbnails/Volume.jpg"style="width:350px;height:300px;"></a>
					<div class=title>Volume</div>
				  </div>
				 
				</div>
			</body>
</html>