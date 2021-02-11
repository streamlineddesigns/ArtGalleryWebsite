<!doctype html>
<html class="no-js" lang="en-US">
<head>
  <x-analytics/>
  <meta charset="utf-8">
  <title>View Laurie LaFrates Artwork</title>
  <meta name="description" content="{{$collection->description}}">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="View Laurie LaFrates Artwork">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:author" content="Streamlined Designs">

  <link rel="manifest" href="{{url('site.webmanifest')}}">
  <link rel="apple-touch-icon" href="{{url('icon.png')}}">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="{{url('css/main.css')}}">
  <link rel="stylesheet" href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}">
  
  <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>

  <style>
    .arjs-loader {
      height: 100%;
      width: 100%;
      position: absolute;
      top: 0;
      left: 0;
      background-color: rgba(0, 0, 0, 0.8);
      z-index: 9999;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .arjs-loader div {
      text-align: center;
      font-size: 1.25em;
      color: white;
    }

    #img-dimensions {
      display: none;
    }

    #input-form {
      position: absolute;
      height: 200px;
      width: 200px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      bottom: 0px;
      left: 0px;
      right: 0px;
      margin: 0 auto;
      z-index: 100000000;
    }

    #input-form div label {
      color: white;
    }

    #input-form div input {
      height: 35px;
      width: 200px;
      font-size: 22px;
    }
  </style>

  <!-- rawgithack development URL -->
  <script src='https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js'></script>

</head>

<body style='margin : 0px; overflow: hidden;'>

   <!-- minimal loader shown until image descriptors are loaded -->
  <div class="arjs-loader">
    <div>Loading, please wait...</div>
  </div>

  <x-header/>

    <img src="img/Pieces as JPEGS/16-min.jpg" id="img-dimensions" alt="abstract art">
    <form id="input-form">
        <div>
          <label for="xinput">X Position</label>
          <input type="text" name="xinput" id="xinput">
        </div>
        <div>
          <label for="yinput">Y Position</label>
          <input type="text" name="yinput" id="yinput">
        </div>
        <div>
          <label for="zinput">Z Position</label>
          <input type="text" name="zinput" id="zinput">
        </div>
    </form>
    <a-scene
        vr-mode-ui="enabled: false;"
        renderer="logarithmicDepthBuffer: true;"
        embedded arjs='trackingMethod: best; sourceType: webcam; debugUIEnabled: false;'>

        <!-- use rawgithack to retrieve the correct url for nft marker (see 'trex' below) -->
        <a-nft
            type='nft' url="img/descriptors/abstract/abstract"
            smooth='true' smoothCount='10' smoothTolerance='0.01' smoothThreshold='5'>
            <a-image 
                src="img/Pieces as JPEGS/16-min.jpg"
                rotation="90 180 0"
                scale="150 150 150"
                position="10 0 -75"
                >
            </a-image>
        </a-nft>
		<a-entity camera></a-entity>
    </a-scene>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
          $("a-entity").first().attr("position").x = -60;
          $("a-entity").first().attr("position").y = -120;
          $("a-entity").first().attr("position").z = 0;
          $("a-image").attr("src", "img/Pieces as JPEGS/1-min.jpg");
        });
    </script>
</body>

</html>