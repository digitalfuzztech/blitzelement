@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <x-blur-effect/>
    @include('contact.sections.contact-form')
    @include('contact.sections.connect')
@endsection
