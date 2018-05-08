@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header">{{$post->h1}}</h1>

                <div class="card-body">
                    {{$post->content}}
                </div>
            </div>
        </div>

        @foreach($post->comments()->where('publicated', 1)->get() as $comment)
        <div class="col-md-8">
            <div class="card">
                <a href="{{route('post', ['id' => $post->id])}}"><div class="card-header"><strong>{{$comment->name}}</strong></div></a>

                <div class="card-body">
                    {{$comment->content}}<br>
                    <strong>{{$comment->created_at}}</strong>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
