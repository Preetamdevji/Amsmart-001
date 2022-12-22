@extends('admin/layout/master')     
@section('page-title')
  Manage Brand                        
@endsection
@section('main-content')

    <!-- Main content -->
    <section class="content">
      
      <!-- /.row -->
     <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"> 
                    <a href="/admin/brand/create" class="btn btn-default btn-xm"><i class="fa fa-plus"></i></a>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="brandTable" class="table table-bordered">
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
                @forelse($brands as $brand)
                <tr>
                  <td><input type="checkbox" name="" id="" class="checkSingle"></td>
                  <td>{{$brand->title}}</td>
                  <td>{{$brand->slug}}</td>
                  <td>{{$brand->description}}</td>
                  
                  <td>
                    <input data-id="{{$brand->id}}" class="toggle-class" type="checkbox" data-onstyle="info" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Deactive" {{ $brand->status ? 'checked' : '' }}>
                  </td>
                  <td>
                      <a href="/admin/brand/{{$brand->id}}/edit" class="btn btn-info btn-flat btn-sm"> <i class="fa fa-edit"></i></a>
                     
                      <form action="/admin/brand/{{$brand->id}}" method="post">
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
    $('#brandTable').DataTable();
});
    $('.toggle-class').change(function() { 
           var status = $(this).prop('checked') == true ? 1 : 0;  
           var brand_id = $(this).data('id');  
           $.ajax({ 
               type: "GET", 
               dataType: "json", 
               url: "{{route('update_brand_status')}}", 
               data: {'status': status, 'brand_id': brand_id}, 
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