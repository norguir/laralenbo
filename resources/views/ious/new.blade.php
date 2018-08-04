@extends('layouts.app')


@section('content')

  <div class="section lenbo-section">

    <div class="container" style="min-height: 100vh;height: 100%;">


      <div class="background">
    

        <div class="row">
          <div class="container">
            <h1 class="h1">C'est parti! Simulons votre prêt.</h1>
          </div>
        </div>
        
      

        <div class="row">

          <div class="col-md-4 pr-0 left-column">
      
            <div class="info info-horizontal">
              <div class="icon icon-success">
                <i class="nc-icon nc-money-coins"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Combien?</h4>
                <p>Vous pouvez simuler un prêt de 50€ à 5&nbsp;000€</p>
              </div>
            </div>
            <div class="info info-horizontal">
              <div class="icon icon-warning">
                <i class="nc-icon nc-layout-11"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Pour quoi faire?</h4>
                <p>Votre prêt sera plus facile à obtenir en décrivant votre projet.</p>
              </div>

            </div>
            <div class="info info-horizontal">
              <div class="icon icon-danger">
                <i class="nc-icon nc-watch-time"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Remboursement</h4>
                <p>C'est vous qui choisisez comment vous allez rembourser. Vous pouvez aussi décider de rembourser en une fois, quand vous voulez.</p>
              </div>
            </div>
            <div class="info info-horizontal">
              <div class="icon icon-primary">
                <i class="nc-icon nc-paper"></i>
              </div>
              <div class="description">
                <h4 class="info-title">On se charge du reste</h4>
                <p>Avec ces informations, on peut préparer les documents officiels pour obtenir votre prêt.</p>
                
              </div>
            </div>

          </div>
  

          <div id="simulator" class="col-md-8 px-4 simulator">
      
            <h2 class="title">Simulation du prêt</h2>
            
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
                  <div class="col-sm-1">
                    <input id="delayed_repayment_delay_value" class="form-control" disabled="" style="border: none;">
                  </div>
                  <h4 for="subject" class="col-sm-4">mois</h4>
                </div>
              </div>

              <div id="once" >
                <div class="form-group form-row">
                  <h4 for="subject" class="col-sm-4">au plus tard dans</h4>
                  <div class="col-sm-1">
                    <input id="once_repayment_delay_value" class="form-control">
                  </div>
                  <h4 class="form-control-label col">mois</h4>
                </div>
              </div>

              <div class="form-group row">
                <a href="#" class="btn btn-primary btn-block btn-round ">Préparer les documents</a>                      
              </div>

            </form>

          </div>


        </div> 
      </div>
    </div>
  </div>

  
@endsection
  