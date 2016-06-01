@extends('layout.layouts')
@section('body')
<h3>Homepage for user{{\Auth::user()->name}}</h3>
@endsection
