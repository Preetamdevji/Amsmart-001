@extends('admin/layout/master')     
@section('page-title')
  Edit CMS Pages                       
@endsection
@section('main-content')

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->

      <form action="/admin/cms_pages/{{$cms->id}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('put')
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
          <!-- row start -->
          <div class="row"> 
                <div class="col-xs-6">
                  
                 <div class="form-group @error('top_title') has-error @enderror">
                    <label for="title">Top Title<span class="text text-red">*</span></label>
                      <input type="text" value="{{$cms->top_title}}" name="top_title" class="form-control" id="fullname" placeholder="fullname">
                    </div>

 
                    <div class="form-group @error('title') has-error @enderror">
                    <label for="slug">Title <span class="text text-red">*</span></label>
                      <input type="text" value="{{$cms->title}}" name="title" class="form-control" id="designation" placeholder="designation">
                    </div>


                    <div class="form-group @error('text') has-error @enderror">
                    <label for="message">Body <span class="text text-red">*</span></label>
                    <textarea class="form-control" name="text" rows="5" id="text" placeholder="Body">{{$cms->body}}</textarea>
                  </div>

          
                    <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('flag') has-error @enderror">
                    <label for="title">Flag<span class="text text-red">*</span></label>
                    <select class="form-control select2"  name="flag" id="flag" style="width: 100%;">
                      <option value="none"> -- Select Flag -- </option>
                      <option value="about_us" {{ $cms->flag == 'about_us' ? 'selected' : '' }}>about_us</option>
                      <option value="faq" {{ $cms->flag == 'faq' ? 'selected' : '' }}>faq</option>
                    </select>
                  </div>
                </div> 
              </div>


                 
                   <div class="col-xs-6">
                    <div class="form-group @error('img') has-error @enderror">
                      <label for="book_img">Image</label>
                      <input type="file" class="form-control" name="img" id="img" alt="NO IMAGE FOUND" >
                      <small class="label label-warning">Section Image will be uploaded</small>
                    </div>


                    <div class="col-lg-4">
                  <div class="form-group">
                      <label class="form-label">Status</label>
                      <div class="form-check">

                       <div class="d-inline-block">
                          <input name="status" value="1" type="radio" id="crYes" name="credentialRadio" {{ $cms->status == 1 ? 'checked' : '' }}>
                          <label class="form-check-label" for="crYes">Active</label>
                        </div>

                          <div class="d-inline-block mx-5">
                          <input name="status" value="0" type="radio" id="crNo" name="credentialRadio" {{ $cms->status == 0 ? 'checked' : '' }}>
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
            <a href="/admin/cms_pages" type="reset" class="btn btn-danger">Cancel</a>
          </div>
      </div>
      <!-- /.box -->
</form>
      <!-- form end -->

    </section>
    <!-- /.content -->
@endsection
