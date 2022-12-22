@extends('admin/layout/master')     
@section('page-title')
  Edit settings                       
@endsection
@section('main-content')

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->

      <form action="/admin/home_slider/{{$home_slider->id}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('put')
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
          <!-- row start -->
          <div class="row"> 
                <div class="col-xs-6">
                  
                 <div class="form-group">
                    <label for="title">Top_Title<span class="text text-red">*</span></label>
                      <input type="text" value="{{$home_slider->top_title}}" name="top_title" class="form-control" id="fullname" placeholder="fullname">
                    </div>

                    <span class="text-danger">
                    @error('top_title')
                    {{$message}}
                    @enderror
                    </span>
 
                    <div class="form-group">
                    <label for="slug">title <span class="text text-red">*</span></label>
                      <input type="text" value="{{$home_slider->title}}" name="title" class="form-control" id="designation" placeholder="designation">
                    </div>

                    <span class="text-danger">
                    @error('title')
                    {{$message}}
                    @enderror
                    </span>
              
                    <div class="form-group">
                    <label for="body">flag <span class="text text-red">*</span></label>
                      <input type="text" value="{{$home_slider->flag}}" name="flag" class="form-control" id="flag" placeholder="flag">
                    </div>

                    <span class="text-danger">
                    @error('flag')
                    {{$message}}
                    @enderror
                    </span>


                    <div class="form-group">
                    <label for="slug">button text<span class="text text-red">*</span></label>
                      <input type="text" value="{{$home_slider->button}}" name="button" class="form-control" id="button" placeholder="button text here..">
                    </div>

                    <span class="text-danger">
                    @error('button')
                    {{$message}}
                    @enderror
                    </span>

                 
                   <div class="col-xs-6">
                    <div class="form-group">
                      <label for="book_img">User Image</label>
                      <input type="file" class="form-control" name="slider_image" id="slider_image" >
                      <small class="label label-warning">Cover Photo will be uploaded</small>
                    </div>

                    
                    <span class="text-danger">
                    @error('slider_img')
                    {{$message}}
                    @enderror
                    </span>

                    <div class="col-lg-4">
                  <div class="form-group">
                      <label class="form-label">Status</label>
                      <div class="form-check">

                       <div class="d-inline-block">
                          <input name="status" value="1" type="radio" id="crYes" name="credentialRadio" {{ $home_slider->status == 1 ? 'checked' : '' }}>
                          <label class="form-check-label" for="crYes">Active</label>
                        </div>

                          <div class="d-inline-block mx-5">
                          <input name="status" value="0" type="radio" id="crNo" name="credentialRadio" {{ $home_slider->status == 0 ? 'checked' : '' }}>
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
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
          </div>
      </div>
      <!-- /.box -->
</form>
      <!-- form end -->

    </section>
    <!-- /.content -->
@endsection
