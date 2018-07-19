@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
        </div>
    </div>
</div>
@endsection