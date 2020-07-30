@extends('layouts.base')

@section('title')
  Domande frequenti
@endsection

@section('main')
  <main>
    <div class="intro">
      <h1>Domande frequenti</h1>
      <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? <a href="#">Contattaci</a> e saremo felici di darti una mano.</p>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-6 left">
          <h2>Prima del corso</h2>
          @foreach ($faqs_prima as $faq)
            <div id="accordionuno">
              <div class="card">
                <div class="card-header" id="heading{{ $faq['index'] }}">
                  <h5 class="mb-0">
                    <div class="blocco" data-toggle="collapse" data-target="#collapse{{ $faq['index'] }}" aria-expanded="true" aria-controls="collapse{{ $faq['index'] }}">
                      <h3>{{ $faq['domanda'] }}</h3>
                    </div>
                  </h5>
                </div>

                <div id="collapse{{ $faq['index'] }}" class="collapse" aria-labelledby="heading{{ $faq['index'] }}" data-parent="#accordionuno">
                  <div class="card-body">
                    <p>{{ $faq['risposta'] }}</p>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>


        <div class="col-6 right">
          <h2>Dopo il corso</h2>

          @foreach ($faqs_dopo as $faq)
            <div id="accordiondue">
              <div class="card">
                <div class="card-header" id="heading{{ $faq['index'] }}">
                  <h5 class="mb-0">
                    <div class="blocco" data-toggle="collapse" data-target="#collapse{{ $faq['index'] }}" aria-expanded="true" aria-controls="collapse{{ $faq['index'] }}">
                      <h3>{{ $faq['domanda'] }}</h3>
                    </div>
                  </h5>
                </div>

                <div id="collapse{{ $faq['index'] }}" class="collapse" aria-labelledby="heading{{ $faq['index'] }}" data-parent="#accordiondue">
                  <div class="card-body">
                    <p>{{ $faq['risposta'] }}</p>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

        </div>
    </div>
  </main>
@endsection
