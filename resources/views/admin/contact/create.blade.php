@extends('admin/layout/master')     
@section('page-title')
  Add Contact                        
@endsection
@section('main-content')

    <!-- Main content -->
    <section class="content">
      <form name="formCreate" id="formCreate" method="post" action="/admin/contact">
      @csrf
      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->
      <div class="box box-primary">
        <!-- /.box-header -->
        <div class="box-body">
          <!-- row start -->

          <div class="row"> 
                <div class="col-xs-6">
                 <div class="form-group @error('name') has-error @enderror">
                    <label for="title">Name <span class="text text-red">*</span></label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    </div>
 
                    <div class="form-group @error('email') has-error @enderror">
                    <label for="email">Email <span class="text text-red">*</span></label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>

                    <div class="form-group @error('number') has-error @enderror">
                      <label for="number">Number <span class="text text-red">*</span></label>
                      <input type="number" class="form-control" name="number" id="number" placeholder="Number">
                    </div>

                    <div class="form-group @error('subject') has-error @enderror">
                  <label for="subject">Subject <span class="text text-red">*</span></label> 
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                 </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" rows="5" id="message" placeholder="Message"></textarea>
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

      <!-- form end -->
      </form>
    </section>
    <!-- /.content -->
@endsection
