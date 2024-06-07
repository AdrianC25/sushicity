@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.ofertaViews.ofertacontent')
    @include('layouts.ofertaViews.eventos')
    @include('layouts.footer')
@endsection

@section('javascript')
    <script>
        $(document).ready(function() {
            $('#myTab a').on('click', function(e) {
                e.preventDefault();
                $(this).tab('show');
            });
        });
    </script>
@endsection

@section('css')
    @parent
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

        html,body
        {
        font-family: 'Dancing Script', cursive !important;
        background: url('/img/banner-background.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        }

        /* bootstrap style */
        .carousel-item .card {
            width: 18rem;
        }

        .card {
            border: 2px solid #000;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .card-img-top {
            border-bottom: 2px solid #000;
        }


        .card-title {
            color: #000;
        }

        .card-text {
            color: #ff0000;
        }

        /* clases */
        .navtitle {
            color: #ffcc00;
        }

        .pedidobtn {
            background: #000;
            color: #fff;
            border: none;
        }

        .pedidobtn:hover {
            background: #ff0000;
            color: #fff;
            border: none;
        }

        .img {
            height: 442.6px;
        }
    </style>
@endsection
