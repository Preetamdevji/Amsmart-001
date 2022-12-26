@extends('admin/layout/master')     
@section('page-title')
  {{ Auth::user()->fullname }}
@endsection
@section('main-content')

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="/uploads/{{ Auth::user()->user_img }}" width="160" height="160" class="user-image img_profile" alt="{{ Auth::user()->first_name }}">
              <h3 class="profile-username text-center">{{ Auth::user()->fullname }}</h3>
              <p class="text-muted text-center">{{ Auth::user()->designation }}</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default">Edit your Profile</button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="{{ $errors->has('update.password') || $errors->has('current_password') || $errors->has('new_password') || $errors->has('new_confirm_password') ? '' : 'active' }}"><a href="#activity" data-toggle="tab">Bio</a></li>
              <li class="{{ $errors->has('update.password') || $errors->has('current_password') || $errors->has('new_password') || $errors->has('new_confirm_password') ? 'active' : '' }}"><a href="#settings" data-toggle="tab">Change Password</a></li>
            </ul>
            <div class="tab-content">
              <div class="{{ $errors->has('update.password') || $errors->has('current_password') || $errors->has('new_password') || $errors->has('new_confirm_password') ? '' : 'active' }} tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <p>
                    {{ Auth::user()->bio }}
                  </p>
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->

              <div class="{{ $errors->has('update.password') || $errors->has('current_password') || $errors->has('new_password') || $errors->has('new_confirm_password') ? 'active' : '' }} tab-pane" id="settings">
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif
                 @if (\Session::has('error'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{!! \Session::get('error') !!}</li>
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('update.password') }}" class="form-horizontal">
                  @csrf
                  <div class="form-group @error('current_password') has-error @enderror">
                    <label for="current_password" class="col-sm-2 control-label">Old Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="current_password" id="current_password" placeholder="Current Password">
                      @error('current_password')
                          <div class="label label-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group @error('new_password') has-error @enderror">
                    <label for="new_password" class="col-sm-2 control-label">New Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password">
                      @error('new_password')
                            <div class="label label-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group @error('new_confirm_password') has-error @enderror">
                    <label for="new_confirm_password" class="col-sm-2 control-label">Retype Please</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="new_confirm_password" id="new_confirm_password" placeholder="Retype Please">
                      @error('new_confirm_password')
                            <div class="label label-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Change Password</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>


<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ Auth::user()->fullname }}</h4>
            </div>
            <div class="modal-body">

              <div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
    </div>
                <form name="profileForm" id="profileForm" enctype="multipart/form-data" class="form-horizontal">
              
                  {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">FullName</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ Auth::user()->fullname }}" id="fullname" name="fullname" placeholder="FullName">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="designation" class="col-sm-2 control-label">Designation</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ Auth::user()->designation }}" name="designation" id="designation" placeholder="Designation">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" value="{{ Auth::user()->email }}" id="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bio" class="col-sm-2 control-label">Bio</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="bio" id="bio" rows="6" placeholder="Your Bio Here...">{{ Auth::user()->bio }}</textarea>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-submit">Update Profile</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection

@push('scripts')
<script type="text/javascript">
       
    $(document).ready(function() {
        $(".btn-submit").click(function(e){
            e.preventDefault();
       
            var _token = $("input[name='_token']").val();
            var fullname = $("input[name='fullname']").val();
            var designation = $("input[name='designation']").val();
            var bio = $("textarea[name='bio']").val();
            var email = $("input[name='email']").val();
            var user_img = $("input[name='user_img']").val();
       
            $.ajax({
                url: "{{ route('profile.update') }}",
                type:'POST',
                data: {_token:_token, fullname:fullname, designation:designation, bio:bio,email:email, user_img:user_img},
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        location.reload();
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
       
        }); 
       
        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });


</script>
@endpush