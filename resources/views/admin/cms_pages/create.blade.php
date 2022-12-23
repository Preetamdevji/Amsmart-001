@extends('admin/layout/master')     
@section('page-title')
Add CMS Pages                      
@endsection
@section('main-content')

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->

      <form action="/admin/cms_pages" method="post" enctype="multipart/form-data">
      @csrf
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
          <!-- row start -->
          <div class="row"> 
                <div class="col-xs-6">
                  
                 <div class="form-group @error('top_title') has-error @enderror">
                    <label for="title">Top Title <span class="text text-red">*</span></label>
                      <input type="text" name="top_title" value="{{old('top_title')}}" class="form-control" id="top_title" placeholder="top_title">
                    </div>

            
                    <div class="form-group @error('title') has-error @enderror">
                    <label for="slug">Title <span class="text text-red">*</span></label>
                      <input type="text" name="title" value="{{old('title')}}" class="form-control" id="title" placeholder="title">
                    </div>

              
                    <div class="form-group @error('text') has-error @enderror">
                    <label for="message">Body</label>
                    <textarea class="form-control" name="text" rows="5" id="text" placeholder="Body">{{old('text')}}</textarea>
                  </div>
                


                <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('flag') has-error @enderror">
                    <label for="title">Flag<span class="text text-red">*</span></label>
                    <select class="form-control select2" value="{{old('flag')}}" name="flag" id="flag" style="width: 100%;">
                      <option> -- Select Flag -- </option>
                      <option value="about_us">about_us</option>
                      <option value="faq">faq</option>
                    </select>
                  </div>
                </div> 
              </div>

      
               
                    <div class="row gx-3">
  									<div class="col-md-4 col-sm-6 pt-2">
  										<div class="form-group">
  											<label class="form-label">Status</label>
  											<div class="form-check">
  												<div class="d-inline-block">
  													<input name="status" value="1" checked type="radio" id="crYes" class="form-check-input">
  													<label class="form-check-label" for="crYes">Yes</label>
  												</div>
  												<div class="d-inline-block mx-5">
  													<input name="status" value="0" type="radio" id="crNo" class="form-check-input">
  													<label class="form-check-label" for="crNo">No</label>
                          </div>
  											</div>
  										</div>
  									</div>	

                    <div class="col-xs-6">
                      <div class="form-group">
                        <label for="img">Image</label>
                        <input type="file" class="form-control" name="img" id="img" >
                        <small class="label label-warning">Section Image will be uploaded</small>
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
@endsection
