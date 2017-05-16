<?php
function importStyle($file){
	echo "<style>";
	echo file_get_contents($file);
	echo "</style>";
}
function importScript($file){
	echo "<script>";
	echo file_get_contents($file);
	echo "</script>";
}
function importImageURL($file){
	$type = pathinfo($file, PATHINFO_EXTENSION);
	$data = file_get_contents($file);
	echo 'data:image/' . $type . ';base64,' . base64_encode($data);
}
?>