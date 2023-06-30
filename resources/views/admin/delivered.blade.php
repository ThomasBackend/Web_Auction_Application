<!DOCTYPE html>
<html lang="en">
  <head>
 @include('admin.css')

 <style type="text/css">

.center{
  margin:auto;
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
  background: skyblue;
}
.th_deg{
  padding: 30px;
  color:whitesmoke;
}
</style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

           
    <h1 class="font_size">Delivered Products</h1>

    <table class="table">
        <thead>
            <tr class="th_color">
                <th class="th_deg">ID</th>
                <th class="th_deg">Name</th>
                <th class="th_deg">Description</th>
                <th class="th_deg">Winner</th>
                <th class="th_deg">Final Price</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->winner_id }}</td>
                    <td>{{ $product->current_price }}</td>
                    
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



          </div>
        </div>        
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
  </body>
</html>