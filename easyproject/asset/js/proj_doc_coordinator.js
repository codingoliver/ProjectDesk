$(function () {
    $('.js-sweetalert3 button').on('click', function () {

        var id = $(this).data('type');
        var project_id = $(this).data('project_id');
        
        //used for an exception of a button
        if(id === undefined) {
            return;
        }

        $element = $(this).parent().parent().children();

        // A; means approve document
        if(id[0] === 'B') {
            return;
        }


        // approve and disaprove project document
        var url, swalTitle, swalMsg;
        if(id[0] === 'A') {
            id = id.slice(1);
            url = 'http://localhost/easyproject/index.php/Welcome/coordinator_approve_project_document/'+id;
            swalTitle = "This will allow all students to see this project document";
            swalMsg = 'Approve Successful';
        } else if(id[0] === 'D') {
            id = id.slice(1);
            url = 'http://localhost/easyproject/index.php/Welcome/coordinator_disapprove_project_document/'+id;
            swalTitle = "This will hide this project document from all the students";
            swalMsg = 'Disapprove Successful';
        }

    swal({
        title: "Sure?",
        text: swalTitle,
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes",
        closeOnConfirm: false
    }, function () {

        // ajax call
        $.post(url,
                {  },
                function(data, status) {

                   if(data === 'success') {
                    swal("Sucess!", swalMsg, "success");
                    window.location = "http://localhost/easyproject/index.php/Welcome/project_progress/"+project_id;
                   } else {
                     swal("Failed!", "Project document could not be approved", "failure");
                   }
                }
        );
    });
    });
});

