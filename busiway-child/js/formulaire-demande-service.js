jQuery('#gigas_supplementaire').change(function() {
  if(jQuery('#gigas_supplementaire').val() == 'Au dessus de 20 gigas'){
      document.getElementById("inferieur_20_gigas").disabled = false;
      document.getElementById("superieur_50_gigas").disabled = false;
      document.getElementById("sauveguarde_inferieur_5gigas").disabled = false;
  }
  else{
      document.getElementById("inferieur_20_gigas").disabled = true;
      document.getElementById("superieur_50_gigas").disabled = true;
      document.getElementById("sauveguarde_inferieur_5gigas").disabled = true;
  }
});

jQuery('#inferieur_20_gigas').click(function() {
  if(jQuery('#inferieur_20_gigas').is(':checked')){
      document.getElementById("gigas_supplementaire").disabled = true;
      document.getElementById("superieur_50_gigas").disabled = true;
      document.getElementById("sauveguarde_inferieur_5gigas").disabled = true;
  }
  else{
      document.getElementById("gigas_supplementaire").disabled = false;
      document.getElementById("superieur_50_gigas").disabled = false;
      document.getElementById("sauveguarde_inferieur_5gigas").disabled = false;
  }
});

jQuery('#superieur_50_gigas').click(function() {
  if(jQuery('#superieur_50_gigas').is(':checked')){
      document.getElementById("gigas_supplementaire").disabled = true;
      document.getElementById("inferieur_20_gigas").disabled = true;
      document.getElementById("sauveguarde_inferieur_5gigas").disabled = true;
  }
  else{
      document.getElementById("gigas_supplementaire").disabled = false;
      document.getElementById("inferieur_20_gigas").disabled = false;
      document.getElementById("sauveguarde_inferieur_5gigas").disabled = false;
  }
});

jQuery('#sauveguarde_inferieur_5gigas').click(function() {
  if(jQuery('#sauveguarde_inferieur_5gigas').is(':checked')){
      document.getElementById("gigas_supplementaire").disabled = true;
      document.getElementById("superieur_50_gigas").disabled = true;
      document.getElementById("inferieur_20_gigas").disabled = true;
  }
  else{
      document.getElementById("gigas_supplementaire").disabled = false;
      document.getElementById("superieur_50_gigas").disabled = false;
      document.getElementById("inferieur_20_gigas").disabled = false;
  }
});
