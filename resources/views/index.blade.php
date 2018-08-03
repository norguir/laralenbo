@extends('layouts.app')


@section('content')

  <div class="section lenbo-section">

    <div class="container" style="min-height: 100vh;height: 100%;">

      <div class="background">


        <h1 class="title">Le prêt de confiance<br/>entre amis et famille</h1>
        <h2>Simulations, demande,<br/>conclusion et gestion de <br/>vos prêts en toute simplicité</h2>

        <div class="buttons d-flex justify-content-left py-5">
          <a class="btn btn-primary btn-round btn-lg" href="{{ route('ious-new') }}"  aria-haspopup="true" aria-expanded="false">Commencer</a>
        </div>

      </div>

    </div>

  </div>


  
@endsection