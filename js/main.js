$(document).ready(function(){
  console.log('JS loaded');
  
  // Login card hover
  $('#card-hover').mouseover(function(){
    $('#card-hover').addClass('shadow-lg');
  });
  $('#card-hover').mouseout(function(){
    $('#card-hover').removeClass('shadow-lg');
  });

  // Type js
  var typed = new Typed('.words', {
    strings: ["Write. ✏️", "Chat. 💬", "Connect. 🤝", "Discuss. 🗣️", "Blog.", "Stand-out ✋", "Share.", " Fun."],
    backDelay: 720,
    backSpeed: 1000,
    typeSpeed: 90,
    shuffle: true,
    smartBackspace: false,
    fadeOut: true,
    fadeOutClass: 'typed-fade-out',
    fadeOutDelay: 740,
    loop: true
  });

  $('.carousel').carousel({
    interval: 1500,
    pause: false
  });

  // Date Picker
  $('#datepicker').datepicker('show');
});