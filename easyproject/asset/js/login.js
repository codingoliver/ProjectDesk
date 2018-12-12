63342
function validateUser()
{
	var username = $('#txtUser');
	var password = $('#txtPassword');
	var divError = $('#divError');
		

	// user verification loading gif
	divError.html("<img src='http://localhost/olmart/asset/img/loading.gif' width='30' height='30'>");


	// ajax call to verify user
	$.get('http://localhost/olmart/index.php/Welcome/user_verification', {username: username.val(), password: password.val() },
		function(data, status) {

			if(data === 'success') {
				 window.location = 'http://localhost/olmart/index.php/Welcome/home_view';
			} else if(data === 'Username doesnot exist') {
				 divError.html("<p style='color: red'> " + data + "</p>");
				 username.focus();
			} else if(data === 'Invalid password') {
				divError.html("<p style='color: red'> " + data + "</p>");
				 password.focus();
			}
		}
	);

	return false;
}
