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

      <style type="text/css">

        .center{
          margin: auto;
          width: 50%;
          border: 2px solid white;
          text-align: center;
          margin-top: 40px;
        }
        .font_size{
          text-align: center;
          font-size: 40px;
          padding-top: 20px;
        }
        .img_size{
          width: 250px;
          height: 150px;
        }
        .th_color{
          background: wheat;
        }
        .th_deg{
          padding: 30px;
        }
        </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->


         <div style="padding-bottom: 300px">
         <h1 class="font_size">Active Bids</h1>

@if($activeBids->isEmpty())
    <p>You do not have any active bids.</p>
@else
    <table class="center">
        <thead>
            <tr class="th_color">
                <th class="th_deg">Product</th>
                <th class="th_deg">Description</th>
                <th class="th_deg">Current Bid</th>
                <th class="th_deg">Product Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activeBids as $bid)
                <tr>
                    <td>{{ $bid->title }}</td>
                    <td>{{ $bid->description }}</td>
                    <td>{{ $bid->current_price }}</td>
                    <td><a class="btn btn-danger" href="{{ route('product.show', $bid->id) }}">View Product</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
</div>



      <!-- footer start -->
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

