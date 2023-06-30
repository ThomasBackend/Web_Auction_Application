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
                          <a href="{{ url('/products') }}" class="btn1">
                          Products
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
                          <a href="{{ url('/active-bids') }}" class="btn1">
                          Active Bids
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
                          <a href="{{ route('cart.index') }}" class="btn1">
                          My Cart
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