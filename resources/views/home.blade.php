@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img src="/images/download.png" style="width: 50%;" alt="">
            </div>
            <div class="col-9 pt-3">
                <div class="d-flex justify-content-between align-items-baseline ">
                    <h1>{{$user->username}}</h1>
                    <a href="">Add a new Comment</a>
                </div>

                <div class="d-flex">
                    <div class="pr-3"><strong>112.4m</strong>followers</div>
                    <div class="pr-3"><strong>112.4m</strong>followers</div>
                </div>
                <div class="pt-4">
{{$user->profile->title}}
                </div>
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur deleniti dolorem ducimus enim eos excepturi explicabo fuga, illum iure magni mollitia nisi, non placeat quas quasi quo sequi totam.</div>
            </div>
        </div>


    </div>
@endsection
