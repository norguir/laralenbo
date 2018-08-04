
$(document).ready(function() {
      

  if ($('#simulator').length != 0) { 


    const minAmount = 50;
    const maxAmount = 5000;
    const defaultAmount = 1000;
    const stepsAmount = 50;   // Amount in steps
    const maxRepayments = 36; // max number of repayment months
    const defaultMonths = 5; // loan duration in months 
    const defaultDelay = 2; // months before repayment start

    var sliderAmount = document.getElementById('slider-amount');
    var sliderMonths = document.getElementById('slider-months');


    // Helpers functions to read sliders values
    function getInstallmentsValue() 
    {
      return (parseInt(sliderAmount.noUiSlider.get()) / parseInt(sliderMonths.noUiSlider.get()) ).toFixed(0);
    }

    function getMonthsValue()
    {
      return parseInt(sliderMonths.noUiSlider.get()).toFixed();
    }

    function getAmountValue()
    {
      return parseInt(sliderAmount.noUiSlider.get()).toFixed();
    }


    
    // Displays values in slider handle
    function updateHandleText (slider, value, suffix = '') {
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
        start: defaultMonths,
        step: 1,            
        range: {
          'min': 1,    
          'max': maxRepayments,     
        },
       
      }); 

      $('#once_repayment_delay_value').val(defaultDelay);
    }

    setupSimulator();
    

    // Change amount
    sliderAmount.noUiSlider.on('update', function(values, handle) {

      // On rafraichit le nombre de mois
      $('#delayed_repayment_delay_value').val( getMonthsValue() );

      // On rafraichit le remboursement par mois
      updateHandleText(sliderMonths, getInstallmentsValue(), ' €');

      // On rafraichit le montant du prêt
      return updateHandleText(sliderAmount, getAmountValue(), ' €');

    });

    // Change months 
    sliderMonths.noUiSlider.on('update', function(values, handle) {

      var months = getMonthsValue();

      // On rafraichit le nombre de mois
      $('#delayed_repayment_delay_value').val(months);

      // Cas particullier du remboursement en une fois - on fait apparaitre le delai de remboursement
      if ( months == 1) {
        $('#delayed').hide();
        $('#once').show();
        return updateHandleText(sliderMonths, getInstallmentsValue(),' €');
      }
      else {
        $('#delayed').show();
        $('#once').hide();
        return updateHandleText(sliderMonths, getInstallmentsValue(), ' €');
        
      }

    });

    

  };

});
