@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Your posts</h3>
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    
                    @if (count($posts) > 0)
                    <table class="table table-stripped">
                    <tr>
                        <th><h3>Title<h3></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </table>
                    @foreach($posts as $post)
                    <div class='well'>
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post -> created_at}}</small>
                     </div>
                    @endforeach
                    @else
                    <p>No posts found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
