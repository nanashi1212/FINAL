<?php

function getUserData(){
	$sql = "SELECT *
			FROM `Final_User`
			WHERE name = " + $name;
}

function setActivity(){
	$sql = "INSERT INTO `Final_User`
	(`id`,`name`,`activity`,`Friends`)
	VALUES (" + $data;
}

?>
