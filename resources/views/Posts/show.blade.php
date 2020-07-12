@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
  <div class="col-8">
<img src="/storage/{{$post->image}}"class="w-100" alt="">
</div>
<div class="col-4">
  <div class="d-flex align-items-center">
    <div >
      <img src="{{$post->user->profile->profileImage()}} " class="w-100 rounded-circle" style="max-width: 50px;" alt="">
    </div>
   <div>
     <h5 ><a href="/profile/{{ $post->user->id }}"><span class="text-dark"> {{$post->user->username}} </span></a></h5>
     <a href="" class="pl-3">Follow</a>
   </div>
  </div>
  <hr>
  <p><span class="font-weight-bold">
    <a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{$post->user->username}}</span>
     </a></span> {{$post->caption}}</p>
</div>
</div>
</div>
@endsection

