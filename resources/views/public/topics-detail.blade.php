@extends('public.layouts.pages')

@section('pages')
     
        @include('public.includes.headerdetail')

        {{-- Introduction --}}
        @include('public.includes.introduction')

          {{-- Subscribe --}}
         @include('public.includes.subscribe') 
         
 @endsection   