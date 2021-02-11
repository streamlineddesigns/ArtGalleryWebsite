<!doctype html>
<html class="no-js" lang="en-US">

<head>
  <x-analytics/>
  <meta charset="utf-8">
  <title>View Laurie LaFrate's Paintings</title>
  <meta name="description" content="View original Laurie LaFrate painting's in your home using Augmented Reality!">

  <meta property="og:title" content="Laurie LaFrate">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:author" content="Streamlined Designs">


  <link rel="stylesheet" href="{{url('css/main.css')}}">
  <link rel="stylesheet" href="{{url('css/ar.css')}}">
  <link rel="stylesheet" href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}">

  <!--aframe-->
  <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
  <!-- rawgithack development URL -->
  <script src='https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js'></script>
</head>

<body style='margin : 0px; overflow: hidden;'>

   <!-- minimal loader shown until image descriptors are loaded -->
  <div class="arjs-loader">
    <div>Loading, please wait...</div>
  </div>

  <x-header/>

    <div id="bottom-nav">

    </div>
    
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
    <script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/ar.js')}}"></script>
</body>

</html>