<?php
	require_once 'kapcsolat.php';
 
	if($_GET['ID']){
		$id = $_GET['ID'];
 
		$kapcsolat->query("DELETE FROM `todoTabla` WHERE `ID` = $id");

	}	
?>
