
$(document).ready(function() {
      

  if ($('#simulator').length != 0) { 

    const minAmount = 50;
    const maxAmount = 5000;
    const defaultAmount = 200;
    const stepsAmount = 50;
    const maxRepayments = 36; // months

    var sliderAmount = document.getElementById('slider-amount');
    var sliderMonths = document.getElementById('slider-months');

    updateSliderValue = function(slider, value, suffix = '') {
      var children;
      children = slider.getElementsByClassName('noUi-handle');
      children[0].dataset.value = value + suffix;
      return value;
    };



    function setupSimulator() {

      noUiSlider.create(sliderAmount, {
        animationDuration: 300,
        start: [defaultAmount],
        step: stepsAmount,            
        range: {
          'min': [minAmount],    
          'max': [maxAmount]     
        },
      });

      noUiSlider.create(sliderMonths, {
        start: 1,
        step: 1,            
        range: {
          'min': 1,    
          'max': maxRepayments,     
        },
       
      }); 
    }

    setupSimulator();
    

    sliderAmount.noUiSlider.on('update', function(values, handle) {

      // On rafraichit le remboursement par mois
      updateSliderValue(sliderMonths, (parseInt(sliderAmount.noUiSlider.get())/parseInt(sliderMonths.noUiSlider.get())).toFixed(2), ' €/mois');

      // On rafraichit le nombre de mois
      $('#delayed_repayment_delay_value').text(sliderMonths.noUiSlider.get() + ' mois');

      // On rafraichit le montant du prêt
      return updateSliderValue(sliderAmount, parseInt(sliderAmount.noUiSlider.get()).toFixed(), ' €');

    });

    sliderMonths.noUiSlider.on('update', function(values, handle) {
      // On rafraichit le nombre de mois
      $('#delayed_repayment_delay_value').text(parseInt(sliderMonths.noUiSlider.get()).toFixed() + ' mois');

      // Cas particullier du remboursement en une fois - on fait apparaitre le delai de remboursement
      if (sliderMonths.noUiSlider.get() == 1) {
        $('#delayed').hide();
        $('#once').show();
      }
      else {
        $('#once').hide();
        $('#delayed').show();
      }

      // On rafraichit la valeur du handle
      return updateSliderValue(sliderMonths, (parseInt(sliderAmount.noUiSlider.get())/parseInt(sliderMonths.noUiSlider.get())).toFixed(2), ' €/mois');
    });

    

  };

});
