@extends('layouts.app')


@section('content')

  <div class="section" style="background-image: url('../images/3hands-square_x1500.png');
  background-position: right center;">

    <div class="container" style="min-height: 100vh;height: 100%;">
  
    <div class="">

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
                      <h4 class="info-title">On prépare les documents</h4></p>

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

          {{-- Colonne droite --}}
          <div class="col-md-6 mr-auto">

            <div id="simulator" class="card-simulator">
            
              <h3 class="card-title"></h3>

              <form>

                <div class="form-group row">
                  <label for="amount" class="col-sm-4 form-control-label">J'ai besoin de</label>

                  {{-- <div class="input-group col-sm-8">
                    <input id="amount" name="amount" placeholder="Ex: 1000" class="form-control here" required="required" type="text"> 
                     <div class="input-group-addon input-group-append">
                      <i class="fa fa-eur"></i>
                    </div>
                  </div> --}}
                  <div class="col-sm-8">
                    <div id="slider-amount" class="slider noUi-target noUi-ltr noUi-horizontal noUi-connect"></div>
                  </div>
                </div>


                <div class="form-group row">

                  <label for="subject" class="col-sm-4 form-control-label">Pour</label>
                  <div class="col-sm-8">
                    <input class="form-control" id="subject" placeholder="Ex: passer le permis" type="text">
                  </div>
                  
                </div>

                {{-- Loan settings - Only shown when amount is a valid number --}}
                <div id="settings">

                  <div class="form-group row">

                    <label for="repayment_repeat" class="col-sm-4 form-control-label">Je rembourse</label>
                    <div class="col-sm-8">
                      
                        <div class="text-center ">
                          <p id="mensualite"></p>
                          <div id="slider-installments" class="slider noUi-target noUi-ltr noUi-horizontal noUi-connect"></div>
                          
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
                </div>

                <div class="form-group row">
                  <a href="#" class="btn btn-primary btn-block btn-round pull-right ">Préparer les documents</a>                      
                </div>
              </form>
            </div>

          </div>



                {{-- <div class="d-flex flex-column">

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
                      <label class="col-form-label">Je rembourse&nbsp</label>
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
 --}}
                </div>
              </form>  
            </div>
          </div>

        </div>
      </div>
    
    </div>

  </div>

  
@endsection
  