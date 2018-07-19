@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">New Post</div>

                <div class="card-body">
                    {!! Form::open(array('route' => 'posts.store', 'files' => true)) !!}
                        {{ Form::label('title', 'Title: ') }}
                        {{ Form::text('title', null, array('class' => 'form-control')) }}

                        {{ Form::label('body', 'Content: ') }}
                        {{ Form::textarea('body', null, array('class' => 'form-control')) }}

                        {{ Form::label('image', 'Image: ') }}
                        {{ Form::file('image') }}

                        {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
                    {!! Form::close() !!}
                </div>
            </div>

            <div class="card" style="margin-top: 30px;">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($active_posts as $post)
                        <div class="col-md-12">
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
        </div>
    </div>
</div>
@endsection
