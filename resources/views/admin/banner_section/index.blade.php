@extends('admin/layout/master')     
@section('page-title')
  Manage Banners                       
@endsection
@section('main-content')

    <!-- Main content -->
    <section class="content">
      
      <!-- /.row -->
      <div class="box">
            <div class="box-header with-border">
              
            <h3 class="box-title">     
            <a href="banner_section/create" class="btn btn-default btn-xm" data-toggle="tooltip" title="insert"><i class="fa fa-plus"></i></a>
            </h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="usertable" class="table table-bordered">
                <thead style="background-color: #F8F8F8;">
                  <tr>
                  <th scope="row">ID</th>
                    <th width="25%">Top Title</th>
                    <th width="15%">Title</th>
                    <th width="20%">Flag</th>
                    <th width="20%">Banner Image</th>
                    <th width="10%">Status</th>
                    <th width="10%">Action</th>
                </tr>
                </thead>

                    @foreach($Banner_Section as $key => $item)

                    <td>{{$item->id}}</td>
                    <td>{{$item->top_title}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->flag}}</td>

                    <td><img src="{{asset('uploads/'.$item->slider_image)}}" height="25" width="25" class="rounded-circle"></td>

                    <td>
                      <input data-id="{{$item->id}}" class="toggle-class" type="checkbox" data-onstyle="info" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Deactive" {{ $item->status ? 'checked' : '' }}>
                  </td>

                    <td>
                      <a href="/admin/banner_section/{{$item->id}}/edit" class="btn btn-info btn-flat btn-sm" data-toggle="tooltip" title="Edit"> <i class="fa fa-edit"></i>
                    </a>
                    
                    <form action="{{url('/')}}/admin/banner_section/{{$item->id}}" method="post">
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
           var banner_id = $(this).data('id');  
           $.ajax({ 
               type: "GET", 
               dataType: "json", 
               url: "{{route('update_banner_section_status')}}", 
               data: {'status': status, 'banner_id': banner_id}, 
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