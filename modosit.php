<?php
	require_once 'kapcsolat.php';
 
	if($_GET['ID'] != ""){
		$id = $_GET['ID'];
 
		$kapcsolat->query("UPDATE `todo` SET `allapot` = 'TRUE' WHERE `ID = $id");
		
	}

