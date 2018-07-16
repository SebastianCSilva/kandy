<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Furious Gaming LA</title>
	<link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('plugins/bootstrap/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('plugins/bootstrap/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
	<style>
            html, body {
                background-color:black;
                color: #af9a64;
                font-family: 'haze', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            h1 {
                font-family:haze;
                font-style: normal;
                font-size: 400%;
                color:#af9a64; 
                text-align:center; 
            }
            .portada{ 
                width:100%; 
            }
            p {
                font-family:haze;
                font-style: normal;
                font-size: 130%;
                color:#af9a64; 
                text-align:center; 

            }

        </style>
</head>
<body>
        <div class="top-left links">
        <a  href="#about">Teams</a>
        <a  href="#store">Tienda</a>
        <a  href="#galeria">Galeria</a>
        <a  href="https://www.twitch.tv/team/furiousgamingla">Streamers</a>
        
        </div>
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar sesion</a>
                        <a href="{{ route('register') }}">Registrarse</a>
                    @endauth
                    <a  href="#galeria">Contacto</a>
                </div>

            @endif

        </div>
<script src="{{ asset('plugins/bootstrap/vendor/scrollreveal/scrollreveal.min.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/vendor/jquery/jquery.min.js')}}"></script>

<script src="{{ asset('plugins/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{ asset('plugins/bootstrap/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<script src="{{ asset('plugins/bootstrap/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

<script src="{{ asset('plugins/bootstrap/vendor/js/creative.min.js')}}"></script>

</body>
</html>