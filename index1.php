<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Three.js project</title>
        <style>
            body:{ margin: 0; overflow: visible; }
            canvas{ width: 100%; height: 100%; overflow: visible;};
        </style>
    </head>
    <body>


        <script src="Js/three.js"></script>
        <script src="Js/OrbitControls.js"></script>
        <script src="Js/GLTFLoader.js" ></script>
        <script src="Js/DRACOLoader.js"></script>
        <script src="Js/inflate.min.js"></script>

        <script type="module">


            var container = document.createElement('div');
            document.body.appendChild(container);



            // camera
            var camera= new THREE.PerspectiveCamera(40,window.innerWidth/window.innerHeight, 0.1, 1000);
            camera.position.set( 0, 2, 2.5 );




            // renderer

            var renderer= new THREE.WebGLRenderer({ antialias: true });
            renderer.setSize(window.innerWidth, window.innerHeight);
            renderer.setPixelRatio(window.devicePixelRatio);
            renderer.shadowMap.enabled = true;
            container.appendChild(renderer.domElement);

            // update the viewport
            window.addEventListener('resize',function(){
                var width= window.innerWidth;
                var height= window.innerHeight;
                renderer.setSize(width, height);
                camera.aspect= width/height;
                camera.updateProjectionMatrix();
            });

            // scene
            var scene= new THREE.Scene();
            scene.background = new THREE.Color( 0xa0a0a0 );
            //scene.fog = new THREE.Fog( 0xa0a0a0, 2.5, 5);

            // light 1

            var light = new THREE.HemisphereLight( 0xffffff, 0x444444 );
            light.position.set( 0, 20, 0 );
            scene.add( light );

            // light 2

            light = new THREE.DirectionalLight( 0xffffff );
            light.position.set( 0, 2, 1 );
            light.castShadow = true;
            light.shadow.camera.top = 0.001;
            light.shadow.camera.bottom = - 0.001;
            light.shadow.camera.left = -0.001;
            light.shadow.camera.right = 0.001;
            //scene.add( light );



            // ground

            var mesh = new THREE.Mesh( new THREE.PlaneBufferGeometry( 2000, 2000 ), new THREE.MeshPhongMaterial( { color:'#f5f5f5', depthWrite: false } ) );

            mesh.rotation.x = - Math.PI / 2;
            mesh.position.z= 30;
            mesh.receiveShadow = true;
            scene.add( mesh );


            // grid
            var grid = new THREE.GridHelper( 200, 200, 0x000000, 0x000000 );
            grid.material.opacity = 0.2;
            grid.material.transparent = true;
            //scene.add( grid );


            // control

            var controls= new THREE.OrbitControls(camera,renderer.domElement);
            controls.target.set( 0, 1, 0 );
            controls.update();


            // loaders


            var loader = new THREE.GLTFLoader();


            // Optional: Provide a DRACOLoader instance to decode compressed mesh data for fbx loading
            var dracoLoader = new THREE.DRACOLoader();
            dracoLoader.setDecoderPath( 'draco' );
            loader.setDRACOLoader( dracoLoader );




            // load a resource
            loader.load(
                // resource URL
                //'dressed_avatar.glb',
                <?php echo("'assets/avatar/".$_GET['sexe']."_".$_GET['taille']."_".$_GET['poids']."_".$_COOKIE['id'].".glb'")?>,
                // called when resource is loaded
                function ( gltf ) {

                    //scene.add( gltf );
                    scene.add( gltf.scene );

                    gltf.animations; // Array<THREE.AnimationClip>
                    gltf.scene; // THREE.Group
                    gltf.scenes; // Array<THREE.Group>
                    gltf.cameras; // Array<THREE.Camera>
                    gltf.asset; // Object



                },
                    // called when loading is in progresses
                    function ( xhr ) {

                        console.log( ( xhr.loaded / xhr.total * 100 ) + '% loaded' );


                    },
                        // called when loading has errors
                        function ( error ) {

                            console.log( 'An error happened' );

                        }
            );



            // draw scene
            var render= function()
            {
                renderer.render(scene, camera);   
            };
            // run game loop (update, render, repeat)
            var GameLoop= function()
            {
                requestAnimationFrame(GameLoop);
                render();
            };

            GameLoop()

        </script>



    </body>
</html>