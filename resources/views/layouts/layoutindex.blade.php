<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>{{$title}}</title>
    <meta name="description" content="urlの短縮が上手くいきませんでした">
    <meta name="keywords" content="エムスリーデジタルコミュニケーションズ,動画配信">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">

    <!-- jQuery -->
    <script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>

    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/util-ui.js')}}"></script>

</head>

<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header" style="padding-top:18px">
                    <a href="{{$home_url}}"><span style="font-size:20px;top:5px;">{{$logo}}</span></a>
                </div>

                <div id="patern03" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    </ul>
                </div>
            </div>
        </nav>
        <div style="margin-bottom: 100px"></div>
     </header>

     <div>
         @yield('content')
     </div>

</body>

</html>
