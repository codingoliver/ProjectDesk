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
        } else if(id[0] === 'U') {
            $('#upload_file').attr('action', 'http://localhost/easyproject/index.php/Welcome/upload_reviewed_doc/'
                + $(this).data('type2') + '/' + id.slice(1)
            );
            return;
        }

        // approve and disaprove project document
        var url, swalTitle, swalMsg;
        if(id[0] === 'A') {
            id = id.slice(1);
            url = 'http://localhost/easyproject/index.php/Welcome/approve_project_document/'+id;
            swalTitle = "This will approve the document as finished for the project coordinator's perusal";
            swalMsg = 'Approve Successful';
        } else if(id[0] === 'D') {
            id = id.slice(1);
            url = 'http://localhost/easyproject/index.php/Welcome/disapprove_project_document/'+id;
            swalTitle = "The Project Coordinator won't be able to see this document when disapproved";
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
                    window.location = "http://localhost/easyproject/index.php/Welcome/proj_doc_supervisor/"+project_id;
                   } else {
                     swal("Failed!", "Project document could not be approved", "failure");
                   }
                }
        );
    });
    });
});

