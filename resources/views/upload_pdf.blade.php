@extends('layouts.app')

@section('scripts')
<script src="{{ asset('js/upload_pdf.js') }}" defer></script>
@endsection

@section('style')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div >
            {{$name}}
        </div>
        <form action="{{route($form_action)}}" class="dropzone w-100" id="file-uploader">
        </form>
    </div>
</div>
@endsection
