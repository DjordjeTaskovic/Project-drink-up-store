@extends('layouts.layout')

@section('title') Error @endsection
@section('description') This is an error page. @endsection
@section('keywords') error,code_error @endsection

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-12">
            <h3>The following error has accured:</h3>
            <hr/>
            @if(session()->has('errorMessage'))
                <div class="alert alert-danger">
                    {{ session()->get('errorMessage') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
