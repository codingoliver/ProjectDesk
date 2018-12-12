// function updateProfile() 
// {
// 	alert('sht');

// 	var password = $('#password').val();
// 	var location, type;
// 	type = $(this).data('type');

// 	if (type == 'student') {
//     	location = "http://localhost/easyproject/index.php/Welcome/student_profile";
//     } else if(type == 'supervisor') {
//     	location = "http://localhost/easyproject/index.php/Welcome/supervisor_profile";
//     } else {
//     	location = "http://localhost/easyproject/index.php/Welcome/update_user_detail/hod";
//     }

//     swal({
//         title: "sd?",
//         text: "You will not be able to undo this operation",
//         type: "warning",
//         showCancelButton: true,
//         confirmButtonColor: "#DD6B55",
//         confirmButtonText: "Yes",
//         closeOnConfirm: false
//     },
//     function () {
//    		window.location = location;
//     });

//     return false;

// }