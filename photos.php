<?php include ('head.php'); ?>

<div class="photos" <?php
	$folder_path = 'Photos/'; //image's folder path

	$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

	$folder = opendir($folder_path);
 
	if($num_files > 0)
	{
 	while(false !== ($file = readdir($folder))) 
 	{
  	$file_path = $folder_path.$file;
  	$extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
  	if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
  	{
  ?>
            <a href="<?php echo $file_path; ?>"><img src="<?php echo $file_path; ?>"  height="250" /></a>
            <?php
  }
 }
}
else
{
 echo "the folder was empty !";
}
closedir($folder);
?>
</div>
		
	<!--<div class="photos">		
		<img src="Photos/Nixon_Chico.jpg" alt="Nixon Chico" width="480" height="270"><p style="clear: both;">
		<img src="Photos/Chico.jpg" style="float: left; width: 15%; margin-right: 1%; margin-bottom: 0.5em;">
		<img src="Photos/Nixon.jpg" style="float: left; width: 15%; margin-right: 1%; margin-bottom: 0.5em;">
		<img src="Photos/NixonSwim.jpg" style="float: left; width: 15%; margin-right: 1%; margin-bottom: 0.5em;"><p style="clear: both;">
		<img src="Photos/NickWon.jpg" style="float: left; width: 15%; margin-right: 1%; margin-bottom: 0.5em;">
		<img src="Photos/Nick_Nixon.jpg" style="float: left; width: 15%; margin-right: 1%; margin-bottom: 0.5em;">
		<img src="Photos/Family.jpg" style="float: left; width: 15%; margin-right: 1%; margin-bottom: 0.5em;"><p style="clear: both;">
	</div>-->

<?php include ('foot.php'); ?>