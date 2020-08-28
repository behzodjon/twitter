@extends('layouts.app')

@section('content')
    <div class="container">

    <div class="card">
        <div class="d-flex align-items-center">
            <img class="rounded-circle pr-1" style="width: 10%" src="{{$post->user->profile->profileImage()}}" alt="">
            <div><a href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></div>
            <div class="pl-3"><a href="">Follow</a></div>
        </div>
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        <a href="/p/{{$post->id}}">
            <img src="/storage/{{$post->image}}" class="card-img-top w-50" alt="...">

        </a>
    </div>
    </div>
@endsection
