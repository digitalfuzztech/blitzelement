@extends('layouts.app')
@section('title', 'About')
@section('content')
    <x-blur-effect/>
    @include('about.sections.about-hero')
    @include('about.sections.about-details')
    @include('about.sections.about-marquee')
    @include('homepage.sections.statistics')
    @include('homepage.sections.niche-cards')
    @include('homepage.sections.services')
    @include('homepage.sections.cta')
@endsection
