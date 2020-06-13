if (window.matchMedia("(min-width: 768px)").matches && window.matchMedia("(max-width: 1024px)").matches) {
  console.log('ok');
  jQuery('.navbar-collapse.collapse').removeAttribute("class"); 
}

if (window.matchMedia("(max-width: 767px)").matches) {
    
    jQuery('.gsc-search-button').height( '50px' );
}
if (window.matchMedia("(min-width: 768px)").matches && window.matchMedia("(max-width: 1068px)").matches) {
    jQuery('.gsc-search-button').height( '40px' );
}
if (window.matchMedia("(min-width: 1068px)").matches ) {
    jQuery('.gsc-search-button').height( '40px' );
}

