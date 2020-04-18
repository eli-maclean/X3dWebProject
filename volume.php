<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>
<html>
	<head>
		<script type="text/javascript" src="//code.jquery.com/jquery-1.7.1.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
		<link rel='stylesheet' type='text/css' href='modelpages/css/main.css'/>
		<title>Volume Models</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	.cell {
					display:block;
					float: left;
					width: 28%;
			background: #ffffff;
			margin: 15px 15px 30px 30px;
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
		 
	</style>	
	</head>
		<body>
	<center>
		<table class=mpg><tr><td style="border: 0px solid #FFFFFF;">
			<center>
			<table class="title" cellpadding="20">
				<tr><td>
					<center><h1>Which Volume 3D Model Would You Like To View?</h1></center>
				</td></tr>
				<tr>
					<td><center>
							<table class=wrt>
								<tr>
									<td class=wrs><a class=wrt href="http://web-students.armstrong.edu/~lf03747/X3dWebProject-master-test/modelspage.php">Models</a></td>
									<td class=wrt><a class=wrt href="http://web-students.armstrong.edu/~lf03747/X3dWebProject-master-test/basic.php">Basic</a></td>
									<td class=wrt><a class=wrt href="http://web-students.armstrong.edu/~lf03747/X3dWebProject-master-test/decomposable.php">Decomposable</a></td>
								</tr>
							</table>
					</td></center>
				</tr>
			</table>
			
		    <center>
				<h2>Model Types</h2>
			<hr>		
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