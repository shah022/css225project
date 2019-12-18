$("#sendMail").on("click", function() {
	var email = $("#email").val().trim();
	var name = $("#name").val().trim();
	var surname = $("#surname").val().trim();
	var phone = $("#phone").val().trim();
	var city = $("#city").val().trim();

	if(name ==""){
		$("#errorMes").text("Введите имя")
		return false;
	} else if(surname ==""){
		$("#errorMes").text("Введите фамилию")
		return false;
	} else if(phone ==""){
		$("#errorMes").text("Введите телефон")
		return false;
	} else if(city ==""){
		$("#errorMes").text("Введите город")
		return false;
	} else if(email ==""){
		$("#errorMes").text("Введите email")
		return false;
	} 

	$("#errorMes").text("Заполните все поля чтобы мы могли связаться с вами!");

	$.ajax({
		url: 'ajax/mail.php',
		type: 'POST',
		cache: false,
		data: { 'name': name, 'surname': surname, 'phone': phone, 'city': city, 'email': email},
		dataType: 'html',
		beforeSend: function(){
			$("#sendMail").prop("disabled", true);
		},
		success: function(data){
			if(!data){
				alert("Ошибка! Данные не отправились!");
			}
			else{
				$("#mailForm").trigger("reset");
			}
			$("#sendMail").prop("disabled", false);
		}
	});
});