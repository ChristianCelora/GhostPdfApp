@extends('layouts.app')

@section('scripts')
<script src="{{ asset('js/home.js') }}" defer></script>
@endsection

@section('style')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex flex-lg-row flex-column box p-2 div-link" id="box1" data-location="{{route('view.compress')}}">
            <div class="flex-column">
                <div class="mb-2"><i class="fa fa-2x fa-compress"></i></div>
                <div><h4>Compress PDF</h4></div>
                <div>Compress PDF without losing quality</div>
            </div>        
        </div>
        <div class="d-flex flex-lg-row flex-column box p-2 div-link" id="box2" data-location="{{route('view.cut')}}">
            <div class="flex-column">
                <div class="mb-2"><i class="fa fa-2x fa-cut"></i></div>
                <div><h4>Cut PDF</h4></div>
                <div>Removes pages from PDF</div>
            </div>        
        </div>
        <div class="d-flex flex-lg-row flex-column box p-2 div-link" id="box3" data-location="{{route('view.secure')}}">
            <div class="flex-column">
                <div class="mb-2"><i class="fa fa-2x fa-key"></i></div>
                <div><h4>Secure PDF</h4></div>
                <div>Add owner and password to PDF</div>
            </div>        
        </div>
    </div>
</div>
@endsection
