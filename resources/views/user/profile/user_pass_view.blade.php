@extends('user.user_master')
@section('title')
Update  Pasword
@endsection
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<section>
    <div class="row">
        <div class="col-md-6 p-5">
            <form action="{{ route('update.password') }}"method="post">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Current Password</label>
                  <input type="password" class="form-control" id="current_password" name="oldpassword">
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">New Password</label>
                  <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                  </div>


                <button type="submit" class="btn btn-primary">Update</button>
              </form>
        </div>
    </div>
</section>


@endsection
