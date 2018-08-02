@extends('layouts.app')


@section('content')

  <div class="section" style="background-image: url('../images/3hands-square_x1500.png');
  background-position: right center;">

    <div class="container" style="min-height: 100vh;height: 100%;">

      <div class="background">
    

        <div class="row">
          <div class="container">
            <h1 class="h1">C'est parti. Préparons votre prêt.</h1>
          </div>
        </div>

        <div class="row row-eq-height">
          {{-- Colonne gauche --}}
          <div class="col-md-4 pr-0">
            <div class="left-column">      
              <div class="row">
                
                <div class="info info-horizontal">
                  <div class="icon icon-success">
                    <i class="nc-icon nc-layout-11"></i>
                  </div>
                  <div class="description">
                    <h4 class="info-title">Quel prêt?</h4>
                    <p>De combien vous avez besoin et comment vous pouvez rembouser</p>
                  </div>
                </div>
                <div class="info info-horizontal">
                  <div class="icon icon-warning">
                    <i class="nc-icon nc-palette"></i>
                  </div>
                  <div class="description">
                    <h4 class="info-title">On prépare les documents</h4>
                  </div>
                </div>
                <div class="info info-horizontal">
                  <div class="icon icon-danger">
                    <i class="nc-icon nc-delivery-fast"></i>
                  </div>
                  <div class="description">
                    <h4 class="info-title">Envoi</h4>
                    <p>Tout est prêt. Vous n'avez plus qu'à envoyer votre demande de prêt.</p>
                    
                  </div>
                </div>
                <div class="info info-horizontal">
                  <div class="icon icon-primary">
                    <i class="nc-icon nc-touch-id"></i>
                  </div>
                  <div class="description">
                    <h4 class="info-title">Ca y est!</h4>
                    <p>Le prêteur a accepté votre demande de prêt. Vous pouvez maintenant patati patata</p>
                    
                  </div>
                </div>

              </div>
            </div>
          </div>
          {{-- fin colonne gauche --}}

          {{-- Colonne droite --}}
          <div class="col-md-8 pl-0">
            <div class="right-column"> 

              <div id="simulator" class="card-simulator">
              

                <form>

                  <div class="form-group form-row">
                    <h4 class=" col-sm-4">J'ai besoin de</h4>
                    <div class="col-sm-7">
                      <div id="slider-amount" class="slider noUi-target noUi-ltr noUi-horizontal noUi-connect"></div>
                    </div>
                  </div>


                  <div class="form-group form-row">

                    <h4 for="subject" class="col-sm-4">Pour</h4>
                    <div class="col-sm-7">
                      <input class="form-control" id="subject" placeholder="Ex: passer le permis" type="text">
                    </div>                 
                  </div>

                  <div class="form-group form-row">

                    <h4 for="repayment_repeat" class="col-sm-4">Je rembourse</h4>
                    <div class="col-sm-7">
                      <div class="text-center ">
                        <div id="slider-months" class="slider noUi-target noUi-ltr noUi-horizontal noUi-connect"></div>
                      </div>
                    </div>
                  </div>


                  <div id="delayed">
                    <div class="form-group form-row">
                      <h4 for="subject" class="col-sm-4">Pendant</h4>
                      <div class="form-group col-sm-1">
                        <input id="delayed_repayment_delay_value" class="form-control" disabled="" style="border: none;">
                      </div>
                      <h4 for="subject" class="col-sm-4">mois</h4>
                    </div>
                  </div>

                  <div id="once" >
                    <div class="form-group form-row">
                      <h4 for="subject" class="col-sm-4">au plus tard dans</h4>
                      <div class="form-group col-sm-1">
                        <input id="once_repayment_delay_value" class="form-control">
                      </div>
                      <h4 class="form-control-label col">mois</h4>
                    </div>
                  </div>

                  <div class="form-group row">
                    <a href="#" class="btn btn-primary btn-block btn-round pull-right ">Préparer les documents</a>                      
                  </div>

                </form>
              
              </div>
            </div>
          </div>
          {{-- fin colonne droite --}}

        </div> 
      </div>
    </div>
  </div>

  
@endsection
  