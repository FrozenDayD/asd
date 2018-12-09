<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cinema</title>
    <link rel="stylesheet" href="/css/app.css">
    <style>
        #footer
        {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: white;
            text-align: center;
        }

    </style>
</head>
<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css"/>

<meta name="csrf-token" content="{{ csrf_token() }}" />
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<style type="text/css">



    .seat {
        float: left;
        display: block;
        margin: 5px;
        background: #4CAF50;
        width: 50px;
        height: 70px;
    }

    .empty {
        float: left;
        display: block;
        margin: 5px;
        width: 50px;
        height: 70px;
    }

    .seat-select {
        display: none;
    }

    .seat-select:checked+.seat {
        background: #F44336;
    }
    label.occuped {
        background: #F44336;
    }
    .cinemaHall {
        margin: auto;
        width: 50%;
        height: 50%;

    }
    </style>
    @include('inc.navbar')

    <div class="container">
        @if(Request::is('/'))
            @include('inc.showcase')
        @endif
    <div class="row">
        <div class="col-md-8 col-lg-8">
        @include('inc.messages')
        @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
        @include('inc.sidebar')
        </div>
    </div>
    </div>

    <footer id="footer" class="text-center">
        <p>Copyright 2018 &copy; NZ</p>
    </footer>



</body>
</html>
