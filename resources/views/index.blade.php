<!doctype html>
<html class="no-js" lang="">

<head>
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
    
  </div>
  <!--/Hero Section-->

  <!-- About -->
  <div class="container custom-container">
    <div class="row">
      <div class="col-lg-5 px-0">
        <img class="img-fluid hidden-on-mobile" src="img/Pics of Laurie/200730_IMG_0082.jpg" alt="Laurie sitting in a chair">
      </div>
      <div class="col-lg-7 d-flex align-items-center flex-column justify-content-center text-center py-3 col-mobile-padded">
        <span class="row-header row-header-small">Meet the artist</span>
        <h2 class="row-header row-header-large">About Laurie LaFrate</h2>
        <p>
          Laurie LaFrate is an abstract painter whose passion for painting with bold colors, fresh designs and unique patterns—along with an interest in decorating interiors—came to her at an early age. Growing up in a small town called Elbridge in Upstate New York, Laurie took art classes in high school and continued privately both locally and in NYC. 
        </p>

        <p>
          After graduating from Ithaca College,  Laurie moved to NYC, where she launched a recruitment advertising agency. In this role, Laurie collaborated with her art department to upgrade the look and feel of new clients’ print ads— used for recruiting talent.
        </p>

        <p>
          Later on, Laurie found herself working in corporate America where—despite her day to day, she privately painted one-of-a kind paintings for family and friends. 
        </p>

        <p>
          While attending The New York Art Student’s League for abstract painting, where she studied under the direction of influential abstract artist James Little, Lauire learned the art of color selection and how to paint with intent. 
        </p>

        <p>
          Laurie gets to persue her greatest passion everyday—spending hours in her studio, creating paintings from the heart. Laurie expresses her emotions as a visual language. Her powerful, mixed-media paintings are designed to enhance or transform the decor and mood of any residential or commercial space.
        </p>
        <a href="/about" role="button" class="btn btn-custom">More About Laurie</a>
        <div>
          <a href="https://www.facebook.com" class="custom-link"><img class="img-fluid" src="img/social-media-icons-download 17.png" alt="social link for Facebook"></a>
          <a href="https://www.instagram.com" class="custom-link"><img class="img-fluid" src="img/social-media-icons-download 18.png" alt="social link for Instagram"></a>
          <a href="https://www.linkedin.com" class="custom-link"><img class="img-fluid" src="img/social-media-icons-download 19.png" alt="social link for LinkedIn"></a>
          <a href="https://www.youtube.com" class="custom-link"><img class="img-fluid" src="img/social-media-icons-download 20.png" alt="social link for YouTube"></a>
        </div>
      </div>
    </div>
  </div>
  <!--/About-->

  <!--Carosel Section-->
  <div class="container custom-container" id="artgallery">
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
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>