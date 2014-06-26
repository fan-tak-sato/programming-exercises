/**
 *
 * WebGL With Three.js - Lesson 2
 * http://www.script-tutorials.com/webgl-with-three-js-lesson-2/
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Script Tutorials
 * http://www.script-tutorials.com/
 */

var colors = [
    0xFF62B0,
    0x9A03FE,
    0x62D0FF,
    0x48FB0D,
    0xDFA800,
    0xC27E3A,
    0x990099,
    0x9669FE,
    0x23819C,
    0x01F33E,
    0xB6BA18,
    0xFF800D,
    0xB96F6F,
    0x4A9586
];

function getRandColor() {
    return colors[Math.floor(Math.random() * colors.length)];
}

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

var mlib = {
  '1':   new THREE.MeshBasicMaterial({ color: getRandColor() }),
  '2':   new THREE.MeshLambertMaterial({ color: getRandColor() }),
  '3':   new THREE.MeshPhongMaterial({ color: getRandColor() }),

  '4':   new THREE.MeshBasicMaterial({ color: getRandColor(), opacity: 0.5, transparent: true }),
  '5':   new THREE.MeshLambertMaterial({ color: getRandColor(), opacity: 0.5, transparent: true }),
  '6':   new THREE.MeshPhongMaterial({ color: getRandColor(), opacity: 0.5, transparent: true }),

  '7':   new THREE.MeshLambertMaterial({ color: 0xff0000, ambient: 0xffffff }),
  '8':   new THREE.MeshLambertMaterial({ color: 0xff0000, emissive: 0x000088 }),

  '9':   new THREE.MeshPhongMaterial({ color: 0xff0000, ambient: 0x3ffc33 }),
  '10':  new THREE.MeshPhongMaterial({ color: 0xff0000, emissive: 0x000088 }),
  '11':  new THREE.MeshPhongMaterial({ color: 0xff0000, emissive: 0x004000, specular: 0x0022ff }),
  '12':  new THREE.MeshPhongMaterial({ color: 0xff0000, specular: 0x0022ff, shininess: 3 }),

  '13':  new THREE.MeshLambertMaterial({ map: texture, color: 0xff0000, ambient: 0x3ffc33 }),
  '14':  new THREE.MeshLambertMaterial({ map: texture, color: 0xff0000, emissive: 0x000088 }),
  '15':  new THREE.MeshLambertMaterial({ map: texture, color: 0xff0000, emissive: 0x004000, specular: 0x0022ff }),
  '16':  new THREE.MeshLambertMaterial({ map: texture, color: 0xff0000, specular: 0x0022ff, shininess: 3 }),

  '17':  new THREE.MeshPhongMaterial({ map: texture, color: 0xff0000, ambient: 0x3ffc33 }),
  '18':  new THREE.MeshPhongMaterial({ map: texture, color: 0xff0000, emissive: 0x000088 }),
  '19':  new THREE.MeshPhongMaterial({ map: texture, color: 0xff0000, emissive: 0x004000, specular: 0x0022ff }),
  '20':  new THREE.MeshPhongMaterial({ map: texture, color: 0xff0000, specular: 0x0022ff, shininess: 3 }),

  '21':  new THREE.MeshPhongMaterial({ map: texture, bumpMap: textureBump, color: 0xff0000, ambient: 0x3ffc33 }),
  '22':  new THREE.MeshPhongMaterial({ map: texture, bumpMap: textureBump, color: 0xff0000, emissive: 0x000088 }),
  '23':  new THREE.MeshPhongMaterial({ map: texture, bumpMap: textureBump, color: 0xff0000, emissive: 0x004000, specular: 0x0022ff }),
  '24':  new THREE.MeshPhongMaterial({ map: texture, bumpMap: textureBump, color: 0xff0000, specular: 0x0022ff, shininess: 3 }),
}
var particleLight;

var lesson2 = {
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
        var VIEW_ANGLE = 45, ASPECT = SCREEN_WIDTH / SCREEN_HEIGHT, NEAR = 1, FAR = 5000;
        this.camera = new THREE.PerspectiveCamera( VIEW_ANGLE, ASPECT, NEAR, FAR);
        this.scene.add(this.camera);
        this.camera.position.set(100, 1000, 1000);
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
        var dLight = new THREE.DirectionalLight(0xffffff);
        dLight.position.set(1, 300, 1);
        dLight.castShadow = true;
        // dLight.shadowCameraVisible = true;
        dLight.shadowDarkness = 0.2;
        dLight.shadowMapWidth = dLight.shadowMapHeight = 1000;
        this.scene.add(dLight);

        // add particle of light
        particleLight = new THREE.Mesh( new THREE.SphereGeometry(10, 10, 10), new THREE.MeshBasicMaterial({ color: 0xffffaa }));
        particleLight.position = dLight.position;
        this.scene.add(particleLight);

        // add simple ground
        var groundGeometry = new THREE.PlaneGeometry(1200, 1200, 1, 1);
        ground = new THREE.Mesh(groundGeometry, new THREE.MeshLambertMaterial({
            color: getRandColor()
        }));
        ground.position.y = 0;
        ground.rotation.x = - Math.PI / 2;
        ground.receiveShadow = true;
        this.scene.add(ground);

        // add spheres with different materials
        this.drawSphere(-550, 400, mlib['1']);
        this.drawSphere(-350, 400, mlib['2']);
        this.drawSphere(-150, 400, mlib['3']);

        this.drawSphere( 150, 400, mlib['4']);
        this.drawSphere( 350, 400, mlib['5']);
        this.drawSphere( 550, 400, mlib['6']);

        this.drawSphere(-550, 200, mlib['7']);
        this.drawSphere(-350, 200, mlib['8']);

        this.drawSphere( -50, 200, mlib['9']);
        this.drawSphere( 150, 200, mlib['10']);
        this.drawSphere( 350, 200, mlib['11']);
        this.drawSphere( 550, 200, mlib['12']);

        this.drawSphere(-250, 0, mlib['13']);
        this.drawSphere( -90, 0, mlib['14']);
        this.drawSphere(  90, 0, mlib['15']);
        this.drawSphere( 250, 0, mlib['16']);

        this.drawSphere(-250, -200, mlib['17']);
        this.drawSphere( -90, -200, mlib['18']);
        this.drawSphere(  90, -200, mlib['19']);
        this.drawSphere( 250, -200, mlib['20']);

        this.drawSphere(-250, -400, mlib['21']);
        this.drawSphere( -90, -400, mlib['22']);
        this.drawSphere(  90, -400, mlib['23']);
        this.drawSphere( 250, -400, mlib['24']);
    },
    drawSphere: function(x, z, material) {
        var cube = new THREE.Mesh(new THREE.SphereGeometry(70, 70, 20), material);
        cube.rotation.x = cube.rotation.z = Math.PI * Math.random();
        cube.position.x = x;
        cube.position.y = 100;
        cube.position.z = z;
        cube.castShadow = cube.receiveShadow = true;
        this.scene.add(cube);
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
    lesson2.controls.update(lesson2.clock.getDelta());
    lesson2.stats.update();

    // smoothly move the particleLight
    var timer = Date.now() * 0.000025;
    particleLight.position.x = Math.sin(timer * 5) * 300;
    particleLight.position.z = Math.cos(timer * 5) * 300;
}

// Render the scene
function render() {
    if (lesson2.renderer) {
        lesson2.renderer.render(lesson2.scene, lesson2.camera);
    }
}

// Initialize lesson on page load
function initializeLesson() {
    lesson2.init();
    animate();
}

if (window.addEventListener)
    window.addEventListener('load', initializeLesson, false);
else if (window.attachEvent)
    window.attachEvent('onload', initializeLesson);
else window.onload = initializeLesson;
