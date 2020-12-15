<!doctype html>
<html class="no-js" lang="">

<head>
  <x-analytics/>
  <meta charset="utf-8">
  <title>Laurie LaFrate Art</title>
  <meta name="description" content="Extraordinary artwork by Laurie LaFrate for extraordinary residential and commercial spaces – crafted with love, from a studio on New York's Upper East Side.">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="Laurie LaFrate Art Gallery">
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
</head>

<body>

  <x-header/>

  <!--Hero Section-->
  <div class="hero-image">
    <div class="cta-container">
      <p class="cta-text">Learn More!</p>
      <a href="#hero-cta-button-target" class="hero-cta-button"><img src="{{url('img/social/chevron.png')}}" class="img-fluid" alt="downward arrow"></a>
    </div>
  </div>
  <!--/Hero Section-->

  <!-- About -->
  <div class="container custom-container" id="hero-cta-button-target">
    <div class="row">
      <div class="col-lg-5 px-0">
        <img class="img-fluid hidden-on-mobile" src="img/Pics of Laurie/200730_IMG_0082.jpg" alt="Laurie sitting in a chair">
      </div>
      <div class="col-lg-7 d-flex align-items-center flex-column justify-content-center text-center py-3 col-mobile-padded">
        <span class="row-header row-header-small">Meet the artist</span>
        <h2 class="row-header row-header-large">About Laurie LaFrate</h2>

        <p>
          Laurie LaFrate grew up in a small town called Elbridge in Upstate New York. Laurie knew she had a proclivity for the arts at an early age and took art classes in high school. Laurie's artwork is enriched by her use of vivid colors and layering techniques. Wherever creativity attracted her, she went along. Painting in intriguing designs, patterns, interior designing, everything was at the tips of her fingers. 
        </p>
        <p>
          Laurie LaFrate moved to NYC after gaining her graduation from Ithaca College. There she launched a recruitment advertising agency which opened new doors for unleashing her hidden talents. In this role, Laurie merged with her art department to upgrade the look and feel of potential clients' print ads for recruiting talent. Her degree in Business and Marketing, her sales experience, and her creative soul was key to the success of her business. It later merged with an ad agency on Madison Avenue. She was successful in whichever field she chose. 
        </p>
        <p>
          After some time, Laurie started working in corporate America. Even so, the talented side of her continued to explore in arts on the other hand while she continued to paint and create wonders for friends and family. She knew it from the beginning; this was not going to be a short-lived obsession and will continue to grow with her.
        </p>
        
        <a href="/about" role="button" class="btn btn-custom">More About Laurie</a>
        <div>
          <a href="https://www.facebook.com/people/Laurie-LaFrate-Barr/100008250428968" class="custom-social-btn"><img class="img-fluid" src="{{url('img/social/facebook-logo.png')}}" alt="social link for Facebook"></a>
          <a href="https://www.instagram.com/laurielafrateart/" class="custom-social-btn"><img class="img-fluid" src="{{url('img/social/instagram.png')}}" alt="social link for Instagram"></a>
          <a href="https://www.linkedin.com/in/laurie-lafrate-1b55338" class="custom-social-btn"><img class="img-fluid" src="{{url('img/social/linkedin.png')}}" alt="social link for LinkedIn"></a>
          <a href="https://www.youtube.com" class="custom-social-btn"><img class="img-fluid" src="{{url('img/social/youtube.png')}}" alt="social link for YouTube"></a>
        </div>
      </div>
    </div>
  </div>
  <!--/About-->

  <!--Carosel Section-->
  <div class="container custom-container" id="artgallery">
    <hr class="hidden-on-desktop">
    <h6 class="row-header row-header-small text-center hidden-on-desktop">Laurie LaFrate</h6>
    <h2 class="row-header row-header-large text-center hidden-on-desktop">Art Gallery</h2>
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
        <button class="btn-custom custom-carosel-button ml-3"><span class="carousel-control-prev-icon" aria-hidden="true"></span></button>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
        <button class="btn-custom custom-carosel-button mr-3"><span class="carousel-control-next-icon" aria-hidden="true"></span></button>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!--/Carosel Section-->

  <x-contact/>

  <x-footer/>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="{{url('js/main.js')}}"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>