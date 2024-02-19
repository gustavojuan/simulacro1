@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-end">
        <div class="col-auto">
            <a href="{{route('posts.create')}}" class="btn btn-primary">Add Post</a>
        </div>
    </div>
    <div class="row justify-content-center">


        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>title</th>
                <th>Author</th>
                <th>Comments</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($posts as $post )
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->user->name}}</td>
                        <td>{{$post->comments->count()}}</td>
                        <td>
                            <a href="{{ route('posts.show',$post)}}" class="btn btn-secondary">Show</a>
                            <a href="{{ route('posts.edit',$post)}}" class="btn btn-secondary">Editar</a>

                            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger"  onclick="return confirm('¿Estás seguro?')">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
