// verify user login
function verify_user(type)
{   
    var email, password, relocation_url, div_element;

    if(type === 'student') {

        email = $('#txtStudentEmail').val();
        password = $('#txtStudentPassword').val();

        relocation_url = 'http://localhost/easyproject/index.php/Welcome/student';
        div_element = '#divStudentError';
    } else if(type === 'supervisor') {

        email = $('#txtSupervisorEmail').val();
        password = $('#txtSupervisorPassword').val();

        relocation_url = 'http://localhost/easyproject/index.php/Welcome/supervisor';
        div_element = '#divSupervisorError';

    }  else if(type === 'coordinator') {


        email = $('#txtCEmail').val();
        password = $('#txtCPassword').val();

        relocation_url = 'http://localhost/easyproject/index.php/Welcome/coordinator';
        div_element = '#divCError';
    }

    else {

        email = $('#txtHodEmail').val();
        password = $('#txtHodPassword').val();

        relocation_url = 'http://localhost/easyproject/index.php/Welcome/hod';
        div_element = '#divHodError';
    }

    // user verification loading gif
    $(div_element).html("<img src='http://localhost/olmart/asset/img/loading.gif' width='30' height='30'>");


    $.get('http://localhost/easyproject/index.php/Welcome/user_verification', {
                email: email,
                password: password,
                type: type
            },
            function(data, status) {

                if((data === 'User doesnot exist') || (data === 'Invalid password')) {
                    $(div_element).html("<p style='color: red'>"+data+"</p>");
                } else {
                    window.location = relocation_url;
                }
            }
    );

    return false;
}


