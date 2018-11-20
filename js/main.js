$(document).ready(function(){
  console.log('JS loaded');
  
  // Login card hover
  $('#loginCard').mouseover(function(){
    $('#loginCard').addClass('shadow-lg');
  });
  $('#loginCard').mouseout(function(){
    $('#loginCard').removeClass('shadow-lg');
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


});