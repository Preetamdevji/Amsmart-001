@extends('admin/layout/master')     
@section('page-title')
  Edit settings                       
@endsection
@section('main-content')

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->

      <form action="/admin/banner_section/{{$Banner_Section->id}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('put')
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
          <!-- row start -->
          <div class="row"> 
                <div class="col-xs-6">
                  
                 <div class="form-group @error('top_title') has-error @enderror">
                    <label for="title">Top_Title<span class="text text-red">*</span></label>
                      <input type="text" value="{{$Banner_Section->top_title}}" name="top_title" class="form-control" id="fullname" placeholder="fullname">
                    </div>

           
 
                    <div class="form-group @error('title') has-error @enderror">
                    <label for="slug">Title <span class="text text-red">*</span></label>
                      <input type="text" value="{{$Banner_Section->title}}" name="title" class="form-control" id="designation" placeholder="designation">
                    </div>


                    <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('flag') has-error @enderror">
                    <label for="title">Flag<span class="text text-red">*</span></label>
                    <select class="form-control select2"  name="flag" id="flag" style="width: 100%;">
                      <option value="none"> -- Select Flag -- </option>
                      <option value="home_slider" {{ $Banner_Section->flag == 'home_slider' ? 'selected' : '' }}>home_slider</option>
                      <option value="home_banner" {{ $Banner_Section->flag == 'home_banner' ? 'selected' : '' }}>home_banner</option>
                      <option value="deal_banner" {{ $Banner_Section->flag == 'deal_banner' ? 'selected' : '' }}>deal_banner</option>
                    </select>
                  </div>
                </div> 
              </div>

        

                    <div class="form-group">
                    <label for="slug">Button</label>
                      <input type="text" value="{{$Banner_Section->button}}" name="button" class="form-control" id="button" placeholder="Button Name here..">
                    </div>


                 
                   <div class="col-xs-6">
                    <div class="form-group">
                      <label for="book_img">slider Image</label>
                      <input type="file" class="form-control" name="slider_image" id="slider_image" >
                      <small class="label label-warning">Cover Photo will be uploaded</small>
                    </div>

                    
       

                    <div class="col-lg-4">
                  <div class="form-group">
                      <label class="form-label">Status</label>
                      <div class="form-check">

                       <div class="d-inline-block">
                          <input name="status" value="1" type="radio" id="crYes" name="credentialRadio" {{ $Banner_Section->status == 1 ? 'checked' : '' }}>
                          <label class="form-check-label" for="crYes">Active</label>
                        </div>

                          <div class="d-inline-block mx-5">
                          <input name="status" value="0" type="radio" id="crNo" name="credentialRadio" {{ $Banner_Section->status == 0 ? 'checked' : '' }}>
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
