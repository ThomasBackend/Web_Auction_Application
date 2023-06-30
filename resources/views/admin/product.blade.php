<!DOCTYPE html>
<html lang="en">
  <head>
 @include('admin.css')

 <style type="text/css">
.div_center{
  text-align: center;
  padding-top: 40px;
}
.font_size{
  font-size: 40px;
  padding-bottom: 40px;
}
.text_color{
  color: black;
  padding-bottom: 20px;
}
label{
  display: inline-block;
  width: 200px;
}
.div_design{
  padding-bottom: 15px;
}
</style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
      
<div class="main-panel">
  <div class="content-wrapper">

    @if (session()->has('message'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

      {{ session()->get('message') }}

    </div>
      
    @endif

<div class="div_center">
<h1 class="font_size">Add Products</h1>

<div class="div_design">

  <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">

    @csrf

<label>Product Title :</label>
<input class="text_color" type="text" name="title" placeholder="Write a title" required="">

</div>


<div class="div_design">

  <label>Product Description :</label>
  <input class="text_color" type="text" name="description" placeholder="Write a description" required="">
  
  </div>

  <div class="div_design">

    <label>Product Image :</label>
    <input  type="file" name="image" required="">
    
    </div>

    <div class="div_design">

      <label>Product Starting Price :</label>
      <input class="text_color" type="number" name="starting_price" placeholder="Write The Price" required="">
      
      </div>

      <div class="div_design">

        <label>Auction Start Date :</label>
        <input class="text_color" type="date" name="start_date" placeholder="Write a start date" required="">
        
        </div>

        <div class="div_design">

          <label>Auction End Date :</label>
          <input class="text_color" type="date" name="end_date" placeholder="Write an end date" required="">
          
          </div>

          <div class="div_design">

            
            <input  type="submit" value="Add Product" class="btn btn-primary">
            
            </div>
          </form>
        

</div>

  </div>
</div>

   @include('admin.script')
  </body>
</html>