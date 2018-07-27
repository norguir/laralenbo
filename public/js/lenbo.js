
$(document).ready(function() {

  if ($('#slider-installments').length != 0) {

    var sliderInstallments = document.getElementById('slider-installments');

    noUiSlider.create(sliderInstallments, {
      start: [ 12 ],
      step: 1,
      range: {
        'min': [  1 ],
        'max': [ 36 ]
      }
    });

    
    var eltAmount = $('#amount');
    var eltRepaymentDelayValue = $('#repayment_delay_value');
    var eltRepaymentDelayUnit = $('#repayment_delay_value');

    var eltDelayedRepaymentDelayValue = $('#delayed_repayment_delay_value');
    var eltOnceRepaymentDelayValue = $('#once_repayment_delay_value');
    var eltMensualite = $('#mensualite');

    var eltDelay = $('#delay');
    
    sliderInstallments.noUiSlider.on('update', function( values, handle ) {

      mensualite = eval(values[handle]);

      if ( mensualite == 1) {
        eltMensualite.text('la totalité');
        $('#once').show();
        $('#delayed').hide()
      }
      else {

        eltMensualite.text(Math.round(eltAmount.val() / mensualite )+ '€/mois');
        eltDelayedRepaymentDelayValue.text(mensualite);
        
        $('#once').hide();
        $('#delayed').show()
 
      }
      eltRepaymentDelayValue.val(mensualite);
    });

  };

});
