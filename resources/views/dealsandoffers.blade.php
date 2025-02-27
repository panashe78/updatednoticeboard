<x-layout>

    <main id="main">
  
      <!-- ======= Deals Section ======= -->
      <section id="deals" class="deals">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Deals & Offers</h2>
            <p>Check out our latest deals and special offers!</p>
          </div>
  
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 d-flex">
              <div class="card flex-fill">
                <img src="../assets/img/offer1.jpg" alt="offer 1" class="card-img-top img-fluid fixed-size static-image" />
                <video class="card-img-top img-fluid fixed-size hover-video" muted loop>
                  <source src="../assets/videos/offer1.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
                <div class="card-body box">
                  <h4 class="card-title" style="color: maroon">50% OFF on Top Restaurants</h4>
                  <p class="card-text">Enjoy half-price meals at selected restaurants!</p>
                </div>
              </div>
            </div>
          
            <div class="col-lg-3 col-md-6 mb-4 d-flex">
              <div class="card flex-fill">
                <img src="../assets/img/offer2.jpg" alt="offer 2" class="card-img-top img-fluid fixed-size static-image" />
                <video class="card-img-top img-fluid fixed-size hover-video" muted loop>
                  <source src="../assets/videos/offer2.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
                <div class="card-body box">
                  <h4 class="card-title" style="color: maroon">Buy One Get One Free Fast Food</h4>
                  <p class="card-text">Grab a friend and double the fun!</p>
                </div>
              </div>
            </div>
          
            <div class="col-lg-3 col-md-6 mb-4 d-flex">
              <div class="card flex-fill">
                <img src="../assets/img/offer3.jpg" alt="offer 3" class="card-img-top img-fluid fixed-size static-image" />
                <video class="card-img-top img-fluid fixed-size hover-video" muted loop>
                  <source src="../assets/videos/offer3.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
                <div class="card-body box">
                  <h4 class="card-title" style="color: maroon">Happy Hour at Bars & Lounges</h4>
                  <p class="card-text">Enjoy special prices on drinks from 5 PM to 7 PM!</p>
                </div>
              </div>
            </div>
          
            <div class="col-lg-3 col-md-6 mb-4 d-flex">
              <div class="card flex-fill">
                <img src="../assets/img/offer4.jpg" alt="offer 4" class="card-img-top img-fluid fixed-size static-image" />
                <video class="card-img-top img-fluid fixed-size hover-video" muted loop>
                  <source src="../assets/videos/offer4.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
                <div class="card-body box">
                  <h4 class="card-title" style="color: maroon">Chill Spots Discount</h4>
                  <p class="card-text">Get a 20% discount on all orders!</p>
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
  
            .box {
              background: #fff;  /* Background color */
              border-radius: 0px;
              box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
              padding: 20px;
              text-align: center;  /* Center align contents */
            }
  
            .box img {
              width: 100%;  /* Responsive image */
              height: auto;  /* Maintain aspect ratio */
              border-radius: 0 0 8px 8px;  /* Rounded corners on the top */
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
      </section><!-- End Deals Section -->
  
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
  
  </x-layout>