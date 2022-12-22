@extends('admin/layout/master')     
@section('page-title')
  Edit Product Category                        
@endsection
@section('main-content')

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
          <!-- row start -->
          <div class="row"> 
                <div class="col-xs-6">
                  
                <form action="/admin/product_category/{{$category->id}}" method="post">
                  @csrf
                  @method ('put')
                 <div class="form-group">
                    <label for="title">Title <span class="text text-red">*</span></label>
                      <input type="text" name="title" value="{{$category->title}}"  class="form-control" id="title" placeholder="Title">
                    </div>
 
                    <div class="form-group">
                    <label for="slug">Slug <span class="text text-red">*</span></label>
                      <input type="text" name="slug" value="{{$category->slug}}" class="form-control" id="slug" placeholder="Slug">
                    </div>
                   
                    <div class="form-group">
                      <label for="description">Description <span class="text text-red">*</span></label>
                      <textarea class="form-control" name="description" rows="5" id="description" placeholder="Description">{{$category->description}}</textarea>
                    </div>
                
                    <div class="row gx-3">
  									<div class="col-md-4 col-sm-6 pt-2">
  										<div class="form-group">
  											<label class="form-label">Status</label>
  											<div class="form-check">
  												<div class="d-inline-block">
  													<input name="status" value="1" type="radio" id="crYes" checked class="form-check-input" {{ $category->status ? 'checked' : '' }}>
  													<label class="form-check-label" for="crYes">Yes</label>
  												</div>
  												<div class="d-inline-block mx-5">
  													<input name="status" value="0" type="radio" id="crNo" class="form-check-input" {{ $category->status ? 'checked' : '' }}>
  													<label class="form-check-label" for="crNo">No</label>
                          </div>
  											</div>
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
            <a href="/admin/product_category" class="btn btn-danger">Cancel</a>
          </div>
      </div>
      <!-- /.box -->
      </form>
      <!-- form end -->

    </section>
    <!-- /.content -->
@endsection
