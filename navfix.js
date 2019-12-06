$(document).ready(function() 
{
  $(window).scroll(function () 
  { 
    if ($(window).scrollTop() > 85) 
	{
      $('#nav_bar').addClass('navbar-fixed');
    }

    if ($(window).scrollTop() < 85) 
	{
      $('#nav_bar').removeClass('navbar-fixed');
	}
  });
  
  $("#scrol").on('click', function(event) 
  {
    if (this.hash !== "") 
    {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate
      (
        { scrollTop: $(hash).offset().top}, 1000,
        function()
          {
            window.location.hash = hash;
          }
      );
    } 
  });  
  
});