@extends('admin/layout/master')     
@section('page-title')
  Add Banner              
@endsection
@section('main-content')

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->
      <form name="formCreate" id="formCreate" method="post" action="/admin/banner_section" enctype="multipart/form-data">
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
                      <input type="text" value="{{old('top_title')}}" name="top_title" class="form-control" id="name" placeholder="Top Title">
                  </div>
                </div> 
              </div>
       

              <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('title') has-error @enderror">
                    <label for="title">Title<span class="text text-red">*</span></label>
                      <input type="text" value="{{old('title')}}" name="title" class="form-control" id="name" placeholder="Title">
                  </div>
                </div> 
              </div>

       

              <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('flag') has-error @enderror">
                    <label for="title">Flag<span class="text text-red">*</span></label>
                    <select class="form-control select2" value="{{old('flag')}}" name="flag" id="flag" style="width: 100%;">
                      <option> -- Select Flag -- </option>
                      <option value="home_slider">home_slider</option>
                      <option value="home_banner">home_banner</option>
                      <option value="deal_banner">deal_banner</option>
                    </select>
                  </div>
                </div> 
              </div>
    
              <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group">
                    <label for="title">Button</label>
                      <input type="text" name="button" value="{{old('button')}}" class="form-control" id="button" placeholder="Write button name here...">
                  </div>
                </div> 
              </div>
        
              <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('slider_image') has-error @enderror">
                    <label for="slider_img">Slider Image <span class="text text-red">*</span></label>
                      <input type="file" value="{{old('slider_image')}}" name="slider_image" class="form-control" id="slider_image" placeholder="Your Product Image Here...">
                      <small class="label label-warning">Upload Product Image</small>
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
            <a href="/admin/banner_section" type="reset" class="btn btn-danger">Cancel</a>
          </div>
      </div>
      <!-- /.box -->
      </form>




    </section>
    <!-- /.content -->
@endsection
