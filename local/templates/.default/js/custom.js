$(document).ready(function(){

  $('.btn').click(function(){
    $('#panel').animate({ opacity: "hide" }, "slow");
  });

  $('a[data-fancybox="gallery"]').fancybox({
		loop: true,
		transitionEffect: "circular",
	  thumbs : {
		autoStart: true,
		axis: 'x',
			}
	});

});
