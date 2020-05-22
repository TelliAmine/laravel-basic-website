<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="" href="{{mix('css/style.css')}}">
    <link rel="stylesheet" type="" href="{{mix('css/app.css')}}">
    <title>Document</title>
</head>

<body style="background-color: #CCCCCC ;">
    @include('inc.navbar')
    <main class="py-4">
        <div class="container">
            @if(Request::is('/'))
            @include('inc.showcase')
            @endif
            <div class="row">
                <div class="col-md-8 col-mg-8">
                @include('inc.messages')   
                @yield('content')
                </div>
                <div class="col-md-4 col-mg-4">
                    @include('inc.sidebar')
                </div>

            </div>

        </div>

    </main>


</body>

</html>