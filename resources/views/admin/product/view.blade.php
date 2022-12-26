@extends('admin/layout/master')     
@section('page-title')
 View Product Detail                       
@endsection
@section('main-content')

    <!-- Main content -->
    <section class="content">
      
      <!-- /.row -->
     <div class="box">
            <div class="box-header with-border">
            
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="text-align: center;">
           
                
       
<h1 style="font-weight: bold;">Product Image</h1>

<td><img src="{{asset('uploads/'.$products->product_img)}}" width="250" height="250" class="rounded-circle"></td>
                
<h3 style="font-weight: bold;">Product Name</h3>

<p style="font-size: 15px; text-decoration: underline;">{{$products->product_name}}</p>
  
<h3 style="font-weight: bold;">Category</h3>

  <p style="font-size: 15px; text-decoration: underline;">{{$products->LinkProductCategory->title}}</p>


  <h3 style="font-weight: bold;">Brand</h3>

  <p style="font-size: 15px; text-decoration: underline;">{{$products->LinkProductBrand->title}}</p>


  <h3 style="font-weight: bold;">availability</h3>

 <p style="font-size: 15px; text-decoration: underline;">{{$products->availability}}</p>

 <h3>Quantity</h3>

<p>{{$products->quantity}}</p>

 <h3 style="font-weight: bold;">Old Price</h3>

<p style="font-size: 15px; text-decoration: underline;">{{$products->old_price}}</p>

<h3 style="font-weight: bold;">New Price</h3>

<p style="font-size: 15px; text-decoration: underline;">{{$products->new_price}}</p>

<h3 style="font-weight: bold;">Color Family</h3>

<p style="font-size: 15px; text-decoration: underline;">{{$products->color_family}}</p>

<h3 style="font-weight: bold;">Description</h3>

<p style="font-size: 15px; text-decoration: underline;">{{$products->description}}</p>


</div>

            <!-- /.box-body -->

          </div>
            <!-- /.box-body -->
          </div>


    </section>
@endsection  


