<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<style type="text/css">
	
	form{
		text-align: center;
		padding: 20%;
	}

</style>


<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
<body>
	<span style="opacity: 0.3;">Username & Password = admin</span>
	<form action="<?php echo site_url('login/aksi_login/');?>" method="post">		
			Username
			<input type="text" name="username">
			<br>
			Password
			<input type="password" name="password">
			<br>
			<input type="submit" value="Login">
	</form>
</body>
</html>