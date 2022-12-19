@extends('admin/layout/master')     
@section('page-title')
  Edit CMS Pages
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->
      <form name="formEdit" id="formEdit" method="post" action="/admin/cms_pages/{{$CmsPages->id}}" enctype="multipart/form-data">
        @csrf
        @method('put')
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
          <!-- row start -->
          <!-- row start -->
          <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('top_title') has-error @enderror">
                    <label for="title">Top Title <span class="text text-red">*</span></label>
                      <input type="text" name="top_title" class="form-control" id="top_title" placeholder="Top Title" value="{{$CmsPages->top_title}}">
                  </div>
                </div> 
              </div>

              <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('title') has-error @enderror">
                    <label for="title">Title<span class="text text-red">*</span></label>
                      <input type="text" name="title" class="form-control description" id="title" placeholder="Title" value="{{$CmsPages->title}}">
                  </div>
                </div> 
              </div>

              <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('body') has-error @enderror">
                    <label for="title">Body <span class="text text-red">*</span></label>
                      <textarea class="form-control description" name="body" value="{{ old('body') }}" rows="4" id="body" placeholder="Write Description Here...">{{$CmsPages->body}}</textarea>
                  </div>
                </div> 
              </div>

              <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('flag') has-error @enderror">
                    <label for="title">Flag <span class="text text-red">*</span></label>
                      <input type="text" name="flag" class="form-control" id="flag" placeholder="Flag" value="{{$CmsPages->flag}}">
                  </div>
                </div> 
              </div>
           

              <div class="row gx-1"> 
                <div class="col-md-4 col-sm-8">
                 <div class="form-group">
                    <label for="banner_image">Image <span class="text text-red">*</span></label>
                      <input type="file" name="image" class="form-control" id="image" value="{{ $CmsPages->image }}">
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
                          <input name="status" value="1" type="radio" id="crYes" name="credentialRadio" {{ $CmsPages->status == 1 ? 'checked' : '' }}>
                          <label class="form-check-label" for="crYes">Active</label>
                        </div>
                        <div class="d-inline-block mx-5">
                          <input name="status" value="0" type="radio" id="crNo" name="credentialRadio" {{ $CmsPages->status == 0 ? 'checked' : '' }}>
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