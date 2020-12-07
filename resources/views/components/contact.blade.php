  <!-- Contact -->
  <div class="container custom-container" id="contact">
    <div class="row">
      <div class="col-lg-5 px-0">
        <img class="img-fluid" src="{{url('img/Pics of Laurie/200525_A_IMG_9792.jpg')}}" alt="Laurie sitting in a chair">
      </div>
      <div class="col-lg-7 d-flex align-items-center flex-column justify-content-center text-center py-3">
        <span class="row-header row-header-small">Contact Us</span>
        <h2 class="row-header row-header-large">Laurie LaFrate <span>Art Gallery</span></h2>
        <p>
          Extraordinary artwork by Laurie LaFrate for extraordinary residential and commercial spaces – crafted with love, from a studio on New York's Upper East Side.
        </p>

        @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
        @endif

        @if ($errors->any())
          <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif

        <form action="{{ route('contact') }}" method="POST">
          @csrf

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputName1">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail1">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPhone1">Phone</label>
              <input type="tel" class="form-control" name="phone" placeholder="Phone">
            </div>
            <div class="form-group col-md-6">
              <label for="inputInstagram1">Instagram</label>
              <input type="text" class="form-control" name="instagram" placeholder="Instagram">
            </div>
          </div>
          <div class="form-group">
            <label for="inputTextarea1">Message</label>
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <button type="submit" class="btn btn-custom">Submit</button>
        </form>

        <div>
          <a href="https://www.facebook.com" class="custom-link"><img class="img-fluid" src="{{url('img/social-media-icons-download 17.png')}}" alt="social link for Facebook"></a>
          <a href="https://www.instagram.com" class="custom-link"><img class="img-fluid" src="{{url('img/social-media-icons-download 18.png')}}" alt="social link for Instagram"></a>
          <a href="https://www.linkedin.com" class="custom-link"><img class="img-fluid" src="{{url('img/social-media-icons-download 19.png')}}" alt="social link for LinkedIn"></a>
          <a href="https://www.youtube.com" class="custom-link"><img class="img-fluid" src="{{url('img/social-media-icons-download 20.png')}}" alt="social link for YouTube"></a>
        </div>
      </div>
    </div>
  </div>
  <!--/Contact-->