@extends('layouts.layout')

@section('title') Register @endsection
@section('description') This is customers cart. @endsection
@section('keywords') creator,author,artisan @endsection

@section('content')
    @include('deoproduct.forma',["action"=>"reg"]);
@endsection
