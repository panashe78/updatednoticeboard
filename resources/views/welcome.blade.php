<x-layout>

  <main id="main">

    <!-- ======= About Section ======= -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Featured</h2>
       
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4 d-flex">
            <div class="card flex-fill">
              <img src="../assets/img/resort.jpg" alt="Top Restaurants" class="card-img-top img-fluid fixed-size static-image" />
              <video class="card-img-top img-fluid fixed-size hover-video" muted loop>
                <source src="../assets/videos/vid (5).mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
              <div class="card-body box">
                <h4 class="card-title">TOP RESTAURANTS</h4>
                <p class="card-text">Explore a plethora of restaurants to choose from</p>
              </div>
            </div>
          </div>
        
          <div class="col-lg-3 col-md-6 mb-4 d-flex">
            <div class="card flex-fill">
              <img src="../images/fastfood.jpg" alt="Top Fast Food Spots" class="card-img-top img-fluid fixed-size static-image" />
              <video class="card-img-top img-fluid fixed-size hover-video" muted loop>
                <source src="../assets/videos/vid (4).mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
              <div class="card-body box">
                <h4 class="card-title">TOP FAST FOOD SPOTS</h4>
                <p class="card-text">Explore a plethora of fast food to choose from</p>
              </div>
            </div>
          </div>
        
          <div class="col-lg-3 col-md-6 mb-4 d-flex">
            <div class="card flex-fill">
              <img src="../assets/img/bars.jpg" alt="Top Bars & Lounges" class="card-img-top img-fluid fixed-size static-image" />
              <video class="card-img-top img-fluid fixed-size hover-video" muted loop>
                <source src="../assets/videos/vid (3).mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
              <div class="card-body box">
                <h4 class="card-title">TOP BARS & LOUNGES</h4>
                <p class="card-text">Explore a plethora of bars & lounges</p>
              </div>
            </div>
          </div>
        
          <div class="col-lg-3 col-md-6 mb-4 d-flex">
            <div class="card flex-fill">
              <img src="../images/chillspots.jpg" alt="Another Category" class="card-img-top img-fluid fixed-size static-image" />
              <video class="card-img-top img-fluid fixed-size hover-video" muted loop>
                <source src="../assets/videos/vid.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
              <div class="card-body box">
                <h4 class="card-title">CHILLING SPOTS</h4>
                <p class="card-text">Explore another category of your choice</p>
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
                          <li data-filter=".bar">Bars & Lounges</li>
                          <li data-filter=".restaurant">Restaurants</li>
                          <li data-filter=".chill">Chill Spots</li>
                          <li data-filter=".fastfood">Fast Foods</li>
                       
                        </ul>
                      </div>
                    </div>
            
                    <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
                      @foreach ($bars as $bar)
                       <div class="col-lg-3 menu-item bar">
                       
                        <a href="/restaurants"><div class="card flex-fill">
                          <img src="/storage/{{ $bar->profile_photo }}" alt="Top Bars & Lounges" class="card-img-top img-fluid fixed-size" />
                        
                          <div class="card-body">
                            <h4 class="card-title" style="color: maroon">{{ $bar->name }}</h4>
                            <p class="card-text" style="color: black">Average Price: <b>{{ $bar->average_price }}</b></p>
                            <p class="card-text" style="color: black">Phone: <b>{{ $bar->phone_number }}</b></p>
                          </div>
                        </div></a>
                        
                      </div>
                      @endforeach
          
                      @foreach ($chilspot as $chilspots)
                      
                      <div class="col-lg-3 menu-item chill">
                        <a href="/restaurants"><div class="card flex-fill">
                          <img src="/storage/{{ $chilspots->profile_photo }}" alt="Top Bars & Lounges" class="card-img-top img-fluid fixed-size" />
                        
                          <div class="card-body">
                            <h4 class="card-title" style="color: maroon">{{ $chilspots->name }}</h4>
                            <p class="card-text" style="color: black">Average Price: <b>{{ $chilspots->average_price }}</b></p>
                            <p class="card-text" style="color: black">Phone: <b>{{ $chilspots->phone_number }}</b></p>
                          </div>
                        </div></a>
                      </div>
                      @endforeach
            
            
                      @foreach ($restaurants as $restaurant)
                      
                      <div class="col-lg-3 menu-item restaurant">
                        <div class="card flex-fill"><a href="/restaurants">
                          <img src="/storage/{{ $restaurant->profile_photo }}" alt="Top Bars & Lounges" class="card-img-top img-fluid fixed-size" />
                        
                          <div class="card-body">
                            <h4 class="card-title" style="color: maroon">{{ $restaurant->name }}</h4>
                           <p class="card-text" style="color: black">Average Price: <b>{{ $restaurant->average_price }}</b></p>
                           <p class="card-text" style="color: black">Phone: <b>{{ $restaurant->phone_number }}</b></p>
                          </div>
                        </div></a>
                      </div>
                      @endforeach
            
                      @foreach ($fastfood as $fastfoods)
                      
                      <div class="col-lg-3 menu-item fastfood">
                        <div class="card flex-fill"><a href="/restaurants">
                          <img src="/storage/{{ $fastfoods->profile_photo }}" alt="Top Bars & Lounges" class="card-img-top img-fluid fixed-size" />
                        
                          <div class="card-body">
                            <h4 class="card-title" style="color: maroon">{{ $fastfoods->name }}</h4>
                            <p class="card-text" style="color: black">Average Price: <b>{{ $fastfoods->average_price }}</b></p>
                            <p class="card-text" style="color: black">Phone: <b>{{ $fastfoods->phone_number }}</b></p>
                          </div>
                        </div></a>
                      </div>
                      
                      @endforeach
            
            
                    </div>
            
                  </div>
                </section><!-- End Menu Section -->
            
                            

                <section id="menu" class="menu section-bg">
                  <div class="container" data-aos="fade-up">
            
                    <div class="section-title">
                      <h2>Top Picks</h2>
                      <p>Check Top Picks</p>
                    </div>
            
                    
                    
            
                    
            
                  </div>
                </section><!-- End Menu Section -->
               
              
              <section id="editors-choice" class="menu section-bg">
                  <div class="container" data-aos="fade-up">
              
                      <div class="section-title">
                          <h2>Editors Choice</h2>
                          <p>Editors Choice Resorts</p>
                      </div>
              
                      
                      
                  </div>
              </section><!-- End Editors Choice Section -->
              
              <section id="top-picks" class="menu section-bg">
                  <div class="container" data-aos="fade-up">
              
                      <div class="section-title">
                          <h2>Top Picks</h2>
                          <p>Check Top Picks</p>
                      </div>
              
                     
              
                      
                  </div>
              </section><!-- End Top Picks Section -->
              
              <section id="trending" class="menu section-bg">
                  <div class="container" data-aos="fade-up">
              
                      <div class="section-title">
                          <h2>Trending</h2>
                          <p>Check Trending Resorts</p>
                      </div>
              
                     
              
                     
                  </div>
              </section><!-- End Trending Section -->
            
            

    
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