@extends('front-end.main')

@section('title', '| Homepage')

@section('content')
<section id="intro">
   <img src="img/logo.jpg" alt="" style="border-radius:10px; margin-left:20px;" height="90px">
        <div class="intro-container">
          <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators"></ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
                    <div class="carousel-container">
                      <div class="carousel-content">
                        <h2>We are professional</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="#featured-services" class="btn-get-started scrollto">Welcome General</a>
                      </div>
                    </div>
                  </div>

<div class="carousel-item">
  <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
  <div class="carousel-container">
    <div class="carousel-content">
      <h2>At vero eos et accusamus</h2>
      <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
      <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
    </div>
  </div>
</div>

<div class="carousel-item">
  <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
  <div class="carousel-container">
    <div class="carousel-content">
      <h2>Temporibus autem quibusdam</h2>
      <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
      <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
    </div>
  </div>
</div>

<div class="carousel-item">
  <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
  <div class="carousel-container">
    <div class="carousel-content">
      <h2>Nam libero tempore</h2>
      <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
      <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
    </div>
  </div>
</div>

<div class="carousel-item">
  <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
    <div class="carousel-container">
    <div class="carousel-content">
      <h2>Magnam aliquam quaerat</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
    </div>
  </div>
  </div>
</div>

<a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>

<a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
  <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>

    </div>
  </div>
</section><!-- #intro -->

          <main id="main">
              <section id="featured-services">
                  <div class="container">
                      <div class="row">
                        <div class="col-lg-4 box">
                          <i class="ion-ios-bookmarks-outline"></i>
                          <h4 class="title"><a href="">About Us</a></h4>
                          <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                        </div>

                  <div class="col-lg-4 box box-bg">
                    <i class="ion-ios-stopwatch-outline"></i>
                    <h4 class="title"><a href="">Our Mission</a></h4>
                    <p class="description">Demonstrating God's love through mutual creation and development of great ideas dedicated to our collective growth</p>
                  </div>

                  <div class="col-lg-4 box">
                    <i class="ion-ios-heart-outline"></i>
                    <h4 class="title"><a href="">Our Vision</a></h4>
                    <p class="description">To build a Formidable force of great minds knitted in love for kingdom exploits and impacts</p>
                  </div>

    </div>
  </div>
</section><!-- #featured-services -->

                        <!--==========================
                          About Us Section
                        ============================-->
   {{--  <section id="about">
       <div class="container">
            <header class="section-header">
                  <h3>About Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                          </header>
        <div class="row about-cols">
          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
                Demonstrating God's love through mutual creation and development of great ideas dedicated to our collective growth
              </p>
            </div>
          </div>

        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
          <div class="about-col">
            <div class="img">
              <img src="img/about-plan.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="ion-ios-list-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Plan</a></h2>
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            </p>
          </div>
        </div>

        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="about-col">
            <div class="img">
              <img src="img/about-vision.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="ion-ios-eye-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Vision</a></h2>
            <p>
              To build a Formidable force of great minds knitted in love for kingdom exploits and impacts
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- #about -->  --}}

  <!--==========================
    Services Section
  ============================-->
  <section id="services">
    <div class="container">

      <header class="section-header wow fadeInUp">
        <h3>Services</h3>
        <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>
      </header>

      <div class="row">

        <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
          <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
          <h4 class="title"><a href="">Lorem Ipsum</a></h4>
          <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
        </div>
        <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
          <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
          <h4 class="title"><a href="">Dolor Sitema</a></h4>
          <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        </div>
        <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
          <div class="icon"><i class="ion-ios-paper-outline"></i></div>
          <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
          <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
        </div>
        <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
          <h4 class="title"><a href="">Magni Dolores</a></h4>
          <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
        <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
          <h4 class="title"><a href="">Nemo Enim</a></h4>
          <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
        </div>
        <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="icon"><i class="ion-ios-people-outline"></i></div>
          <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
          <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
        </div>

      </div>

    </div>
  </section><!-- #services -->

  <!--==========================
    Call To Action Section
  ============================-->
  {{-- <section id="call-to-action" class="wow fadeIn">
    <div class="container text-center">
      <h3>Call To Action</h3>
      <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <a class="cta-btn" href="#">Call To Action</a>
    </div>
  </section><!-- #call-to-action --> --}}

  <!--==========================
    Skills Section
  ============================-->
  {{-- <section id="skills">
    <div class="container">

      <header class="section-header">
        <h3>Our Skills</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
      </header>

      <div class="skills-content">

        <div class="progress">
          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
            <span class="skill">HTML <i class="val">100%</i></span>
          </div>
        </div>

        <div class="progress">
          <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
            <span class="skill">CSS <i class="val">90%</i></span>
          </div>
        </div>

        <div class="progress">
          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
            <span class="skill">JavaScript <i class="val">75%</i></span>
          </div>
        </div>

        <div class="progress">
          <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
            <span class="skill">Photoshop <i class="val">55%</i></span>
          </div>
        </div>

      </div>

    </div>
  </section> --}}

  <!--==========================
    Facts Section
  ============================-->
  {{-- <section id="facts"  class="wow fadeIn">
    <div class="container">

      <header class="section-header">
        <h3>Facts</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </header>

      <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">274</span>
          <p>Clients</p>
                </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">421</span>
          <p>Projects</p>
                </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">1,364</span>
          <p>Hours Of Support</p>
                </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">30</span>
          <p>Hard Workers</p>
                </div>

            </div>

      <div class="facts-img">
        <img src="img/facts-img.png" alt="" class="img-fluid">
      </div>

    </div>
  </section><!-- #facts --> --}}

  <!--==========================
    Begin Portfolio Section
  ============================-->

    @include('front-end.pages.mwt')

 <!--==========================
   End Portfolio Section
  ============================-->

  <!--==========================
    Clients Section Begins
  ============================-->
  {{-- <section id="clients" class="wow fadeInUp">
    <div class="container">

      <header class="section-header">
        <h3>Our Clients</h3>
      </header>

      <div class="owl-carousel clients-carousel">
        <img src="img/clients/client-1.png" alt="">
        <img src="img/clients/client-2.png" alt="">
        <img src="img/clients/client-3.png" alt="">
        <img src="img/clients/client-4.png" alt="">
        <img src="img/clients/client-5.png" alt="">
        <img src="img/clients/client-6.png" alt="">
        <img src="img/clients/client-7.png" alt="">
        <img src="img/clients/client-8.png" alt="">
      </div>

    </div>
  </section> --}}
  <!-- #clients -->

  <!--==========================
    Clients Section Ends
  ============================-->

  <!--==========================
    Testimony Section Begins
  ============================-->

  @include('front-end.pages.testimonies')
 <!--==========================
    Testimony Section Ends
  ============================-->

  <!--==========================
    Team Section
  ============================-->
  <section id="team">
    <div class="container">
      <div class="section-header wow fadeInUp">
        <h3>VOG ADMINS</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 wow fadeInUp">
          <div class="member">
            <img src="img/team-1.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="member">
            <img src="img/team-2.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="member">
            <img src="img/team-3.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="member">
            <img src="img/team-4.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- #team -->

  <!--==========================
    Contact Section
  ============================-->
  <section id="contact" class="section-bg wow fadeInUp">
    <div class="container">

      <div class="section-header">
        <h3>Contact Us</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </div>

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="ion-ios-location-outline"></i>
            <h3>Address</h3>
            <address>A108 Adam Street, NY 535022, USA</address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="ion-ios-telephone-outline"></i>
            <h3>Phone Number</h3>
            <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="ion-ios-email-outline"></i>
            <h3>Email</h3>
            <p><a href="mailto:info@example.com">info@example.com</a></p>
          </div>
        </div>

      </div>

     @include('front-end.pages.contact')
    </div>
  </section>
</main>





@endsection