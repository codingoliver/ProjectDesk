
// call to edit or delete a project idea
$(function () {
    $('.js-sweetalert5 button').on('click', function () {

        var id = $(this).data('type');
        var location, destination;
        //used for an exception of a button

        if(id === undefined) {
            return;
        }

        $element = $(this).parent().parent().children();

        // edit button clicked
        // set up project idea details for edit projectidea modal
        if(id[0] == 'E') {

           $('#form').attr('action', $('#form').attr('action') +'/'+ $($element[0]).text());
           $('#editProgramme').val($($element[1]).text());
           $('#editTitle').val($($element[2]).text());

            // ajax call to get project idea abstract
            $.get('http://localhost/easyproject/index.php/Welcome/project_abstract/'+$($element[0]).text(), {},
                function(data, status) {
                    $('#editDetail').val(data);
                }
            );
            return;
        } else if(id[0] == 'A') {
            // ajax call to get project idea abstract
            $.get('http://localhost/easyproject/index.php/Welcome/project_abstract/'+$($element[0]).text(), {},
                function(data, status) {
                    $('#lblAbstract').text(data);
                }
            );

            return;
        }

        location = 'http://localhost/easyproject/index.php/Welcome/remove_project_idea/' + $($element[0]).text();

        if(id[0] == 'D') {
            destination = 'http://localhost/easyproject/index.php/Welcome/project_ideas';
            location = 'http://localhost/easyproject/index.php/Welcome/remove_project_idea/' + $($element[0]).text();
        } else if(id[0] == 'S') {
            destination = 'http://localhost/easyproject/index.php/Welcome/project_ideas_sup';
            location = 'http://localhost/easyproject/index.php/Welcome/remove_project_idea/' + $($element[0]).text();
        } else if($(this).text() == 'Approve') {
           location = 'http://localhost/easyproject/index.php/Welcome/visibility/approved/' + $($element[0]).text();
        } else {
            location = 'http://localhost/easyproject/index.php/Welcome/visibility/unapproved/' + $($element[0]).text();
        }


    swal({
        title: "Sure?",
        text: "You will not be able to undo this operation",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes",
        closeOnConfirm: false
    }, function () {

        // ajax call
        $.get(location, {},
            function(data, status) {


                if(data === 'remove successful') {
                    swal("Removed!", "remove successful", "success");
                    window.location = destination;

                } else if(data === 'success') {
                    swal("Updated!", "Project visibility update successful", "success");
                    window.location = 'http://localhost/easyproject/index.php/Welcome/student_project_ideas';
                } else {
                    swal("Failed!", "Project visibility could not be changed", "failure");

                }
            }
        );

    });
    });
});

