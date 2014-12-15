<?php
	$tempVar = parse_url() . 'controllers/index.php?action=index';
    header("Location: $tempVar");
?>