@extends('public.layouts.index')

@push('pagetitle')
index
@endpush

@section('content')
    
   {{-- hero --}}
    @include('public.includes.hero')

  {{-- featured --}}
    @include('public.includes.featured')

  {{-- explore --}}
    @include('public.includes.explore')

    {{-- timeline --}}
    @include('public.includes.timeline') 

      {{-- faq --}}
    @include('public.includes.faq')

     {{-- testimonials   --}}
    @include('public.includes.testimonials')

    {{-- contact --}}
    @include('public.includes.contact')  

 @endsection