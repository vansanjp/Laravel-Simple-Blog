@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card" style="margin-top: 30px;">
                <div class="card-header">{{$post->title}}</div>

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
            <div class="row" style="margin-top: 20px;">
                <div class="col-sm-6">
                    {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}             
                </div>

                <div class="col-sm-6">
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
