@extends('public.layouts.pages')

@push('pagetitle')
Topics Listing
@endpush

            
@section('pages')
    
        @include('public.includes.header')

         {{-- popular topic --}}
        @include('public.includes.populartopic')

            {{-- Trending topic --}}
        @include('public.includes.trending') 

 @endsection     
 