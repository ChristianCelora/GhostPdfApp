@extends('layouts.app')

@section('scripts')
@endsection

@section('style')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{$name}}
    </div>
</div>
@endsection
