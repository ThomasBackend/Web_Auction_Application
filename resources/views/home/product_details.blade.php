<!DOCTYPE html>
<html>
   <head>
<base href="/public">

      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
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
        @include('home.header')
         <!-- end header section -->

         @if (session()->has('message'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

      {{ session()->get('message') }}

    </div>
      
    @endif

<div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto; width: 50%; padding: 30px;">
         <h1 style="text-align: center; font-size: 40px; padding-top: 20px;">{{ $product->title }}</h1>
         <div class="img-box">
         <img  src="product/{{ $product->image }}">
        </div><strong>
         <p>{{ $product->description }}</p>
         <p>Start date: {{ $product->start_date }}</p>
         <p>End date: {{ $product->end_date }}</p>
         <p>Starting price: {{ $product->starting_price }}</p>
         <p>Current price: {{ $product->current_price }}</p>
         <p> Current Winner: {{ $product->winner_id }}</p>
         
         <form method="POST" action="{{ route('bid.submit', $product->id) }}">
             @csrf
             <label for="bid">Your bid:</label>
             <input type="number" name="bid" id="bid" value="{{ old('bid') }}" required>
             <button type="submit" class="btn btn-primary" style="color:black">Submit bid</button>
         </form>
         </strong>
        </div>



         
      @include('home.footer')
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





