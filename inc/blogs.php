<?php
session_start();
date_default_timezone_set('UTC');

include ('./inc/functions.php');

if(isset($_GET['admin']))
{
	$adminPath = isset($_GET['admin']) ? trim($_GET['admin']) : 'index';
	
	if(file_exists('./inc/admin/'.$adminPath.'.php'))
	{
		include ('./inc/admin/'.$adminPath.'.php');
	}
	else
	{
		include ('./inc/admin/index.php');
	}
}