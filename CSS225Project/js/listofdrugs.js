$.ajax({
		url: 'ajax/listofdrugs.php',
		type: 'POST',
		cache: false,
		data: {},
		dataType: 'html',
		success: function(data){
			$("#list").html(data);
			
		}
	});