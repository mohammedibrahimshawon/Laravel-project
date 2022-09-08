

@extends('layouts.loggedin')
@section('content')


<h2>Name:{{$name}} </h2>
<h3>Id :{{$id}}</h3>
<!-- <h4>Course 1: {{$courses[2]}}</h4> -->
<ol>
    @for($i=0;$i<  count($courses);$i++)

    <li>{{$courses[$i]}}</li>

    @endfor
</ol>
@endsection('content')