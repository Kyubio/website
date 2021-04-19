<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Kyubio model</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/create.css">
		
		<!--fa-->
		 <link href="fontawesome/css/all.css" rel="stylesheet">
		  <script defer src="fontawesome/js/all.js"></script>
		
	</head>

	<body>
		<div class="builder">		
			<div class="area">
				<a href="index.php"><img class="bld-logo" src="img/logo.png"></a>
				<h3>Customize Your Kyubio</h3>
				<h4>COLORS</h4>
				<div class="colors">
					<span class="colorSelector">Cube <input id="main-color" type="color" value="#ffffff"></input><br/></span>
					<span class="colorSelector">Fidgets <input id="secondary-color" type="color" value="#000000"></input><br/></span>
				</div>
				<h4>CHOOSE YOUR FIDGETS</h4>
				<div class="select-item">
					<label for="side1">Side <button>1</button></label>
					<select class="selection" id="side1" name="side1">
						<option value="" selected disabled hidden>Choose here</option>
						<option value="beads1">Beads</option>
						<option value="buttons1">Buttons</option>
						<option value="indent1">Indent</option>
						<option value="joystick1">Joystick</option>
						<option value="lines1">Line Texture</option>
						<option value="rough-texture1">Rough Texture</option>
						<option value="rubbers1">Rubber Dots</option>
						<option value="schuifjes1">Slider</option>
						<option value="scroll-clicker1">Switch and Wheel</option>
						<option value="soft1">Soft Texture</option>
						<option value="turnables1">Disk and Ball</option>
						<option value="wheels1">Wheels</option>
					</select> 
				</div>
				<div class="select-item">
					<label for="side2">Side <button>2</button></label>
					<select class="selection" id="side2" name="side2">
						<option value="" selected disabled hidden>Choose here</option>
						<option value="beads2">Beads</option>
						<option value="buttons2">Buttons</option>
						<option value="indent2">Indent</option>
						<option value="joystick2">Joystick</option>
						<option value="lines2">Line Texture</option>
						<option value="rough-texture2">Rough Texture</option>
						<option value="rubbers2">Rubber Dots</option>
						<option value="schuifjes2">Slider</option>
						<option value="scroll-clicker2">Switch and Wheel</option>
						<option value="soft2">Soft Texture</option>
						<option value="turnables2">Disk and Ball</option>
						<option value="wheels2">Wheels</option>
					</select> 
				</div>
				<div class="select-item">
					<label for="side3">Side <button>3</button></label>
					<select class="selection" id="side3" name="side3">
						<option value="" selected disabled hidden>Choose here</option>
						<option value="beads3">Beads</option>
						<option value="buttons3">Buttons</option>
						<option value="indent3">Indent</option>
						<option value="joystick3">Joystick</option>
						<option value="lines3">Line Texture</option>
						<option value="rough-texture3">Rough Texture</option>
						<option value="rubbers3">Rubber Dots</option>
						<option value="schuifjes3">Slider</option>
						<option value="scroll-clicker3">Switch and Wheel</option>
						<option value="soft3">Soft Texture</option>
						<option value="turnables3">Disk and Ball</option>
						<option value="wheels3">Wheels</option>
					</select> 
				</div>
				<div class="select-item">
					<label for="side4">Side <button>4</button></label>
					<select class="selection" id="side4" name="side4">
						<option value="" selected disabled hidden>Choose here</option>
						<option value="beads4">Beads</option>
						<option value="buttons4">Buttons</option>
						<option value="indent4">Indent</option>
						<option value="joystick4">Joystick</option>
						<option value="lines4">Line Texture</option>
						<option value="rough-texture4">Rough Texture</option>
						<option value="rubbers4">Rubber Dots</option>
						<option value="schuifjes4">Slider</option>
						<option value="scroll-clicker4">Switch and Wheel</option>
						<option value="soft4">Soft Texture</option>
						<option value="turnables4">Disk and Ball</option>
						<option value="wheels4">Wheels</option>
					</select> 
				</div>
				<div class="select-item">
					<label for="side5">Side <button>5</button></label>
					<select class="selection" id="side5" name="side5">
						<option value="" selected disabled hidden>Choose here</option>
						<option value="beads5">Beads</option>
						<option value="buttons5">Buttons</option>
						<option value="indent5">Indent</option>
						<option value="joystick5">Joystick</option>
						<option value="lines5">Line Texture</option>
						<option value="rough-texture5">Rough Texture</option>
						<option value="rubbers5">Rubber Dots</option>
						<option value="schuifjes5">Slider</option>
						<option value="scroll-clicker5">Switch and Wheel</option>
						<option value="soft5">Soft Texture</option>
						<option value="turnables5">Disk and Ball</option>
						<option value="wheels5">Wheels</option>
					</select> 
				</div>
				<div class="select-item">
					<label for="side6">Side <button>6</button></label>
					<select class="selection" id="side6" name="side6">
						<option value="" selected disabled hidden>Choose here</option>
						<option value="beads6">Beads</option>
						<option value="buttons6">Buttons</option>
						<option value="indent6">Indent</option>
						<option value="joystick6">Joystick</option>
						<option value="lines6">Line Texture</option>
						<option value="rough-texture6">Rough Texture</option>
						<option value="rubbers6">Rubber Dots</option>
						<option value="schuifjes6">Slider</option>
						<option value="scroll-clicker6">Switch and Wheel</option>
						<option value="soft6">Soft Texture</option>
						<option value="turnables6">Disk and Ball</option>
						<option value="wheels6">Wheels</option>
					</select>
				</div>
				<a href="thanks.php"><button class="done"><i class="far fa-thumbs-up"></i> Looking good</button></a>
			</div>
		</div>

		<?php
			require "script.php";
		?>
	</body>
</html>