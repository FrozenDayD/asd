@extends('layouts.app')
@section('content')
<div style="margin: 10%;">
    <h1>Reservation</h1>
    <?php if(isset($error)): ?>
        <p style="color:red;">Error</p>
    <?php endif; ?>
    <form id="reservation" method="post" action="{{ action('ReservationController@addReservation') }}">
      <input type="hidden" name="movie" value="{{ $movie_id }}">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>

      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>

      <div class="form-group">
        <label for="phone">Phone number</label>
        <input type="number" class="form-control" id="phone" name="phone">
      </div>

       <div class="form-group">
        <label for="email">Choosed seat(s): </label>
        <?php if(isset($seats)) {
        foreach($seats as $seat) {
            echo $seat.', '; ?>
            <input type="hidden" name="seat[]" value="<?=$seat;?>"/>
        <?php } } ?>
      </div>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
@stop