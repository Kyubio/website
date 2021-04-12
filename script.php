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
		//create envirement
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
		scene.background = new THREE.Color( 0x4ec7eb ); //background color
		scene.environment = pmremGenerator.fromScene( environment ).texture;

		//material
		const mainMaterial = new THREE.MeshPhysicalMaterial( 
		{
			color: 0xffffff, roughness: 0.5
		} );

		const secondaryMaterial = new THREE.MeshStandardMaterial( 
		{
			color: 0x000000, roughness: 0.6
		} );

		const MainInput = document.getElementById( 'main-color' );
		MainInput.addEventListener( 'input', function () 
		{

			mainMaterial.color.set( this.value );

		} );
		
		const SecondaryInput = document.getElementById( 'secondary-color' );
		SecondaryInput.addEventListener( 'input', function () 
		{

			secondaryMaterial.color.set( this.value );

		} );
		
		//cube
		const loader = new GLTFLoader().setPath( 'models/kyubio3/' );
		loader.load( 'kyubio3.glb', async function ( gltf ) 
		{

			//create cube
			const model = gltf.scene;
			model.scale.set( 0.25, 0.25, 0.25 ); //size of the cube
			
			//material colors
			model.getObjectByName( 'Cube' ).material = mainMaterial;
			
			//loop through add ons
			for( let i = 1 ; i < 7 ; i++)
			{
				//set material of add ons
				model.getObjectByName( 'joystick'+i ).material = secondaryMaterial;
				model.getObjectByName( 'buttons'+i ).material = secondaryMaterial;
				model.getObjectByName( 'turnables'+i ).material = secondaryMaterial;
				model.getObjectByName( 'rubbers'+i ).material = secondaryMaterial;
				model.getObjectByName( 'scroll-clicker'+i ).material = secondaryMaterial;
				
				//set visibility of add ons
				model.getObjectByName( 'joystick'+i ).visible = false;
				model.getObjectByName( 'buttons'+i ).visible = false;
				model.getObjectByName( 'turnables'+i ).visible = false;
				model.getObjectByName( 'rubbers'+i ).visible = false;
				model.getObjectByName( 'scroll-clicker'+i ).visible = false;
			}
					
			//choose add ons
			document.querySelectorAll('.selection').forEach(item => 
			{
				item.addEventListener( 'change', event => 
				{
					var result = item.value;
					model.getObjectByName(result).visible = true;	
					var lastNumb = result.slice(-1);
					
					model.getObjectByName( 'joystick'+lastNumb ).visible = false;
					model.getObjectByName( 'buttons'+lastNumb ).visible = false;
					model.getObjectByName( 'turnables'+lastNumb ).visible = false;
					model.getObjectByName( 'rubbers'+lastNumb ).visible = false;
					model.getObjectByName( 'scroll-clicker'+lastNumb ).visible = false;
					
					model.getObjectByName(result).visible = true;					
					
				})
			})

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

		} );//end cube generator

		const controls = new OrbitControls( camera, renderer.domElement );
		controls.minDistance = 5;
		controls.maxDistance = 5;
		controls.update();

		window.addEventListener( 'resize', onWindowResize );
			
	} //end function init
	
	function onWindowResize() 
	{

		camera.aspect = window.innerWidth / window.innerHeight;
		camera.updateProjectionMatrix();

		renderer.setSize( window.innerWidth/1.008, window.innerHeight/1.018 );

		render();

	}

	function render() 
	{

		renderer.render( scene, camera );

	}
			
</script>