@extends('layouts.app')
@section('content')
<h1>Choose Seat(s)</h1>
<div class="cinemaHall">
    <?php if(isset($error)): ?>
        <p style="color:red;">Error</p>
    <?php endif; ?>
    <form id="reservation" method="post" action="{{ action('ReservationController@create') }}">
        <section id="seats">
            <?php for($i = 1; $i <= 30; $i++) {
                $finded = false;
                foreach($occupedSeats as $occupedSeat) {
                    if($i == $occupedSeat) {
                        $finded = true;
                        break;
                    }
                } ?>
                <input id="seat-{{$i}}" class="seat-select" <?php if($finded) echo 'disabled'; ?> type="checkbox" value="{{$i}}" name="seat[]" />
                <label for="seat-{{$i}}" class="seat <?php if($finded) echo 'occuped'; ?>">{{$i}}</label>
            <?php } ?>
        </section>
        <input type="hidden" name="movie" value="{{ $movie_id }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-default">Submit</button>
        
    </form>
</div>
@stop