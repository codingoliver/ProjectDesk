

function createGroup(supervisor_id, title, detail)
{
	$.post('http://localhost/easyproject/index.php/Welcome/create_group', 
        { supervisor_id: supervisor_id, title: title, detail: detail },
        function(data, status) {

          	if(data === 'success') {
                alert('group created with success');
                   		
          	} else {
                alert('failure');
           	}
        }
    );
}