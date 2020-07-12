@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-3 p-5">
        
   
        <img src="{{$user->profile->profileImage()}} " class="rounded-circle w-100" alt="">

        {{-- <img src="https://instagram.fkul10-1.fna.fbcdn.net/v/t51.2885-19/s320x320/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.fkul10-1.fna.fbcdn.net&amp;_nc_ohc=f35RSWZFDDcAX8XZF1V&amp;oh=f148eed5bc42b20a03c0203210a1290f&amp;oe=5F300C1F" class="rounded-circle" width="100" height="100" alt=""> --}}
    </div>
    <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <div class="d-flex align-items-center pb-3">
                <div class="h4">{{ $user->username }}</div>

                <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
            </div>

@can('update', $user->profile)
<a href="/p/create">Add New Post</a>

@endcan

</div>

@can('update', $user->profile)
<a href="/profile/{{$user->id}}/edit">Edit Profile</a>
@endcan

<div class="d-flex">
  <div class="d-flex"><strong>{{ $postCount}}</strong> posts</div>  
  <div class="ml-4"><strong>{{ $followersCount}}</strong> followers</div>  
  <div class="ml-4"><strong>{{ $followingCount }}</strong> following</div> 
</div> 
<div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
<div class="pt-4 font-weight-bold">{{ $user->profile->description}}</div>
<div class="pt-4 font-weight-bold">{{ $user->profile->url }}</div>

</div>
</div>
<div class="row">
    @foreach($user->posts as $post)
     <div class="col-4 pb-5">
      
        <a href="/p/{{$post->id}}">
            <img  src="/storage/{{$post->image}} " width="300" height="300">
        </a>
       
    </div>
    @endforeach
 
</div>
</div>

@endsection

