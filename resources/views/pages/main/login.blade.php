@extends('layouts.layout')

@section('title') Login @endsection
@section('description') This is customers cart. @endsection
@section('keywords') creator,author,artisan @endsection

@section('content')

   @include('deoproduct.forma',["action"=>"log"]);

@endsection
