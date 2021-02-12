  <!-- Contact -->
  <hr class=m-0>
  <div class="container custom-container" id="contact">
    <div class="row">
      <div class="col-lg-5 px-0">
        <img class="img-fluid" src="{{url('img/Pics of Laurie/IMG_1536.jpg')}}" alt="Laurie sitting in a chair">
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
              <label for="name-input">Name</label>
              <input id="name-input" type="text" class="form-control" name="name" placeholder="Name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="email-input">Email</label>
              <input id="email-input" type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group col-md-6">
              <label for="phone-input">Phone</label>
              <input id="phone-input" type="tel" class="form-control" name="phone" placeholder="Phone">
            </div>
            <div class="form-group col-md-6">
              <label for="instagram-input">Instagram</label>
              <input id="instagram-input" type="text" class="form-control" name="instagram" placeholder="Instagram">
            </div>
          </div>
          <div class="form-group">
            <label for="Message-input">Message</label>
            <textarea id="Message-input" class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <button type="submit" class="btn btn-custom">Submit</button>
        </form>

        <div>
          <a href="https://www.facebook.com/Laurie-LaFrate-Art-105989084775499" class="custom-social-btn"><img class="img-fluid" src="{{url('img/social/facebook-logo.png')}}" alt="social link for Facebook"></a>
          <a href="https://www.instagram.com/laurielafrateart/" class="custom-social-btn"><img class="img-fluid" src="{{url('img/social/instagram.png')}}" alt="social link for Instagram"></a>
          <a href="https://www.linkedin.com/in/laurie-lafrate-barr-9b523515a/" class="custom-social-btn"><img class="img-fluid" src="{{url('img/social/linkedin.png')}}" alt="social link for LinkedIn"></a>
          <a href="https://api.whatsapp.com/send?phone=19175583501" class="custom-social-btn"><img class="img-fluid" src="{{url('img/social/whatsapp.png')}}" alt="social link for Whatsapp"></a>
        </div>
      </div>
    </div>
  </div>
  <!--/Contact-->