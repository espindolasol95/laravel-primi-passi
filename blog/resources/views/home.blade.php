{{--per dire che questa pagina utiliza il layout master--}}
@extends('layout.master')

{{--per dire che questa sezione è quella del contenuto--}}
@section('titolo')
homepage
@endsection

@php
    //preleviamo la info dal file di configurazione
    $cards = config("cards");


    
@endphp



@section("contenuto")
<h1>home layout</h1>
<h2>ecco le mie card</h2>


@foreach ($cards as $card)

     <div class="row row-cols-3">
        <div class="col">
              <x-card>
              <x-slot:titolo>{{$card['title']}}</x-slot:titolo>
              <x-slot:sottotitolo>{{$card['subtitle']}}</x-slot:sottotitolo>
              <x-slot:testo>{{$card['text']}}</x-slot:testo>

         </x-card>


        </div>
@endforeach
   
        