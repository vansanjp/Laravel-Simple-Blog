@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($posts as $post)
            <div class="col-md-8">
                <div class="card" style="margin-top: 30px;">
                    <div class="card-header">
                        <a href="{{ action('PostController@show', $post->id) }}">{{$post->title}}</a>
                        ({{ $post->user->name }})
                        @if ($post->active == 0)
                            - Not activated
                        @else
                            - Activated
                        @endif
                    </div>

                    <div class="card-body">
                        @if ($post->image != '')
                            <div class="thumbnail">
                                <img src="/images/{{ $post->image }}" alt="Lights" style="width:100%">
                                <div class="caption">
                                  <p>{{ $post->body }}</p>
                                </div>
                            </div>
                        @else
                            {{ $post->body }}
                        @endif
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</div>
@endsection