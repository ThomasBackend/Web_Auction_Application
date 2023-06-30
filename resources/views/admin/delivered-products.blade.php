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
  color:bisque;
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

            @if (session()->has('message'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

      {{ session()->get('message') }}

    </div>
      
    @endif
    <h1 class="font_size">Products To Be Delivered</h1>

    <table class="table">
        <thead>
            <tr class="th_color">
                <th class="th_deg">ID</th>
                <th class="th_deg">Name</th>
                <th class="th_deg">Description</th>
                <th class="th_deg">Winner</th>
                <th class="th_deg">Final Price</th>
                <th class="th_deg">Update Delivery Status</th>
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
                    <td>
                      <form method="POST" action="{{ route('updateDelivery2', $product->id) }}">
                          @csrf
                          
                          <button  type="submit" class="btn btn-primary">Update Delivery Status</button>
                      </form>
                  </td>
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