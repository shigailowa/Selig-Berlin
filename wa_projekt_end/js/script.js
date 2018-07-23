$(document).ready(function(){

$('.parent-container').magnificPopup({
  
  delegate: 'a', // child items selector, by clicking on it popup will open
  type: 'image',
  // other options
  gallery:{
  	enabled:true
  }

});
});


