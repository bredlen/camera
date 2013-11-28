<?php

	$dir = $_REQUEST['getDir'];
	$files = scandir($dir);
	
	echo json_encode($files);

?>

