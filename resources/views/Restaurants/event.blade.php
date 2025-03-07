<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Noticeboad</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="/css2/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css2/animate.css">
    <link rel="stylesheet" href="/css2/owl.carousel.min.css">
    <link rel="stylesheet" href="/css2/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css2/magnific-popup.css">
    <link rel="stylesheet" href="/css2/aos.css">
    <link rel="stylesheet" href="/css2/ionicons.min.css">
    <link rel="stylesheet" href="/css2/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css2/jquery.timepicker.css">
    <link rel="stylesheet" href="/css2/flaticon.css">
    <link rel="stylesheet" href="/css2/icomoon.css">
    <link rel="stylesheet" href="/css2/style.css">
  </head>
  <body>
   
	
    
    <!-- END nav -->

    <section class="home-slider owl-carousel">

		@foreach($events as $accommodations)
		<div class="slider-item" style="background-image: url(/storage/{{ $accommodations->profile_photo}});">
			<div class="overlay"></div>
		  <div class="container">
			<div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
			<div class="col-md-6 text p-4 ftco-animate">
			  <h1 class="mb-3">Zimbabwe</h1>
			  <span class="location d-block mb-3"><i class="icon-my_location"></i> {{ $accommodations->city }}</span>
			  <p>Listed on: {{ $accommodations->created_at }}</p>
			<span class="price">${{ $accommodations->average_price }} /month</span>
			  <a href="{{ route('restaurants.event', $accommodations->id) }}" class="btn-custom p-3 px-4 bg-primary">View Details <span class="icon-plus ml-1"></span></a>
			</div>
		  </div>
		  </div>
		</div>
		@endforeach

          </section>

    <section class="ftco-search">
    	<div class="container">
	    	<div class="row">
					<div class="col-md-12 search-wrap">
						<h2 class="heading h5 d-flex align-items-center pr-4"><span class="ion-ios-search mr-3"></span> Search Property</h2>
						<form action="#" class="search-property">
	        		<div class="row">
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Keyword</label>
	          				<div class="form-field">
	          					<div class="icon"><span class="icon-pencil"></span></div>
			                <input type="text" class="form-control" placeholder="Keyword">
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Location</label>
	          				<div class="form-field">
	          					<div class="icon"><span class="icon-pencil"></span></div>
			                <input type="text" class="form-control" placeholder="City/Locality Name">
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Property Type</label>
	        					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Type</option>
	                        <option value="">Commercial</option>
	                        <option value="">- Office</option>
	                        <option value="">Residential</option>
	                        <option value="">Villa</option>
	                        <option value="">Condominium</option>
	                        <option value="">Apartment</option>
	                      </select>
	                    </div>
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Property Status</label>
	        					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Type</option>
	                        <option value="">Rent</option>
	                        <option value="">Sale</option>
	                      </select>
	                    </div>
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Agents</label>
	        					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Any</option>
	                        <option value="">Jonh Doe</option>
	                        <option value="">Doe Mags</option>
	                        <option value="">Kenny Scott</option>
	                        <option value="">Emily Storm</option>
	                      </select>
	                    </div>
			              </div>
		              </div>
	        			</div>
	        		</div>

	        		<div class="row">
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Min Beds</label>
	        					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">1</option>
	                        <option value="">2</option>
	                        <option value="">3</option>
	                        <option value="">4</option>
	                        <option value="">5</option>
	                      </select>
	                    </div>
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Min Bathroom</label>
	        					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">1</option>
	                        <option value="">2</option>
	                        <option value="">3</option>
	                        <option value="">4</option>
	                        <option value="">5</option>
	                      </select>
	                    </div>
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Min Price</label>
	        					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Min Price</option>
	                        <option value="">$1,000</option>
	                        <option value="">$5,000</option>
	                        <option value="">$10,000</option>
	                        <option value="">$50,000</option>
	                        <option value="">$100,000</option>
	                        <option value="">$200,000</option>
	                        <option value="">$300,000</option>
	                        <option value="">$400,000</option>
	                        <option value="">$500,000</option>
	                        <option value="">$600,000</option>
	                        <option value="">$700,000</option>
	                        <option value="">$800,000</option>
	                        <option value="">$900,000</option>
	                        <option value="">$1,000,000</option>
	                      </select>
	                    </div>
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Min Price</label>
	        					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Min Price</option>
	                        <option value="">$5,000</option>
	                        <option value="">$10,000</option>
	                        <option value="">$50,000</option>
	                        <option value="">$100,000</option>
	                        <option value="">$200,000</option>
	                        <option value="">$300,000</option>
	                        <option value="">$400,000</option>
	                        <option value="">$500,000</option>
	                        <option value="">$600,000</option>
	                        <option value="">$700,000</option>
	                        <option value="">$800,000</option>
	                        <option value="">$900,000</option>
	                        <option value="">$1,000,000</option>
	                        <option value="">$2,000,000</option>
	                      </select>
	                    </div>
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Min Area <span>(sq ft)</span></label>
	          				<div class="form-field">
	          					<div class="icon"><span class="icon-pencil"></span></div>
			                <input type="text" class="form-control" placeholder="Min Area">
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Max Area <span>(sq ft)</span></label>
	          				<div class="form-field">
	          					<div class="icon"><span class="icon-pencil"></span></div>
			                <input type="text" class="form-control" placeholder="Max Area">
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-self-end">
	        				<div class="form-group">
	        					<div class="form-field">
			                <input type="submit" value="Search" class="form-control btn btn-primary">
			              </div>
		              </div>
	        			</div>
	        		</div>
	        	</form>
					</div>
	    	</div>
	    </div>
    </section>


    
    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	
          </div>
        </div>    		
    	</div>
    	<div class="container-fluid">
    		<div class="row">

				@foreach ($events as $accommodation)
				<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="properties">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(/storage/{{ $accommodation->profile_photo }});">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status rent">Rent</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">{{ $accommodation->city }}</a></h3>
		    						<p>Apartment</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">${{ $accommodation->average_price }}<small>/ month</small></span>
    							</div>
    						</div>
    						<p>{{ $accommodation->email }}</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="flaticon-selection"></i> {{ $accommodation->phone_number }}</span>
    							
    						</p>
    					</div>
    				</div>
    			</div>
                
				@endforeach
    			
    			
    		</div>
    	</div>
    </section>

    
    
    	
		
    
  

  <!-- loader -->
  <!--<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>-->


  <script src="js4/jquery.min.js"></script>
  <script src="js4/jquery-migrate-3.0.1.min.js"></script>
  <script src="js4/popper.min.js"></script>
  <script src="js4/bootstrap.min.js"></script>
  <script src="js4/jquery.easing.1.3.js"></script>
  <script src="js4/jquery.waypoints.min.js"></script>
  <script src="js4/jquery.stellar.min.js"></script>
  <script src="js4/owl.carousel.min.js"></script>
  <script src="js4/jquery.magnific-popup.min.js"></script>
  <script src="js4/aos.js"></script>
  <script src="js4/jquery.animateNumber.min.js"></script>
  <script src="js4/bootstrap-datepicker.js"></script>
  <script src="js4/jquery.timepicker.min.js"></script>
  <script src="js4/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js4/google-map.js"></script>
  <script src="js4/main.js"></script>

  </body>
</html>