<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NONMACHINERY</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!--icons -->
  <link href="{{asset('main/assets/img/Nonicon.png')}}" rel="icon">
  <link href="{{asset('main/assets/img/Non.png')}}" rel="apple-touch-icon">

            <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">


  <!-- Vendor CSS -->
  <link href="{{asset('main/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('main/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('main/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('main/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('main/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('main/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS-->
  <link href="{{asset('main/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>NON</span>MACHINERY</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          
          
          
         
         
                 <!--เพิ่มเติม-->
         
          <!-- <li><a href="blog.php">Blog</a></li>-->



                <!--เมนูหยดน้ำ-->
         <!--  <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul> 
          </li>-->


          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
          @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">{{Auth::user()->name}}</a>

                    @else
                        <a href="{{ route('login') }}">Login</a>

                    @endauth
                </div>
            @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>

  <!-- ======= hero Section ======= -->
 <section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active" style="background-image: url({{'main/assets/img/hero-carousel/01.jpg'}})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">NONMACHINERY </h2>
              <p class="animate__animated animate__fadeInUp">Selling/renting a forklift <br> จำหน่าย/เช่ารถโฟล์คลิฟท์</p>
              <a href="#contact" class="btn-get-started scrollto animate__animated animate__fadeInUp">Contact Us</a>
            </div>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url({{'main/assets/img/hero-carousel/02.jpg'}})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">NONMACHINERY</h2>
              <p class="animate__animated animate__fadeInUp">Get a forklift check/maintenance <br> รับตรวจเช็ค/บำรุงรักษารถโฟล์คลิฟท์</p>
              <a href="#contact" class="btn-get-started scrollto animate__animated animate__fadeInUp">Contact Us</a>
            </div>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url({{'main/assets/img/hero-carousel/03.jpg'}})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">NONMACHINERY</h2>
              <p class="animate__animated animate__fadeInUp">with team of technicians with more than <br> "10" years of working experience <br>โดยทีมงานที่มีประสบการณ์การทำงานมากกว่า "10ปี"</p>
              <a href="#contact" class="btn-get-started scrollto animate__animated animate__fadeInUp">Contact Us</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </div>
</section><!-- End Hero Section -->

<main id="main">

  <!-- ======= About Section ======= -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>About Business<br>เกี่ยวกับบริษัท</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                <img src="{{'main/assets/img/about/01.jpg'}}" alt="">
              </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">รายละเอียดเบื้องต้น</h4>
              </a>
                  <p>
                  หจก. นนท์แมชชีนเนอร์รี่ เราบริการซ่อมแซมบำรุงรักษา ตรวจเช็คสภาพรถ ทั้งในและนอกสถานที่ อีกทั้งเรายังขายและมีบริการให้ 
                  รถโฟล์คลิฟท์ และซ่อมแซม ในแบบ รายครั้ง/รายเดือน/รายปี เปลี่ยนถ่ายน้ำมันเครื่องทุกการทำงาน 250 ชั่วโมง การทำงานเพื่อยืดอายุ 
                  การใช้งานของรถโฟล์คลิฟท์ และรับ bulid รถโฟล์คลิฟท์คันเก่าให้เป็นสภาพใช้งานได้ รับ Overhaul เครื่องยนต์รถโฟล์คลิฟท์ทั้งแบบเกียร์
                  กระปุกและเกียร์ออโต้ เกียร์รั่ว  ทุกปัญหาครบ <br>”จบที่เรา” จึงมีเราในวันนี้ รับรองโดยทีมงานที่มีประสบการณ์การทำงานมากกว่า 10 ปี
                  </p>
              
              
              
                 <ul>
                <li>
                  <i class="bi bi-check"></i> บำรุงรักษารถโฟล์คลิฟท์
                </li>
                <li>
                  <i class="bi bi-check"></i> ตรวจเช็คสภาพรถ (ทั้งในและนอกสถานที่)
                </li>
                <li>
                  <i class="bi bi-check"></i> เปลี่ยนถ่ายน้ำมันเครื่องทุกการทำงาน 250 ชั่วโมง
                </li>

               <!-- <li>
                  <i class="bi bi-check"></i> รับซ่อมทั้งเกียร์กระปุกและเกียร์ออโต้
                </li>-->


               <!-- <li>
                  <i class="bi bi-check"></i> จำหน่ายรถโฟล์คลิฟท์
                </li>-->

                  </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div><!-- End About Section -->

  <!-- ======= Services Section ======= -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Our Services</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <!-- Start Left services -->
        @foreach ($service as $servicee)
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="about-move">
            <div class="services-details">
              <div class="single-services">
                <a class="services-icon" href="#">
                  <i class="bi bi-wrench"></i>
                </a>
                <h4>{{$servicee->servicename}}</h4>
                <p>
                {{$servicee->detail}}
                </p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
        
      </div>
    </div>
  </div><!-- End Services Section -->

  <!-- ======= Team Section ======= -->
  <div id="team" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Our special Team<br>ทีมงาน</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="{{'main/assets/img/team/00.png'}}" alt="">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h4>กาญจนา ศรีเหรา</h4>
              <p>ผู้จัดการ</p>
            </div>
          </div>
        </div>
        <!-- End column -->

        

        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="{{'main/assets/img/team/01.png'}}" alt="">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h4>ประเสริฐ กิตติโรจน์เจริญ</h4>
              <p>เจ้าของบริษัทNONMACHINERY</p>
            </div>
          </div>
        </div>
        <!-- End column -->


        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="{{'main/assets/img/team/1.png'}}" alt="">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h4>ราชวัฒน์ เสาร์ทอง</h4>
              <p>หัวหน้าช่างเครื่องยนต์</p>
            </div>
          </div>
        </div>
        <!-- End column -->

        
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="{{'main/assets/img/team/2.png'}}" alt="">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="bi bi-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h4>Benjamin Powel</h4>
              <p>หัวหน้าช่างกลึง</p>
            </div>
          </div>
        </div>
        <!-- End column -->

        
      </div>
    </div>
  </div><!-- End Team Section -->

  <!-- ======= Rviews Section ======= -->
  <div class="reviews-area">
    <div class="row g-0">
      <div class="col-lg-6">
        <img src="{{'main/assets/img/about/02.jpg'}}" alt="" class="img-fluid">
      </div>
      <div class="col-lg-6 work-right-text d-flex align-items-center">
        <div class="px-5 py-5 py-lg-0">
          <h2>working with us</h2>
          
          <a href="#contact" class="ready-btn scrollto">Contact us</a>
        </div>
      </div>
    </div>
  </div><!-- End Rviews Section -->

  <!-- ======= Portfolio Section ======= -->
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Our Portfolio</h2>
          </div>
        </div>
      </div>
      

      <div class="row awesome-project-content portfolio-container">

        <!-- portfolio-item start -->
        <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
          <div class="single-awesome-project">
            <div class="awesome-img">
              <a href="#"><img src="{{'main/assets/img/portfolio/1.png'}}" alt="" /></a>
              <div class="add-actions text-center">
                <div class="project-dec">  
                    <h4>TCM</h4>
                    <span>เปลี่ยนปะเก็นฝาสูบ</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- portfolio-item end -->

        <!-- portfolio-item start -->
        <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
          <div class="single-awesome-project">
            <div class="awesome-img">
              <a href="#"><img src="{{'main/assets/img/portfolio/2.png'}}" alt="" /></a>
              <div class="add-actions text-center">
                <div class="project-dec">
                    <h4>Toyota</h4>
                    <span>ซ่อมเกียร์</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- portfolio-item end -->

        <!-- portfolio-item start -->
        <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-card">
          <div class="single-awesome-project">
            <div class="awesome-img">
              <a href="#"><img src="{{'main/assets/img/portfolio/3.png'}}" alt="" /></a>
              <div class="add-actions text-center">
                <div class="project-dec">
                    <h4>Nissan</h4>
                    <span>bulid สภาพการใช้งาน</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- portfolio-item end -->

        

        

       


        </div>
      </div>
    </div><!-- End Portfolio Section -->

    

    

    <!-- ======= Blog Section ======= -->
    <div id="blog" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Latest News</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="{{'main/assets/img/blog/1.png'}}" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">13 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>8-15-2021 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">TOYOTA 8FD25T ALB-02</a>
                  </h4>
                  <p>
                    เปลี่ยนอะไหล่เสื่อมสภาพ ที่บริษัท xx ในเขตกรุงเทพ-ปริมลฑล
                  </p>
                </div>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="{{'main/assets/img/blog/2.png'}}" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">130 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>8-10-2021 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Overhaul เครื่องยนต์</a>
                  </h4>
                  <p>
                   ทำการปรับปรุงแก้ไขและ overhaul เครื่องยนต์
                  </p>
                </div>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Right Blog-->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="{{'main/assets/img/blog/3.png'}}" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">10 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>8-10-2021 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">TCM FD45 Ton  CA-D-11</a>
                  </h4>
                  <p>
                    เปลี่ยนอะไหล่เสื่อมสภาพที่บริษัท xx ในจังหวัดอยุธยา
                  </p>
                </div>
              </div>
            </div>
            <!-- End Right Blog-->
          </div>
        </div>
      </div>
    </div><!-- End Blog Section -->

    <!-- ======= Suscribe Section ======= -->
    <div class="suscribe-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
            <div class="suscribe-text text-center">
              <h3>Welcome to our NONMACHINERY company</h3>
              <a class="sus-btn" href="#contact">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Suscribe Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-phone"></i>
                  <p>
                    Call: 063-849-6842<br>
                    <span>Monday-Saturday (8am-5pm)</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-envelope"></i>
                  <p>
                    Email: Nont_Machinery@gmail.com<br>
                   
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-geo-alt"></i>
                  <p>
                    ซอยกรุงเทพ-นนท์12 ถนนกรุงเทพ-นนท์<br>
                    ถนนกรุงเทพ-นนท์ ตำบลบางเขน อำเภอเมือง<br>
                    <span>47/485 หมู่7 นนทบุรี 11000</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- Start Google Map -->
            <div class="col-md-6">
              <!-- Start Map -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d292.1220597811949!2d100.52206804524944!3d13.841313462948364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b659a39f5af%3A0x4b141bdb6d94abe8!2z4Lir4LiI4LiBLiDguJnguJnguJfguYwg4LmB4Lih4LiK4LiK4Li14LiZ4LmA4LiZ4Lit4Lij4LmM4Lij4Li14LmI!5e0!3m2!1sth!2sth!4v1629151246237!5m2!1sth!2sth" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
              <!-- End Map -->
            </div>
            <!-- End Google Map -->

            <!-- Start  contact -->
            <div class="col-md-6">
              <div class="form contact-form">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>
            </div>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>NON</span>MACHINERY</h2>
                </div>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-instagram"></i></a>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  หจก. นนแมชชีนเนอร์รี่ เราบริการซ่อมแซมบำรุงรักษา ตรวจเช็คสภาพรถ ทั้งในและนอกสถานที่
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> Call: 063-849-6842 </p> 
                  <p><span>Email:</span> Nont_Machinery@gmail.com</p>
                  <p><span>Working Hours:</span> 8am- 5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <!-- <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="assets/img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('main/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('main/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('main/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('main/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('main/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('main/assets/js/main.js')}}"></script>

</body>

</html>