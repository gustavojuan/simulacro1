@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-end">
        <div class="col-auto">
            <a href="{{route('videos.create')}}" class="btn btn-primary">Add Video</a>
        </div>
    </div>
    <div class="row justify-content-center">


        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>title</th>
                <th>Duration</th>
                <th>Author</th>
                <th>Comments</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($videos as $video )
                    <tr>
                        <td>{{$video->id}}</td>
                        <td>{{$video->title}}</td>
                        <td>{{$video->duration}}</td>
                        <td>{{$video->user->name}}</td>
                        <td>{{$video->comments->count()}}</td>
                        <td>
                            <a href="{{ route('videos.show',$video)}}" class="btn btn-secondary">Show</a>
                            <a href="{{ route('videos.edit',$video)}}" class="btn btn-secondary">Editar</a>

                            <form action="{{ route('videos.destroy', $video) }}" method="POST" style="display: inline-block;">
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
