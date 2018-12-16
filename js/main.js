	$(document).ready(function(){
	console.log('JS loaded');

	$('#firstname').keyup(function(){
		// var regExp = new RegExp(/^[a-zA-Z]*$/); method 1
				var regExp =  /^[a-zA-Z]+$/;
				if(!regExp.test($('#firstname').val())){
						$('#firstname').addClass('animated fadeIn is-invalid');
				}else{
						$('#firstname').removeClass('is-invalid');
						$('#firstname').addClass('is-valid');
				}
		});
		$('#lastname').keyup(function(){
				var regExp =  /^[a-zA-Z]+$/;
				if(!regExp.test($('#lastname').val())){
						$('#lastname').addClass('is-invalid');
				}else{
						$('#lastname').removeClass('is-invalid');
						$('#lastname').addClass('is-valid');
				}
		});
		$('#username').keyup(function(){
				var regExp =  /^[a-zA-Z0-9]+$/;
				if(!regExp.test($('#username').val())){
						$('#username').addClass('is-invalid');
				}else{
						$('#username').removeClass('is-invalid');
						$('#username').addClass('is-valid');
				}
		});
		$('#email').keyup(function(){
				var regExp =  /^[a-zA-Z0-9._]+@[a-zA-Z0-9._]+\.[a-zA-Z]{2,4}$/;
				if(!regExp.test($('#email').val())){
						$('#email').addClass('is-invalid');
				}else{
						$('#email').removeClass('is-invalid');
						$('#email').addClass('is-valid');
				}
		});
		$('#phone').keyup(function(){
				var regExp =  /^[0-9]{10}$/;
				if(!regExp.test($('#phone').val())){
						$('#phone').addClass('is-invalid');
				}else{
						$('#phone').removeClass('is-invalid');
						$('#phone').addClass('is-valid');
				}
		});
		$('#password').keyup(function(){
				var regExp =  /^[a-zA-Z0-9_\s]{8,20}$/;
				if(!regExp.test($('#password').val())){
						$('#password').addClass('is-invalid');
				}else{
						$('#password').removeClass('is-invalid');
						$('#password').addClass('is-valid');
				}
		});
		$('#confirm_pass').keyup(function(){
				var regExp =  /^[a-zA-Z0-9_\s]{8,20}$/;
				if(regExp.test($('#confirm_pass').val())){
						if($('#confirm_pass').val() == $('#password').val()){
								$('#confirm_pass').removeClass('is-invalid');
								$('#confirm_pass').addClass('is-valid');
						}else{
								$('#confirm_pass').addClass('is-invalid');
						}
				}
				else{
						$('#confirm_pass').addClass('is-invalid');
				}
		});

	// Login card hover
	$('#card-hover').mouseover(function(){
		$('#card-hover').addClass('shadow-lg');
	});
	$('#card-hover').mouseout(function(){
		$('#card-hover').removeClass('shadow-lg');
	});

		//   Alerts
		window.setTimeout(function() {
				$(".alert").fadeTo(500, 0).slideUp(500, function(){
						$(this).remove(); 
				});
		}, 4000);

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

	// Carousel
	$('.carousel').carousel({
		interval: 1500,
		pause: false
	});

	// Date Picker
	$('#datepicker').datepicker('show');

	// Tooltip
	$('#example').tooltip({
		animation: true
	});


	// Alerts
	$(".alert").alert();
	});