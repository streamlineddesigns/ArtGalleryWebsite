<?php
use App\Models\Collection;
  $header_collections = Collection::all()->reverse();
?>
<!--Navigation-->
  <nav class="navbar fixed-top navbar-dark navbar-frosted-glass position-absolute navbar-expand-lg custom-navbar">
    <a class="navbar-brand custom-navbar-brand" href="/">
      <img class="img-fluid img-logo" src="{{url('img/logo.png')}}" alt="logo">
      <span class="hidden-on-mobile">Laurie LaFrate</span>
      <span class="hidden-on-mobile">Art Gallery</span>
    </a>
    <a class="hidden-on-desktop no-underline-link" href="/"><span class="laurie-font">Laurie LaFrate</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <hr>
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item" data-toggle="collapse" data-target="#navbarTogglerDemo01">
          <a class="nav-link" href="{{url('/#artgallery')}}">Art Gallery</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle custom-dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Collections
          </a>
          <div class="dropdown-menu dropdown-menu-custom" aria-labelledby="navbarDropdown">
            @foreach($header_collections as $key => $value)
            <a class="dropdown-item dropdown-item-custom d-flex align-items-center flex-column justify-content-center text-center" href="{{url('art/collections/' . $value->id)}}">{{$value->name}}</a>
            @endforeach
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('about')}}">About</a>
        </li>
        <li class="nav-item" data-toggle="collapse" data-target="#navbarTogglerDemo01">
          <a class="nav-link" href="{{url('#contact')}}">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <!--/Navigation-->