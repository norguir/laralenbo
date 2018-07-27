@extends('layouts.app')


@section('content')

<div class="page-header" style="background-image: url({{ asset('images/3hands-square_x1500.png') }}); background-position: right center;">
  <div class="filter"></div>
  <div class="content-center">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-left">
          <h1 class="title">Le prêt de confiance</h1>
              <h5>Vos prêts entre proches en toute sérénité</h5>
          <div class="buttons d-flex justify-content-left py-5">
            <a class="btn btn-primary btn-round btn-lg" href="{{ route('ious-new') }}"  aria-haspopup="true" aria-expanded="false">Commencer</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
@endsection