
$(document).ready(function() {
      

  if ($('#simulator').length != 0) { 

    const minAmount = 50;
    const maxAmount = 5000;
    const defaultAmount = 200;
    const stepsAmount = 50;
    const maxRepayments = 36; // months

    var sliderAmount = document.getElementById('slider-amount');
    var sliderInstallments = document.getElementById('slider-installments');

    console.log(sliderAmount);

    function showSettings(elem) {
      if (elem.val() === "")        $("#settings").hide();
      else $("#settings").show();
    }

    function tooltipFormater(e)
    {
      return wNumb({ decimals: 0, suffix: ' €/mois' })
    }

    function setupSimulator() {

      // // Filter non numeric amount input
      // $('#amount').numeric(
      //   {decimal: false, negative: false}
      // );

      // // Show settings if amount is set
      // $('#amount').keyup(function(e) {
      //   showSettings($(this));
      //   return true;
      // });

      noUiSlider.create(sliderAmount, {
        start: [defaultAmount],
        step: stepsAmount,            
        range: {
          'min': [minAmount],    
          'max': [maxAmount]     
        },
        tooltips: wNumb({ decimals: 0, suffix: ' €' }),
      });

      noUiSlider.create(sliderInstallments, {
        start: [minAmount/maxRepayments],
        //step: minAmount/maxRepayments,            
        range: {
          'min': [Number(sliderAmount.noUiSlider.get()) / maxRepayments],    
          'max': [Number(sliderAmount.noUiSlider.get())]     
        },
        tooltips: wNumb({ decimals: 2, suffix: ' €/mois' })
      }); 

      // If this is a page reload some data may already be be in input fields
      showSettings($('#amount'));

    }

    setupSimulator();
    
    sliderAmount.noUiSlider.on('update', function (values, handle) {
      // Si l'amount change, on change le slider de remboursement
      console.log(Number(sliderAmount.noUiSlider.get()));
      sliderInstallments.noUiSlider.updateOptions( {
        range: {
          'min': Number(sliderAmount.noUiSlider.get()) / maxRepayments,
          'max': Number(sliderAmount.noUiSlider.get())
        },
        step: Number(sliderAmount.noUiSlider.get()) / maxRepayments
      });  
    });

    sliderInstallments.noUiSlider.on('update', function( values, handle ) {

      if (values[handle] == sliderAmount.noUiSlider.get()) $('#once').show();
      else $('#once').hide();
      $('#delayed_repayment_delay_value').text(Math.round(sliderAmount.noUiSlider.get() / values[handle]) + ' mois');
     
    });

  };

});
