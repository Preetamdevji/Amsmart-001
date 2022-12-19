@extends('admin/layout/master')
@section('page-title')
  Manage CMS Pages
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
      
      <!-- /.row -->
     <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">
                    <a href="/admin/cms_pages/create" data-toggle="tooltip" title="Insert Record" class="btn btn-primary btn-xm"><i class="fa fa-plus"></i></a>
              </h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="homebannerTable" class="table table-bordered">
                <thead style="background-color: #F8F8F8;">
                  <tr>
                    <th width="4%"><input type="checkbox" name="" id="checkAll"></th>
                    <th width="20%">Top Title</th>
                    <th width="20%">Title</th>
                    <th width="20%">Flag</th>
                    <th width="20%">Status</th>
                    <th width="10%">Manage</th>
                  </tr>
                </thead>
                @forelse($CMSPages as $page)
                <tr>
                  <td><input type="checkbox" name="" id="" class="checkSingle"></td>
                  <td>{{ $page->top_title }}</td>
                  <td>{{ $page->title }}</td>
                  <td>{{ $page->flag }}</td>
                  
                  <td>
                    <input data-id="{{$page->id}}" class="toggle-class" type="checkbox" data-onstyle="info" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Deactive" {{ $page->status ? 'checked' : '' }}>
                  </td>
                  <td>
                      <a href="/admin/cms_pages/{{ $page->id }}/edit" class="btn btn-info btn-flat btn-sm"> <i class="fa fa-edit"></i></a>
   
                      <form method="post" action="/admin/cms_pages/{{ $page->id }}">
                      @csrf
                      @method('delete')
                      <button onclick="return confirm('Are you Sure, You Want To Delete this?')" class="btn btn-danger btn-flat btn-sm"> <i class="fa fa-trash-o"></i></button>
                    </form>
              
                  </td>
                </tr>
                @empty
                  <div class="alert alert-danger">No Record Found!</div>
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
    $('#homebannerTable').DataTable();
});
 $('.toggle-class').change(function() { 
           var status = $(this).prop('checked') == true ? 1 : 0;  
           var cmspages_id = $(this).data('id');  
           $.ajax({ 
               type: "GET", 
               dataType: "json", 
               url: "{{route('update_cms_pages_status')}}", 
               data: {'status': status, 'cmspages_id': cmspages_id}, 
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