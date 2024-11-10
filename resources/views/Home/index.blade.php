<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>HACM - Hulondalo Annual Cardiovascular Meeting</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="HACM - Hulondalo Annual Cardiovascular Meeting" name="keywords">
  <meta content="HACM - Holistic Approach Of Cardiovascular Care : From Pediatric To Adult. 2nd Hulondalo Cardiovascular Meeting 2024. Program at Galance: 3 Symposium, 3 Workshop, GP Case Sharing, Modereted Poster." name="description">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->
  <link href="{{ URL::asset('home/img/favicon.ico')}}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ URL::asset('home/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ URL::asset('home/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('home/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('home/lib/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('home/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ URL::asset('home/css/style.css')}}" rel="stylesheet">

  {{-- Sweet Alert --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    .countdown {
        font-size: 2rem;
        font-weight: bold;
        text-align: center;
        margin-top: 50px;
    }
    .message {
        text-align: center;
        margin-top: 20px;
        font-size: 1.5rem;
    }
</style>

</head>

<body>
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="{{ URL::asset('home/img/logo.png')}}" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#speakers">Speakers</a></li>
          <li><a href="#schedule">Schedule</a></li>
          <li><a href="#venue">Venue</a></li>
          <li><a href="#gallery">Announcement</a></li>
          <li><a href="#contact">Contact</a></li>
          @if (is_null($getUser))
            <li class="buy-tickets"><a href="#" id="myButton">Buy Tickets</a></li>
          @else
          <li><a href="{{route('order')}}">My Order</a></li>
          <li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li>
          @endif

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">Hulondalo<span> Annual</span> <br> Cardiovascular Meeting</h1>
      <p class="mb-4 pb-0">02-03 November, Aston Hotel Gorontalo, Gorontalo</p>
      <a href="https://www.youtube.com/watch?v=6h48NynSgOw" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="#about" class="about-btn scrollto">About The Event</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The HACM</h2>
            <p>Holistic Approach Of Cardiovascular Care : From Pediatric To Adult. 2nd Hulondalo Cardiovascular Meeting 2024. Program at Galance: 3 Symposium, 3 Workshop, GP Case Sharing, Modereted Poster.</p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p>Venue Aston Hotel Gorontalo, Indonesia</p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>Saturday-Sunday<br>02-03 November 2024</p>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Event Speakers</h2>
          <p>Here are some of our speakers</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="speaker">
                  <img src="{{ URL::asset('home/img/speakers/9.jpg')}}" alt="dr. Pendrik Tendean, Sp.PD KKV" class="img-fluid">
                  <div class="details">
                    <h3><a href="speaker-details.html">dr. Pendrik Tendean, Sp.PD KKV</a></h3>
                   <br>
                   <br>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="speaker">
                  <img src="{{ URL::asset('home/img/speakers/8.jpg')}}" alt="dr. Julius Patimang, Sp.A., Sp.JP(K) FIHA" class="img-fluid">
                  <div class="details">
                    <h3><a href="speaker-details.html">dr. Julius Patimang, Sp.A., Sp.JP(K) FIHA</a></h3>
                   <br>
                   <br>
                  </div>
                </div>
              </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="{{ URL::asset('home/img/speakers/1.jpg')}}" alt="dr. Vickry H Wahidji, Sp.JP(K) FIHA" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">dr. Vickry H Wahidji, Sp.JP(K) FIHA</a></h3>
               <br>
               <br>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="{{ URL::asset('home/img/speakers/3.jpg')}}" alt="dr. Moh. Rijal Alaydrus, Sp.JP(K) FIHA" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">dr. Moh. Rijal Alaydrus, Sp.JP(K) FIHA</a></h3>
               <br>
               <br>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="{{ URL::asset('home/img/speakers/2.jpg')}}" alt="dr. Abubakar S. Zubeidi, M.Kes.,  Sp.JP(K) FIHA" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">dr. Abubakar S. Zubeidi, M.Kes.,  Sp.JP(K) FIHA</a></h3>
               <br>
               <br>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="{{ URL::asset('home/img/speakers/4.jpg')}}" alt="dr. Andi Alief Utama Armyn, M.Kes., Sp.JP(K) FIHA" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">dr. Andi Alief Utama Armyn, M.Kes., Sp.JP(K) FIHA</a></h3>
               <br>
               <br>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="{{ URL::asset('home/img/speakers/7.jpg')}}" alt="dr. Muchtar Nora Ismail Siregar, Sp.JP FIHA" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">dr. Muchtar Nora Ismail Siregar, Sp.JP FIHA</a></h3>
               <br>
               <br>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="{{ URL::asset('home/img/speakers/10.jpg')}}" alt="dr. Adymas Perdana, Sp.Jp FIHA" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">dr. Adymas Perdana, Sp.Jp FIHA</a></h3>
               <br>
               <br>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="{{ URL::asset('home/img/speakers/6.jpg')}}" alt="dr. Doddy Moniaga, Sp.JP FIHA" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">dr. Doddy Moniaga, Sp.JP FIHA</a></h3>
               <br>
               <br>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="{{ URL::asset('home/img/speakers/5.jpg')}}" alt="dr. Diera Gabriela Darda, Sp.JP FIHA" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">dr. Diera Gabriela Darda, Sp.JP FIHA</a></h3>
               <br>
               <br>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!--==========================
      Schedule Section
    ============================-->
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Event Schedule</h2>
          <p>Here is our event schedule</p>
        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Session 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Session 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mt-2" href="#day-3" role="tab" data-toggle="tab">Session 3</a>
          </li>
        </ul>

        <h3 class="sub-heading">2nd Hulondalo Cardiovascular Meeting 2024. Program at Galance: 3 Symposium, 3 Workshop, GP Case Sharing, Modereted Poster.</h3>

        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row schedule-item">
              <div class="col-md-2"><time>07:00 WITA</time></div>
              <div class="col-md-10">
                <h4>Registration</h4>
                <p>All participants must first register at the venue.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 WITA</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ URL::asset('home/img/speakers/8.jpg')}}" alt="dr. Julius Patimang, Sp.A., Sp.JP(K) FIHA">
                </div>
                <h4>Keynote <span>dr. Julius Patimang, Sp.A., Sp.JP(K) FIHA</span></h4>
                <p>Topic : Understanding Early Diagnosis of CHD: Clinical in Your Daily Practice</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:30 WITA</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ URL::asset('home/img/speakers/4.jpg')}}" alt="dr. Andi Alief Utama Armyn, M.Kes., Sp.JP(K) FIHA">
                </div>
                <h4>Keynote <span>dr. Andi Alief Utama Armyn, M.Kes., Sp.JP(K) FIHA</span></h4>
                <p>Topic : Contemporary Nonsurgical Intervention for Treating CHD in Indonesia</p>
              </div>
            </div>
          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:30 WITA</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ URL::asset('home/img/speakers/5.jpg')}}" alt="dr. Diera Gabriela Darda, Sp.JP FIHA">
                </div>
                <h4>Keynote <span>dr. Diera Gabriela Darda, Sp.JP FIHA</span></h4>
                <p>Topic : Dyslipidemia Management: Is Every Statin Same?</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 WITA</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ URL::asset('home/img/speakers/6.jpg')}}" alt="dr. Doddy Moniaga, Sp.JP FIHA">
                </div>
                <h4>Keynote <span>dr. Doddy Moniaga, Sp.JP FIHA</span></h4>
                <p>Topic : The Role and Practical Insights of SGLT-2 inhibitor in Heart Failure Patients: Why is it important?</p>
              </div>
            </div>
          </div>
          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

            <div class="row schedule-item">
              <div class="col-md-2"><time>13:30 WITA</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ URL::asset('home/img/speakers/9.jpg')}}" alt="dr. Pendrik Tendean, Sp.PD KKV">
                </div>
                <h4>Keynote <span>dr. Pendrik Tendean, Sp.PD KKV</span></h4>
                <p>Topic : The Practical Use of Single Pill Combination Therapy for Hypertension: The Right Pill for the Right Patient</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>14:00 WITA</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{ URL::asset('home/img/speakers/7.jpg')}}" alt="dr. Muchtar Nora Ismail Siregar, Sp.JP FIHA">
                </div>
                <h4>Keynote <span>dr. Muchtar Nora Ismail Siregar, Sp.JP FIHA</span></h4>
                <p>Topic : Managing Hypertensive Crisis: Best Practice Recommendation for General Physician</p>
              </div>
            </div>
          </div>
          <!-- End Schdule Day 2 -->

        </div>

      </div>

    </section>

    <!--==========================
      Venue Section
    ============================-->
    <section id="venue" class="wow fadeInUp">

      <div class="container-fluid">

        <div class="section-header">
          <h2>Event Venue</h2>
          <p>Event venue location info and gallery</p>
        </div>

        <div class="row no-gutters">
          <div class="col-lg-6 venue-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6383865389353!2d123.0478276101851!3d0.5441505636342012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32792b8e7ebd2bb1%3A0x89476fb7b6ecd23c!2sASTON%20Gorontalo%20Hotel%20%26%20Villas!5e0!3m2!1sid!2sid!4v1726063366672!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8">
                <h3>Aston Hotel Venue, Gorontalo</h3>
                <br>
                <h5 p-3 class="text-white">Manggis Street, Distric Libuo, City Dungingi, Gorontalo 96136</h5>

              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{ URL::asset('home/img/venue-gallery/1.jpg')}}" class="venobox" data-gall="venue-gallery">
                <img src="{{ URL::asset('home/img/venue-gallery/1.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{ URL::asset('home/img/venue-gallery/2.jpg')}}" class="venobox" data-gall="venue-gallery">
                <img src="{{ URL::asset('home/img/venue-gallery/2.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{ URL::asset('home/img/venue-gallery/3.jpg')}}" class="venobox" data-gall="venue-gallery">
                <img src="{{ URL::asset('home/img/venue-gallery/3.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="{{ URL::asset('home/img/venue-gallery/4.jpg')}}" class="venobox" data-gall="venue-gallery">
                <img src="{{ URL::asset('home/img/venue-gallery/4.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Announcement</h2>
          <p>Check our announcement from the recent events</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
        <a href="{{ URL::asset('home/img/gallery/1.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{ URL::asset('home/img/gallery/1.jpg')}}" alt=""></a>
      </div>

    </section>

    <!--==========================
      Sponsors Section
    ============================-->
    {{-- <section id="sponsors" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>

        <div class="row no-gutters sponsors-wrap clearfix">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{ URL::asset('home/img/sponsors/1.png')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{ URL::asset('home/img/sponsors/2.png')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{ URL::asset('home/img/sponsors/3.png')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{ URL::asset('home/img/sponsors/4.png')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{ URL::asset('home/img/sponsors/5.png')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{ URL::asset('home/img/sponsors/6.png')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{ URL::asset('home/img/sponsors/7.png')}}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="{{ URL::asset('home/img/sponsors/8.png')}}" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section> --}}

    <!--==========================
      F.A.Q Section
    ============================-->
    {{-- <section id="faq" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
              <ul id="faq-list">

                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq1" class="collapse" data-parent="#faq-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq2" class="collapse" data-parent="#faq-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq4" class="collapse" data-parent="#faq-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq5" class="collapse" data-parent="#faq-list">
                    <p>
                      Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq6" class="collapse" data-parent="#faq-list">
                    <p>
                      Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                    </p>
                  </div>
                </li>

              </ul>
          </div>
        </div>

      </div>

    </section> --}}

    <!--==========================
      Buy Ticket Section
    ============================-->
    <section id="buy-tickets" class="section-with-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h2>Buy Tickets</h2>
          <p>Exploring Recent Developments and Solutions to Global Health Problems.</p>
        </div>

        <div class="row">
            @foreach ($getClass as $item)
            <div class="col-lg-12 mb-5">
                <div class="card mb-5 mb-lg-0">
                  <h3 class="text-dark text-uppercase text-center mt-4"><b>Event {{$item->class_name}}</b></h3>
                  <div class="card-body">
                    @if ($item->class_name == 'Simposium')
                    <div class="row">
                        <div class="col-lg-6 mt-3">
                          <h5 class="card-title text-muted text-uppercase text-center">Specialist Doctor</h5>
                          <h6 class="card-price text-center">Rp. {{$item->formatted_price_doctor_specialist}}</h6>
                        </div>
                        <div class="col-lg-6 mt-3">
                          <h5 class="card-title text-muted text-uppercase text-center">Doctor</h5>
                          <h6 class="card-price text-center">Rp. {{$item->formatted_price_doctor}}</h6>
                        </div>
                        <div class="col-lg-6 mt-3">
                          <h5 class="card-title text-muted text-uppercase text-center">Nurse</h5>
                          <h6 class="card-price text-center">Rp. {{$item->formatted_price_nurses}}</h6>
                        </div>
                        <div class="col-lg-6 mt-3">
                          <h5 class="card-title text-muted text-uppercase text-center">Student</h5>
                          <h6 class="card-price text-center">Rp. {{$item->formatted_price_student}}</h6>
                        </div>
                      </div>
                      <hr>
                    <div class="col-sm-6 col-lg-12">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="card-title">Session 1 : Congenital Heart Disease from screening to life saving</h3>
                                <div class="row mt-5">
                                    <div class="col-lg-6">
                                        <p class="card-text text-dark"><b>Understanding Early Diagnosis of CHD: Clinical in Your Daily Practice</b></p>
                                        <p class="card-text"><small class="text-muted"><b>dr. Julius Patimang, Sp.A., Sp.JP(K) FIHA</b></small>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="card-text text-dark"><b>Contemporary Nonsurgical Intervention for Treating CHD in Indonesia</b></p>
                                        <p class="card-text"><small class="text-muted"><b>dr. Andi Alief Utama Armyn, M.Kes., Sp.JP(K) FIHA</b></small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-12">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Session 2 : Unsolving the Puzzle of Cardiometabolic Syndrome</h5>
                                <div class="row mt-5">
                                    <div class="col-lg-6">
                                        <p class="card-text text-dark"><b>Dyslipidemia Management: Is Every Statin Same?</b></p>
                                        <p class="card-text"><small class="text-muted"><b>dr. Diera Gabriela Darda, Sp.JP FIHA</b></small>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="card-text text-dark"><b>The Role and Practical Insights of SGLT-2 inhibitor in Heart Failure Patients: Why is it important?</b></p>
                                        <p class="card-text"><small class="text-muted"><b>dr. Doddy Moniaga, Sp.JP FIHA</b></small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-12">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Session 3 : Treating Hypertension Effectively: Guidelines Advice</h5>
                                <div class="row mt-5">
                                    <div class="col-lg-6">
                                        <p class="card-text text-dark"><b>The Practical Use of Single Pill Combination Therapy for Hypertension: The Right Pill for the Right Patient.</b></p>
                                        <p class="card-text"><small class="text-muted"><b>dr. Pendrik Tendean, Sp.PD KKV</b></small>
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="card-text text-dark"><b>Managing Hypertensive Crisis: Best Practice Recommendation for General Physician</b></p>
                                        <p class="card-text"><small class="text-muted"><b>dr. Muchtar Nora Ismail Siregar, Sp.JP FIHA</b></small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif($item->class_name == 'Saronde')
                    <div class="row">
                        <div class="col-lg-4 mt-3">
                          <h5 class="card-title text-muted text-uppercase text-center">Specialist Doctor</h5>
                          <h6 class="card-price text-center">Rp. {{$item->formatted_price_doctor_specialist}}</h6>
                        </div>
                        <div class="col-lg-4 mt-3">
                          <h5 class="card-title text-muted text-uppercase text-center">Doctor</h5>
                          <h6 class="card-price text-center">Rp. {{$item->formatted_price_doctor}}</h6>
                        </div>
                        <div class="col-lg-4 mt-3">
                          <h5 class="card-title text-muted text-uppercase text-center">Nurse</h5>
                          <h6 class="card-price text-center">Rp. {{$item->formatted_price_nurses}}</h6>
                        </div>
                      </div>
                      <hr>
                    <div class="col-sm-6 col-lg-12">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="card-title">Saronde Event Including 1 Workshop Plus Symposium Event</h3>
                                <div class="row mt-3">
                                    <div class="col-lg-4 mt-3">
                                        <p class="card-text text-dark"><b>Acute Coronary Syndrome in Clinical Practice</b></p>
                                    </div>
                                    <div class="col-lg-4 mt-3">
                                        <p class="card-text text-dark"><b>Heart Failure: From Admission to Discharge</b></p>
                                    </div>
                                    <div class="col-lg-4 mt-3">
                                      <p class="card-text text-dark"><b>Management of Code Blue</b></p>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <hr>
                    <div class="text-center">
                        @if (is_null($getUser))
                            <a class="btn btn-md mb-3 login" id="login{{$item->id}}">Buy Ticket</a>
                        @elseif($getUser->roles != 'Student' || $item->class_name != 'Saronde')
                        <a class="btn btn-md mb-3 buy-ticket"
                            id="validation{{$item->id}}"
                            data-class-name="{{$item->class_name}}"
                            data-price-specialist="{{$item->formatted_price_doctor_specialist}}"
                            data-price-doctor="{{$item->formatted_price_doctor}}"
                            data-price-nurse="{{$item->formatted_price_nurses}}"
                            data-price-student="{{$item->formatted_price_student}}">
                            Buy Ticket
                        </a>
                        @else
                        <a class="btn btn-md mb-3" id="student">
                         Buy Ticket
                        </a>
                        @endif
                        @if ($item->class_name == 'Saronde')
                            <a class="btn btn-md mb-3" style="background-color: #e62020" href="https://drive.google.com/uc?export=download&id=1LB_p0Q63HyIBjPmZjBHrgeaG9Bs3cqSX">
                                Download Schedule
                            </a>
                        @else
                            <a class="btn btn-md mb-3" style="background-color: #e62020" href="https://drive.google.com/uc?export=download&id=1p_zYv3mMIGHZAV8Vu91IeGnsQGWsDoOG">
                                Download Main
                            </a>
                        @endif

                    </div>
                  </div>
                </div>
              </div>
            @endforeach
        </div>

      </div>
      <div class="container">
        <div class="countdown text-primary" id="countdown">
            Ticket Prices Have Already Increased
        </div>
        <div class="message">
            Ticket prices will increase on November 03, 2024.</span>
        </div>
    </div>
    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Contact us for more details</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Manggis Street, Libuo, Dungingi, Gorontalo 96136</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="https://wa.me/08124187433">+62 812 418 7433</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:hgorontalo.acs@gmail.com">gorontalo.acs@gmail.com</a></p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- #contact -->

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="{{ URL::asset('home/img/logo.png')}}" alt="Hulondalo Annual
            Cardiovascular Meeting">
            <div class="social-links mt-3">
              <a href="https://www.instagram.com/hacmofficial?igsh=YmQ0cWx6eDd0aTQ0" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-6 footer-links">
            <h4>About Event</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#speakers">Speakers</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#schedule">Schedule</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#annaoucement">Announcement</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#buy-tickets">Buy Tickets</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
            Manggis Street, Libuo<br>
            Dungingi, Gorontalo 96136<br>
              Indonesia <br>
              <strong>Phone:</strong> +62 812 418 7433
              <br>
              <strong>Email:</strong> gorontalo.acs@gmail.com<br>
            </p>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>HACM Gorontalo</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ URL::asset('home/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ URL::asset('home/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ URL::asset('home/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ URL::asset('home/lib/easing/easing.min.js')}}"></script>
  <script src="{{ URL::asset('home/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{ URL::asset('home/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{ URL::asset('home/lib/wow/wow.min.js')}}"></script>
  <script src="{{ URL::asset('home/lib/venobox/venobox.min.js')}}"></script>
  <script src="{{ URL::asset('home/lib/owlcarousel/owl.carousel.min.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ URL::asset('home/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ URL::asset('home/js/main.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    // Event listener untuk tombol 'myButton'
    document.getElementById('myButton').addEventListener('click', function() {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "You must login to purchase tickets",
        footer: '<a href="/register">I do not have an account yet. register now</a>',
        showCancelButton: true,
        confirmButtonText: 'login Now',
        cancelButtonText: 'Cancel'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = '/login';
        }
      });
    });

    document.addEventListener('click', function(e) {
    if (e.target && e.target.classList.contains('login')) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "You must login to purchase tickets",
                footer: '<a href="/register">I do not have an account yet. register now</a>',
                showCancelButton: true,
                confirmButtonText: 'Login now',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/login';
                }
            });
        }
    });
</script>

<script>
    document.addEventListener('click', async function(e) {
        if (e.target && e.target.classList.contains('buy-ticket')) {
            const itemId = e.target.id.replace('validation', '');
            const className = e.target.dataset.className;
            const priceSpecialist = e.target.dataset.priceSpecialist;
            const priceDoctor = e.target.dataset.priceDoctor;
            const priceNurse = e.target.dataset.priceNurse;
            const priceStudent = e.target.dataset.priceStudent;

            // Dapatkan role pengguna (ini harus sesuai dengan cara Anda menyimpan role pengguna)
            const userRole = '{{ auth()->user()->roles ?? '' }}';
            console.log(userRole);
            // Tentukan harga berdasarkan role pengguna
            let price;
            switch(userRole) {
                case 'Specialist Doctor':
                    price = priceSpecialist;
                    break;
                case 'Doctor':
                    price = priceDoctor;
                    break;
                case 'Nurse':
                    price = priceNurse;
                    break;
                case 'Student':
                    price = priceStudent;
                    break;
                default:
                    price = 'Price Not Found';
            }

            console.log(price);

            // Modal 1: Konfirmasi untuk event
            const confirmResult = await Swal.fire({
                title: `Are you sure?`,
                text: `Are you sure for take this ${className} event with price Rp. ${price}?`,
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: 'Yes, i sure',
                cancelButtonText: 'Cancel',
            });

            // Jika pengguna mengonfirmasi (klik "Ya, Saya Yakin")
            if (confirmResult.isConfirmed) {
                // Modal 2: Informasi pembayaran dengan logo Bank BRI
                const paymentInfoResult = await Swal.fire({
                    title: "Payment Information",
                    html: `<p>Please make a payment of Rp. ${price} to the following account :</p>
                    <img src="https://buatlogoonline.com/wp-content/uploads/2022/10/Logo-Bank-BRI.png" alt="Bank BRI Logo" style="width: 100px; margin-bottom: 10px;"> <br>
                        <strong>PERKI Cabang Gorontalo</strong><br>
                        <p>BRI 002701002879560</p>`,
                    icon: "info",
                    confirmButtonText: 'OK'
                });

               // Setelah modal pembayaran, munculkan modal input file
                const { value: file } = await Swal.fire({
                    title: "Upload proof of payments",
                    html: `
                        <div>
                           <p>Please upload a photo of your payment proof with the following requirements:</p>
                            <ul>
                                <li>File format: JPG, PNG, or JPEG</li>
                                <li>Maximum file size: 2MB</li>
                                <li>The photo must be clear and readable</li>
                                <li>The account number and payment amount must be visible</li>
                            </ul>
                        </div>
                    `,
                    input: "file",
                    inputAttributes: {
                        "accept": "image/*",
                        "aria-label": "Upload your payment proof"
                    }
                });

                // Jika ada file yang diunggah
                if (file) {
                    const formData = new FormData();
                    formData.append('file', file);

                    // Kirim file
                    fetch(`/home-submit-payment/${itemId}`, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Pastikan CSRF token ada
                        }
                    })
                    .then(response => response.json())  // Pastikan responsnya JSON
                    .then(data => {
                        if (data.status === 'success') {
                            Swal.fire({
                                title: 'Success!',
                                text: data.message,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                window.location.href = data.redirect_url; // Redirect ke halaman order
                            });
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: data.message,
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        Swal.fire({
                            title: 'Error!',
                            text: 'An unexpected error occurred.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    });
                }
            }
        }
    });
</script>

<script>
    document.getElementById('student').addEventListener('click', function() {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Students are not assigned an order in the Saronde Event.",
            footer: '<a href="#">Call Admin For More Informastion</a>'
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if (isset($getUser) && $getUser->active == 0)
        Swal.fire({
            title: 'Your Account is Unactivated by Superadmin',
            text: 'Sorry, you cannot access this app because your permission is denied.',
            icon: 'warning',
            confirmButtonColor: '#3b5de7',
            showCloseButton: false,
            allowOutsideClick: false,
            allowEscapeKey: false,
        }).then(() => {
            window.location.href = '/';
        });

        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };
        @endif
    });
</script>




</body>

</html>
