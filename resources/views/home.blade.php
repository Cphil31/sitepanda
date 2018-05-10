@extends('layouts.app')

@section('title', 'Bienvenue')

@section('sidebar')
    @parent

    
@endsection

@section('content')
    <div class="bienvenue"> Bienvenue sur mon site dédié aux pandas </div>
    <div class="question">Mais <a href="/qui" style="color: black">qui</a> sont-ils ?</div>
@endsection