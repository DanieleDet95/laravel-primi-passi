@extends('layouts.base')

@section('title')
  lezione-gratuita
@endsection

@section('classe-main')
  lezione
@endsection


@section('main')
    <div class="container-fluid">
      <img src="https://www.boolean.careers/images/live_coding/lezione-gratuita.jpeg" alt="lezione">
      <div class="testo">
        <h1>Lezione di <br>HTML, CSS e Javascript</h1>
        <p>Cosa vuol dire programmare per il web?<br><br>Scoprilo con questa lezione di introduzione al web development. </p>
      </div>
    </div>
    <div class="wrapper">
      <div class="video">
        <a href="https://www.boolean.careers/lezione-gratuita?wvideo=dcz7sg9wwu"><img src="https://embedwistia-a.akamaihd.net/deliveries/7c007ff3657c03b30f7976a3a9a25a6e.jpg?image_play_button_size=2x&amp;image_crop_resized=960x540&amp;image_play_button=1&amp;image_play_button_color=f47637e0"></a>
      </div>
    </div>
@endsection

@section('prenota')
  <div class="passo">
    <h1>A un passo dalla tua nuova professione.</h1>
    <div class="bottoni">
      <button class="green" type="button"><a href="{{ Route('corso') }}">Scopri il corso</a></button>
      <button class="blue" type="button">Guarda una lezione</button>
    </div>
  </div>
@endsection
