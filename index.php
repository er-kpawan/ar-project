<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eaton AI</title>
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 800px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script src="scripts/scanner-custom.js"></script>
</head>

<body>
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>QR Code Generation</h2>
    <center> <img src="https://qrickit.com/api/qr.php?d=http://localhost:8012/ar-project/model-viewer.php&qrsize=450"></center>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Eaton Scanner</h2>
	<p><button type="button" id="scanner-launch" onclick="launchScanner()" >Click me to launch Scanner</button></p>
	<center>
	<div id ="scanner-preview-loader" class="hide">
    <p>    <video id="preview"></video>
    <script type="text/javascript">
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
		  window.location = content;
        //alert(content);
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
    </script></p> </div> </center>

  </div>
</div>
  </body>
  <footer>
  </footer>
</html>