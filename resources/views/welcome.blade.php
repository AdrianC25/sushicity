@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.welcomeViews.banner')
    @include('layouts.welcomeViews.testimonios')
    @include('layouts.footer')
@endsection

@section('css')
    @parent
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet');

        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

        /* Main Styling */
        html,
        body{
            background: url('/img/banner-background.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        h1,
        h2,
        h5,
        span,
        a{
            font-family: "Kaushan Script", cursive !important;

        }

        p {
            font-family: 'Monserrat', sans-serif !important;
        }

        /* bootsatrp clases */
        .btn-primary {
            background: #F8B133;
            border: 0;
        }

        .btn-primary:hover {
            background: #fff;
            border: 0;
            color: #F8B133
        }

        .text-primary {
            color: #F8B133 !important;
        }

        /* header */
        .header .row {
            --bs-gutter-x: 0;
        }

        /* utility clases */
        .pt-6 {
            padding-top: 60px;
        }

        .py-6 {
            padding: 80px 0;
        }

        /* testimonios card */
        .testimonial-card {
            border: 2px solid #000;
            border-radius: 10px;
            background-color: #000;
            color: #fff;
            transition: transform 0.3s;
        }

        .testimonial-card:hover {
            transform: scale(1.05);
        }

        .testimonial-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 2px solid #000;
        }

        .testimonial-name {
            color: #e74c3c;
            font-weight: bold;
        }

        .testimonial-message {
            font-style: italic;
        }

        /* Mobile */
        @media(max-width: 768px) {
            .py-6 {
                padding: 20px;
            }
        }
    </style>
@endsection
