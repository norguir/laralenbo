@extends('layouts.app')


@section('content')

  <div class="section" style="background-image: url('../images/3hands-square_x1500.png');
  background-position: right center;">

    <div class="container" style="min-height: 100vh;height: 100%;">

      <div class="background">


        <h1 class="title">Le prêt de confiance</h1>
        <h2>Vos prêts entre proches<br/> en toute sérénité</h2>

        <div class="buttons d-flex justify-content-left py-5">
          <a class="btn btn-primary btn-round btn-lg" href="{{ route('ious-new') }}"  aria-haspopup="true" aria-expanded="false">Commencer</a>
        </div>

      </div>

    </div>

  </div>


  
@endsection