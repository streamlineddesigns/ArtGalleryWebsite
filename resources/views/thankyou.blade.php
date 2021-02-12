<!doctype html>
<html class="no-js" lang="en-US">

<head>
  <x-analytics/>
  <x-conversion/>
  <meta charset="utf-8">
  <title>Thank you</title>
  <meta name="description" content="Extraordinary artwork by Laurie LaFrate for extraordinary residential and commercial spaces – crafted with love, from a studio on New York's Upper East Side.">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="Thank you">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:author" content="Streamlined Designs">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

  <meta name="theme-color" content="#fafafa">
  <style>
      /* Large Devices */
        @media (min-width: 992px) {
            .custom-navbar a.nav-link, .custom-navbar-brand span {
                color: white !important;
            }
        }
  </style>
</head>

<body>

  <x-header/>

  <!--Hero Section-->
  <div class="hero-image">
    <div class="cta-container">
      <p class="cta-text">Thank you!</p>
      <p class="cta-text cta-text-small">You'll hear back from me shortly!</p>
      <a href="/" class="chevron-arrow"><img src="{{url('img/social/home.png')}}" class="img-fluid" alt="downward arrow"></a>
    </div>
  </div>
  <!--/Hero Section-->

  <!--Carosel Section-->
  <!--<div class="container custom-container" id="artgallery">
    <hr class="hidden-on-desktop">
    <h2 class="row-header row-header-large text-center hidden-on-desktop lowercase">Art Gallery</h2>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        {{$icp = 0}}
        @foreach($collections as $key => $value)
        <div class="carousel-item @if($icp == 0) active @endif">
          <a href="{{ url('art/collections/' . $value->id) }}"><img class="d-block w-100" src="{{ url($value->background_image_url) }}" alt="Collection {{ url($value->id) }}"></a>
        </div>
        {{$icp++}}
        @endforeach
      </div>
      <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
        <button class="btn-custom custom-carosel-button ml-3" aria-label="Previous Image Button"><span class="carousel-control-prev-icon" aria-hidden="true"></span></button>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
        <button class="btn-custom custom-carosel-button mr-3" aria-label="Next Image Button"><span class="carousel-control-next-icon" aria-hidden="true"></span></button>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>-->
  <!--/Carosel Section-->

  <x-footer/>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="{{url('js/main.js')}}"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script>
      $(document).ready(function() {
        $(".nav-link").last().remove();
      });
  </script>
</body>

</html>