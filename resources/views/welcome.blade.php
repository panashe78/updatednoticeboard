<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticeboard</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Css Styles -->


    <!-- Css Styles -->
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
    <style>
        /* Custom styles */
        .card-title {
            font-family: 'Poppins', sans-serif; /* Apply the chosen font */
            font-weight: 200; /* Make it bold */
            font-size: 1.5rem; /* Adjust font size as needed */
            color: #333; /* Change color if desired */
            padding: 1px; /* Add padding to the card */
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <style>
        #mobileDropdownContent {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
        }
    </style>

        

    <!-- Header Section Begin -->
    <header class="header" style="position: fixed; top: 0; left: 0; right: 0; z-index: 1000; background-color: rgb(10, 10, 124); box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
        <div class="container-fluid" style="padding-top: 0; background-image: cover; background-position: center;">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="https://noticeboard.co.zw/wp-content/uploads/2023/08/noticeboard.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <!-- Mobile Menu Button -->
                            <div style="position: relative; display: inline-block;">
                                
                                <div id="mobileDropdownContent" style="color: white">
                                    <a href="/restaurants/create" style="color: white; padding: 12px 16px; text-decoration: none; display: block;">Add Restaurant</a>
                                    <a href="/accommodation" style="color: white; padding: 12px 16px; text-decoration: none; display: block;">Add Accommodation</a>
                                    <a href="/business" style="color: white; padding: 12px 16px; text-decoration: none; display: block;">Add Business</a>
                                    <a href="/event" style="color: white; padding: 12px 16px; text-decoration: none; display: block;">Add Event</a>
                                    <a href="/login" style="color: white; padding: 12px 16px; text-decoration: none; display: block;">Login</a>
                                    <a href="/register" style="color: white; padding: 12px 16px; text-decoration: none; display: block;">Register</a>
                                </div>
                            </div>
                        
                            <script>
                                const mobileMenuButton = document.getElementById('mobileMenuButton');
                                const mobileDropdownContent = document.getElementById('mobileDropdownContent');
                        
                                mobileMenuButton.addEventListener('click', (event) => {
                                    event.preventDefault();
                                    event.stopPropagation();
                                    if (mobileDropdownContent.style.display === 'block') {
                                        mobileDropdownContent.style.display = 'none';
                                    } else {
                                        mobileDropdownContent.style.display = 'block';
                                    }
                                });
                        
                                window.addEventListener('click', (event) => {
                                    if (!mobileMenuButton.contains(event.target) && !mobileDropdownContent.contains(event.target)) {
                                        mobileDropdownContent.style.display = 'none';
                                    }
                                });
                            </script>
                            <script>
                                // Toggle mobile dropdown menu
                                const mobileMenuButton = document.getElementById('mobileMenuButton');
                                const mobileDropdownContent = document.getElementById('mobileDropdownContent');
    
                                mobileMenuButton.addEventListener('click', (event) => {
                                    event.preventDefault();
                                    event.stopPropagation(); // Prevent the click from propagating to the window
                                    mobileDropdownContent.style.display = mobileDropdownContent.style.display === 'block' ? 'none' : 'block';
                                });
    
                                // Close mobile dropdown when clicking outside
                                window.addEventListener('click', (event) => {
                                    if (!mobileMenuButton.contains(event.target) && !mobileDropdownContent.contains(event.target)) {
                                        mobileDropdownContent.style.display = 'none';
                                    }
                                });
                            </script>
    
                            <style>
                                /* Hide mobile menu button on larger screens */
                                @media (min-width: 769px) {
                                    #mobileMenuButton {
                                        display: none;
                                    }
                                }
                            </style>
                        </nav>
    
                        <!-- Desktop Menu and Auth Buttons -->
                        <div class="header__menu__right">
                            @auth
                            <div style="position: relative; display: inline-block;">
                                <a href="#" class="primary-btn" style="text-decoration: none; padding: 10px 15px; background-color: #007bff; color: white; border-radius: 5px; display: inline-block;">
                                    <i class="fa fa-plus"></i> Add Listing
                                </a>
                                <div style="display: none; position: absolute; background-color: white; min-width: 160px; box-shadow: 0px 8px 16px rgba(0,0,0,0.2); z-index: 1;" class="dropdown-content">
                                    <a href="/accommodation" style="color: black; padding: 12px 16px; text-decoration: none; display: block;">Accommodation</a>
                                    <a href="/event" style="color: black; padding: 12px 16px; text-decoration: none; display: block;">Event</a>
                                    <a href="/business" style="color: black; padding: 12px 16px; text-decoration: none; display: block;">Business</a>
                                    <a href="/restaurants/create" style="color: black; padding: 12px 16px; text-decoration: none; display: block;">Restaurant</a>
                                </div>
                            </div>
    
                            <script>
                                // Toggle dropdown for "Add Listing"
                                const dropdown = document.querySelector('.dropdown-content');
                                const addButton = document.querySelector('.primary-btn');
    
                                addButton.addEventListener('click', (event) => {
                                    event.preventDefault();
                                    event.stopPropagation(); // Prevent the click from propagating to the window
                                    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
                                });
    
                                // Close dropdown when clicking outside
                                window.addEventListener('click', (event) => {
                                    if (!addButton.contains(event.target) && !dropdown.contains(event.target)) {
                                        dropdown.style.display = 'none';
                                    }
                                });
                            </script>
                            @endauth
                            @guest
                            <a href="/login" class="login-btn"><i class="fa fa-user"></i></a>
                            <a href="/register" class="login-btn"><i class="fa fa-user-plus"></i></a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Hero Section Begin -->
    <section class="hero set-bg" data-setbg="../img/hero/hero2.jpg" id="heroSection" style="background-image: cover; height: 100vh;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <br>
                        <br>
                        <br>
                        
                        @if(auth()->check() && Auth::user()->role === 'Admin')
    <button type="button" 
            style="position: fixed; bottom: 20px; left: 20px; z-index: 1000; 
                   padding: 10px 20px; font-size: 16px; border: none; 
                   border-radius: 5px; background-color: #007bff; 
                   color: white; cursor: pointer;"
            onmouseover="this.style.backgroundColor='#0056b3';" 
            onmouseout="this.style.backgroundColor='#007bff';">
        <a href="/admin/dashboard" style="color: white">Dashboard</a>
    </button>
@endif
                        <div class="section-title">
                            <h2>EXPLORE ZIMBABWE</h2>
                        </div>
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <div class="select__option">
                                    <select>
                                        <option value="">Choose Categories</option>
                                    </select>
                                </div>
                                <div class="select__option">
                                    <select>
                                        <option value="">Choose Location</option>
                                    </select>
                                </div>
                                <button type="submit">Explore Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <script>
        const images = [
            'img/hero/hero1.jpg',
            'img/hero/hero2.jpg',
            'img/hero/hero3.jpg'
        ];
    
        let currentIndex = 0;
    
        function changeBackground() {
            const heroSection = document.getElementById('heroSection');
            currentIndex = (currentIndex + 1) % images.length;
            heroSection.style.backgroundImage = `url('${images[currentIndex]}')`;
        }
    
        // Initial background
        document.getElementById('heroSection').style.backgroundImage = `url('${images[currentIndex]}')`;
    
        // Change background every 30 seconds
        setInterval(changeBackground, 20000);
    </script>
     

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="listing__item">
                        <div class="listing__item__pic set-bg" data-setbg="img/listing/business.jpg">
                           
                            <div class="listing__item__pic__tag top_rate">Views: 0</div>
                           
                        </div>
                        <div class="listing__item__text">
                            <div class="listing__item__text__inside">
                                <h5><a href="/bus">Businesses</a></h5>
                              
                                
                            </div>
                            <div class="listing__item__text__info">
                                <div class="listing__item__text__info__left">
                                    <img src="img/listing/list_small_icon-1.png" alt="">
                                   
                                </div>
                                <div class="listing__item__text__info__right closed">139</div>
                              </div>
                               </div>
                            </div>
                      </div>
                     <div class="col-lg-3 col-md-6">
                    <div class="listing__item">
                        <div class="listing__item__pic set-bg" data-setbg="img/listing/restaurants.jpg">
                           
                            <div class="listing__item__pic__tag top_rate">Views: 0</div>
                           
                        </div>
                        <div class="listing__item__text">
                            <div class="listing__item__text__inside">
                                <h5><a href="/rest">Restaurants</a></h5>
                              
                                
                            </div>
                            <div class="listing__item__text__info">
                                <div class="listing__item__text__info__left">
                                    <img src="img/listing/list_small_icon-2.png" alt="">
                                   
                                </div>
                                <div class="listing__item__text__info__right closed">139</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="listing__item">
                        <div class="listing__item__pic set-bg" data-setbg="img/listing/accommodation.jpg">
                           
                            <div class="listing__item__pic__tag top_rate">Views: 0</div>
                           
                        </div>
                        <div class="listing__item__text">
                            <div class="listing__item__text__inside">
                                <h5><a href="/acco">Accommodation</a></h5>
                              
                                
                            </div>
                            <div class="listing__item__text__info">
                                <div class="listing__item__text__info__left">
                                    <img src="img/listing/list_small_icon-3.png" alt="">
                                   
                                </div>
                                <div class="listing__item__text__info__right closed">139</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="listing__item">
                        <div class="listing__item__pic set-bg" data-setbg="img/listing/events.jpg">
                           
                            <div class="listing__item__pic__tag top_rate">Views: 2</div>
                           
                        </div>

                       <a href="/vibesandevents"> <div class="listing__item__text">
                            <div class="listing__item__text__inside">
                                <h5><a href="/eve">Events</a></h5>
                              
                                
                            </div>
                            <div class="listing__item__text__info">
                                <div class="listing__item__text__info__left">
                                    <img src="img/listing/list_small_icon-4.png" alt="">
                                   
                                </div>
                                <div class="listing__item__text__info__right closed">139</div>
                            </div>
                        </div>
                       </a>
                    </div>
                </div>

            </div>
        </div>
    </section><style>
         /* Floating button styles */
         .float-button {
            position: fixed;
            bottom: 20px; /* Distance from the bottom */
            right: 20px;  /* Distance from the right */
            background-color: #25D366; /* WhatsApp green */
            color: white; /* Icon color */
            border: none;
            border-radius: 50%; /* Round button */
            width: 60px; /* Button size */
            height: 60px; /* Button size */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Shadow effect */
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px; /* Icon size */
            transition: background-color 0.3s; /* Smooth color transition */
        }

        .float-button:hover {
            background-color: #128C7E; /* Darker green on hover */
        }
        .categories {
    padding: 50px 0; /* Adjust padding as needed */
}

.card {
    height: 320px; /* Set a fixed height for the card */

}

.card-image img {
    height: 250px; /* Adjust image height to take 3/4 of the card */
    object-fit: cover; /* Ensures the image covers the area without distortion */
}
.card.shadow {
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Custom shadow */
    transition: transform 0.3s; /* Smooth transition on hover */
}

.card.shadow:hover {
    transform: translateY(-5px); /* Lift effect on hover */
}
        </style>
    <!-- Categories Section End -->

    <!-- Most Search Section Begin -->
    <section class="most-search spad">
        <button class="float-button" onclick="window.open('https://wa.me/+263780018804', '_blank')">
            <i class="fab fa-whatsapp"></i> <!-- WhatsApp icon -->
        </button>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                       
                        <h2>Business</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="most__search__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                   
                                    Harare
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                 
                                    Bulawayo
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    
                                    Mutare
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                    
                                    Gweru
                                </a>
                            </li>
                           <!-- <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">
                                    <span class="flaticon-038-take-away"></span>
                                    Event
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">
                                    <span class="flaticon-031-delivery"></span>
                                    Rental
                                </a>
                            </li>-->
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="row">
                            
                             @foreach ($hrestaurants as $restaurant)
                             <div class="col-lg-3 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="{{ asset('../storage/' . $restaurant->profile_photo) }}">
                                        <img src="{{ asset('../storage/' . $restaurant->profile_photo) }}" alt="">
                                        <div class="listing__item__pic__tag">VIEWS: {{ $restaurant->views }} </div>
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_like_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>{{ $restaurant->name }}</h5>
                                            <div class="listing__item__text__rating">
                                                <div class="listing__item__rating__star">
                                                    <span class="icon_star"></span>
                                                    <span class="icon_star"></span>
                                                    <span class="icon_star"></span>
                                                    <span class="icon_star"></span>
                                                    <span class="icon_star-half_alt"></span>
                                                </div>
                                                <h6>${{ $restaurant->average_price }}</h6>
                                            </div>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span>{{ $restaurant->address }}</li>
                                                <li><span class="icon_phone"></span>{{ $restaurant->phone_number}}</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="img/listing/list_small_icon-1.png" alt="">
                                                <span>{{ $restaurant->description }}</span>
                                            </div>
                                            <div class="listing__item__text__info__right">Open at: {{ $restaurant->opening_hours }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             @endforeach

                               
                                
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="row">
                                @foreach ($brestaurants as $restaurant)
                                <div class="col-lg-3 col-md-6">
                                    <div class="listing__item">
                                        <div class="listing__item__pic set-bg" data-setbg="{{ asset('../storage/' . $restaurant->profile_photo) }}">
                                            <img src="{{ asset('../storage/' . $restaurant->profile_photo) }}" alt="">
                                            <div class="listing__item__pic__tag">VIEWS: {{ $restaurant->views }} </div>
                                            <div class="listing__item__pic__btns">
                                                <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                                <a href="#"><span class="icon_like_alt"></span></a>
                                            </div>
                                        </div>
                                        <div class="listing__item__text">
                                            <div class="listing__item__text__inside">
                                                <h5>{{ $restaurant->name }}</h5>
                                                <div class="listing__item__text__rating">
                                                    <div class="listing__item__rating__star">
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star-half_alt"></span>
                                                    </div>
                                                    <h6>${{ $restaurant->average_price }}</h6>
                                                </div>
                                                <ul>
                                                    <li><span class="icon_pin_alt"></span>{{ $restaurant->address }}</li>
                                                    <li><span class="icon_phone"></span>{{ $restaurant->phone_number}}</li>
                                                </ul>
                                            </div>
                                            <div class="listing__item__text__info">
                                                <div class="listing__item__text__info__left">
                                                    <img src="img/listing/list_small_icon-1.png" alt="">
                                                    <span>{{ $restaurant->description }}</span>
                                                </div>
                                                <div class="listing__item__text__info__right">Open at: {{ $restaurant->opening_hours }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             @endforeach

                            
                                
                            </div>
                       
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="row">
                                @foreach ($mrestaurants as $restaurant)
                                <div class="col-lg-3 col-md-6">
                                    <div class="listing__item">
                                        <div class="listing__item__pic set-bg" data-setbg="{{ asset('../storage/' . $restaurant->profile_photo) }}">
                                            <img src="{{ asset('../storage/' . $restaurant->profile_photo) }}" alt="">
                                            <div class="listing__item__pic__tag">VIEWS: {{ $restaurant->views }} </div>
                                            <div class="listing__item__pic__btns">
                                                <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                                <a href="#"><span class="icon_like_alt"></span></a>
                                            </div>
                                        </div>
                                        <div class="listing__item__text">
                                            <div class="listing__item__text__inside">
                                                <h5>{{ $restaurant->name }}</h5>
                                                <div class="listing__item__text__rating">
                                                    <div class="listing__item__rating__star">
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star-half_alt"></span>
                                                    </div>
                                                    <h6>${{ $restaurant->average_price }}</h6>
                                                </div>
                                                <ul>
                                                    <li><span class="icon_pin_alt"></span>{{ $restaurant->address }}</li>
                                                    <li><span class="icon_phone"></span>{{ $restaurant->phone_number}}</li>
                                                </ul>
                                            </div>
                                            <div class="listing__item__text__info">
                                                <div class="listing__item__text__info__left">
                                                    <img src="img/listing/list_small_icon-1.png" alt="">
                                                    <span>{{ $restaurant->description }}</span>
                                                </div>
                                                <div class="listing__item__text__info__right">Open at: {{ $restaurant->opening_hours }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                              
                                  @endforeach
   
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-4" role="tabpanel">
                            <div class="row">


                                @foreach ($grestaurants as $restaurant)
                                <div class="col-lg-3 col-md-6">
                                    <div class="listing__item">
                                        <div class="listing__item__pic set-bg" data-setbg="{{ asset('../storage/' . $restaurant->profile_photo) }}">
                                            <img src="{{ asset('../storage/' . $restaurant->profile_photo) }}" alt="">
                                            <div class="listing__item__pic__tag">VIEWS: {{ $restaurant->views }} </div>
                                            <div class="listing__item__pic__btns">
                                                <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                                <a href="#"><span class="icon_like_alt"></span></a>
                                            </div>
                                        </div>
                                        <div class="listing__item__text">
                                            <div class="listing__item__text__inside">
                                                <h5>{{ $restaurant->name }}</h5>
                                                <div class="listing__item__text__rating">
                                                    <div class="listing__item__rating__star">
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star-half_alt"></span>
                                                    </div>
                                                    <h6>${{ $restaurant->average_price }}</h6>
                                                </div>
                                                <ul>
                                                    <li><span class="icon_pin_alt"></span>{{ $restaurant->address }}</li>
                                                    <li><span class="icon_phone"></span>{{ $restaurant->phone_number}}</li>
                                                </ul>
                                            </div>
                                            <div class="listing__item__text__info">
                                                <div class="listing__item__text__info__left">
                                                    <img src="img/listing/list_small_icon-1.png" alt="">
                                                    <span>{{ $restaurant->description }}</span>
                                                </div>
                                                <div class="listing__item__text__info__right">Open at: {{ $restaurant->opening_hours }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
   
                                
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        
                        <h2>Accommodation</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="most__search__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-5" role="tab">
                                   
                                    Harare
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">
                                 
                                    Bulawayo
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">
                                    
                                    Mutare
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-8" role="tab">
                                    
                                    Gweru
                                </a>
                            </li>
                           <!-- <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">
                                    <span class="flaticon-038-take-away"></span>
                                    Event
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">
                                    <span class="flaticon-031-delivery"></span>
                                    Rental
                                </a>
                            </li>-->
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-5" role="tabpanel">
                            <div class="row">
                            
                             @foreach ($hacco as $restaurant)
                             <div class="col-lg-3 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="{{ asset('../storage/' . $restaurant->profile_photo) }}">
                                        <img src="{{ asset('../storage/' . $restaurant->profile_photo) }}" alt="">
                                        <div class="listing__item__pic__tag">VIEWS: {{ $restaurant->views }} </div>
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_like_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                           <a href="{{ route('restaurants.accommodation', $restaurant->id) }}" ><h5>{{ $restaurant->name }}</h5><a>
                                            <div class="listing__item__text__rating">
                                                <div class="listing__item__rating__star">
                                                    <span class="icon_star"></span>
                                                    <span class="icon_star"></span>
                                                    <span class="icon_star"></span>
                                                    <span class="icon_star"></span>
                                                    <span class="icon_star-half_alt"></span>
                                                </div>
                                                <h6>${{ $restaurant->average_price }}</h6>
                                            </div>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span>{{ $restaurant->address }}</li>
                                                <li><span class="icon_phone"></span>{{ $restaurant->phone_number}}</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="img/listing/list_small_icon-1.png" alt="">
                                                <span>{{ $restaurant->description }}</span>
                                            </div>
                                            <div class="listing__item__text__info__right">Open at: {{ $restaurant->opening_hours }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                            </div>

                        </div>
                        <div class="tab-pane" id="tabs-6" role="tabpanel">
                            <div class="row">
                                @foreach ($bacco as $restaurant)
                                <div class="col-lg-3 col-md-6">
                                    <div class="listing__item">
                                        <div class="listing__item__pic set-bg" data-setbg="{{ asset('../storage/' . $restaurant->profile_photo) }}">
                                            <img src="{{ asset('../storage/' . $restaurant->profile_photo) }}" alt="">
                                            <div class="listing__item__pic__tag">VIEWS: {{ $restaurant->views }} </div>
                                            <div class="listing__item__pic__btns">
                                                <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                                <a href="#"><span class="icon_like_alt"></span></a>
                                            </div>
                                        </div>
                                        <div class="listing__item__text">
                                            <div class="listing__item__text__inside">
                                                <h5>{{ $restaurant->name }}</h5>
                                                <div class="listing__item__text__rating">
                                                    <div class="listing__item__rating__star">
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star-half_alt"></span>
                                                    </div>
                                                    <h6>${{ $restaurant->average_price }}</h6>
                                                </div>
                                                <ul>
                                                    <li><span class="icon_pin_alt"></span>{{ $restaurant->address }}</li>
                                                    <li><span class="icon_phone"></span>{{ $restaurant->phone_number}}</li>
                                                </ul>
                                            </div>
                                            <div class="listing__item__text__info">
                                                <div class="listing__item__text__info__left">
                                                    <img src="img/listing/list_small_icon-1.png" alt="">
                                                    <span>{{ $restaurant->description }}</span>
                                                </div>
                                                <div class="listing__item__text__info__right">Open at: {{ $restaurant->opening_hours }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             @endforeach
                                
                                
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-7" role="tabpanel">
                            <div class="row">
                                @foreach ($macco as $restaurant)
                                <div class="col-lg-3 col-md-6">
                                    <div class="listing__item">
                                        <div class="listing__item__pic set-bg" data-setbg="{{ asset('../storage/' . $restaurant->profile_photo) }}">
                                            <img src="{{ asset('../storage/' . $restaurant->profile_photo) }}" alt="">
                                            <div class="listing__item__pic__tag">VIEWS: {{ $restaurant->views }} </div>
                                            <div class="listing__item__pic__btns">
                                                <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                                <a href="#"><span class="icon_like_alt"></span></a>
                                            </div>
                                        </div>
                                        <div class="listing__item__text">
                                            <div class="listing__item__text__inside">
                                                <h5>{{ $restaurant->name }}</h5>
                                                <div class="listing__item__text__rating">
                                                    <div class="listing__item__rating__star">
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star-half_alt"></span>
                                                    </div>
                                                    <h6>${{ $restaurant->average_price }}</h6>
                                                </div>
                                                <ul>
                                                    <li><span class="icon_pin_alt"></span>{{ $restaurant->address }}</li>
                                                    <li><span class="icon_phone"></span>{{ $restaurant->phone_number}}</li>
                                                </ul>
                                            </div>
                                            <div class="listing__item__text__info">
                                                <div class="listing__item__text__info__left">
                                                    <img src="img/listing/list_small_icon-1.png" alt="">
                                                    <span>{{ $restaurant->description }}</span>
                                                </div>
                                                <div class="listing__item__text__info__right">Open at: {{ $restaurant->opening_hours }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             @endforeach


                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-8" role="tabpanel">
                            <div class="row">


                                @foreach ($gacco as $restaurant)
                                <div class="col-lg-3 col-md-6">
                                    <div class="listing__item">
                                        <div class="listing__item__pic set-bg" data-setbg="{{ asset('../storage/' . $restaurant->profile_photo) }}">
                                            <img src="{{ asset('../storage/' . $restaurant->profile_photo) }}" alt="">
                                            <div class="listing__item__pic__tag">VIEWS: {{ $restaurant->views }} </div>
                                            <div class="listing__item__pic__btns">
                                                <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                                <a href="#"><span class="icon_like_alt"></span></a>
                                            </div>
                                        </div>
                                        <div class="listing__item__text">
                                            <div class="listing__item__text__inside">
                                                <h5>{{ $restaurant->name }}</h5>
                                                <div class="listing__item__text__rating">
                                                    <div class="listing__item__rating__star">
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star-half_alt"></span>
                                                    </div>
                                                    <h6>${{ $restaurant->average_price }}</h6>
                                                </div>
                                                <ul>
                                                    <li><span class="icon_pin_alt"></span>{{ $restaurant->address }}</li>
                                                    <li><span class="icon_phone"></span>{{ $restaurant->phone_number}}</li>
                                                </ul>
                                            </div>
                                            <div class="listing__item__text__info">
                                                <div class="listing__item__text__info__left">
                                                    <img src="img/listing/list_small_icon-1.png" alt="">
                                                    <span>{{ $restaurant->description }}</span>
                                                </div>
                                                <div class="listing__item__text__info__right">Open at: {{ $restaurant->opening_hours }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             @endforeach
                                
                                
                                
                               
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        
                        <h2>Restaurants</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="most__search__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-9" role="tab">
                                   
                                    Harare
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-10" role="tab">
                                 
                                    Bulawayo
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-11" role="tab">
                                    
                                    Mutare
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-12" role="tab">
                                    
                                    Gweru
                                </a>
                            </li>
                           <!-- <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">
                                    <span class="flaticon-038-take-away"></span>
                                    Event
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">
                                    <span class="flaticon-031-delivery"></span>
                                    Rental
                                </a>
                            </li>-->
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-9" role="tabpanel">
                            <div class="row">
                            
                             @foreach ($hbars as $restaurant)
                             <div class="col-lg-3 col-md-6">
                                <div class="listing__item">
                                    <div class="listing__item__pic set-bg" data-setbg="{{ asset('../storage/' . $restaurant->profile_photo) }}">
                                        <img src="{{ asset('../storage/' . $restaurant->profile_photo) }}" alt="">
                                        <div class="listing__item__pic__tag">VIEWS: {{ $restaurant->views }} </div>
                                        <div class="listing__item__pic__btns">
                                            <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                            <a href="#"><span class="icon_like_alt"></span></a>
                                        </div>
                                    </div>
                                    <div class="listing__item__text">
                                        <div class="listing__item__text__inside">
                                            <h5>{{ $restaurant->name }}</h5>
                                            <div class="listing__item__text__rating">
                                                <div class="listing__item__rating__star">
                                                    <span class="icon_star"></span>
                                                    <span class="icon_star"></span>
                                                    <span class="icon_star"></span>
                                                    <span class="icon_star"></span>
                                                    <span class="icon_star-half_alt"></span>
                                                </div>
                                                <h6>${{ $restaurant->average_price }}</h6>
                                            </div>
                                            <ul>
                                                <li><span class="icon_pin_alt"></span>{{ $restaurant->address }}</li>
                                                <li><span class="icon_phone"></span>{{ $restaurant->phone_number}}</li>
                                            </ul>
                                        </div>
                                        <div class="listing__item__text__info">
                                            <div class="listing__item__text__info__left">
                                                <img src="img/listing/list_small_icon-1.png" alt="">
                                                <span>{{ $restaurant->description }}</span>
                                            </div>
                                            <div class="listing__item__text__info__right">Open at: {{ $restaurant->opening_hours }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             @endforeach

                               
                               
                                
                                
                                
                                
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-10" role="tabpanel">
                            <div class="row">
                                @foreach ($bbars as $restaurant)
                                <div class="col-lg-3 col-md-6">
                                    <div class="listing__item">
                                        <div class="listing__item__pic set-bg" data-setbg="{{ asset('../storage/' . $restaurant->profile_photo) }}">
                                            <img src="{{ asset('../storage/' . $restaurant->profile_photo) }}" alt="">
                                            <div class="listing__item__pic__tag">VIEWS: {{ $restaurant->views }} </div>
                                            <div class="listing__item__pic__btns">
                                                <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                                <a href="#"><span class="icon_like_alt"></span></a>
                                            </div>
                                        </div>
                                        <div class="listing__item__text">
                                            <div class="listing__item__text__inside">
                                                <h5>{{ $restaurant->name }}</h5>
                                                <div class="listing__item__text__rating">
                                                    <div class="listing__item__rating__star">
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star-half_alt"></span>
                                                    </div>
                                                    <h6>${{ $restaurant->average_price }}</h6>
                                                </div>
                                                <ul>
                                                    <li><span class="icon_pin_alt"></span>{{ $restaurant->address }}</li>
                                                    <li><span class="icon_phone"></span>{{ $restaurant->phone_number}}</li>
                                                </ul>
                                            </div>
                                            <div class="listing__item__text__info">
                                                <div class="listing__item__text__info__left">
                                                    <img src="img/listing/list_small_icon-1.png" alt="">
                                                    <span>{{ $restaurant->description }}</span>
                                                </div>
                                                <div class="listing__item__text__info__right">Open at: {{ $restaurant->opening_hours }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             @endforeach
                                
                                
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-11" role="tabpanel">
                            <div class="row">
                                @foreach ($mbars as $restaurant)
                                <div class="col-lg-3 col-md-6">
                                    <div class="listing__item">
                                        <div class="listing__item__pic set-bg" data-setbg="{{ asset('../storage/' . $restaurant->profile_photo) }}">
                                            <img src="{{ asset('../storage/' . $restaurant->profile_photo) }}" alt="">
                                            <div class="listing__item__pic__tag">VIEWS: {{ $restaurant->views }} </div>
                                            <div class="listing__item__pic__btns">
                                                <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                                <a href="#"><span class="icon_like_alt"></span></a>
                                            </div>
                                        </div>
                                        <div class="listing__item__text">
                                            <div class="listing__item__text__inside">
                                                <h5>{{ $restaurant->name }}</h5>
                                                <div class="listing__item__text__rating">
                                                    <div class="listing__item__rating__star">
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star-half_alt"></span>
                                                    </div>
                                                    <h6>${{ $restaurant->average_price }}</h6>
                                                </div>
                                                <ul>
                                                    <li><span class="icon_pin_alt"></span>{{ $restaurant->address }}</li>
                                                    <li><span class="icon_phone"></span>{{ $restaurant->phone_number}}</li>
                                                </ul>
                                            </div>
                                            <div class="listing__item__text__info">
                                                <div class="listing__item__text__info__left">
                                                    <img src="img/listing/list_small_icon-1.png" alt="">
                                                    <span>{{ $restaurant->description }}</span>
                                                </div>
                                                <div class="listing__item__text__info__right">Open at: {{ $restaurant->opening_hours }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             @endforeach

                                
                                
                                
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-12" role="tabpanel">
                            <div class="row">


                                @foreach ($gbars as $restaurant)
                                <div class="col-lg-3 col-md-6">
                                    <div class="listing__item">
                                        <div class="listing__item__pic set-bg" data-setbg="{{ asset('../storage/' . $restaurant->profile_photo) }}">
                                            <img src="{{ asset('../storage/' . $restaurant->profile_photo) }}" alt="">
                                            <div class="listing__item__pic__tag">VIEWS: {{ $restaurant->views }} </div>
                                            <div class="listing__item__pic__btns">
                                                <a href="#"><span class="icon_zoom-in_alt"></span></a>
                                                <a href="#"><span class="icon_like_alt"></span></a>
                                            </div>
                                        </div>
                                        <div class="listing__item__text">
                                            <div class="listing__item__text__inside">
                                                <h5>{{ $restaurant->name }}</h5>
                                                <div class="listing__item__text__rating">
                                                    <div class="listing__item__rating__star">
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star"></span>
                                                        <span class="icon_star-half_alt"></span>
                                                    </div>
                                                    <h6>${{ $restaurant->average_price }}</h6>
                                                </div>
                                                <ul>
                                                    <li><span class="icon_pin_alt"></span>{{ $restaurant->address }}</li>
                                                    <li><span class="icon_phone"></span>{{ $restaurant->phone_number}}</li>
                                                </ul>
                                            </div>
                                            <div class="listing__item__text__info">
                                                <div class="listing__item__text__info__left">
                                                    <img src="img/listing/list_small_icon-1.png" alt="">
                                                    <span>{{ $restaurant->description }}</span>
                                                </div>
                                                <div class="listing__item__text__info__right">Open at: {{ $restaurant->opening_hours }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             @endforeach
                                
                               
                               
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


        
    </section>
    <!-- Most Search Section End -->

    
    <!-- Feature Location Section Begin -->
    <section class="feature-location spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Explore  places Around Zimbabwe</h2>
                   
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <a href="#" class="feature__location__item large-item set-bg"
                        data-setbg="img/feature-location/fl-1.jpg">
                        <div class="feature__location__item__text">
                            <h5>Harare</h5>
                            <ul>
                                <li>2045 Listings</li>
                                <li>3648 Users</li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <a href="#" class="feature__location__item set-bg"
                                data-setbg="img/feature-location/fl-2.jpg">
                                <div class="feature__location__item__text">
                                    <h5>Mutare</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <a href="#" class="feature__location__item set-bg"
                                data-setbg="img/feature-location/fl-3.jpg">
                                <div class="feature__location__item__text">
                                    <h5>Gweru</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="feature__location__item set-bg" data-setbg="img/feature-location/fl-4.jpg" style="background-image:img/feature-location/fl-4.jpg; z-index: 1000;" ;>
                        <div class="feature__location__item__text">
                            <h5>Bulawayo</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Location Section End -->

    
    
    
    <!-- Newslatter Section Begin -->
    <section class="newslatter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="newslatter__text">
                        <h3>Subscribe Newsletter</h3>
                        <p>Subscribe to our newsletter and don’t miss anything</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <form action="#" class="newslatter__form">
                        <input type="text" placeholder="Your email">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Newslatter Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__about">
                        
                       
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__address">
                        <ul>
                          
                            
                            
                            <li>
                                <span>Connect Us:</span>
                                <div class="footer__social">
                                    <a href="https://www.facebook.com/profile.php?id=100090935823927"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/pavwellexcelsolutions.official/"><i class="fa fa-instagram"></i></a>
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved<i class="fa fa-like" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Pavwell Excell Solutions</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="/js2/jquery-3.3.1.min.js"></script>
    <script src="/js2/bootstrap.min.js"></script>
    <script src="/js2/jquery.nice-select.min.js"></script>
    <script src="/js2/jquery-ui.min.js"></script>
    <script src="/js2/jquery.nicescroll.min.js"></script>
    <script src="/js2/jquery.barfiller.js"></script>
    <script src="/js2/jquery.magnific-popup.min.js"></script>
    <script src="/js2/jquery.slicknav.js"></script>
    <script src="/js2/owl.carousel.min.js"></script>
    <script src="/js2/main.js"></script>

     <!-- Js Plugins -->
  

</body>

</html>
