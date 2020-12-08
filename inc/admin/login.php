<?php
if(isset($userLog->iduser))
{
	echo 'Sudah login';
}
else
{
echo '<!DOCTYPE html>

<html>

<head>

<title>Login | '.site('name').'</title>

<link rel="stylesheet" href="'.site('url').'/assets/fonts/FontAwesome-v4.7.0/style.min.css" media="all" />

<link rel="stylesheet" href="'.site('url').'/assets/css/style.css" media="all" />

</head>

<body>

<div class="login-form">

<h1><a href="'.site('url').'">'.site('name').'</a></h1>

<div class="login-box">

<form action="'.site('url').'/admin/login" method="POST">

<div class="form-control">

<input type="text" name="user_login" id="user_login" placeholder="Username" />

</div>

<div class="form-control">

<a id="switch-password" data-pass="show" /><i class="fa fa-eye"></i> Show</a>

<input type="password" name="password" id="password" placeholder="Password" />

</div>

<button type="submit" class="btn btn-primary btn-login">Login</button>

</form>

</div>

</div>

<script src="'.site('url').'/assets/js/jquery-v3.5.1.min.js"></script>

<script>$(document).ready(function(){
	$(document).on(\'click\', \'a#switch-password\', function(){
		var dataPass = $(this).attr(\'data-pass\');
		switchPassword(dataPass);
	});
});
function switchPassword(data){
	var inpPassword = $(\'input#password\'), btnSwitch = $(\'a#switch-password\');
	if(data == \'show\'){
		inpPassword.attr(\'type\', \'text\');
		btnSwitch.attr(\'data-pass\', \'hide\').html(\'<i class="fa fa-eye-slash"></i> Hide\');
	} else {
		inpPassword.attr(\'type\', \'password\');
		btnSwitch.attr(\'data-pass\', \'show\').html(\'<i class="fa fa-eye"></i> Show\');
	}
}</script>

</body>

<html>';
}