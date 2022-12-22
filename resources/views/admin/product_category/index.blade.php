@extends('admin/layout/master')     
@section('page-title')
  Edit Product_Category                        
@endsection
@section('main-content')

    <!-- Main content -->
    <section class="content">
      
      <!-- /.row -->
     <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"> 
                    <a href="/admin/product_category/create" class="btn btn-default btn-xm"><i class="fa fa-plus"></i></a>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="Product_catTable" class="table table-bordered">
                <thead style="background-color: #F8F8F8;">
                  <tr>
                    <th><input type="checkbox" name="" id="checkAll"></th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                  
                  </tr>
                </thead>
                @forelse($Product_category as $category)
                <tr>
                  <td><input type="checkbox" name="" id="" class="checkSingle"></td>
                  <td>{{$category->title}}</td>
                  <td>{{$category->slug}}</td>
                  <td>{{$category->description}}</td>
                  
                  <td>
                    <input data-id="{{$category->id}}" class="toggle-class" type="checkbox" data-onstyle="info" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Deactive" {{ $category->status ? 'checked' : '' }}>
                  </td>
                  <td>
                      <a href="/admin/product_category/{{$category->id}}/edit" class="btn btn-info btn-flat btn-sm"> <i class="fa fa-edit"></i></a>
                     
                      <form action="/admin/product_category/{{$category->id}}" method="post">
                        @csrf
                        @method('delete')
                      <button class="btn btn-danger btn-flat btn-sm"> <i class="fa fa-trash-o"></i></button>
                      </form>
                    </td>
                </tr>
                @empty
                  <div class="alert alert-danger">No record found!</div>
                @endforelse
            </table>
            </div>
            <!-- /.box-body -->

          </div>
            <!-- /.box-body -->
          </div>


    </section>
@endsection  

@push('scripts')
<script>
    $(document).ready( function () {
    $('#Product_catTable').DataTable();
});
    $('.toggle-class').change(function() { 
           var status = $(this).prop('checked') == true ? 1 : 0;    
           var Product_cat_id = $(this).data('id');  
           $.ajax({ 
               type: "GET", 
               dataType: "json", 
               url: "{{route('update_Product_cat_status')}}", 
               data: {'status': status, 'Product_cat_id': Product_cat_id}, 
               success: function(data){ 
                  Swal.fire(
                    'Status Update!',
                    'You updated the status!',
                    'success'
                  )
            } 
         }); 
      }); 
 
</script>
@endpush