@extends('admin/layout/master')     
@section('page-title')
  Add Product                        
@endsection
@section('main-content')

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->
                  
      <form action="/admin/product" method="post" enctype="multipart/form-data">
        @csrf
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
          <!-- row start -->
          <div class="row gx-1"> 
                <div class="col-md-6 col-sm-6">
                 <div class="form-group @error('product_name') has-error @enderror">
                    <label for="product_name">Product Name<span class="text text-red">*</span></label>
                      <input type="text" name="product_name"  value="{{old('product_name')}}" class="form-control" id="product_name" placeholder="Product Name">
                    </div>
                  </div>
                </div>
  
              <div class="row gx-2"> 
                <div class="col-md-6 col-sm-8">
                  <div class="form-group @error('category_id') has-error @enderror">
                    <label for="category_id">Category ID<span class="text text-red">*</span></label>
                    <select name="category_id" value="{{old('category_id')}}" id="category_id" class="form-control">
                    <option value="" disabled>-- Select Product Category --</option> 
                    @forelse($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                    @empty
                    <div class="alert alert-danger">No record found!</div>
                    @endforelse
                    </select>
                  </div> 
                </div>

                <div class="col-md-6 col-sm-8">
                    <div class="form-group @error('brand_id') has-error @enderror">
                    <label for="brand_id">Brand ID<span class="text text-red">*</span></label>
                    <select name="brand_id" value="{{old('brand_id')}}" id="brand_id" class="form-control">
                      <option value="" disabled>-- Select Brand Category --</option>
                      @forelse($brands as $brand)
                      <option value="{{$brand->id}}">{{$brand->title}}</option>
                      @empty
                      <div class="alert alert-danger">No record found!</div>
                      @endforelse
                    </select>
                  </div>
                </div>
              </div>

              <div class="row gx-3"> 
                <div class="col-md-4 col-sm-8">
                    <div class="form-group @error('availability') has-error @enderror">
                    <label for="availability">Availability<span class="text text-red">*</span></label>
                      <input type="text" name="availability" value="{{old('availability')}}" class="form-control" id="availability" placeholder="Availability">
                    </div>
                  </div>

                <div class="col-md-4 col-sm-8">
                    <div class="form-group @error('old_price') has-error @enderror">
                  <label for="old_price">Old Price<span class="text text-red">*</span></label> 
                  <input type="text" class="form-control" name="old_price" value="{{old('old_price')}}" id="old_price" placeholder="Old Price">
                 </div>
                 </div>

                <div class="col-md-4 col-sm-8">
                 <div class="form-group @error('new_price') has-error @enderror">
                    <label for="new_price">New Price</label>
                    <input type="text" class="form-control" name="new_price" value="{{old('new_price')}}" id="new_price" placeholder="New Price">
                  </div>
                </div>
                </div>


                <div class="row gx-3"> 
                <div class="col-md-4 col-sm-8">
                  <div class="form-group @error('color_family') has-error @enderror">
                    <label for="color_family">Color Family</label>
                    <input type="text" class="form-control" name="color_family" value="{{old('color_family')}}" id="color_family" placeholder="Color Family">
                  </div>
                </div>

                <div class="col-md-4 col-sm-8">
                    <div class="form-group @error('product_img') has-error @enderror">
                      <label for="product_img">Product Image</label>
                      <input type="file" class="form-control" name="product_img" value="{{old('product_img')}}" id="product_img" >
                      <small class="label label-warning">Cover Photo will be uploaded</small>
                    </div>
                  </div>
                


                <div class="col-md-4 col-sm-8">
                <div class="form-group">
                    <label>Hot Selling</label>
                    <div class="form-check">
                          <div class="d-inline-block">
                            <input name="hot_selling" value="1" type="radio" id="crYes" class="form-check-input" >
                            <label class="form-check-label" for="crYes">Yes</label>
                          </div>
                          <div class="d-inline-block mx-5">
                            <input name="hot_selling" value="0" type="radio" id="crNo" checked class="form-check-input">
                            <label class="form-check-label" for="crNo">No</label>
                          </div>
                        </div> 
                  </div>
                </div>
                </div>


                <div class="row gx-3"> 
                <div class="col-md-12 col-sm-12">
                    <div class="form-group @error('description') has-error @enderror">
                      <label for="description">Description <span class="text text-red">*</span></label>
                      <textarea class="form-control" name="description" value="{{old('description')}}" rows="5" id="description" placeholder="Description"></textarea>
                    </div>
                  </div>
                </div>

                    <div class="row gx-3">
					<div class="col-md-4 col-sm-6 pt-2">
						<div class="form-group">
							<label class="form-label">Status</label>
							<div class="form-check">
								<div class="d-inline-block">
									<input name="status" value="1" type="radio" id="crYes" checked class="form-check-input" >
									<label class="form-check-label" for="crYes">Yes</label>
								</div>
								<div class="d-inline-block mx-5">
									<input name="status" value="0" type="radio" id="crNo" class="form-check-input">
									<label class="form-check-label" for="crNo">No</label>
                          </div>
							</div>
						</div>
					</div>
				</div>


              </div>
                 
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/admin/product" class="btn btn-danger">Cancel</a>
          </div>
              <!-- row end -->

        </div>
      <!-- /.box -->
    </form>
      <!-- form end -->

    </section>
    <!-- /.content -->
@endsection
