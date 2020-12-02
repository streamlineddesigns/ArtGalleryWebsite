<!--{{ $collection->id }} -->
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Laurie LaFrate Art Gallery</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

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
            /*color: {{$collection->name_color_id}};*/
            color: {{$colors->find($collection->name_color_id)->hex_value}};
        }

        .collection_paintings img {
            max-width: calc((100vw / {{$collection_data->count()}}) - 40px) !important;
            padding-left: 20px;
            padding-right: 20px;
        }

        .btn-custom {
            color: white !important;
            background-image: none;
        }
        /* End css */
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
                <div class="col-lg-5 d-flex align-items-center flex-column justify-content-center text-center py-3">
                    <h2 class="row-header row-header-large text-transform-none" style="color: {{$colors->find($value->name_color_id)->hex_value}};">{{$value->name}}</h2>
                    <p>
                        {{$value->description}}
                    </p>
                    <a href="/#artgallery" role="button"class="btn btn-custom" style="background-color: {{$colors->find($value->button_color_id)->hex_value}};">Check Out Gallery</a>
                </div>
                </div>
            </div>
            <!--/About 1-->
        @else
            <!-- About 2 -->
            <div class="container custom-container">
                <div class="row">
                <div class="col-lg-5 d-flex align-items-center flex-column justify-content-center text-center py-3">
                    <h2 class="row-header row-header-large text-transform-none" style="color: {{$colors->find($value->name_color_id)->hex_value}};">{{$value->name}}</h2>
                    <p>
                        {{$value->description}}
                    </p>
                    <a href="/#artgallery" role="button"class="btn btn-custom" style="background-color: {{$colors->find($value->button_color_id)->hex_value}};">Check Out Gallery</a>
                </div>
                <div class="col-lg-7 px-0">
                    <img class="img-fluid" src="{{url( $value->image_url)}}" alt="Painting">
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