@extends('admin/layout/master')     
@section('page-title')
view Detail                       
@endsection
@section('main-content')

    <!-- Main content -->
    <section class="content">
      
      <!-- /.row -->
     <div class="box">
            <div class="box-header with-border">
            
            </div>
            <!-- /.box-header -->
            <div class="box-body">
           
                
       
<h1>Product</h1>

<td><img src="{{asset('uploads/'.$products->product_img)}}" width="300" height="300" class="rounded-circle"></td>
                
<h3>Product Name</h3>

<p>{{$products->product_name}}</p>
  
<h3>Category ID</h3>

  <p>{{$products->category_id}}</p>


  <h3>Brand ID</h3>

  <p>{{$products->brand_id}}</p>


  <h3>availability</h3>

 <p>{{$products->availability}}</p>


 <h3>Old Price</h3>

<p>{{$products->old_price}}</p>

<h3>New Price</h3>

<p>{{$products->new_price}}</p>

<h3>Color Family</h3>

<p>{{$products->color_family}}</p>

<h3>Product Image</h3>

<p>{{$products->product_img}}</p>

<h3>Description</h3>

<p>{{$products->description}}</p>


</div>

            <!-- /.box-body -->

          </div>
            <!-- /.box-body -->
          </div>


    </section>
@endsection  


