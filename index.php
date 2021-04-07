<!DOCTYPE html>
<html lang="en">
	<head>
		<title>three.js webgl - USDZ exporter</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" href="main.css">
	</head>

	<body>
		<div class="colors">
			<span class="colorPicker">Main <input id="main-color" type="color" value="#ffffff"></input><br/></span>
			<span class="colorPicker">Secondary <input id="secondary-color" type="color" value="#000000"></input><br/></span>
		</div>
		<div class="builder">
			<label for="side1">Side 1:</label>
			<select class="selection" id="side1" name="side1">
				<option value="" selected disabled hidden>Choose here</option>
				<option value="joystick1">Joystick</option>
				<option value="buttons1">Buttons</option>
				<option value="turnables1">Disk and Ball</option>
				<option value="rubbers1">Rubber Dots</option>
				<option value="scroll-clicker1">Switch and Wheel</option>
			</select> 
			<br><br>
			<label for="side2">Side 2:</label>
			<select class="selection" id="side2" name="side2">
				<option value="" selected disabled hidden>Choose here</option>
				<option value="joystick2">Joystick</option>
				<option value="buttons2">Buttons</option>
				<option value="turnables2">Disk and Ball</option>
				<option value="rubbers2">Rubber Dots</option>
				<option value="scroll-clicker2">Switch and Wheel</option>
			</select> 
			<br><br>
			<label for="side3">Side 3:</label>
			<select class="selection" id="side3" name="side3">
				<option value="" selected disabled hidden>Choose here</option>
				<option value="joystick3">Joystick</option>
				<option value="buttons3">Buttons</option>
				<option value="turnables3">Disk and Ball</option>
				<option value="rubbers3">Rubber Dots</option>
				<option value="scroll-clicker3">Switch and Wheel</option>
			</select> 
			<br><br>
			<label for="side4">Side 4:</label>
			<select class="selection" id="side4" name="side4">
				<option value="" selected disabled hidden>Choose here</option>
				<option value="joystick4">Joystick</option>
				<option value="buttons4">Buttons</option>
				<option value="turnables4">Disk and Ball</option>
				<option value="rubbers4">Rubber Dots</option>
				<option value="scroll-clicker4">Switch and Wheel</option>
			</select> 
			<br><br>
			<label for="side5">Side 5:</label>
			<select class="selection" id="side5" name="side5">
				<option value="" selected disabled hidden>Choose here</option>
				<option value="joystick5">Joystick</option>
				<option value="buttons5">Buttons</option>
				<option value="turnables5">Disk and Ball</option>
				<option value="rubbers5">Rubber Dots</option>
				<option value="scroll-clicker5">Switch and Wheel</option>
			</select> 
			<br><br>
			<label for="side6">Side 6:</label>
			<select class="selection" id="side6" name="side6">
				<option value="" selected disabled hidden>Choose here</option>
				<option value="joystick6">Joystick</option>
				<option value="buttons6">Buttons</option>
				<option value="turnables6">Disk and Ball</option>
				<option value="rubbers6">Rubber Dots</option>
				<option value="scroll-clicker6">Switch and Wheel</option>
				<option value="joystick6">Joystick</option>
			</select>
		</div>

		<?php
			require "script.php";
		?>
	</body>
</html>
