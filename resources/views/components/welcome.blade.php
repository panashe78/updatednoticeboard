<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>{{ Auth::user()->name }}</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
      <!-- font awesome css -->
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   </head>
   <body style="background-color: black">
      <!-- header section start -->
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo" style="color: white;">{{ Auth::user()->name }}</a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="/user/profile">Profile</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="portfolio.html">Portfolio</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="service.html">Service</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- services section start -->
      <!-- portfolio section end -->
      <!-- blog section start -->
      <div class="blog_section layout_padding" style="position: relative; background-image: url(/storage/{{ Auth::user()->profile_photo }}); background-size: cover; background-position: center; height: 300px;">
         <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>
         
         <div class="container" >
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="blog_taital">My <span class="blog_taital_1">Dashboard</span></h1>
                  
               </div>
            </div>
         </div>
         <?php 
         use Illuminate\Support\Facades\DB; 
                $users = DB::table('restaurants')->where('user_id', Auth::id())->count(); 
                $menus = DB::table('menus')->where('user_id', Auth::id())->count(); 
                $events = DB::table('events')->where('user_id', Auth::id())->count(); 
                $testimonials = DB::table('testimonials')->where('user_id', Auth::id())->count(); 
                $messages = DB::table('messages')->where('user_id', Auth::id())->count(); 
                $chefs = DB::table('chefs')->where('user_id', Auth::id())->count(); 
                $reservations = DB::table('reservations')->where('user_id', Auth::id())->count(); 
                $bookings = DB::table('bookings')->where('user_id', Auth::id())->count(); 
                $questions = DB::table('f_a_q_s')->where('user_id', Auth::id())->count(); 
                ?>
         <div class="blog_section_2" >
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <div class="blog_box card">
                         <div class="blog_img text-center">
                             <h4 class="date_text">Resorts {{ $users }}</h4>
                             <h4 class="prep_text" style="color: maroon">Local Resorts</h4>
                         </div>
                         <div class="card-body">
                             <p class="lorem_text" style="color: maroon">This is where all the resorts you have posted will appear.</p>
                             <div class="text-center">
                                 <a href='/restaurants/create' class="btn btn-danger m-1">Add</a>
                                 <a href='/restaurants' class="btn btn-secondary m-1">View</a>
                             </div>
                         </div>
                     </div>
                 </div>
                 
                 <div class="col-md-4">
                  <div class="blog_box card">
                      <div class="blog_img text-center">
                          <h4 class="date_text">Menus {{ $menus }}</h4>
                          <h4 class="prep_text" style="color: maroon">Local Resorts</h4>
                      </div>
                      <div class="card-body">
                          <p class="lorem_text" style="color: maroon">This is where all the resorts you have posted will appear.</p>
                          <div class="text-center">
                              <a href='/menus/create' class="btn btn-danger m-1">Add</a>
                              <a href='/menus' class="btn btn-secondary m-1">View</a>
                          </div>
                      </div>
                  </div>
            
              </div>

                 
                 <div class="col-md-4">
                  <div class="blog_box card">
                      <div class="blog_box_3 text-center">
                          <h4 class="date_text"style="color: maroon">Events {{ $events }}</h4>
                          <h4 class="prep_text"style="color: maroon">Welcome</h4>
                      </div>
                      <div class="card-body">
                          <p class="lorem_text">This is where all your events you have posted will appear.</p>
                          <div class="text-center">
                              <a href='/events' class="btn btn-danger m-1">View</a>
                              <a href='/events/create' class="btn btn-secondary m-1">Add</a>
                          </div>
                      </div>
                  </div>
              </div>
               </div>
              
            </div>
         </div>
        </div>

        <div class="blog_section_2">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="blog_box card">
                      <div class="blog_img_testimonials text-center">
                          <h4 class="date_text" style="color: maroon">Testimonials {{ $testimonials }}</h4>
                          <h4 class="prep_text" style="color: maroon">Welcome</h4>
                      </div>
                      <div class="card-body">
                          <p class="lorem_text">This is where all your testimonials you have posted will appear.</p>
                          <div class="text-center">
                              <a href='/testimonials/create' class="btn btn-danger m-1">Add</a>
                              <a href='/testimonials' class="btn btn-secondary m-1">View</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
               <div class="blog_box card">
                   <div class="blog_img_messages text-center">
                       <h4 class="date_text">Messages {{ $messages }}</h4>
                       <h4 class="prep_text"style="color: maroon">Welcome</h4>
                   </div>
                   <div class="card-body">
                       <p class="lorem_text"style="color: maroon">This is where all your messages you have posted will appear.</p>
                       <div class="text-center">
                           <a href='/messages' class="btn btn-danger m-1">View</a>
                           <a href='/messages/create' class="btn btn-secondary m-1">Add</a>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-md-4">
            <div class="blog_box card">
                <div class="blog_box_3 text-center">
                    <div class="blog_img_chefs">
                        <h4 class="date_text">Chefs {{ $chefs }}</h4>
                        <h4 class="prep_text"style="color: maroon">Welcome</h4>
                    </div>
                    <div class="card-body">
                        <p class="lorem_text">This is where all your chefs you have posted will appear.</p>
                        <div class="text-center">
                            <a href='/chefs' class="btn btn-danger m-1">View</a>
                            <a href='/chefs/create' class="btn btn-secondary m-1">Add</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
            
         </div>
       </div>
       </div>

        <div class="blog_section_2">
        <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="blog_box card">
                   <div class="blog_img_bookings text-center">
                       <h4 class="date_text">Reservations {{ $reservations }}</h4>
                       <h4 class="prep_text"style="color: maroon">Welcome</h4>
                   </div>
                   <div class="card-body">
                       <p class="lorem_text"style="color: maroon">This is where all your reservations you have posted will appear.</p>
                       <div class="text-center">
                           <a href='/reservations/create' class="btn btn-danger m-1">Add</a>
                           <a href='/reservations' class="btn btn-secondary m-1">View</a>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-md-4">
            <div class="blog_box card">
                <div class="blog_img_bookings2 text-center">
                    <h4 class="date_text">Bookings {{ $bookings }}</h4>
                    <h4 class="prep_text" style="color: maroon">Welcome</h4>
                </div>
                <div class="card-body">
                    <p class="lorem_text" style="color: maroon">This is where all your bookings you have posted will appear.</p>
                    <div class="text-center">
                        <a href='/bookings/create' class="btn btn-danger m-1">Add</a>
                        <a href='/bookings' class="btn btn-secondary m-1">View</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
         <div class="blog_box card">
             <div class="blog_box_3 text-center">
                 <div class="blog_img_questions">
                     <h4 class="date_text">Questions {{ $questions }}</h4>
                     <h4 class="prep_text" style="color: maroon">Welcome</h4>
                 </div>
                 <div class="card-body">
                     <p class="lorem_text " style="color: maroon">This is where all your questions you have posted will appear.</p>
                     <div class="text-center">
                         <a href='/questions/create' class="btn btn-danger m-1">Add</a>
                         <a href='/questions' class="btn btn-secondary m-1">View</a>
                     </div>
                 </div>
             </div>
         </div>
        </div>
         </div>
    
        </div>
        </div>
        </div>
        <?php 
                                 ?>
        <!-- blog section end -->
       <!-- contact section start -->
        <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">Talk to<span class="contact_taital_1">Admin</span></h1>
               </div>
            </div>
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <div class="mail_section_1">
                        <form action="{{ route('messages.store') }}" method="POST">
                           @csrf
                        <input type="text" class="mail_text" placeholder="Your Name" name="title">
                       
                        <textarea class="massage-bt" placeholder="Your Massage" rows="5" id="comment" name="body"></textarea>
               
                        <button class="send_bt btn btn-danger" type="submit">Send Now</button>
                
                  </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
            <!-- footer section start -->
      <div class="footer_section">
         <div class="container">
           
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         $('#myCarousel').carousel({
            interval: false
         });
         
         //scroll slides on swipe for touch enabled devices
         
         $("#myCarousel").on("touchstart", function(event){
         
            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){
         
                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
         });
      </script>
   </body>
</html>