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

        <div class="row">
          {{-- Colonne gauche --}}
          <div class="col-md-6 ml-auto ">
            <div class="left-column">      
              <div class="row">
                <div class="col-md-6">
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
                </div>

                <div class="col-md-6">
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
          </div>
          {{-- fin colonne gauche --}}

          {{-- Colonne droite --}}
          <div class="col-md-6 mr-auto">

            <div id="simulator" class="card-simulator">
            
              <h3 class="card-title"></h3>

              <form>

                <div class="form-group row">
                  <label for="amount" class="col-sm-4 form-control-label">J'ai besoin de</label>

                  <div class="col-sm-7">
                    <div id="slider-amount" class="slider noUi-target noUi-ltr noUi-horizontal noUi-connect"></div>
                  </div>
                </div>


                <div class="form-group row">

                  <label for="subject" class="col-sm-4 form-control-label">Pour</label>
                  <div class="col-sm-7">
                    <input class="form-control" id="subject" placeholder="Ex: passer le permis" type="text">
                  </div>                 
                </div>

                <div class="form-group row">

                  <label for="repayment_repeat" class="col-sm-4 form-control-label">Je rembourse</label>
                  
                  <div class="col-sm-7">
                    
                      <div class="text-center ">
                        <p id="mensualite"></p>
                        <div id="slider-months" class="slider noUi-target noUi-ltr noUi-horizontal noUi-connect"></div>
                        
                      </div>

                  </div>
                </div>


                <div id="delayed">
                  <div class="form-group row">
                    <label for="subject" class="col-sm-4 form-control-label">Pendant</label>
                    <label id="delayed_repayment_delay_value" class="form-control-label col-sm-8">
                      6 mois
                    </label>
                  </div>
                </div>

                <div id="once" >
                  <div class="form-group form-row">
                    <label for="subject" class="form-control-label col-sm-4">au plus tard dans</label>
                    <div class="form-group col-sm-1">
                      <input id="once_repayment_delay_value" class="form-control">
                    </div>

                    <div class="from-group col-sm-7">
                      <div class="form-check form-check-inline">
                        <label class="form-check-label">
                          <input class="form-check-input" name="repayment_delay_unit" id="weeks" value="weeks" checked="" type="radio">
                          semaines
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <label class="form-check-label">
                          <input class="form-check-input" name="repayment_delay_unit" id="months" value="months" type="radio">
                          mois
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <a href="#" class="btn btn-primary btn-block btn-round pull-right ">Préparer les documents</a>                      
                </div>

              </form>
            
            </div>
          </div>
          {{-- fin colonne droite --}}

        </div> 
      </div>
    </div>
  </div>

  
@endsection
  