@extends('layouts.app')
@section('content')
<script>
$(document).ready(function(){    $('.dataTable').DataTable();});
</script>
<style>

    .art {
        padding: 50px;
        transition: transform .2s;
        width: 200px;
        height: 200px;
        margin: 0 auto;
    }

    .art:hover {
        -ms-transform: scale(1.5);
        -webkit-transform: scale(1.5);
        transform: scale(1.5);
    }

</style>

<div class="page-header" >
<h1>Movies</h1>
</p></div>
    @if ($movies->isEmpty())
There are no movies in the database!
    @else
<table class="dataTable">
<thead>
<tr>
<th>Art</th>
<th>Description</th>
<th>Show</th>
<th>Booking</th>
</tr>
</thead>
<tbody>
                @foreach($movies as $movie)
    <tr>
<td div class="art"><img src="{{ $movie->poster_image_url }}" width="100%"/></td>
<td>{{ $movie->desc }}</td>
<td>{{ $movie->show }}</td>

<td>
    <a href="{{ action('ReservationController@index', $movie->id) }}" class="btn btn-default">Choose Seat</a>
</td>
    </tr>
                @endforeach
            </tbody>
</table>
    @endif
@stop
