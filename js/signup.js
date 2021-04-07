$(document).ready(function() {
	
 $("form").submit(function (event) {
	event.preventDefault();
	
    var name = $('#FullName');
	var email = $('#Email');
	var phone = $('#Phone');
    var password = $('#Password');
    $.post("/pawsome/handle_register",{
      name:name.val(),
	  email:email.val(),
	  phone:phone.val(),
      password: password.val()
    }).done(function (data,status) {
      console.log(data ,status);
      if(data ==="user exists" ){
      	
		var alertBox =  $("<div></div>").text("User already exists! Please Log in.");
		alertBox.addClass("alert alert-danger text-center alert-dismissible fade show");
		alertBox.attr("role","alert");
		var button = $("<button></button>");
		button.addClass("btn-close  text-center text-danger");
		button.attr({
			"type":'button',
			"data-bs-dismiss":"alert",
			"aria-label":'Close',
		});
		alertBox.append(button);
		$('nav').after(alertBox);

	  }
      else if(data === 'successful'){
      	
      	localStorage.setItem("name",name.val());
      	localStorage.setItem("email",email.val());
		window.location.replace("/pawsome/");
	  }

    })

  })
})
