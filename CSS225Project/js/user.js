$.ajax({
		url: 'ajax/user.php',
		type: 'POST',
		cache: false,
		data: {},
		dataType: 'html',
		success: function(data){
			if(data){
				$("#userlog").html(data);
			}else{
				$("#userlog").html("<a href='SignIn.html' id='login'>Войти<a> <a href='SignUp.html' id='register'>Зарегистрироваться<a>");
			}
			
		}
	});