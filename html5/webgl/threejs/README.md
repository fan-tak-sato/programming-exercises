Resources
===============================

http://www.script-tutorials.com/webgl-with-three-js-lesson-1/
http://www.script-tutorials.com/webgl-with-three-js-lesson-2/
http://www.script-tutorials.com/webgl-with-three-js-lesson-3/
http://www.script-tutorials.com/webgl-with-three-js-lesson-4/
http://www.script-tutorials.com/webgl-with-three-js-lesson-5/

http://www.script-tutorials.com/interactive-3d-watch-using-three-js/


Lesson 2 Documentation
---------------------------

MeshBasicMaterial
This material is for drawing geometries in a simple shaded (flat or wireframe) way.

- color - geometry color in hexadecimal (0xffffff)
- wireframe - render geometry as wireframe
- wireframeLinewidth - line thickness (1)
- wireframeLinecap - define appearance of line ends
- wireframeLinejoin - define appearance of line joints
- shading - define shading type (THREE.SmoothShading)
- vertexColors - define how the vertices gets colored (THREE.NoColors)
- fog - define whether the material color is affected by global fog settings (true)
- lightMap - set light map (null)
- specularMap - set specular map (null)
- envMap - set env map (null)
- skinning - define whether the material uses skinning
- morphTargets - define whether the material uses morphTargets
- MeshLambertMaterial

This material is for non-shiny (Lambertian) surfaces, evaluated per vertex.

- color - geometry color in hexadecimal (0xffffff)
- ambient - ambient color of the material, multiplied by the color of the AmbientLight (0xffffff)
- emissive - emissive (light) color of the material, essentially a solid color unaffected by other lighting (0�000000)
- shading - define shading type (THREE.SmoothShading)
- wireframe - render geometry as wireframe
- wireframeLinewidth - line thickness (1)
- wireframeLinecap - define appearance of line ends
- wireframeLinejoin - define appearance of line joints
- vertexColors - define how the vertices gets colored (THREE.NoColors)
- fog - define whether the material color is affected by global fog settings (true)
- map - set color texture map (null)
- lightMap - set light map (null)
- specularMap - set specular map (null)
- envMap - set env map (null)
- reflectivity - how much the environment map affects the surface
- refractionRatio - index of refraction for an environment map using THREE.CubeRefractionMapping (0.98)
- combine - how to combine the result of the surface�s color with the environment map (options: THREE.Multiply (default), THREE.MixOperation, THREE.AddOperation)
- skinning - define whether the material uses skinning
- morphTargets - define whether the material uses morphTargets
- morphNormals - define whether the material uses morphNormals

MeshPhongMaterial
This material is for shiny surfaces, evaluated per pixel.

- color - geometry color in hexadecimal (0xffffff)
- ambient - ambient color of the material, multiplied by the color of the AmbientLight
- emissive - emissive (light) color of the material, essentially a solid color unaffected by other lighting
- specular specular color of the material, i.e., how shiny the material is and the color of its shine. Setting this the same color as the diffuse value (times some intensity) makes the material more metallic-looking; setting this to some gray makes the material look more plastic (dark gray)
- shininess how shiny the specular highlight is; a higher value gives a sharper highlight (30)
- shading - define shading type (THREE.SmoothShading)
- wireframe - render geometry as wireframe
- wireframeLinewidth - line thickness (1)
- wireframeLinecap - define appearance of line ends
- wireframeLinejoin - define appearance of line joints
- vertexColors - define how the vertices gets colored (THREE.NoColors)
- fog - define whether the material color is affected by global fog settings (true)
- map - set color texture map (null)
- lightMap - set light map (null)
- specularMap - set specular map (null)
- envMap - set env map (null)
- reflectivity - how much the environment map affects the surface
- refractionRatio - index of refraction for an environment map using THREE.CubeRefractionMapping (0.98)
- combine - how to combine the result of the surface's color with the environment map (options: THREE.Multiply (default), THREE.MixOperation, THREE.AddOperation)
- skinning - define whether the material uses skinning
- morphTargets - define whether the material uses morphTargets
- morphNormals - define whether the material uses morphNormals
- bumpMap - set bump texture map (none)

Bump Maps
A bump map is a bitmap used to displace the surface normal vectors of a mesh to, as the name suggests, create an apparently bumpy surface. The pixel values of the bitmap are treated as heights rather than color values. For example, a pixel value of zero can mean no displacement from the surface and non-zero values can mean positive displacement away from the surface. Typically, single-channel black and white bitmaps are used for efficiency, though full RGB bitmaps can be used to provide greater detail, since they can store much larger values. The reason that bitmaps are used instead of 3D vectors is that they are more compact and provide a fast way to calculate normal displacement within the shader code. In the future we will continue talking about the maps.