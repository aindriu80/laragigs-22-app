@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')
 
 
<div class="lg:grid lg:grid-cols-2 gap-4 space=-y-4 md:space-y-0 mx-4">


@unless(count($listings)===0)

@if(count($listings) ==0)
	<p>No Listings Found</p>

@endif

@foreach ($listings as $listing)
	<p>{{$listing['description']}}></p>
	<x-listing-card :listing="$listing" />
	 

@endforeach


@else

<p>No Listings Found</p>

@endunless

</div>
@endsection