@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.contactoViews.infocontacto')
    @include('layouts.footer')
@endsection

@section('css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        /* Main Styling */

        a,h3,h5,span{
            font-family: "Kaushan Script", cursive !important;

        }

        h1, p {
            font-family: 'Monserrat', sans-serif !important;
        }

        /* Main Styling */
        html,
        body {
            background: url('/img/banner-background.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        /* clases */
        .ofertatitle {
            color: #ffcc00;
        }

        .card{
            border: 2px solid #000;
            border-radius: 10px;
            background-color: #000;
            color: #fff;
        }

        .card-title {
            color: #ff0000;
        }
    </style>
@endsection
