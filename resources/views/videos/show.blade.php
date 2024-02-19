@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-end">
        <div class="col-auto">
            <a href="{{route('posts.edit', $post)}}" class="btn btn-secondary">Edit Post</a>
        </div>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h1>{{$post->title}}</h1>
            </div>

            <div class="card-body">
                {!! $post->body !!}
            </div>
            <div class="card-footer">
                {{ $post->user->name}}
            </div>
        </div>
        </div>

    </div>

    <div class="row justify-content-center my-5">
        <div class="col-md-12">
            <h3>Post's coments</h3>

            <div class="row">
            @foreach ($post->comments as $comment )
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        {{$comment->user->name}}
                    </div>
                    <div class="card-body">
                        {{$comment->content}}
                    </div>

                    <div class="card-footer">
                        {{$comment->created_at}}
                    </div>
                </div>
            </div>


            @endforeach
            </div>
        </div>

    </div>
</div>
@endsection
