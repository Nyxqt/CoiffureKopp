$(document).ready(function () {
	$("#show_password").click(function () {
		let passwordField = $("#password");
		let passwordFieldType = passwordField.attr("type");
		if (passwordFieldType === "password") {
			passwordField.attr("type", "text");
			$(this).html('<i class="fa fa-eye"></i>');
		} else {
			passwordField.attr("type", "password");
			$(this).html('<i class="fa  fa-eye-slash"></i>');
		}
	});
});
