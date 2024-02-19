@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Create Post</div>

        <div class="card-body">
            <form method="POST" action="{{ route('posts.store') }}">
                @csrf

                <div class="form-group row mb-2">
                    <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="slug" class="col-md-4 col-form-label text-md-right">Slug</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}" required autocomplete="slug" autofocus>

                        @error('slug')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="Body" class="col-md-4 col-form-label text-md-right">Body:</label>
                    <div class="col-md-6">
                        <textarea id="body" class="form-control @error('body') is-invalid @enderror" name="body" required autocomplete="body" autofocus>{{ old('body') }}</textarea>
                        @error('body')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>



                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Create Post
                        </button>
                        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
