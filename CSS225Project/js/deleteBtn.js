$("#deleteBtn").on("click", function() {
	var id = $("#id").name;
	

	$.ajax({
		url: 'ajax/deleteBtn.php',
		type: 'POST',
		cache: false,
		data: { 'id': id},
		dataType: 'html'
	});
});