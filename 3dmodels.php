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
</head>
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

.filterbox {
		float: left;
        list-style-type: none;
       border: 2px solid black;
        width: 240px;
		height: 325px;
    }
	.rating > span:hover:before {
   content: "\2605";
   position: absolute;
}
.checked {
  color: orange;
  

}

.categorylarge, .categorysmall, .categorymedium, .ascending, .descending {
	display: none;
}

#search {
	width: 800;

	
}
	
	
	
</style>    

<body>
    <nav>
        <ul>
          <li><a href="home.html">Home</a></li>
          <li><a href="3dmodels.php?action=empty">3D Models</a></li>
          <li><a href="manual.html">Manual</a></li>
          <li><a href="upload.html">Upload</a></li>
          <li><a href="login.html">Login</a></li> 
          
        </ul>
         </nav>
		 
<h1><i><center>Select Which 3D Models You Would Like to View<center></i></h1>
    
<center><form action="search3dmodels.php" method="POST" >
<input id="search" name="search" type="text" placeholder="Categories (ie. vehicle)">
<input id="submitbtn" type="submit" value="Search">
</form></center>


	
	

<ul id="filters" class="filterbox"> 
<b>Size in Polygons</b>
    <li>
        <input type="checkbox" value="categorylarge" id="filter-categorylarge" />
        <label for="filter-categorylarge">Large ( > 50,000)</label>
    </li>
	 <li>
        <input type="checkbox" value="categorymedium" id="filter-categorymedium" />
        <label for="filter-categorymedium">Medium (10,000-50,000)</label>
    </li>
	<li>
        <input type="checkbox" value="categorysmall" id="filter-categorysmall" />
        <label for="filter-categoryssmall">Small ( < 10,000)</label>
    </li>
	<br>
<b>Average Rating</b>
		<li>
		 <input type="checkbox" value="categorylarge" id="filter-categorylarge" />

			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
    </li>
		<li>
		 <input type="checkbox" value="categorylarge" id="filter-categorylarge" />
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
    </li>
		<li>
		 <input type="checkbox" value="categorylarge" id="filter-categorylarge" />
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
    </li>
		<li>
		 <input type="checkbox" value="categorylarge" id="filter-categorylarge" />
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
    </li>
	<br>
<b>Alphabetical</b>
		<li>
        <input type="checkbox" value="Ascending" id="filter-Ascending" />
        <label for="filter-Ascending">Ascending</label>
    </li>
		<li>
        <input type="checkbox" value="Descending" id="filter-Descending" />
        <label for="filter-Descending">Descending</label>
    </li>
<br>

	
    <input type="checkbox" value="cell" class="hidden" checked />
    <input type="checkbox" value="title" class="hidden" checked />
    <input type="checkbox" value="thumbnail" class="hidden" checked />
	
	<button onclick="window.location.href = '3dmodels.php';">Reset</button>
			<br>
</ul>


<script>

        $("#filters :checkbox").click(function() {
   $("div").hide();
   $("#filters :checkbox:checked").each(function() {
       $("." + $(this).val()).show();
});
 });



</script>
		
		
<div class="allcategories"><?php
	$product_array = $db_handle->runQuery("SELECT * FROM capstone");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="cell">
			<div class="thumbnail"><a href="<?php echo $product_array[$key]["adr"]; ?>"><img src="<?php echo $product_array[$key]["thumbnail"]; ?>"></a></div>
			<div class="title"><?php echo $product_array[$key]["name"]; ?></div>
        </div>
	<?php
		}
	}
	?></div>

<div class="categorysmall"><?php
	$product_array = $db_handle->runQuery("SELECT DISTINCT * FROM capstone WHERE size = 'small'");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
        <div class="cell">
			<div class="thumbnail"><a href="<?php echo $product_array[$key]["adr"]; ?>"><img src="<?php echo $product_array[$key]["thumbnail"]; ?>"></a></div>
			<div class="title"><?php echo $product_array[$key]["name"]; ?></div>
        </div>
	<?php
		}
	}
	?></div>
      
        <div class="categorylarge"><?php
	$product_array = $db_handle->runQuery("SELECT DISTINCT * FROM capstone WHERE size = 'large'");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="cell">
			<div class="thumbnail"><a href="<?php echo $product_array[$key]["adr"]; ?>"><img src="<?php echo $product_array[$key]["thumbnail"]; ?>"></a></div>
			<div class="title"><?php echo $product_array[$key]["name"]; ?></div>
        </div>
	<?php
		}
	}
    ?></div>

<div class="categorymedium"><?php
	$product_array = $db_handle->runQuery("SELECT DISTINCT * FROM capstone WHERE size = 'medium'");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="cell">
			<div class="thumbnail"><a href="<?php echo $product_array[$key]["adr"]; ?>"><img src="<?php echo $product_array[$key]["thumbnail"]; ?>"></a></div>
			<div class="title"><?php echo $product_array[$key]["name"]; ?></div>
        </div>
	<?php
		}
	}
    ?></div>


<div class="categorysearch"><?php
	
	$search = $_POST['search'];
	$product_array = $db_handle->runQuery("SELECT  * FROM capstone WHERE size LIKE '%$search%' OR category LIKE '%$search%' OR name LIKE '%$search%' ");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="cell">
			<div class="thumbnail"><a href="<?php echo $product_array[$key]["adr"]; ?>"><img src="<?php echo $product_array[$key]["thumbnail"]; ?>"></a></div>
			<div class="title"><?php echo $product_array[$key]["name"]; ?></div>
        </div>
	<?php
		}
	}
	?></div>
	
<div class="Ascending"><?php
	$product_array = $db_handle->runQuery("SELECT * FROM capstone ORDER BY name ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
        <div class="cell">
			<div class="thumbnail"><a href="<?php echo $product_array[$key]["adr"]; ?>"><img src="<?php echo $product_array[$key]["thumbnail"]; ?>"></a></div>
			<div class="title"><?php echo $product_array[$key]["name"]; ?></div>
        </div>
	<?php
		}
	}
?></div>

<div class="Descending"><?php
	$product_array = $db_handle->runQuery("SELECT * FROM capstone ORDER BY name DESC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
        <div class="cell">
			<div class="thumbnail"><a href="<?php echo $product_array[$key]["adr"]; ?>"><img src="<?php echo $product_array[$key]["thumbnail"]; ?>"></a></div>
			<div class="title"><?php echo $product_array[$key]["name"]; ?></div>
        </div>
	<?php
		}
	}
?></div>


    </body>
</html>
