$(function () {
    $('.js-sweetalert3 button').on('click', function () {

        var id = $(this).data('type');
        var project_doc_id;
        
        //used for an exception of a button
        if(id === undefined) {
            return;
        }

        $element = $(this).parent().parent().children(); 
        
        // A; means approve document
        if(id[0] === 'B') { 
            return;
        } else if(id[0] === 'A') {
            project_doc_id = $(this).data('name');
        } else if(id[0] === 'Z')
        {
            swal('Message from Supervisor', $(this).data('message'));
            return;
        }

    swal({
        title: "Sure?",
        text: "This will approve the document as finished for the project coordinator's perusal",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes",
        closeOnConfirm: false
    }, function () {

        // ajax call
        $.post('http://localhost/easyproject/index.php/Welcome/remove_project_doc/'+project_doc_id,
                {  },
                function(data, status) {

                   if(data === 'remove successful') {
                    swal("Removed!", "remove successful", "success");
                    window.location = "http://localhost/easyproject/index.php/Welcome/proj_doc_stud";
                   } else {
                     swal("Failed!", "Project document couldnot be deleted", "failure");
                   }
                }
        );
    });
    });
});

