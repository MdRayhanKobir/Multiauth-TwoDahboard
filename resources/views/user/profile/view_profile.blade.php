@extends('user.user_master')
@section('title')
Usert Profile
@endsection
@section('content')
<section class=""style="margin-left:10px !important">
    <div class="card" style="width: 18rem;">
        <img src="{{ (!empty($data->profile_photo_path))? url('upload/user_images/'.$data->profile_photo_path):url('upload/no_image.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $data->name }}</h5>
          <p class="card-text">{{ $data->email }}</p>
          <a href="{{ route('user.edit_profile') }}" class="btn btn-primary">Update</a>
        </div>
      </div>
</section>
@endsection
