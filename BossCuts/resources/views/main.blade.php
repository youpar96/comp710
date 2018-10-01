@extends("layouts.front")

@section("content")    
    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{ secure_asset('img/boss_intro2.jpg') }}" alt="">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded" style="margin-top:20rem;">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Fresh Coffee</span>
              <span class="section-heading-lower">Worth Services</span>
            </h2>
            <p class="mb-3">Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!
            </p>
            <div class="intro-button mx-auto">
              <a class="btn btn-primary btn-xl" href="#">Make Appointment</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section">
      <div class="container cta">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Our Promise</span>
                <span class="section-heading-lower">To You</span>
              </h2>
              <p class="mb-0">When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="page-section about-heading" id="about">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/boss_about.png" alt="" style="width:100%;">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Facny Hair Services</span>
                  <span class="section-heading-lower">About Our Shop</span>
                </h2>
                <p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
                <p class="mb-0">We guarantee that you will fall in <em>lust</em> with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="container cta">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Come On In</span>
                <span class="section-heading-lower">We're Open</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  Monday
                  <span class="ml-auto">9:00 AM to 5:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Tuesday
                  <span class="ml-auto">9:00 AM to 5:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Wednesday
                  <span class="ml-auto">9:00 AM to 5:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Thursday
                  <span class="ml-auto">9:00 AM to 5:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Friday
                  <span class="ml-auto">9:00 AM to 5:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Saturday
                  <span class="ml-auto">8:30 AM to 5:00 PM</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Sunday
                  <span class="ml-auto">9:00 AM to 5:00 PM</span>
                </li>
              </ul>
              <p class="address mb-5">
                <em>
                  <strong>174 Clarkin Road</strong>
                  <br>
                  Fairfield, Hamilton 3214
                </em>
              </p>
              <p class="mb-0">
                <small>
                  <em>Call Anytime</em>
                </small>
                <br>
                07-844-6874
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Map -->
    <section class="page-section" id="contact">
      <div class="container cta pb-0">
        <div class="row pb-4">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-lower">Let's Get In Touch!</span>
              </h2>
              <p class="mb-0">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
              <br/>
              <div class="col-lg-4 ml-auto text-center" style="float:left;display:inline-block">
                <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
                <p>07-844-6874</p>
              </div>
              <div class="col-lg-4 mr-auto text-center" style="float:right;display:inline-block">
                <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
                <p>
                  <a href="mailto:bosscutsnz@gmail.com">bosscutsnz@gmail.com</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1115.1267554296253!2d175.27815310780954!3d-37.765314111822946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d6d1884f6c5c635%3A0xa39934df5e809998!2sBoss+Cuts+Barber+Shop!5e0!3m2!1sen!2snz!4v1538307399979" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </section>

@endsection