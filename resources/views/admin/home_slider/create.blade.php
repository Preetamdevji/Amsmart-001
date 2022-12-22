@extends('admin/layout/master')     
@section('page-title')
  Add Website content                        
@endsection
@section('main-content')

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->
      <form name="formCreate" id="formCreate" method="post" action="/admin/home_slider" enctype="multipart/form-data">
        @csrf
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
          <!-- row start -->
          <!-- row start -->
          <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('name') has-error @enderror">
                    <label for="title">Top Title <span class="text text-red">*</span></label>
                      <input type="text" name="top_title" class="form-control" id="name" placeholder="Top Title">
                  </div>
                </div> 
              </div>
              <span class="text-danger">
                    @error('top_title')
                    {{$message}}
                    @enderror
                    </span>

              <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('name') has-error @enderror">
                    <label for="title">Title<span class="text text-red">*</span></label>
                      <input type="text" name="title" class="form-control" id="name" placeholder="Title">
                  </div>
                </div> 
              </div>

              <span class="text-danger">
                    @error('title')
                    {{$message}}
                    @enderror
                    </span>

              <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('name') has-error @enderror">
                    <label for="title">flag<span class="text text-red">*</span></label>
                      <textarea class="form-control" name="flag" value="{{ old('flag') }}" rows="4" id="flag" placeholder="Description"></textarea>
                  </div>
                </div> 
              </div>

              <span class="text-danger">
                    @error('flag')
                    {{$message}}
                    @enderror
              </span>

              <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('name') has-error @enderror">
                    <label for="title">Button Link <span class="text text-red">*</span></label>
                      <input type="text" name="button" class="form-control" id="button" placeholder="Paste Link Here...">
                  </div>
                </div> 
              </div>
              <span class="text-danger">
                    @error('button')
                    {{$message}}
                    @enderror
              </span>

              <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('name') has-error @enderror">
                    <label for="slider_img">Slider Image <span class="text text-red">*</span></label>
                      <input type="file" name="slider_image" class="form-control" id="slider_image" placeholder="Home Slider Image">
                      <small class="label label-warning">Cover Photo will be uploaded</small>
                  </div>
                </div> 
              </div>

              <span class="text-danger">
                    @error('slider_image')
                    {{$message}}
                    @enderror
              </span>
            

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
            <a href="/admin/home_slider" type="reset" class="btn btn-danger">Cancel</a>
          </div>
      </div>
      <!-- /.box -->
      </form>




    </section>
    <!-- /.content -->
@endsection
