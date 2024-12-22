<footer class="py-80px" id="about-us">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 mb-5 mb-lg-0">
          <img class="h-32px mb-4" src="{{ url('assests/images/logo-2.svg') }}" alt="Logo">
          <p class="text-white">Lorem ipsum dolor sit amet <br/>Lorem, ipsum dolor.</p>
        </div>
        <div class="col-12 col-lg-6 me-auto">
          <div class="d-flex flex-column-reverse flex-lg-row justify-content-end">
            <div class="d-flex flex-column me-140px mb-3 mb-lg-0">
              <p class="fw-bold fs-5 text-white text-nowrap">
                Contact Us
              </p>
              <ul class="list-unstyled">
                <li class="text-white"><a href="emailto:lorem@diskusi.com">diskusi.com</a></li>
              </ul>
            </div>
            <div class="d-flex flex-column">
              <p class="fw-bold fs-5 text-white">Link</p>
              <ul class="list-unstyled">
                <li class="text-white mb-2"><a href="{{ route('home') }}">Home</a></li>
                <li class="text-white mb-2"><a href="{{ route('discussions.index') }}">Discussions</a></li>
                <li class="text-white mb-2"><a href="{{ route('home') }}#about-us">About Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
</footer>