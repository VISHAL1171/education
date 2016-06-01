@extends('layout.layouts')
@section('title')
All products
@stop
@section('body')
  @foreach($product as $product)
  <h1>{{$product->name}}</h1>
  <h2>{{$product->price}}</h2>
  @endforeach
@stop
