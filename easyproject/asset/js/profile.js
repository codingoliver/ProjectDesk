// update user detail
$(function () {
    $('.js-sweetalert2 button').on('click', function () {

alert('shit');
		var password = $('#password').val();
		var location, type;
		type = $(this).data('type');

		if (type === 'student') {
    		location = "http://localhost/easyproject/index.php/Welcome/student_profile";
    	} else if(type === 'supervisor') {
    		location = "http://localhost/easyproject/index.php/Welcome/supervisor_profile";
    	} else if(type === 'coordinator') {
            location = "http://localhost/easyproject/index.php/Welcome/coordinator_profile";
            alert('here');
        }
        else {
    		location = "http://localhost/easyproject/index.php/Welcome/hod_profile";
    	}

    	swal({
        	title: "Sure?",
        	text: "You will not be able to undo this operation",
        	type: "warning",
        	showCancelButton: true,
        	confirmButtonColor: "#DD6B55",
        	confirmButtonText: "Yes",
        	closeOnConfirm: false
    	},
    	 function () {

        	// ajax call to update user detail 
        	$.post('http://localhost/easyproject/index.php/Welcome/update_user_detail', 
        		{
        		    password: password
        		},
            	function(data, status) {

                	if(data === 'success') {
                    	swal("Successful", "Profile detail updated successfully", "success");
                    	window.location = location;

                	} else {
                    	swal("Failed!", "Profile detail could not be modified", "failure");
                	}
            	}
        	);   
    	});

    	return false;
    });
});

