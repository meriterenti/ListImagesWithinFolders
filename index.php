<!DOCTYPE html>
<html>
	<head>
		<style>
			.thumbs{
				width: 500px;
				height: auto;
				display: block;
				margin: 0 auto; 
				box-shadow: 0 4px 8px 0 #00000033, 0 6px 20px 0 #00000033;
			}
		</style>
	</head>
	<body>
		<?php include_once "image.php"; ?>
		<?php 
			$images = new Image();
			$imagePaths = $images->getImagesFromDir();
			foreach($imagePaths as $path){
				echo "<img class='thumbs' src='./".$path."'><br />";
			}
		?>
	</body>
</html>
