<!--{{ $collection->id }} -->
<!doctype html>
<html class="no-js" lang="en-US">

<head>
  <x-analytics/>
  <meta charset="utf-8">
  <title>{{$collection->name}}</title>
  <meta name="description" content="{{$collection->description}}">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="Laurie LaFrate Art - {{$collection->name}}">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:author" content="Streamlined Designs">

  <link rel="manifest" href="{{url('site.webmanifest')}}">
  <link rel="apple-touch-icon" href="{{url('icon.png')}}">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="{{url('css/main.css')}}">
  <link rel="stylesheet" href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}">

  <meta name="theme-color" content="#fafafa">
  <style>
        .collection_background_image {
            background-image: url({{url($collection->background_image_url)}});
        }

        .collection_name_color {
            color: {{$collection->name_color}}
        }

        .collection_paintings img {
            max-width: calc( ((100vw / {{$collection_data->count()}}) - 40px) * 1.6 ) !important;
            padding-left: 10px;
            padding-right: 10px;
            max-height: calc( ((100vw / {{$collection_data->count()}}) - 40px) * 0.9 ) !important;
        }

        /* Small Devices */
        @media (max-width: 992px) {
            .collection_paintings img {
                max-width: calc( ((100vw / {{$collection_data->count()}}) - 10px) * 1.6 ) !important;
                padding-left: 2.5px;
                padding-right: 2.5px;
                max-height: calc( ((100vw / {{$collection_data->count()}}) - 10px) * 0.9 ) !important;
            }
        }
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
  <div class="hero-image collection_background_image">
    
  </div>
  <!--/Hero Section-->

  <!-- Collection Overview -->
  <div class="container custom-container py-5">
    <div class="row">
        <div class="col-lg-12 d-flex align-items-center flex-column justify-content-center text-center py-5 px-5">
            <h2 class="row-header row-header-large text-transform-none collection_name_color">
                <i>{{$collection->name}}</i>
            </h2>
            <p>
                {{$collection->description}}
            </p>
        </div>   
        
        <div class="col-lg-12 justify-content-around d-flex text-center collection_paintings pb-5">
            @foreach($collection_data as $key => $value)
                <img src="{{url( $value->image_url)}}" class="img-fluid" alt="painting">
            @endforeach
        </div>
    </div>
  </div>
  <!--/Collection Overview-->

  @foreach($collection_data as $key => $value)
        @if($value->id % 2 == 0) 
            <!-- About 1 -->
            <div class="container custom-container">
                <div class="row">
                    <div class="col-lg-7 px-0">
                        <img class="img-fluid" src="{{url( $value->image_url)}}" alt="Painting">
                    </div>
                    <div class="col-lg-5 d-flex align-items-center flex-column justify-content-center text-center py-3 col-mobile-padded">
                        <h2 class="row-header row-header-large text-transform-none" style="color: {{$value->name_color}};">{{$value->name}}</h2>
                        <p>
                            {{$value->description}}
                        </p>
                        <div class="painting-footer-text  mb-5">
                            {{$value->footer_text}}
                        </div>
                        <a href="#contact" role="button"class="btn btn-custom btn-custom-white-mod" style="background-color: {{$value->button_color}}; border: 3px solid {{$value->button_color}} !important;">I'm interested in this</a>
                    </div>
                </div>
            </div>
            <!--/About 1-->
        @else
            <!-- About 2 -->
            <div class="container custom-container">
                <div class="row">
                    <div class="col-lg-7 px-0">
                        <img class="img-fluid" src="{{url( $value->image_url)}}" alt="Painting" style="float: right;">
                    </div>
                    <div class="order-lg-first col-lg-5 d-flex align-items-center flex-column justify-content-center text-center py-3 col-mobile-padded">
                        <h2 class="row-header row-header-large text-transform-none" style="color: {{$value->name_color}};">{{$value->name}}</h2>
                        <p>
                            {{$value->description}}
                        </p>
                        <div class="painting-footer-text mb-5">
                            {{$value->footer_text}}
                        </div>
                        <a href="#contact" role="button"class="btn btn-custom btn-custom-white-mod" style="background-color: {{$value->button_color}};  border: 3px solid {{$value->button_color}} !important;">I'm interested in this</a>
                    </div>
                </div>
            </div>
            <!--/About 2-->
        @endif
  @endforeach

  <x-contact/>

  <x-footer/>

  <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>