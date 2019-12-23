
$("#deleteBtn").on("click", function() {
	
	var drugName = $("#drugName").text();
	
	$.ajax({
		url: 'ajax/deleteBtn.php',
		type: 'POST',
		cache: false,
		data: { 'drugName': drugName},
		dataType: 'html'
	});
});