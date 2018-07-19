@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Post</div>

                <div class="card-body">
                    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}
                        {{ Form::label('title', 'Title:') }}
                        {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

                        {{ Form::label('body', "Body:", ['class' => 'form-spacing-top']) }}
                        {{ Form::textarea('body', null, ['class' => 'form-control']) }} 

                        {{ Form::label('image', 'Image: ') }}
                        {{ Form::file('image', ['class' => 'form-control']) }}

                        @if (Auth::user()->role == 1)
                            {{ Form::label('active', 'Status: ') }}
                            {{ Form::select('active', ['0' => 'Not active', '1' => 'Acvite'], $post->active, ['class' => 'form-control']) }}
                        @endif

                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top: 20px;']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection