@extends('admin/layout/master')     
@section('page-title')
  Edit User                       
@endsection
@section('main-content')

<style> 
.img-style{
    width: 40px;
    height: 40px;
}
</style>


    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->

      <form action="/admin/user/{{$user->id}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('put')
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
          <!-- row start -->
         <div class="row gx-2"> 
                <div class="col-xs-4">  
                 <div class="form-group @error('fullname') has-error @enderror">
                    <label for="title">Fullname <span class="text text-red">*</span></label>
                      <input type="text" value="{{$user->fullname}}" name="fullname" class="form-control" id="fullname" placeholder="fullname">
                     </div>
                  </div>

                  <div class="col-xs-4"> 
                    <div class="form-group @error('designation') has-error @enderror">
                    <label for="slug">Designation <span class="text text-red">*</span></label>
                      <input type="text" value="{{$user->designation}}" name="designation" class="form-control" id="designation" placeholder="designation">
                    </div>
                  </div>
                </div>

                  <div class="row gx-2">
                    <div class="col-xs-4"> 
                      <div class="form-group @error('mobile') has-error @enderror">
                        <label for="availability">Mobile <span class="text text-red">*</span></label>
                        <input type="number" value="{{$user->mobile}}"  class="form-control" name="mobile" id="mobile" placeholder="mobile">
                      </div>
                  </div>
                </div>


                   <div class="row gx-2">
                    <div class="col-xs-6">
                      <div class="form-group @error('user_img') has-error @enderror">
                        <label for="book_img">User Image</label>
                          <input type="file" class="form-control" name="user_img" id="user_img" >
                        <small class="label label-warning">Cover Photo will be uploaded</small>
                      </div>
                    </div>
                    @if($user->user_img)
                  <img src="{{ asset('uploads/' . $user->user_img) }}" class="img-style" alt="Image 4">
                  @endif
                  </div>

                    

                <div class="row gx-3">
                  <div class="col-md-4 col-sm-6 pt-2">
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <div class="form-check">
                         <div class="d-inline-block">
                            <input name="status" value="1" type="radio" id="crYes" name="credentialRadio" {{ $user->status == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="crYes">Active</label>
                          </div>

                            <div class="d-inline-block mx-5">
                            <input name="status" value="0" type="radio" id="crNo" name="credentialRadio" {{ $user->status == 0 ? 'checked' : '' }}>
                            <label class="form-check-label" for="crNo">Deactive</label>
                          </div>

                        </div>
                    </div>


                </div>
            </div>
            

              <!-- row end -->

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
          </div>
      </div>
      <!-- /.box -->
</form>
      <!-- form end -->

    </section>
    <!-- /.content -->
@endsection
