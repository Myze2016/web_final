
$(document).ready(function(){
	
	$('#userform').submit(function(e){
		e.preventDefault();
		var url   = '$(this).attr('action')';

		$.ajax({
			url : url,
			method: 'POST',
			data : $(this).serialize(),
			success: function(res){
				//$('#success-message').text(res.message);
				alert('qweqwe');
			},
			error: function(err){
<<<<<<< HEAD
				//var errors  =  JSON.parse(err.responseText);
				alert('wqeqwe');
=======
				
				alert('ERROR');				
>>>>>>> c14e3d08ff4a3f06783fb5c6d5f74bdaac8530cb
			}
		})
	})

<<<<<<< HEAD
})
=======

})


>>>>>>> c14e3d08ff4a3f06783fb5c6d5f74bdaac8530cb
