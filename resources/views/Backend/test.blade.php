@extends('Backend.layout.app')
@section('title_page')
    Test Page
@endsection

@push('css')

@endpush

@section('content')
    @component('Backend.layout.header')
        @slot('nav_title')
            Test Page
        @endslot

    @endcomponent

   <b><a href="{{url('admin')}}">click here to go to Home Page</a></b>


@endsection
@push('js')
@endpush
