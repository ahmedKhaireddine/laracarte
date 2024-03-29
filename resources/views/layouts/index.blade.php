<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{--1 er methode pour donner un titre qui corespend a chaque page--}}
        {{--<title> {{ isset($title) ? $title . ' | ' : '' }} Laracarte - List of artisans</title>--}}
        {{--2 er methode pour donner un titre qui corespend a chaque page on cree une methode dans fichier helper--}}
        <title> {{ page_title($title ?? '') }}</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: 'Open Sans', sans-serif;
            }
            nav{
                margin-bottom:2em;
            }
            footer{
                margin:4em 0;
            }
            .errors{
                color: red;
                font-weight: bold;
                font-style: italic;
            }
        </style>
    </head>
    <body>
        @include('layouts/partials/_nav')

        @yield('content')

        @include('layouts/partials/_footer') 

        <script src="https://kit.fontawesome.com/8b888e61b0.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
        @include('flashy::message') 
    </body>
</html>
