<?php
function active($currect_page){
 $url_array =  explode('/',$_SERVER['PHP_SELF']) ;
 $url = end($url_array);  
 if($currect_page == $url){
     echo "navigation__item--currentPage"; //class name in css 
 }	else {
 	echo "navigation__item";
 }
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css"></li>

	<title>My Personal Site</title>
	<style>
	h1 {color:#20B2AA;}
	</style>
</head>

<body>
<div class="wrapper">
	<div class="header">
		<a href="index.php"><img class="navigation__logo" src="logo.png"></a>
			<div class= navigation>
				<div class="navigation__item">
					<a href="index.php" class="<?php active('index.php');?>">HOME</a>
					<a href="goals.php" class="<?php active('goals.php');?>">GOALS</a>
					<a href="photos.php" class="<?php active('photos.php');?>">PHOTOS</a>
				</div>
			</div>
	</div>


