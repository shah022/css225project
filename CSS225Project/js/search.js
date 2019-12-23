
$("#searchBot").on("click", function() {
	

	var search = $("#searchIn").val().trim();
	if(search ==""){
		$("#drugInfo").text("Введите название лекарства")
		return false;
	}
	$.ajax({
		url: 'ajax/search.php',
		type: 'POST',
		cache: false,
		data: { 'search': search},
		dataType: 'html',
		success: function(data){
			$("#drugInfo").html(data);
			
		}
	});
});