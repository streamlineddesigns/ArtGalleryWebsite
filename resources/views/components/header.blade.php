  <!--Navigation-->
  <nav class="navbar fixed-top navbar-dark navbar-frosted-glass position-absolute navbar-expand-lg custom-navbar">
    <a class="navbar-brand custom-navbar-brand" href="/">
      <img class="img-fluid img-logo" src="{{url('img/logo.png')}}" alt="logo">
      <span>Laurie LaFrate</span>
      <span>Art Gallery</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <hr>
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/#artgallery')}}">Art Gallery</a>
        </li>
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle custom-dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Collections
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">The Breakup Collection</a>
            <a class="dropdown-item" href="#">The Garden Collection</a>
            <a class="dropdown-item" href="#">The True Collection</a>
            <a class="dropdown-item" href="#">The Skribble Collection</a>
          </div>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="{{url('#')}}">Collections</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('about')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('#contact')}}">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <!--/Navigation-->