<!DOCTYPE html>
<html>
<head>
<title>3D moddel</title>

<link rel="stylesheet" href="main.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<script src="script.js"></script>

</head>
<body>

<model-viewer onfocus="blur()" src="models/kyubio1.glb" id="model" alt="interactive 3D model of Kyubio" auto-rotate disable-zoom camera-controls></model-viewer>

<div class="buttons">
	<div class="switch-buttons" id="button1">Model 1</div><br>
	<div class="switch-buttons" id="button2">Model 2</div>
</div>

</body>
</html>