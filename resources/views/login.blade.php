@extends('layouts.app')
 @section('content')
    <div class="login">
        <form method="post" action="{{ route('login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label>email</label>
                <input class="form-control" type="text" name="email">
            </div>
            <div class="form-group">
                <label>password</label>
                <input class="form-control" type="password" name="password">
            </div>
            <div class="form-group text-right">
                <input class="btn btn-primary" type="submit" value="login">
            </div>
        </form>
    </div>
@stop