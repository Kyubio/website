<!DOCTYPE html>
<html lang="en">
	<head>
		<title>three.js webgl - USDZ exporter</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

		<style>
			body {
				background-color: #377CDB;
			}

		</style>
	</head>

	<body>
		<script type="module">

			import * as THREE from './three/build/three.module.js';

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

				const loader = new GLTFLoader().setPath( 'models/kyubio2/' );
				loader.load( 'kyubio22.glb', async function ( gltf ) {
					
					const axesHelper = new THREE.AxesHelper(10);
					scene.add(axesHelper);

					const model = gltf.scene;
					model.scale.set( 0.25, 0.25, 0.25 ); //size of the cube
					model.setRotationFromQuaternion;
					
					const animate = function () //animation of the cube
					{
						requestAnimationFrame( animate );

						model.rotation.x += 0.001;
						model.rotation.y += 0.0005;

						renderer.render( scene, camera );
					};

					animate();
					scene.add( model );

					render();

				} );

				const controls = new OrbitControls( camera, renderer.domElement );
				controls.minDistance = 5;
				controls.maxDistance = 5;
				controls.update();

				window.addEventListener( 'resize', onWindowResize );

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