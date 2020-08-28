@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100 " alt="">
            </div>
            <div class="col-9 pt-3">
                <div class="d-flex justify-content-between align-items-baseline ">
                    <div class="d-flex align-items-center">
                        <div class="h1">{{$user->username}}</div>
                        @if(auth()->user()->id==$user->id)
                    <div></div>
                         @else
                        <follow-button user_id="{{$user->id}}" follows="{{$follows}}"></follow-button>
@endif
                    </div>
                    @can('update',$user->profile)
                        <a href="/p/create">Add a new Comment</a>
                    @endcan
                </div>
                @can('update',$user->profile)
                    <a href="/profile/{{$user->id}}/edit">Edit profile</a>

                @endcan
                <div class="d-flex">
                    <div class="pr-3"><strong>{{$followersCount}}</strong>followers</div>
                    <div class="pr-3"><strong>{{$postCount}}</strong>posts</div>
                    <div class="pr-3"><strong>{{$userFollowingCount}}</strong>following</div>
                </div>
                <div class="pt-4">
                    {{$user->profile->title}}
                </div>
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur deleniti dolorem ducimus
                    enim eos excepturi explicabo fuga, illum iure magni mollitia nisi, non placeat quas quasi quo sequi
                    totam.
                </div>
            </div>
        </div>

        <div>
            @foreach($user->posts as $post)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">{{$post->comment}}</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                    <a href="/p/{{$post->id}}">
                        <img src="/storage/{{$post->image}}" class="card-img-top w-50" alt="...">

                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
