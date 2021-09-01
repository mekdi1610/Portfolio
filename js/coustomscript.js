	$(document).ready(function(){

		load_photo();

function load_photo()
		{
			 var action = 'category';
		  $.ajax({
				   url:"class/portfoliophoto.php",
				   method:"POST",
				   data:{action:action},
				   success:function(data)
				   {
	
				     $('#project-slide').html(data);
				   }
		  });
		}
	});
