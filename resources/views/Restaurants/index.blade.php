

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

  <link rel="stylesheet" href="css1/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css1/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css1/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="css1/flaticon.css" type="text/css">
  <link rel="stylesheet" href="css1/nice-select.css" type="text/css">
  <link rel="stylesheet" href="css1/barfiller.css" type="text/css">
  <link rel="stylesheet" href="css1/magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="css1/jquery-ui.min.css" type="text/css">
  <link rel="stylesheet" href="css1/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="css1/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="css1/style.css" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet"> <!-- Example font -->
  <link rel="stylesheet" href="path/to/bootstrap.css"> <!-- Bootstrap CSS -->


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
                        
                        <a href="#" class="primary-btn"><i class="fa fa-plus"></i>Add Listing</a>
                        
                       
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
  

<script>
    const videos = [
        '/assets/videos/ano.mp4',
        '/assets/videos/boat.mp4',
        '/assets/videos/resort.mp4',
        '/assets/videos/falls.mp4'
    ];

    let currentVideoIndex = 0;
    const videoElement = document.getElementById('background-video');

    // Function to change video
    function changeVideo() {
        currentVideoIndex = (currentVideoIndex + 1) % videos.length; // Cycle through videos
        videoElement.src = videos[currentVideoIndex]; // Change the video source
        videoElement.load(); // Load the new video
        videoElement.play(); // Play the new video
    }

    // Set the initial video source and load it
    videoElement.src = videos[currentVideoIndex];
    videoElement.load();
    videoElement.play();

    // Change video every 5 seconds
    setInterval(changeVideo, 5000);
</script>
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

 
  <!-- ======= Menu Section ======= -->
  <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">
          <div class="section-title">
              <h2>Featured Resorts</h2>
              <p>Chek Top Resorts</p>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-12 d-flex justify-content-center">
                  <ul id="menu-flters">
                      
                      <li data-filter=".Bars">Bars & Lounges</li>
                      <li data-filter=".Restaurants">Restaurants</li>
                      <li data-filter=".Fast">Fast Food Spots</li>
                      <li data-filter=".Chill">Chill Spots</li>
                      
                  </ul>
              </div>
          </div>

          
        
          <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
            <p>
                Bars & Lounges</p>
            @foreach ($bars as $bar)
            
            
            <div class="col-lg-3 menu-item Bars">
                <a href="{{ route('restaurants.accommodation', $bar->id) }}" class="card flex-fill" style="text-decoration: none;" >
                    <img src="../storage/{{ $bar->profile_photo }}" alt="Top Bars & Lounges" class="card-img-top img-fluid fixed-size" />
        
                    <div class="card-body">
                        <h4 class="card-title" style="color: maroon">{{ $bar->name }}</h4>
                        <p class="card-text" style="color: black">Average Price: <b>{{ $bar->average_price }}</b></p>
                        <p class="card-text" style="color: black">Phone: <b>{{ $bar->phone_number }}</b></p>
                    </div>
                </a>
            </div>
        @endforeach

       

        @foreach ($chilspot as $chilspots)
       
        <div class="col-lg-3 menu-item Chill">
            <a href="{{ route('restaurants.accommodation', $bar->id) }}" class="card flex-fill" style="text-decoration: none;" >
                <img src="../storage/{{ $chilspots->profile_photo }}" alt="Top Bars & Lounges" class="card-img-top img-fluid fixed-size" />
    
                <div class="card-body">
                    <h4 class="card-title" style="color: maroon">{{ $chilspots->name }}</h4>
                    <p class="card-text" style="color: black">Average Price: <b>{{ $chilspots->average_price }}</b></p>
                    <p class="card-text" style="color: black">Phone: <b>{{ $chilspots->phone_number }}</b></p>
                </div>
            </a>
        </div>
    @endforeach

   

    @foreach ($restaurants as $restaurant)
    
    <div class="col-lg-3 menu-item Restaurants">
        <a href="{{ route('restaurants.accommodation', $restaurant->id) }}" class="card flex-fill" style="text-decoration: none;" >
            <img src="../storage/{{ $restaurant->profile_photo }}" alt="Top Bars & Lounges" class="card-img-top img-fluid fixed-size" />

            <div class="card-body">
                <h4 class="card-title" style="color: maroon">{{ $restaurant->name }}</h4>
                <p class="card-text" style="color: black">Average Price: <b>{{ $restaurant->average_price }}</b></p>
                <p class="card-text" style="color: black">Phone: <b>{{ $restaurant->phone_number }}</b></p>
            </div>
        </a>
    </div>
@endforeach



@foreach ($fastfood as $fastfoods)

<div class="col-lg-3 menu-item Fast">
    <a href="{{ route('restaurants.accommodation', $fastfoods->id) }}" class="card flex-fill" style="text-decoration: none;" >
        <img src="../storage/{{ $fastfoods->profile_photo }}" alt="Top Bars & Lounges" class="card-img-top img-fluid fixed-size" />

        <div class="card-body">
            <h4 class="card-title" style="color: maroon">{{ $fastfoods->name }}</h4>
            <p class="card-text" style="color: black">Average Price: <b>{{ $fastfoods->average_price }}</b></p>
            <p class="card-text" style="color: black">Phone: <b>{{ $fastfoods->phone_number }}</b></p>
        </div>
    </a>
</div>
@endforeach   
        

                  

          </div>
      </div>
  </section><!-- End Menu Section -->

 


  
 
  
  <div class="search-container">
    <form action="{{ route('restaurants.search') }}" method="GET">
        <input type="text" name="name" placeholder="Restaurant Name">
        <input type="text" name="cuisine" placeholder="Cuisine">
        <input type="number" name="rating" placeholder="Minimum Rating (1-5)" min="1" max="5">
        <input type="text" name="city" placeholder="City">
        <button type="submit">Search</button>
    </form>
</div>
  
<style>
  body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f4f4f4; /* Light background for contrast */
  }

  .search-container {
      position: fixed; /* Fixes the position */
      bottom: 20px; /* Distance from the top */
      right: 20px; /* Distance from the right */
      background-color: transparent; /* Semi-transparent red background */
      padding: 15px; /* Padding around the form */
      border-radius: 8px; /* Rounded corners */
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5); /* Dark shadow */
      z-index: 1000; /* Ensures it's on top of other elements */
  }

  .search-container form {
      display: flex;
      flex-direction: column; /* Stack inputs vertically */
  }

  .search-container input, .search-container button {
      margin-bottom: 10px; /* Space between elements */
      padding: 10px; /* Padding inside the inputs */
      border: 1px solid white; /* Black border for inputs */
      border-radius: 4px; /* Rounded corners */
      color: #000; /* Black text color */
      background-color: transparent;
  }

  .search-container button {
      background-color: red; /* Black button color */
      color: white; /* Red text color for the button */
      cursor: pointer; /* Pointer on hover */
      border: none; /* Remove border */
      transition: background-color 0.3s; /* Smooth transition */
  }

  .search-container button:hover {
      background-color: red; /* Red button color on hover */
      color: white; /* White text color on hover */
  }
</style>



</main><!-- End #main -->

<!-- ======= Footer ======= -->
<!-- ======= Footer ======= -->
  
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

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

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>