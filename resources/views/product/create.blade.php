@extends('layout.layouts')
@section('title')
create new product
@stop
@section('body')
{!!Form::open(['route'=>'product.store'])!!}
{!!Form::label('name','Name')!!}
{!!Form::text('name',null,['placeholder'=>"give your name"])!!}
<br/>
{!!Form::label('price','Price')!!}
{!!Form::text('price','0$',['placeholder'=>"give a price"])!!}
{!!Form::label('id','Id')!!}
{!!Form::text('id','0$',['placeholder'=>"give ur id"])!!}
{!!Form::submit('create')!!}
{!!Form::close()!!}
@stop
