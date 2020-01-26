<!DOCTYPE html>
<html>
<head>

<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>fetch Pusher data</title>
    {{-- <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> --}}

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    {{-- <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('bc78cc0ec218ead0c30e', {
        cluster: 'ap2',
        forceTLS: true
    });

    var channel = pusher.subscribe('sajid');
    channel.bind('form-summited', function(data) {
        //alert(JSON.stringify(data));
        alert(data);
    });
    </script> --}}
</head>


<body>

    <div id="app">
        <h1>Pusher Test</h1>
        <p>
            Try publishing an event to channel <code>my-channel</code>
            with event name <code>my-event</code>.
        </p>
        <span id="my">hello</span>
    </div>

</body>


<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>