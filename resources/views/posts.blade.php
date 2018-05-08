@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach($posts->items() as $post)
        <div class="col-md-8">
            <div class="card">
                <a href="{{route('post', ['id' => $post->id])}}"><div class="card-header"><strong>{{$post->name}}</strong></div></a>

                <div class="card-body">
                    {{str_limit($post->content, 240, '...')}}<br>
                    <strong>{{$post->created_at}}</strong>
                </div>
            </div>
        </div>
        @endforeach

        {{$posts->render()}}
    </div>
</div>
@endsection
