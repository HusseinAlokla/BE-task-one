@extends('layout')
@section('content')

<h1>
    {{$heading}}
</h1>
@if (count($listings)==0)
<p>No listings found!</p>

@endif
@foreach ($listings as $listing)
   <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a> <h2>
         {{$listing['title']}}
    </h2>
    <p>
         {{ $listing['description']}}
    </p>


 @endforeach
 @endsection