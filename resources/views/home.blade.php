@extends('layouts.app')

@section('scripts')
@endsection

@section('style')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex flex-lg-row flex-column box p-2" id="box1">
            <div class="flex-column">
                <div class="mb-2"><i class="fa fa-2x fa-compress"></i></div>
                <div><h4>Compress PDF</h4></div>
                <div>Compress PDF without losing quality</div>
            </div>        
        </div>
        <div class="d-flex flex-lg-row flex-column box p-2" id="box2">
            <div class="flex-column">
                <div class="mb-2"><i class="fa fa-2x fa-cut"></i></div>
                <div><h4>Cut PDF</h4></div>
                <div>Removes pages from PDF</div>
            </div>        
        </div>
        <div class="d-flex flex-lg-row flex-column box p-2" id="box3">
            <div class="flex-column">
                <div class="mb-2"><i class="fa fa-2x fa-key"></i></div>
                <div><h4>Secure PDF</h4></div>
                <div>Add owner and password to PDF</div>
            </div>        
        </div>
    </div>
</div>
@endsection
