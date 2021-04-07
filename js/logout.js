$(document).ready(function () {
	$('#logout').click(function () {
		$.post("/pawsome/logout").done(function (data,status) {
			if(data==='success'){
				window.location.replace("/pawsome/");
			}
		})
	})
});
