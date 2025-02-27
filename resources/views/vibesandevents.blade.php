
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bites n Vibes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bites n Vibes - v3.1.0
  * Template URL: https://bootstrapmade.com/Bites n Vibes-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
 
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      
     
       <a href="index.html" class="logo me-auto me-lg-0"><img src="../images/bites n vibes logo.png" alt=""  class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>  
          <li><a class="nav-link scrollto" href="/dashboard">Dashboard</a></li>
          <li><a class="nav-link scrollto" href="/restaurants">Explore</a></li>
          <li><a class="nav-link scrollto" href="/toppicks">Deals & Offers</a></li>
          <li><a class="nav-link scrollto" href="/vibesandevents">Vibes & Events</a></li>
        
         
       
         
         
          @auth
          <li><a class="nav-link scrollto" href="user/profile">{{ Auth::user()->name }}</a></li>
            
          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      

    </div>
  </header>
  <!-- End Header -->
  <style>
    .fixed-size {
height: 200px; /* Set a fixed height for the images/videos */
object-fit: cover; /* Ensures the image/video covers the area without distortion */
}

.hover-video {
display: none; /* Hide video by default */
}

.card:hover .static-image {
display: none; /* Hide static image on hover */
}

.card:hover .hover-video {
display: block; /* Show video on hover */
}

.fixed-size {
width: 500px;  /* Set your desired width */
height: 200px; /* Set your desired height */
object-fit: cover; /* Ensures the image covers the area without distortion */
border-radius: 8px 8px 0 0; /* Optional: for rounded corners */

}


    .box {
        background: #fff;  /* Background color */
        border-radius:0px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;  /* Center align contents */
    }
  
    .box img {
        width: 100%;  /* Responsive image */
        height: auto;  /* Maintain aspect ratio */
        border-radius:0 0 8px 8px;  /* Rounded corners on the top */
    }
  
    .box span {
        display: block;
        font-size: 2em;
        margin-bottom: 10px;
        color: #5cb85c;  /* Color for the span */
    }
  
    .box h4 {
        font-size: 1.5em;
        margin: 10px 0;
    }
  
    .box p {
        color: #666;  /* Lighter text color for description */
    }
  </style>

 

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <video autoplay muted loop class="video-background">
        <source src="/assets/videos/event.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-8">
                <h1>Welcome to <span>Bites n Vibes</span></h1>
                <div class="btns">
                    <a href="/login" class="btn-menu animated fadeInUp scrollto">Login</a>
                    <a href="/register" class="btn-book animated fadeInUp scrollto">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero -->
<style>
  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4); /* Adjust the color and opacity */
    z-index: 0; /* Place overlay above the video */
}
#hero {
  position: relative;
  overflow: hidden;
}

.video-background {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: -1; /* Send the video behind the content */
  transform: translate(-50%, -50%);
}

.container {
  position: relative; /* Ensures content is on top of the video */
  z-index: 1; /* Keeps the text above the video */
}
</style>

    <main id="main">
  
      <!-- ======= About Section ======= -->
  
      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Upcomming Events</h2>
         
          </div>
  
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 d-flex">
              <div class="card flex-fill">
                <img src="../assets/img/gallery.jpg" alt="Top Restaurants" class="card-img-top img-fluid fixed-size static-image" />
                <video class="card-img-top img-fluid fixed-size hover-video" muted loop>
                  <source src="../assets/videos/vid (5).mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
                <div class="card-body box">
                  <h4 class="card-title">Event Photos & Highlights</h4>
                  <p class="card-text">Event Photos & Highlights</p>
                </div>
              </div>
            </div>
          
            <div class="col-lg-3 col-md-6 mb-4 d-flex">
              <div class="card flex-fill">
                <img src="../assets/img/liveshow.jpg" alt="Top Fast Food Spots" class="card-img-top img-fluid fixed-size static-image" />
                <video class="card-img-top img-fluid fixed-size hover-video" muted loop>
                  <source src="../assets/videos/liveshow.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
                <div class="card-body box">
                  <h4 class="card-title">Live Music</h4>
                  <p class="card-text">Live Shows</p>
                </div>
              </div>
            </div>
          
            <div class="col-lg-3 col-md-6 mb-4 d-flex">
              <div class="card flex-fill">
                <img src="../assets/img/night.jpg" alt="Top Bars & Lounges" class="card-img-top img-fluid fixed-size static-image" />
                <video class="card-img-top img-fluid fixed-size hover-video" muted loop>
                  <source src="../assets/videos/night.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
                <div class="card-body box">
                  <h4 class="card-title">Nightlife Events</h4>
                  <p class="card-text">Night Events of any kind</p>
                </div>
              </div>
            </div>
          
            <div class="col-lg-3 col-md-6 mb-4 d-flex">
              <div class="card flex-fill">
                <img src="../assets/img/culture.jpg" alt="Another Category" class="card-img-top img-fluid fixed-size static-image" />
                <video class="card-img-top img-fluid fixed-size hover-video" muted loop>
                  <source src="../assets/videos/culture.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
                <div class="card-body box">
                  <h4 class="card-title">Cultural Festival</h4>
                  <p class="card-text">Cultural Events</p>
                </div>
              </div>
            </div>
          </div>
  
            
          
          <style>
            .fixed-size {
    height: 200px; /* Set a fixed height for the images/videos */
    object-fit: cover; /* Ensures the image/video covers the area without distortion */
  }
  
  .hover-video {
    display: none; /* Hide video by default */
  }
  
  .card:hover .static-image {
    display: none; /* Hide static image on hover */
  }
  
  .card:hover .hover-video {
    display: block; /* Show video on hover */
  }
  
  .fixed-size {
      width: 500px;  /* Set your desired width */
      height: 200px; /* Set your desired height */
      object-fit: cover; /* Ensures the image covers the area without distortion */
      border-radius: 8px 8px 0 0; /* Optional: for rounded corners */
  
  }
  
  
            .box {
                background: #fff;  /* Background color */
                border-radius:0px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
                text-align: center;  /* Center align contents */
            }
          
            .box img {
                width: 100%;  /* Responsive image */
                height: auto;  /* Maintain aspect ratio */
                border-radius:0 0 8px 8px;  /* Rounded corners on the top */
            }
          
            .box span {
                display: block;
                font-size: 2em;
                margin-bottom: 10px;
                color: #5cb85c;  /* Color for the span */
            }
          
            .box h4 {
                font-size: 1.5em;
                margin: 10px 0;
            }
          
            .box p {
                color: #666;  /* Lighter text color for description */
            }
          </style>
  
         
            
  
          </div>
  
        </div>
      </section>
  
                   <section id="menu" class="menu section-bg">
                    <div class="container" data-aos="fade-up">
              
                      <div class="section-title">
                        <h2>Top tier Resorts</h2>
                        <p>Check Top Resorts</p>
                      </div>
              
                      
                      <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                          <ul id="menu-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-starters">Cultural Events</li>
                            <li data-filter=".filter-salads">Night Events</li>
                            <li data-filter=".filter-specialty">Live Shows</li>
                            
                         
                          </ul>
                        </div>
                      </div>
              
                      <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($culture as $culture)
                        <div class="col-lg-3 menu-item filter-starters">
                         
                          <div class="card flex-fill">
                            <img src="/storage/{{ $culture->profile_photo }}" alt="Top Bars & Lounges" class="card-img-top img-fluid fixed-size" />
                          
                            <div class="card-body">
                              <h4 class="card-title" style="color: maroon">{{ $culture->event_name }}</h4>
                              <p class="card-text" style="color: black">Average Price: <b>{{ $culture->category }}</b></p>
                              <p class="card-text" style="color: black">Date: <b>{{ $culture->event_date }}</b></p>
                            </div>
                          </div>
                          
                        </div>
                        @endforeach
              
                        @foreach ($night as $night)
                        <div class="col-lg-3 menu-item filter-specialty">
                          <div class="card flex-fill">
                            <img src="/storage/{{ $night->profile_photo }}" alt="Top Bars & Lounges" class="card-img-top img-fluid fixed-size" />
                          
                            <div class="card-body">
                              <h4 class="card-title" style="color: maroon">{{ $night->event_name }}</h4>
                              <p class="card-text" style="color: black">Average Price: <b>{{ $night->category }}</b></p>
                              <p class="card-text" style="color: black">Date: <b>{{ $night->event_date }}</b></p>
                            </div>
                          </div>
                        </div>
                        @endforeach
              
              
                        @foreach ($live as $live)
                        <div class="col-lg-3 menu-item filter-salads">
                          <div class="card flex-fill">
                            <img src="/storage/{{ $live->profile_photo }}" alt="Top Bars & Lounges" class="card-img-top img-fluid fixed-size" />
                          
                            <div class="card-body">
                              <h4 class="card-title" style="color: maroon">{{ $live->event_name }}</h4>
                             <p class="card-text" style="color: black">Average Price: <b>{{ $live->category }}</b></p>
                             <p class="card-text" style="color: black">Date: <b>{{ $live->event_date }}</b></p>
                            </div>
                          </div>
                        </div>
                        @endforeach
              
                        
              
              
                      </div>
              
                    </div>
                  </section><!-- End Menu Section -->
              
      
    </main><!-- End #main -->
    <script>
      document.querySelectorAll('.card').forEach(card => {
        const video = card.querySelector('.hover-video');
        
        card.addEventListener('mouseover', () => {
          video.play();
        });
        
        card.addEventListener('mouseout', () => {
          video.pause();
          video.currentTime = 0; // Reset video to the start
        });
      });
    </script>
  
  
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          
         
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to recieve notifications about new listings as soon as they are listed</p>

            <form action="{{ route('subscribe') }}" method="post">
              @csrf <!-- Include CSRF token for security -->
              <input type="email" name="email" required placeholder="Enter your email">
              <input type="submit" value="Subscribe">
          </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Bites n Vibes</span></strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>