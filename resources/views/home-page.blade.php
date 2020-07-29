@extends('layouts.base')

@section('title')
  home-page
@endsection

@section('main')
  <main>
    <div class="jumbotron jumbotron-fluid bg-white">
      <div class="container">
        <div class="row">

          <div class="col-6">
            <h1 class="display-4">DIVENTA SVILUPPATORE WEB</h1>
            <h3 class="lead">Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</h3>
            <ul>
              <li><strong>6 mesi</strong> di corso intensivo online in diretta</li>
              <li><strong>Nessuna competenza</strong> di programmazione richiesta</li>
              <li>Siamo certi del tuo successo, altrimenti  <strong>ti rimborsiamo</strong></li>
            </ul>
          </div>

          <div class="col-6">
            <img class="img-jumbo" src="{{ asset('img/pc.gif')}}" alt="immagine-jumbotron">
          </div>

        </div>
      </div>
    </div>
  </main>
@endsection
