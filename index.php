<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
		.button {
		    background-color: #4CAF50;
		    border: none;
		    color: white;
		    padding: 15px 32px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin: 4px 2px;
		    cursor: pointer;
		}
	</style>
	<?php 
		date_default_timezone_set("Asia/Jakarta");
		include_once 'realtime.php';
	?>
</head>
<body>
	<body onload="startTime()">

	<h1 id="txt"></h1>
	<button class="button" onclick="copyToClipboard('#txt')">Copy Datetime</button>

</body>
</html>
