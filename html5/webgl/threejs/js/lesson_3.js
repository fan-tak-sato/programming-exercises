/**
 *
 * WebGL With Three.js - Lesson 3
 * http://www.script-tutorials.com/webgl-with-three-js-lesson-3/
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Script Tutorials
 * http://www.script-tutorials.com/
 */

var dLight, bboxHelper, dlightHelper;

// load texture
var texture = THREE.ImageUtils.loadTexture('texture.png');
texture.repeat.set(10, 10);
texture.wrapS = texture.wrapT = THREE.RepeatWrapping;
texture.anisotropy = 16;
texture.needsUpdate = true;

var textureBump = THREE.ImageUtils.loadTexture('bump.png');
textureBump.repeat.set(10, 10);
textureBump.wrapS = textureBump.wrapT = THREE.RepeatWrapping;
textureBump.anisotropy = 16;
textureBump.needsUpdate = true;

var lesson3 = {
    scene: null,
    camera: null,
    renderer: null,
    container: null,
    controls: null,
    clock: null,
    stats: null,

    init: function() { // Initialization

        // create main scene
        this.scene = new THREE.Scene();

        var SCREEN_WIDTH = window.innerWidth,
            SCREEN_HEIGHT = window.innerHeight;

        // prepare camera
        var VIEW_ANGLE = 45, ASPECT = SCREEN_WIDTH / SCREEN_HEIGHT, NEAR = 1, FAR = 10000;
        this.camera = new THREE.PerspectiveCamera( VIEW_ANGLE, ASPECT, NEAR, FAR);
        this.scene.add(this.camera);
        this.camera.position.set(-1600, 600, 1200);
        this.camera.lookAt(new THREE.Vector3(0,0,0));

        // prepare renderer
        this.renderer = new THREE.WebGLRenderer({antialias:true, alpha: false});
        this.renderer.setSize(SCREEN_WIDTH, SCREEN_HEIGHT);
        this.renderer.setClearColor(0xffffff);

        this.renderer.shadowMapEnabled = true;
        this.renderer.shadowMapSoft = true;

        // prepare container
        this.container = document.createElement('div');
        document.body.appendChild(this.container);
        this.container.appendChild(this.renderer.domElement);

        // events
        THREEx.WindowResize(this.renderer, this.camera);

        // prepare controls (OrbitControls)
        this.controls = new THREE.OrbitControls(this.camera, this.renderer.domElement);
        this.controls.target = new THREE.Vector3(0, 0, 0);

        // prepare clock
        this.clock = new THREE.Clock();

        // prepare stats
        this.stats = new Stats();
        this.stats.domElement.style.position = 'absolute';
        this.stats.domElement.style.bottom = '0px';
        this.stats.domElement.style.zIndex = 10;
        this.container.appendChild( this.stats.domElement );

        // add directional light
        dLight = new THREE.DirectionalLight(0xffffff);
        dLight.position.set(0, 400, 0);
        dLight.castShadow = true;
        // dLight.shadowCameraVisible = true;
        dLight.shadowMapWidth = dLight.shadowMapHeight = 1000;
        this.scene.add(dLight);

        // add simple ground
        var groundGeometry = new THREE.PlaneGeometry(1200, 1200, 1, 1);
        ground = new THREE.Mesh(groundGeometry, new THREE.MeshLambertMaterial({
            color: 0x9669FE
        }));
        ground.position.y = -20;
        ground.rotation.x = - Math.PI / 2;
        ground.receiveShadow = true;
        this.scene.add(ground);

        // create a new group (Object3D)
        var group = new THREE.Object3D();

        // add two spheres
        var sphere  = this.drawSphere(-100, 150, new THREE.MeshPhongMaterial({ map: texture, bumpMap: textureBump, color: 0x00ff00, specular: 0xff2200, emissive: 0x004000 }));
        var sphere2 = this.drawSphere( 100, 150, new THREE.MeshPhongMaterial({ map: texture, bumpMap: textureBump, color: 0x00ff00, specular: 0xff2200, shininess: 3 }));

        // and add them into the group
        group.add(sphere);
        group.add(sphere2);

        this.scene.add(group);

        // add helpers:

        // 1. ArrowHelper
        var directionV3 = new THREE.Vector3(1, 0, 1);
        var originV3 = new THREE.Vector3(0, 200, 0);
        var arrowHelper = new THREE.ArrowHelper(directionV3, originV3, 100, 0xff0000, 20, 10); // 100 is length, 20 and 10 are head length and width
        this.scene.add(arrowHelper);

        // 2. AxisHelper
        var axisHelper = new THREE.AxisHelper(800); // 500 is size
        this.scene.add(axisHelper);

        // 3. BoundingBoxHelper
        bboxHelper = new THREE.BoundingBoxHelper(group, 0x999999);
        this.scene.add(bboxHelper);

        // 4. CameraHelper
        var cameraParObj = new THREE.Object3D();
        cameraParObj.position.y = 200;
        cameraParObj.position.z = 700;
        this.scene.add(cameraParObj);

        perspectiveCamera = new THREE.PerspectiveCamera(90, window.innerWidth / window.innerHeight, 0.01, 1500);
        cameraParObj.add(perspectiveCamera);

        var cameraHelper = new THREE.CameraHelper(perspectiveCamera);
        this.scene.add(cameraHelper);

        // 5. DirectionalLightHelper
        dlightHelper = new THREE.DirectionalLightHelper(dLight, 50); // 50 is helper size
        this.scene.add(dlightHelper);
    },
    drawSphere: function(x, z, material) {
        var sphere = new THREE.Mesh(new THREE.SphereGeometry(70, 70, 20), material);
        sphere.rotation.x = sphere.rotation.z = Math.PI * Math.random();
        sphere.position.x = x;
        sphere.position.y = 100;
        sphere.position.z = z;
        sphere.castShadow = sphere.receiveShadow = true;
        return sphere;
    }
};

// Animate the scene
function animate() {
    requestAnimationFrame(animate);
    render();
    update();
}

// Update controls and stats
function update() {
    bboxHelper.update();
    dlightHelper.update();

    lesson3.controls.update(lesson3.clock.getDelta());
    lesson3.stats.update();

    // smoothly move the dLight
    var timer = Date.now() * 0.000025;
    dLight.position.x = Math.sin(timer * 5) * 300;
    dLight.position.z = Math.cos(timer * 5) * 300;
}

// Render the scene
function render() {
    if (lesson3.renderer) {
        lesson3.renderer.render(lesson3.scene, lesson3.camera);
    }
}

// Initialize lesson on page load
function initializeLesson() {
    lesson3.init();
    animate();
}

if (window.addEventListener)
    window.addEventListener('load', initializeLesson, false);
else if (window.attachEvent)
    window.attachEvent('onload', initializeLesson);
else window.onload = initializeLesson;
