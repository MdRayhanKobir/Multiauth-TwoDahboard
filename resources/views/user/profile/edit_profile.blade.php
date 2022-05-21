@extends('user.user_master')
@section('title')
Update Profile
@endsection
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<section>
    <div class="row">
        <div class="col-md-6 p-5">
            <form action="{{ route('user.update') }}"method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">User Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{ $editdata->name }}">

                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleInputPassword1" name="email" value="{{ $editdata->email }}">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">User Photo</label>
                    <input class="form-control" type="file" id="image"name="profile_photo_path">
                  </div>
                  <div class="col-md-3">
                      <img id="showimge" src="{{ (!empty($editdata->profile_photo_path))?url('upload/user_images'.$editdata->profile_photo_path):url('upload/no_image.jpg') }}" alt=""style="width:80px;height:80px;padding-bottom:10px">
                  </div>

                <button type="submit" class="btn btn-primary">Update</button>
              </form>
        </div>
    </div>
</section>
<script type="text/javascript">
$(document).ready(function(){
    $('#image').change(function(e){
        var reader = new FileReader();
    reader.onload = function(e){
        $('#showimge').attr('src',e.target.result);
    }
    reader.readAsDataURL(e.target.files['0']);
    });
});
</script>

@endsection
