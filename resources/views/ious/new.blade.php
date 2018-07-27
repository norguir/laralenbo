@extends('layouts.app')


@section('content')


  <div class="container" >

    <div class="row">

      <div class="row">
        <div class="container">
          <h2 class="title">C'est parti. Préparons votre prêt.</h2>
        </div>
      </div>

      {{-- Colonne gauche --}}
      <div class="col-md-6 ml-auto mr-auto">
        <div class="left-column">      
          <div class="row">
            <div class="col-md-6">
              <div class="info info-horizontal">
                <div class="icon icon-success">
                  <i class="nc-icon nc-layout-11"></i>
                </div>
                <div class="description">
                  <h4 class="info-title">Quel prêt?</h4>
                  <p>Il suffit de préciser de combien vous avez besoin, et comment vous pouvez rembouser</p>
                </div>
              </div>
              <div class="info info-horizontal">
                <div class="icon icon-warning">
                  <i class="nc-icon nc-palette"></i>
                </div>
                <div class="description">
                  <h4 class="info-title">Préparation des documents</h4>
                  <p>Vous indiquez qui vous êtes et à qui vous voulez demander de l'argent. Nous nous occupons de préparer toute la documentation.</p>
                  <a href="#paper-kit" class="btn btn-link">Quels documents?</a>
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
                  <p>On vous donne tout ce qu'il faut. Vous n'avez plus qu'à envoyer votre demande de prêt comme bon vous semble.</p>
                  <a href="#paper-kit" class="btn btn-link">Comment envoyer votre <br/>demande de prêt?</a>
                </div>
              </div>
              <div class="info info-horizontal">
                <div class="icon icon-primary">
                  <i class="nc-icon nc-touch-id"></i>
                </div>
                <div class="description">
                  <h4 class="info-title">Ca y est!</h4>
                  <p>Le prêteur a accepté votre demande de prêt. Vous pouvez maintenant patati patata</p>
                  <a href="#paper-kit" class="btn btn-link">Et maintenant</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Colonne droite --}}
      <div class="col-md-5 ml-auto mr-auto">

        <div class=" card-simulator">
        
          <h3 class="card-title"></h3>

          <form>

            <div class="d-flex flex-column">

              <div class="d-flex flex-row justify-content-between">
                
                <div class="bd-box ">
                  <label class="col-form-label">J'ai besoin de&nbsp</label>
                </div>

                <div class="bd-box flex-fill">

                  <div class="input-group">
                    <input id="amount" class="form-control" placeholder="Ex:1000">
                    <div class="input-group-append">
                      <span class="input-group-text">€</span>
                    </div>
                  </div>

                </div>
              </div>

              <div class="d-flex flex-row justify-content-between">

                <div class="bd-box">
                  <label class="col-form-label">Pour&nbsp</label>
                </div>

                <div class="bd-box flex-fill">

                  <div class="input-group">
                    <input class="form-control" placeholder="Ex: passer le permis">
                  </div>

                </div>
              </div>

              <div class="d-flex flex-row justify-content-between">

                <div class="bd-box">
                  <label class="col-form-label">Je peux rembourser&nbsp</label>
                </div>

                <div class="bd-box flex-fill">

                  

                  
                  <div class="text-center ">
                      <span id="mensualite"></span><br/>
                      <div id="slider-installments" class="slider noUi-target noUi-ltr noUi-horizontal noUi-connect"></div>
                  </div>

                </div>
              </div>

              <div id="delayed">
                <div class="d-flex flex-row justify-content-between">

                  <div class="bd-box">
                    <label for="repayment_delay_value" class="col-form-label">pendant&nbsp</label>
                  </div>

                  
                  <div class="bd-box flex-fill">
                    <label id="delayed_repayment_delay_value" class="col-form-label"></label> mois.
                  </div>

                </div>
              </div>

              <div id="once" >
                <div class="d-flex flex-row justify-content-between">

                  <div class="bd-box flex-fill">
                    <label for="repayment_delay_value" class="col-form-label">au plus tard dans</label>
                  </div>

                  <div class="bd-box">
                      <input id="once_repayment_delay_value" class="form-control">
                  </div>

                  <div class="bd-box">
                    <select id="repayment_value_unit" class="selectpicker" data-style="btn-link">
                      <option value="days">Jours </option>
                      <option value="weeks">Semaines</option>
                      <option value="months" selected>Mois</option>
                    </select>
                  </div>

                </div>
              </div>
          
              <div class="d-flex flex-row justify-content-end bd-box">
                <div class="">
                  <a href="#paper-kit" class="btn btn-primary btn-round pull-right ">Préparer les documents</a>
                  <!-- <button class="btn btn-primary btn-block btn-round">Send </button> -->
                </div>
              </div>

            </div>
          </form>  
        </div>
      </div>
    </div>
  </div>

  
@endsection
  