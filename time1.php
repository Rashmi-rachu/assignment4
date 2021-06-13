<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh"/>
	<style type="text/css">
		p{color: white;
			font-size: 90px;
			position: absolute;
			top:50%;
			left:40%;
			transform: translate(-50%,-50%);}
			body{background-color: black;}
	</style>
	<p>Time:
		<?php 
	date_default_timezone_set("Asia/Kolkata");
	echo date(" h : i : s A");?></p>
	<title>time</title>
</head>

</html>