@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Edit profile</h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                               name="title" value="{{ old('title') ?? $user->profile->title}}" autocomplete="title"
                               autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror


                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Description</label>
                    <input type="text" class="form-control-file" id="description" name="description" value="{{old('description') ?? $user->profile->description}}">
                    @error('description')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">url</label>
                    <input type="text" class="form-control-file" id="url" name="url" value="{{old('url') ?? $user->profile->url}}">
                    @error('url')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @error('image')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group row">
                    <button class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection
