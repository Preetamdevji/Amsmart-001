@extends('admin/layout/master')     
@section('page-title')
  Add CMS Page
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->
      <form name="formCreate" id="formCreate" method="post" action="/admin/cms_pages" enctype="multipart/form-data">
        @csrf
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
          <!-- row start -->
          <!-- row start -->
          <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('top_title') has-error @enderror">
                    <label for="title">Top Title <span class="text text-red">*</span></label>
                      <input type="text" name="top_title" class="form-control" value="{{ old('top_title') }}" id="name" placeholder="Top Title">
                  </div>
                </div> 
              </div>

              <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('title') has-error @enderror">
                    <label for="title">Title<span class="text text-red">*</span></label>
                      <input type="text" name="title" class="form-control description" value="{{ old('title') }}" id="name" placeholder="Title">
                  </div>
                </div> 
              </div>

              <div class="row gx-1"> 
                <div class="col-md-8 col-sm-8">
                 <div class="form-group @error('body') has-error @enderror">
                    <label for="title">Body <span class="text text-red">*</span></label>
                      <textarea class="form-control description" name="body" rows="4" id="body" placeholder="Your Description Here...">{{ old('body') }}</textarea>
                  </div>
                </div> 
              </div>

              <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('flag') has-error @enderror">
                    <label for="title">Flag <span class="text text-red">*</span></label>
                      <input type="text" name="flag" class="form-control" value="{{ old('flag') }}" id="flag" placeholder="Flag">
                  </div>
                </div> 
              </div>

              <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('image') has-error @enderror">
                    <label for="banner_image">Image <span class="text text-red">*</span></label>
                      <input type="file" name="image" class="form-control" value="{{ old('image') }}" id="image" placeholder="Image">
                      <small class="label label-warning">Cover Photo will be uploaded</small>
                  </div>
                </div> 
              </div>

              <div class="row gx-1">
                <div class="col-lg-4">
                  <div class="form-group">
                      <label class="form-label">Status</label>
                      <div class="form-check">
                        <div class="d-inline-block">
                          <input name="status" value="1" type="radio" id="crYes" name="credentialRadio" checked class="form-check-input">
                          <label class="form-check-label" for="crYes">Active</label>
                        </div>
                        <div class="d-inline-block mx-5">
                          <input name="status" value="0" type="radio" id="crNo" name="credentialRadio" class="form-check-input">
                          <label class="form-check-label" for="crNo">Deactive</label></div>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- row end -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/admin/cms_pages" type="reset" class="btn btn-danger">Cancel</a>
          </div>
      </div>
      <!-- /.box -->
      </form>
      <!-- form end -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection