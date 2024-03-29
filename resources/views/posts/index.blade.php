@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <img src="/storage/cover_images/{{$post->cover_image}}" width="100px" height="auto"/>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}.</small>
                    </div>
                </div>

            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>Not Found</p>
    @endif
@endsection
