
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<title>Eaton AI</title>
<script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
<script src="https://raw.githack.com/jeromeetienne/AR.js/1.7.7/aframe/build/aframe-ar.js"></script>
<script>
</script>
</head>
<body>
 <div style="width:500px;height:500px;">
  <a-scene embedded arjs="sourceType: webcam;">
      <a-marker preset="hiro">
        <!-- Adding an OBJ file to an AR Project-->
        <a-entity 
            obj-model="obj: url(pnrlmb65in-Desktop/cbrpm240.obj); 
            mtl: url(pnrlmb65in-Desktop/cbrpm240.mtl)">
        </a-entity>
      </a-marker>
  <a-entity camera />
  </a-entity>
  </a-scene>
  </div>
</body
</html>