<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TOP 1% RESTAURANTS</title>
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

  <link rel="stylesheet" href="/css1/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="/css1/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="/css1/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="/css1/flaticon.css" type="text/css">
  <link rel="stylesheet" href="/css1/nice-select.css" type="text/css">
  <link rel="stylesheet" href="/css1/barfiller.css" type="text/css">
  <link rel="stylesheet" href="/css1/magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="/css1/jquery-ui.min.css" type="text/css">
  <link rel="stylesheet" href="/css1/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="/css1/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="/css1/style.css" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet"> <!-- Example font -->
  <link rel="stylesheet" href="path/to/bootstrap.css"> <!-- Bootstrap CSS -->

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
<style>
  button.delete-btn {
    background-color: #d9534f; /* Danger color */
    color: white; /* Text color */
    border: none; /* Remove default border */
    border-radius: 4px; /* Rounded corners */
    padding: 8px 15px; /* Padding for the button */
    cursor: pointer; /* Pointer cursor on hover */
    font-size: 1em; /* Font size */
    transition: background-color 0.3s; /* Transition for hover effect */
}

button.delete-btn:hover {
    background-color: #c9302c; /* Darker shade on hover */
}
  </style>
  <!-- =======================================================
  * Template Name: EateryExplorer - v3.1.0
  * Template URL: https://bootstrapmade.com/EateryExplorer-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
 
  <!-- ======= Header ======= -->
  <header class="header" style="position: fixed; top: 0; left: 0; right: 0; z-index: 1000; background-color: rgb(10, 10, 124); box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
    <div class="container-fluid" style="padding-top: 0px; background-image: cover; background-position: center;" > <!-- Adjust padding for content visibility -->
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="./index.html"><img src="https://noticeboard.co.zw/wp-content/uploads/2023/08/noticeboard.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu" >
                       
                    </nav>
                    <div class="header__menu__right">
                        
                        <a href="/restaurants/create" class="primary-btn"><i class="fa fa-plus"></i>Add Listing</a>
                        
                       
                        <a href="/login" class="login-btn"><i class="fa fa-user"><b style="font-size: 10px"></i></a>
                        <a href="/register" class="login-btn"><i class="fa fa-user-plus"><b style="font-size: 10px"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background-image: url(/storage/{{ $restaurant->profile_photo }}); background-size: cover; background-position: center;">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>{{ $restaurant->name }}</span></h1>
        

          <div class="btns">
            @guest
            <a href="/login" class="btn-menu animated fadeInUp scrollto">Login</a>
            <a href="/register" class="btn-book animated fadeInUp scrollto">Sign Up</a>
            @endguest
           
          </div>
        </div>
        

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">    

     <!-- ======= Menu Section ======= -->
     <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menus</h2>
          <p>Check Our Top Menu Selection</p>
          <div>
         
        </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".dessert">dessert</li>
              <li data-filter=".supper">supper</li>
              <li data-filter=".dinner">dinner</li>
              <li data-filter=".appetiser">appetiser</li>
              <li data-filter=".breakfast">breakfast</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($menus as $menu)
            <div class="col-lg-6 dessert">
              <a href="{{ asset('storage/photos/' . $menu->photo) }}"> <img src="{{ asset('storage/photos/' . $menu->photo) }}"  alt="" class="menu-img" style="width: 60px; height: 60px; object-fit: cover; border-radius: 100%; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);"></a>
              <div class="menu-content">
                <a href="#">{{ $menu->name }}</a><span>${{ $menu->price }}</span>
              </div>
              <div class="menu-ingredients">
                {{ $menu->description }}
              </div>
            </div>
            @endforeach
          
        @foreach ($supper as $supper)
        <div class="col-lg-6 menu-item supper">
          <a href="{{ asset('storage/photos/' . $supper->photo) }}"> <img src="{{ asset('storage/photos/' . $supper->photo) }}" class="menu-img" alt="" style="width: 60px; height: 60px; object-fit: cover; border-radius: 100%; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);"></a>
          <div class="menu-content">
            {{ $supper->name }}<span>{{ $price }}</span>
          </div>
          <div class="menu-ingredients">
            {{ $supper->description }}
          </div>
        </div>
        @endforeach
          
          @foreach ($dinner as $dinner)
          <div class="col-lg-6 menu-item dinner">
            <a href="{{ asset('storage/photos/' . $dinner->photo) }}"><img src="{{ asset('storage/photos/' . $dinner->photo) }}" class="menu-img" alt="" style="width: 60px; height: 60px; object-fit: cover; border-radius: 100%; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);"></a>
            <div class="menu-content">
              <a href="#">{{ $dinner->name }}</a><span>{{ $dinner->price }}</span>
            </div>
            <div class="menu-ingredients">
             {{ $dinner->description }}
            </div>
          </div>
          @endforeach
         
          @foreach ($appertizer as $appertizer)
          <div class="col-lg-6 menu-item appetiser">
            <a href="{{ asset('storage/photos/' . $appertizer->photo) }}"> <img src="{{ asset('storage/photos/' . $appertizer->photo) }}" class="menu-img" alt="" style="width: 60px; height: 60px; object-fit: cover; border-radius: 100%; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);"></a>
            <div class="menu-content">
              <a href="#">{{ $appertizer->name }}</a><span>{{ $appertizer->price }}</span>
            </div>
            <div class="menu-ingredients">
             {{ $ppertizer->description }}
            </div>
          </div>
          @endforeach
          
          @foreach ($breakfast as $breakfast)
          <div class="col-lg-6 menu-item breakfast">
            <a href="{{ asset('storage/photos/' . $breakfast->photo) }}"><img src="{{ asset('storage/photos/' . $breakfast->photo) }}" class="menu-img" alt="" style="width: 60px; height: 60px; object-fit: cover; border-radius: 100%; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);"></a>
            <div class="menu-content">
              <a href="#">{{ $breakfast->name }}</a><span>${{ $breakfast->price }}</span>
            </div>
            <div class="menu-ingredients">
              {{ $breakfast->description }}
            </div>
          </div>
          @endforeach
          

         
         
      </div>
    </section><!-- End Menu Section -->


   

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Events</h2>
          <p>Organize Your Events in {{ $restaurant->name }}</p>
        </div>

        <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
             
            </div><!-- End testimonial item -->

            @foreach($event as $events)
<div class="swiper-slide">
  <div class="row event-item">
    <div class="col-lg-6">
      <img src="/storage/{{ $events->profile_photo }}" 
           style="width: 100%; height: 450px; object-fit: cover;" 
           class="img-fluid" alt="">
    </div>
    <div class="col-lg-6 pt-4 pt-lg-0 content">
      <h3>{{ $events->event_name }}</h3>
      <div class="price">
        <p><span>${{ $events->price }}</span></p>
      </div>
      <p class="fst-italic">
        
      </p>
      <ul>
        <li><i class="bi bi-check-circled"></i> </li>
        <li><i class="bi bi-check-circled"></i> </li>
        <li><i class="bi bi-check-circled"></i>  </li>
      </ul>
      <p>
        
        @if (session('error'))
            <div style="color: red;">{{ session('error') }}</div>
        @endif
        @if (session('success'))
            <div style="color: green;">{{ session('success') }}</div>
        @endif
        <form action="{{ route('donation.process') }}" method="POST">
            @csrf
            <label for="amount"></label>
            <input type="number" value="{{ $events->price }}" hidden name="amount" id="amount" step="0.01" min="1" required>
            <button type="submit" style="background-color: #28a745; 
            color: white; 
            border: none; 
            border-radius: 5px; 
            padding: 10px 20px; 
            font-size: 16px; 
            cursor: pointer; 
            transition: background-color 0.3s;"
onmouseover="this.style.backgroundColor='#218838';"
onmouseout="this.style.backgroundColor='#28a745';">
Buy Ticket
</button>
        </form>
      </p>
    </div>
  </div>
</div>

@endforeach
            <!-- End testimonial item -->
<div class="swiper-slide">
             
            </div><!-- End testimonial item -->
            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reservation</h2>
          <p>Book a Table</p>
        </div>
        <style>
          .booking-form {
              background: transparent;  /* Dark background */
              padding: 20px;
              border-radius: 8px;
              box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
              max-width: 800px;  /* Increased width for two columns */
              margin: auto;
              color: #fff;  /* Light text color */
              display: grid;  /* Use grid for layout */
              grid-template-columns: repeat(2, 1fr);  /* Two equal columns */
              gap: 20px;  /* Space between fields */
          }
        
          .booking-form .form-group {
              margin-bottom: 0;  /* Remove bottom margin for grid items */
          }
        
          .booking-form label {
              display: block;
              margin-bottom: 5px;
              font-weight: 600;
              color: #fff;  /* Light label color */
          }
        
          .booking-form input[type="text"],
          .booking-form input[type="email"],
          .booking-form input[type="date"],
          .booking-form input[type="time"],
          .booking-form input[type="number"],
          .booking-form textarea {
              width: 100%;
              padding: 10px;
              border: 1px solid #555;  /* Darker border */
              border-radius: 4px;
              box-sizing: border-box;
              transition: border-color 0.3s;
              font-size: 1em;
              background: transparent;  /* Dark input background */
              color: #fff;  /* Light text color */
          }
        
          .booking-form input:focus,
          .booking-form textarea:focus {
              border-color: #007bff;  /* Highlight border color */
              outline: none;
          }
        
          .booking-form button.submit-btn {
              grid-column: span 2;  /* Make the button span both columns */
              padding: 10px;
              background-color: red;  /* Green button */
              color: white;
              border: none;
              border-radius: 4px;
              cursor: pointer;
              font-size: 1.2em;
              transition: background-color 0.3s;
          }
        
          .booking-form button.submit-btn:hover {
              background-color: #4cae4c;  /* Darker green on hover */
          }
        </style>
        
       <!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
  <div class="container" data-aos="fade-up">

      <div class="section-title">
          
        
      </div>

      <form action="{{ route('bookings.store') }}" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          @csrf

          <input type="hidden" name="restaurant_id" value="{{ $restaurant->id }}">

          <div class="row">
              <div class="col-lg-4 col-md-6 form-group">
                  <label for="customer_name">Customer Name:</label>
                  <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="Your Name" required>
                  <div class="validate"></div>
              </div>

              <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                  <label for="customer_phone">Customer Phone:</label>
                  <input type="text" name="customer_phone" class="form-control" id="customer_phone" placeholder="Your Phone" required>
                  <div class="validate"></div>
              </div>

              <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                  <label for="customer_email">Customer Email:</label>
                  <input type="email" name="customer_email" class="form-control" id="customer_email" placeholder="Your Email" required>
                  <div class="validate"></div>
              </div>

              <div class="col-lg-4 col-md-6 form-group mt-3">
                  <label for="date">Date:</label>
                  <input type="date" name="date" class="form-control" id="date" required>
                  <div class="validate"></div>
              </div>

              <div class="col-lg-4 col-md-6 form-group mt-3">
                  <label for="time">Time:</label>
                  <input type="time" name="time" class="form-control" id="time" required>
                  <div class="validate"></div>
              </div>

              <div class="col-lg-4 col-md-6 form-group mt-3">
                  <label for="number_of_people">Number of People:</label>
                  <input type="number" name="number_of_people" class="form-control" id="number_of_people" placeholder="# of people" required>
                  <div class="validate"></div>
              </div>

              <div class="col-lg-4 col-md-6 form-group mt-3">
                  <label for="table_number">Table Number:</label>
                  <input type="number" name="table_number" class="form-control" id="table_number" required>
                  <div class="validate"></div>
              </div>

              <div class="col-lg-4 col-md-6 form-group mt-3">
                  <label for="special_requests">Special Requests:</label>
                  <textarea name="special_requests" class="form-control" id="special_requests" rows="5" placeholder="Any special requests?"></textarea>
                  <div class="validate"></div>
              </div>

              <div class="col-lg-4 col-md-6 form-group mt-3">
                  <label for="status">Status:</label>
                  <input type="text" name="status" class="form-control" id="status" required>
                  <div class="validate"></div>
              </div>
          </div>

          <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>

          <div class="text-center"><button type="submit" class="submit-btn">Book a Table</button></div>
      </form>
  </div>
</section>        
      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What they're saying about us</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            @foreach($testimonial as $testimonials)
            <div class="swiper-slide">
              


              <div class="testimonial-item">
                
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  {{ $testimonials->message }}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <style>
                  .testimonial-img {
                      width: 100px;
                      height: 100px;
                      border-radius: 50%;
                      margin: 0 0 15px 0;
                      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                  }
                  </style>
                <img src="/storage/{{ $testimonials->user->profile_photo }}" class="testimonial-img" alt="" class="testimonial-img" alt="" style="width: 100px; height: 100px; max-width: 50%; max-height: 50%;">
                <h3>{{ $testimonials->customer_name }}</h3>
                <h4>Rating&amp;{{ $testimonials->rating }}</h4>
                </div>
               
               </div><!-- End testimonial item -->
               @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Restaurant</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">
          @foreach($images as $image)
<div class="col-lg-3 col-md-4">
  <div class="gallery-item">
    <a href="/storage/{{ $image->file_path }}" class="gallery-lightbox" data-gall="gallery-item">
      <img src="/storage/{{ $image->file_path }}" 
           style="width: 100%; height: 200px; object-fit: cover;" 
           alt="" class="img-fluid">
    </a>
  </div>
</div>
@endforeach

         

          

          

          

          

          

          

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Chefs</h2>
          <p>Our Proffesional Chefs</p>
        </div>

        <div class="row">
          @foreach($chef as $chef)
          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="/storage/{{ $chef->profile_photo }}" 
                   style="width: 100%; height: 250px; object-fit: cover;" 
                   class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>{{ $chef->name }}</h4>
                  <span>Rating: {{ $chef->rating }}</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach

         

          

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>{{ $restaurant->address }}</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  11:00 AM - 2300 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{ $restaurant->email }}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+263 {{ $restaurant->phone_number }}</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

         

          
         

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to recieve notifications</p>

            <form action="{{ route('subscribe') }}" method="post">
              @csrf <!-- Include CSRF token for security -->
              <input type="email" name="email" required placeholder="Enter your email">
              <input type="submit" value="Subscribe">
          </form>

          </div>

        </div>
      </div>
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

  <script src="js2/jquery-3.3.1.min.js"></script>
  <script src="js2/bootstrap.min.js"></script>
  <script src="js2/jquery.nice-select.min.js"></script>
  <script src="js2/jquery-ui.min.js"></script>
  <script src="js2/jquery.nicescroll.min.js"></script>
  <script src="js2/jquery.barfiller.js"></script>
  <script src="js2/jquery.magnific-popup.min.js"></script>
  <script src="js2/jquery.slicknav.js"></script>
  <script src="js2/owl.carousel.min.js"></script>
  <script src="js2/main.js"></script>

</body>

</html>