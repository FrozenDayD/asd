@extends('layouts.app')
@section('content')
<h1>We booked your choosen seat(s). Thank You!</h1>

<a href="{{ action('MovieController@index') }}">Go back to the movies list</a>
@stop