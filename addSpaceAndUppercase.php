<?php
	$title = basement($ _SERVER['SCRIPT_FILENAME'], '.php');
	$title = str_replace('_', ' ', $title);
	if ($title == 'index') {
		$title = home;
	}
	$title = ucwords($title);