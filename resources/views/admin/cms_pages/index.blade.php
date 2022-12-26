@extends('admin/layout/master')     
@section('page-title')
  Manage Cms                       
@endsection
@section('main-content')

    <!-- Main content -->
    <section class="content">
      
      <!-- /.row -->
      <div class="box">
            <div class="box-header with-border">
              
            <h3 class="box-title">     
            <a href="cms_pages/create" class="btn btn-default btn-xm" data-toggle="tooltip" title="insert"><i class="fa fa-plus"></i></a>
            </h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="usertable" class="table table-bordered">
                <thead style="background-color: #F8F8F8;">
                  <tr>
                  <th width="4%"><input type="checkbox" name="" id="checkAll"></th>
                    <th width="25%">top_title</th>
                    <th width="15%">title</th>
                    <th width="20%">flag</th>
                    <th width="20%">user Image</th>
                    <th width="10%">Status</th>
                    <th width="10%">Action</th>

              </tr>
                </thead>

                    @foreach($cms as $item)

                    <td><input type="checkbox" name="" id="" class="checkSingle"></td>

                    <td>{{$item->top_title}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->flag}}</td>
                    <td>
                       @if($item->img == 'No image found')
                            <img src="/assets/admin/dist/img/no-image.png" width="100" height="100" class="img-thumbnails" alt="No image found">
                        @else
                            <img src="{{asset('uploads/'.$item->img)}}" height="25" width="25" class="rounded-circle" alt="No image found">
                        @endif
                    </td>
                    <td><input data-id="{{$item->id}}" class="toggle-class" type="checkbox" data-onstyle="info" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Deactive" {{ $item->status ? 'checked' : '' }}></td>
                    <td><a href="/admin/cms_pages/{{$item->id}}/edit" class="btn btn-info btn-flat btn-sm" data-toggle="tooltip" title="edit"> <i class="fa fa-edit"></i></a>
                  
                    <form action="{{url('/')}}/admin/cms_pages/{{$item->id}}" method="post">
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
           var cms_id = $(this).data('id');  
           $.ajax({ 
               type: "GET", 
               dataType: "json", 
               url: "{{route('update_cms_status')}}", 
               data: {'status': status, 'cms_id': cms_id}, 
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