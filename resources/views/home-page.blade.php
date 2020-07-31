@extends('layouts.base')

@section('title')
  home-page
@endsection

@section('classe-main')
  home
@endsection

@section('main')
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

    <div class="dati">
      <div class="container">
        <div class="row">
          <div class="col-4">
            <h2>98%</h2>
            <p>La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.</p>
          </div>
          <div class="col-4">
            <h2>€ 23.000</h2>
            <p>Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner.</p>
          </div>
          <div class="col-4">
            <h2>#1</h2>
            <p>Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="partner">
      <h3>I nostri studenti sono stati assunti da:</h3>
      <div class="container">
        <div class="row">
          <div class="col-4">
            <img src="{{ asset('img/facileit.png')}}" alt="facile.it">
          </div>
          <div class="col-4">
            <img src="{{ asset('img/oneday.png')}}" alt="oneday">
          </div>
          <div class="col-4">
            <img src="{{ asset('img/prima.png')}}" alt="prima">
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <img class="right" src="{{ asset('img/fabbrica-digitale-big.png')}}" alt="fabbrica-digitale">
          </div>
          <div class="col-4">
            <img class="right" src="{{ asset('img/nephila.png')}}" alt="nephila">
          </div>
          <div class="col-4">
            <img class="right" src="{{ asset('img/rds.png')}}" alt="rds">
          </div>
        </div>
      </div>
    </div>

    <div class="casa">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h2>Una vera scuola a casa tua</h2>
            <p>Le lezioni si svolgono tutti i giorni, dal lunedì al venerdì, in aula <b>virtuale</b>.</p>
            <ul>
              <li>
                <b>Il mattino</b> è maggiormente dedicato alla teoria con lezioni in diretta. Comodamente da casa tua, puoi interagire con i tuoi compagni e con il <b>teacher</b> , proprio come se fossi a scuola.
              </li>
              <li>
                <b>Il pomeriggio</b> è dedicato alle esercitazioni.
                In qualsiasi momento puoi chiedere supporto ai <b>tutor</b> per risolvere gli esercizi che ti abbiamo assegnato. Alza la mano e siamo subito da te!
              </li>
            </ul>
          </div>
          <div class="col-6">
            <img src="{{ asset('img/slack.gif')}}" alt="slack.gif">
          </div>
        </div>
      </div>
    </div>

    <div class="pratico">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <img src="{{ asset('img/boolflix.png')}}" alt="boolflix">
          </div>
          <div class="col-6">
            <h2>Un programma fortemente pratico</h2>
            <p>
              Ogni concetto teorico che assimili è seguito da un esercizio.<br><br>
              Il piano di studi pensato per incrementare le tue competenze trae spunto da <b>case study reali</b>, così da proporti esercizi <b>sempre nuovi</b>.<br><br>
              Così sei pronto per entrare nel mercato del lavoro.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="placement">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h2>Un dipartimento placement dedicato</h2>
            <p>
              Finito il corso, il nostro compito è quello di offrirti <b>un costante e attivo sostegno nella ricerca del lavoro</b>.<br><br>
              A seconda della tua personalità e delle tue attitudini, <b>ti presentiamo alle aziende che più si avvicinano alle tue esigenze</b>, insegnandoti a utilizzare strumenti e metodi per rendere il tuo profilo accattivante per il mercato del lavoro.
            </p>
          </div>
          <div class="col-6">
            <img src="{{ asset('img/studente.png')}}" alt="studente">
          </div>
        </div>
      </div>
    </div>

    <div class="parlano">
      <h4>Parlano si noi:</h4>
      <div class="container">
        <div class="row">
          <div class="col-4">
            <img src="{{ asset('img/corriere-della-sera.png')}}" alt="corriere-della-sera">
          </div>
          <div class="col-4">
            <img src="{{ asset('img/la-repubblica.png')}}" alt="la-repubblica">
          </div>
          <div class="col-4">
            <img src="{{ asset('img/linkiesta.png')}}" alt="linkiesta">
          </div>
        </div>
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
