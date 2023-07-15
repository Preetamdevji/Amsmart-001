@extends('admin/layout/master')     
@section('page-title')
  Manage Cart     
@endsection
@section('main-content')

    <!-- Main content -->
    <section class="content">
      
      <!-- /.row -->
     <div class="box">
            <!-- <div class="box-header with-border">
              <h3 class="box-title"> 
                    <a href="/cart" class="btn btn-default btn-xm" data-toggle="tooltip" title="insert"><i class="fa fa-plus"></i></a>
              </h3>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="cartTable" class="table table-bordered">
                <thead style="background-color: #F8F8F8;">
                  <tr>
                    <th>ID</th>
                    <th>User Id</th>
                    <th>Product Id</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Status</th>
                  </tr>
                </thead>
                @forelse($cart as $key => $cart)
                <tr>
                  <td>{{$cart->id}}</td>
                  <td>{{$cart->user_id}}</td>
                  <td>{{$cart->product_id}}</td>
                  <td>{{$cart->quantity}}</td>
                  <td>
                      <!-- <a href="/admin/contact/{{ $contact->id }}/edit" class="btn btn-info btn-flat btn-sm" data-toggle="tooltip" title="edit"> <i class="fa fa-edit"></i></a> -->
                      <form action="/admin/cart/{{ $cart->id }}" method="Post">
                      @csrf
                      @method('delete')
                      <button onclick="return confirm('Are You Sure, You Want To Delete this?')" data-toggle="tooltip" title="trash" class="btn btn-danger btn-flat btn-sm"> <i class="fa fa-trash-o"></i></button>
                      </form>
                  </td>
                </tr>
                @empty
                  <div class="alert alert-danger">No record found!</div>
                @endforelse
            </table>
            <!-- /.box-body -->

          </div>
            <!-- /.box-body -->
          </div>


    </section>
@endsection

@push('scripts')
<script>
    $(document).ready( function () {
    $('#cartTable').DataTable();
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