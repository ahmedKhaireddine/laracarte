
{{-- j'ai heriter du templete d'erreur de base du laravel --}}
{{-- sinon je peu creer un templete dans le dossier view et je l'apple en cas d'erreur --}}

@extends('errors::layout')

{{-- pour changer le titre de la page --}}

@section('title', 'Page not found')

{{-- pour afficher un message --}}

@section('message', 'Sorry page not found')
