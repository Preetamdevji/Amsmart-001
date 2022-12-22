@extends('admin/layout/master')     
@section('page-title')
  Manage User                        
@endsection
@section('main-content')

    <!-- Main content -->
    <section class="content">
      
      <!-- /.row -->
      <div class="box">
            <div class="box-header with-border">
              
            <h3 class="box-title">     
            <a href="user/create" class="btn btn-default btn-xm"><i class="fa fa-plus"></i></a>
            </h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="usertable" class="table table-bordered">
                <thead style="background-color: #F8F8F8;">
                  <tr>
                  <th width="4%"><input type="checkbox" name="" id="checkAll"></th>
                    <th width="25%">firstname</th>
                    <th width="15%">designation</th>
                    <th width="20%">user Image</th>
                    <th width="20%">mobile</th>
                    <th width="10%">Status</th>
                    <th width="10%">Action</th>

              </tr>
                </thead>

                    @foreach($user as $item)

                    <td><input type="checkbox" name="" id="" class="checkSingle"></td>

                    <td>{{$item->fullname}}</td>
                    <td>{{$item->designation}}</td>
                    <td><img src="{{asset('uploads/'.$item->user_img)}}" height="25" width="25" class="rounded-circle"></td>
                 
                    <td>{{$item->mobile}}</td>
                    <td>
                      <input data-id="{{$item->id}}" class="toggle-class" type="checkbox" data-onstyle="info" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Deactive" {{ $item->status ? 'checked' : '' }}>
                    </td>

                    <td>

                    <a href="/admin/user/{{$item->id}}/edit" class="btn btn-info btn-flat btn-sm"> <i class="fa fa-edit"></i></a>
                    

                    <form action="{{url('/')}}/admin/user/{{$item->id}}" method="post">
                      @method('DELETE')
                      @csrf
                      <button onclick="return confirm('Are you sure do you want to delete');" data-toggle="tooltip" title="trash" class="btn btn-danger btn-flat btn-sm"> <i class="fa fa-trash-o"></i></button>
                  </form> 


                 

                   </td>
                </tr>

                  @endforeach
               
              </table>
            </div>
            <!-- /.box-body -->
          
            <!-- /.box-body -->
          </div>



    </section>
@endsection

@push('scripts')
<script>
    $(document).ready( function () {
    $('#usertable').DataTable();
});
    $('.toggle-class').change(function() { 
           var status = $(this).prop('checked') == true ? 1 : 0;  
           var brand_id = $(this).data('id');  
           $.ajax({ 
               type: "GET", 
               dataType: "json", 
               url: "{{route('update_user_status')}}", 
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