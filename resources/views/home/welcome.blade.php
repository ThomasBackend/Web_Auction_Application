<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Online Auction Project</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
          <div class="container">
             <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png" alt="#" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav">
                     <!-- <li class="nav-item active">
                         <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                      </li> -->
                     
                  
                      <li class="nav-item">
                       <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                       <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                    </li>
                    
                    
        
                   </ul>
                </div>
             </nav>
          </div>
        </header>
         <!-- end header section -->
         <!-- slider section -->
         <section class="slider_section ">
          <div class="slider_bg_box">
             <img src="images/slider-bg.jpg" alt="">
          </div>
          <div id="customCarousel1" class="carousel slide" data-ride="carousel">
             <div class="carousel-inner">
                <div class="carousel-item active">
                   <div class="container ">
                      <div class="row">
                         <div class="col-md-7 col-lg-6 ">
                            <div class="detail-box">
                               <h1 style="padding-top: 140px; ">
                                  
                                  Place A Bid On Any Item
                               </h1>
                               <p style="color: black; padding-top: 15px;"><strong>
                                  Place a bid on any of our items listed in the product page.</strong>
                               </p>
                               <div class="btn-box">
                                  <a href="{{ url('login') }}" class="btn1">
                                  Login
                                  </a>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="carousel-item ">
                   <div class="container ">
                      <div class="row">
                         <div class="col-md-7 col-lg-6 ">
                            <div class="detail-box">
                               <h1 style="padding-top: 140px; ">
                                  View Your Active Bids
                               </h1>
                               <p style="color: black; padding-top: 15px;"><strong>
                                Monitor your winning bids in the active bids page.</strong>
                             </p>
                               <div class="btn-box">
                                  <a href="{{ url('login') }}" class="btn1">
                                  Login
                                  </a>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="carousel-item">
                   <div class="container ">
                      <div class="row">
                         <div class="col-md-7 col-lg-6 ">
                            <div class="detail-box">
                               <h1 style="padding-top: 140px; ">
                                  Get Your Items Delivered
                               </h1>
                               <p style="color: black; padding-top: 15px;"><strong>
                                Click the "Deliver to me" button on the cart page and your items will be delivered to your address anywhere within Babcock University.</strong>
                             </p>
                               <div class="btn-box">
                                  <a href="{{ url('login') }}" class="btn1">
                                  Login
                                  </a>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="container">
                <ol class="carousel-indicators">
                   <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                   <li data-target="#customCarousel1" data-slide-to="1"></li>
                   <li data-target="#customCarousel1" data-slide-to="2"></li>
                </ol>
             </div>
          </div>
        </section>
         <!-- end slider section -->
      </div>
      <!-- why section -->
      @include('home.why')
      <!-- end why section -->
      
      <!-- arrival section -->
      
      <!-- end arrival section -->
      
      

      <!-- subscribe section -->
    
      <!-- end subscribe section -->
      <!-- client section -->
     @include('home.testimonial')
      <!-- end client section -->
      <!-- footer start -->
      <footer style="background-color:wheat">
        <div class="container">
           <div class="row">
              <div class="col-md-4">
                  <div class="full">
                     <div class="logo_footer">
                       <a href="#"><img width="210" src="images/logo.png" alt="#" /></a>
                     </div>
                     <div class="information_f">
                       <p><strong>ADDRESS:</strong> Babcock University, Ilishan-Remo, Ogun State, Nigeria.
                        </p>
                       <p><strong>TELEPHONE:</strong> +234 91 5743 4838</p>
                       <p><strong>EMAIL:</strong> thomasmj.mt@gmail.com</p>
                     </div>
                  </div>
              </div>
              <div class="col-md-8">
                 <div class="row">
                 <div class="col-md-7">
                    <div class="row">
                       <div class="col-md-6">
                    <div class="widget_menu">
                       <h3>Menu</h3>
                       <ul>
                          <li><a href="{{ url('/') }}">Home</a></li>
                          <li><a href="{{ url('login') }}">login</a></li>
                          <li><a href="{{ url('register') }}">Register</a></li>
                          
                         
                       </ul>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="widget_menu">
                      
                          
                       </ul>
                    </div>
                 </div>
                    </div>
                 </div>     
                 <div class="col-md-5">
                    <div class="widget_menu">
                       
                       
                    </div>
                 </div>
                 </div>
              </div>
           </div>
        </div>
      </footer>
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://html.design/">Michael Thomas Toyi, Daniel Daro Jimmy, Illoba Paul</a><br>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>