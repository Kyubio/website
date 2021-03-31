<!DOCTYPE html>
<html lang="en">
	<head>
		<title>three.js webgl - USDZ exporter</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

		<style>
			body 
			{
				background-color: #478FF4;
			}
			.colors
			{
				width: 99%;
				margin: auto;
				text-align: center;
			}
			.colorPicker 
			{
				display: inline-block;
				margin: 0 10px;
				color: white;
			}
		</style>
	</head>

	<body>
		<div class="colors">
			<span class="colorPicker">Main <input id="main-color" type="color" value="#ffffff"></input><br/></span>
			<span class="colorPicker">Secondary <input id="secondary-color" type="color" value="#000000"></input><br/></span>
		</div>

		<div id="container"></div>
	
		<script type="module">

			import * as THREE from './three/build/three.module.js';
			
			import { GUI } from './three/examples/jsm/libs/dat.gui.module.js';
			import { OrbitControls } from './three/examples/jsm/controls/OrbitControls.js';
			import { RoomEnvironment } from './three/examples/jsm/environments/RoomEnvironment.js';

			import { GLTFLoader } from './three/examples/jsm/loaders/GLTFLoader.js';
			import { USDZExporter } from './three/examples/jsm/exporters/USDZExporter.js';

			let camera, scene, renderer;

			init();
			render();

			function init() {

				renderer = new THREE.WebGLRenderer( { antialias: true } );
				renderer.setPixelRatio( window.devicePixelRatio );
				renderer.setSize( window.innerWidth/1.008, window.innerHeight/1.018 ); //size of render area
				renderer.toneMapping = THREE.ACESFilmicToneMapping;
				renderer.outputEncoding = THREE.sRGBEncoding;
				document.body.appendChild( renderer.domElement );

				camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 0.25, 20 );
				camera.position.set( - 3, 2, 2 );

				const environment = new RoomEnvironment();
				const pmremGenerator = new THREE.PMREMGenerator( renderer );

				scene = new THREE.Scene();
				scene.background = new THREE.Color( 0x478FF4 ); //background color
				scene.environment = pmremGenerator.fromScene( environment ).texture;

				//material

				const mainMaterial = new THREE.MeshPhysicalMaterial( {
					color: 0xffffff, roughness: 0.5
				} );

				const secondaryMaterial = new THREE.MeshStandardMaterial( {
					color: 0x000000, roughness: 0.6
				} );

				const MainInput = document.getElementById( 'main-color' );
				MainInput.addEventListener( 'input', function () {

					mainMaterial.color.set( this.value );

				} );
				
				const SecondaryInput = document.getElementById( 'secondary-color' );
				SecondaryInput.addEventListener( 'input', function () {

					secondaryMaterial.color.set( this.value );

				} );

				const loader = new GLTFLoader().setPath( 'models/kyubio2/' );
				loader.load( 'kyubio2.glb', async function ( gltf ) {

					const model = gltf.scene;
					model.scale.set( 0.25, 0.25, 0.25 ); //size of the cube
					model.getObjectByName( 'Cube' ).material = mainMaterial;
					
					model.getObjectByName( 'joystick' ).material = secondaryMaterial;
					model.getObjectByName( 'buttons' ).material = secondaryMaterial;
					model.getObjectByName( 'turnables' ).material = secondaryMaterial;
					
					
					const animate = function () //animation of the cube
					{
						requestAnimationFrame( animate );

						model.rotation.x += 0.001;
						model.rotation.y += 0.0005;

						renderer.render( scene, camera );
					};

					createPanel();
					animate();
					scene.add( model );

					render();

				} );

				const controls = new OrbitControls( camera, renderer.domElement );
				controls.minDistance = 5;
				controls.maxDistance = 5;
				controls.update();

				window.addEventListener( 'resize', onWindowResize );

			} //end function init

			function createPanel()
			{
				const panel = new GUI( {width: 300 } );
				
				const side1 = panel.addFolder ( 'Side 1');
				const side2 = panel.addFolder ( 'Side 2');
				const side3 = panel.addFolder ( 'Side 3');
				const side4 = panel.addFolder ( 'Side 4');
				const side5 = panel.addFolder ( 'Side 5');
				const side6 = panel.addFolder ( 'Side 6');
				
				
	
			}
			
			function onWindowResize() {

				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();

				renderer.setSize( window.innerWidth/1.008, window.innerHeight/1.018 );

				render();

			}

			function render() {

				renderer.render( scene, camera );

			}
		</script>

	</body>
</html>