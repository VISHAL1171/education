@extends('layout.layouts')
@section('title')
Signup form
@endsection
@section('body')
<h1>Login</h1>
{!! Form::open(array('route'=>'handleLogin'))!!}
<div class="Form-group">
{!!Form::label('email')!!}
{!!Form::text('email',null,array('class'=>'form-control'))!!}
</div>
<div class="Form-group">
{!!Form::label('password')!!}
{!!Form::password('password',array('class'=>'form-control'))!!}
</div>
{!!Form::token('password')!!}
{!!Form::submit('submit',array('class'=>'btn btn-default'))!!}
{!!Form::close()!!}
@endsection
