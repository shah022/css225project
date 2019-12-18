$.ajax({
		url: 'ajax/profile.php',
		type: 'POST',
		cache: false,
		data: {},
		dataType: 'html',
		success: function(data){
			$("#userlog").text(data);
			
			
		}
	});