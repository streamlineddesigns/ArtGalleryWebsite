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
</style>

<!-- rawgithack development URL -->
<script src='https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js'></script>

<body style='margin : 0px; overflow: hidden;'>
   <!-- minimal loader shown until image descriptors are loaded -->
  <div class="arjs-loader">
    <div>Loading, please wait...</div>
  </div>
    <a-scene
        vr-mode-ui="enabled: false;"
        renderer="logarithmicDepthBuffer: true;"
        embedded arjs='trackingMethod: best; sourceType: webcam; debugUIEnabled: false;'>

        <!-- use rawgithack to retrieve the correct url for nft marker (see 'trex' below) -->
        <a-nft
            type='nft' url="img/descriptors/laurielafrateartlogo/laurielafrateartlogo"
            smooth='true' smoothCount='10' smoothTolerance='0.01' smoothThreshold='5'>
            <a-image 
                src="img/Pieces as JPEGS/16-min.jpg"
                rotation="90 180 0"
                scale="100 100 100"
                position="10 0 -75"
                >
            </a-image>
        </a-nft>
		<a-entity camera></a-entity>
    </a-scene>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script>
        /*$(document).ready(function() {
            $("a-entity").first().attr("position").x = screen.width / 2;
            $("a-entity").first().attr("position").y = screen.height / 2;
        });*/
    </script>
</body>
