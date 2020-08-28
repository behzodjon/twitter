@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/p" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Add new post</h1>
                    </div>
                    <div class="form-group row">
                        <label for="comment" class="col-md-4 col-form-label text-md-right">Comment</label>

                        <div class="col-md-6">
                            <input id="comment" type="text" class="form-control @error('comment') is-invalid @enderror"
                                   name="comment" value="{{ old('comment') }}" autocomplete="comment"
                                   autofocus>

                            @error('comment')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror


                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-md-4 col-form-label">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                        @error('image')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <button class="btn btn-primary">Add new message</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
