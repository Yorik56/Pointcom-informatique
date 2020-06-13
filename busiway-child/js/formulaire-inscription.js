jQuery('#confirmation_de_mot_de_passe').blur(function(){
    if(jQuery('#mot_de_passe').val() == jQuery('#confirmation_de_mot_de_passe').val()){
        jQuery('.alert_pass').empty();
    }
    else {
        console.log('les mots de passe ne correspondent pas');
        jQuery('.alert_pass').empty();
        jQuery('.alert_pass').append('<p>les mots de passe ne correspondent pas</p>');
    }
});