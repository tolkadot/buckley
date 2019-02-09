jQuery( document ).ready( function( $ ) {
console.log("tolka.js loaded");

 $('#collapse2314').bind('DOMSubtreeModified', function(e) {
      console.log('class changed');
  });

 $('.collapse').on('shown.bs.collapse', function () {
        $(this).prev().addClass('active-acc');
    });

    $('.collapse').on('hidden.bs.collapse', function () {
        $(this).prev().removeClass('active-acc');
    });


 });
