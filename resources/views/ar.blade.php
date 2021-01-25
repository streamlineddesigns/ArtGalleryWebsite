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

<body style='margin : 0px; overflow: hidden;'>
   <!-- minimal loader shown until image descriptors are loaded -->
  <div class="arjs-loader">
    <div>Loading, please wait...</div>
  </div>
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
                position="-60 -120 0"
                >
            </a-image>
        </a-nft>
		<a-entity camera></a-entity>
    </a-scene>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
          //x change event listener
          $( "#xinput" ).change(function() {
            $("a-entity").first().attr("position").x = $( "#xinput" ).val();
          });

          //y change event listener
          $( "#yinput" ).change(function() {
            $("a-entity").first().attr("position").y = $( "#yinput" ).val();
          });

          //z change event listener
          $( "#zinput" ).change(function() {
            $("a-entity").first().attr("position").z = $( "#zinput" ).val();
          });
          //$("a-entity").first().attr("position").x = (screen.width  - $("a-entity").first().attr("scale").x) / 2;
          //$("a-entity").first().attr("position").z = - (screen.height - $("a-entity").first().attr("scale").z) / 2;
        });
    </script>
</body>
