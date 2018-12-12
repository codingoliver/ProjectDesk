<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('asset/images/favicon.png'); ?>">
    <title>Project Desk</title>
    <!-- Bootstrap Core CSS -->
    <link  rel="stylesheet" href="<?php echo base_url('asset/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <!-- Menu CSS -->
    <link  rel="stylesheet" href="<?php echo base_url('asset/bower_components/metisMenu/dist/metisMenu.min.css'); ?>">
    <!-- Menu CSS -->
    <link  rel="stylesheet" href="<?php echo base_url('asset/bower_components/morrisjs/morris.css'); ?>">
    <!-- Custom CSS -->
    <link  rel="stylesheet" href="<?php echo base_url('asset/css/style-dashboard.css'); ?>">
    <link  rel="stylesheet" href="<?php echo base_url('asset/css/sweetalert.css'); ?>">
     <!-- JQuery DataTable Css -->
    <link  href="<?php echo base_url('asset/css/dataTables.bootstrap.css'); ?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="<?php echo base_url('index.php/Welcome/hod') ?>"><i class="glyphicon glyphicon-fire"></i>&nbsp;<span class="hidden-xs">Project Desk</span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs hidden-lg
 waves-effect waves-light"><i class="ti-arrow-circle-left ti-menu"></i>
</a></li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>

                    </li>
                    <li>
                       
  <div class="btn-group user-helper-dropdown">
                        <a class="profile-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="<?php echo base_url($data[0]->image); ?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $data[0]->fullname ?></b> </a>

                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo base_url('index.php/Welcome/hod_profile') ?>"><i class="ti-user fa-fw"></i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="<?php echo base_url('index.php/Welcome/sign_out') ?>"><i class="ti-na fa-fw"></i>Sign Out</a></li>
                        </ul>
                    </div>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <div class="navbar-default sidebar nicescroll" role="navigation">
            <div class="sidebar-nav navbar-collapse ">
                 <ul class="nav" id="side-menu">
                <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="ti-search"></i> </button>
                            </span>
                        </div>
                    </li>
                     <li>
                         <a href="<?php echo base_url('index.php/Welcome/project_group') ?>" class="waves-effect"><i class="ti-comments-smiley fa-fw"></i>Groups</a>
                     </li>
                     <li>
                         <a href="<?php echo base_url('index.php/Welcome/supervisors') ?>" class="waves-effect"><i class="ti-user fa-fw"></i>Supervisors</a>
                     </li>
                     <li>
                         <a href="<?php echo base_url('index.php/Welcome/hod_profile') ?>" class="waves-effect"><i class="ti-user fa-fw"></i>Profile</a>
                     </li>
                </ul>
                <div class="center p-20">
                  
                </div>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- Page Content -->
            <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12">
                    <h4 class="page-title">Project Groups</h4>
                    <ol class="breadcrumb">
                        <li class="active">Manage project groups here</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- row -->
              
            <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box js-sweetalert9">
                            <button class="btn btn-info waves-effect waves-light"  data-toggle="modal" data-target="#defaultModal"><i class='ti-plus fa-fw'></i> Create new group</button>
                            <br/><br/>
            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Create new group</h4>
                             </div>
                         <form class="form-horizontal form-material" method="post" onsubmit="return validateGroup()">
                        <div class="modal-body">

                              <div class="form-group">
                                <label class="col-md-12">Project Title</label>
                                <div class="col-md-12">
                                    <input type="text" id="title" name="title" placeholder="" class="form-control form-control-line" required> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Project Abstract</label>
                                <div class="col-md-12">
                                    <textarea type ="text" id="detail" name="detail" class="form-control form-control-line" required> </textarea> 
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-12">Select Supervisor</label>
                                <div class="col-sm-12">
                                    <select id="supervisor_id" name="supervisor_id" class="form-control form-control-line" required>

                                        <?php 
                                            foreach ($data2 as $val) {
                                                
                                                echo "<option>#".$val->u_id." ".$val->fullname."</option>";
                                            }

                                        ?>
                                     </select>       
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Project Member 1</label>
                                <div class="col-md-12">
                                    <input type="text" id="membOne" name="title" placeholder="Enter student ID" class="form-control form-control-line"  required> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Project Member 2</label>
                                <div class="col-md-12">
                                    <input type="text" id="membTwo" name="title" placeholder="Enter student ID" class="form-control form-control-line" required> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Project Member 3</label>
                                <div class="col-md-12">
                                    <input type="text" id="membThree" name="title" placeholder="Enter student ID" class="form-control form-control-line"> 
                                </div>
                            </div>
                             <div class="form-group" class="col-md-12">
                                <div id="divError">
                               
                                </div>  
                            </div>
                        </div>
                       
                           
                        <div class="modal-footer">
                             <div class="form-group ">
                                <div class="col-sm-12 ">
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="SAVE">

                                </div>
                            </div>
                        </div>
                         </form>
                         
                    </div>
                </div>
            </div>

            <!-- ABSTRACT MODAL -->
            <div class="modal fade" id="abstractModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Project Abstract</h4>
                             </div>
                         <form id="form" class="form-horizontal form-material" method="post" action="#">
                        <div class="modal-body">
                           
                            <div class="form-group">
                                <label class="col-md-12" id="abstract"></label>
                            </div>
                          
                        </div>
                    
                        <div class="modal-footer">
                             <div class="form-group ">
                                <div class="col-sm-12 ">
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="OKAY" >

                                </div>
                            </div>
                        </div>
                         </form>
                         
                    </div>
                </div>
            </div>
                  
        <!-- PROJECT MEMBERS MODAL -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Project Members</h4>
                             </div>
                         <form id="form" class="form-horizontal form-material" method="post" action="#">
                        <div class="modal-body">
                           
                            <div class="form-group">
                                <div class="col-md-12" id="members">
                                   
                                </div>
                            </div>
                            
                        </div>
                    
                        <div class="modal-footer">
                             <div class="form-group ">
                                <div class="col-sm-12 ">
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="OKAY" >

                                </div>
                            </div>
                        </div>
                         </form>
                         
                    </div>
                </div>
            </div>


                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTables">
                                    <thead>
                                        <tr>
                                            <th>GROUP #</th>
                                            <th>Supervisor</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                          foreach($data3 as $value)
                                          {
                                            echo '<tr>';

                                                echo "<td>".$value->o_p_id."</td>";
                                                echo "<td><span id='category_name'>".$value->supervisor_fullname."</span></td>";
                                                echo "<td>".$value->title."</td>";
                                                echo "<td>
                                                    <button class='btn btn-danger' data-type=A".$value->o_p_id." data-toggle='modal' data-target='#abstractModal' data-name='".$value->detail."'><i class='ti-layers fa-fw' hidden='shit'></i> View Abstract</button>
                                                    <button class='btn btn-danger' data-type=V".$value->o_p_id." data-toggle='modal' data-target='#editModal' data-name='".$value->detail."'><i class='ti-layers fa-fw' hidden='shit'></i> View Members</button>
                                                    <button class='btn btn-danger' data-type=D".$value->o_p_id."><i class='ti-trash fa-fw' ></i> Dissolve</button></td>
                                                    </td>";

                                            echo "</tr>"; 
                                          }  
                                        ?>  

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
        <!-- /#page-wrapper -->
        <footer class="footer text-center"> 2018 &copy; Project Desk </footer>
    </div>
    <!-- /#wrapper -->

    <script src="<?php echo base_url('asset/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('asset/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url('asset/bower_components/metisMenu/dist/metisMenu.min.js'); ?>"></script>
    <!--Nice scroll JavaScript -->
    <script src="<?php echo base_url('asset/js/jquery.nicescroll.js'); ?>"  src=""></script>
    <!--Morris JavaScript -->
    <script src="<?php echo base_url('asset/bower_components/raphael/raphael-min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/bower_components/morrisjs/morris.js'); ?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('asset/js/waves.js'); ?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('asset/js/myadmin.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/dashboard1.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/sweetalert.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/dialogs.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/jquery-datatable.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/dataTables.bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/custom.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/project_idea.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/project_group.js'); ?>"></script>
    <script type="text/javascript">

function createGroup(supervisor_id, title, detail)
{

    $.post('http://localhost/easyproject/index.php/Welcome/create_group',
        { supervisor_id: supervisor_id, title: title, detail: detail },
        function(data, status) {

            if(data === 'success') {
                 swal("Created!", "Group created successfully", "success");
                 window.location = "http://localhost/easyproject/index.php/Welcome/project_group";
                        
            } else {
                swal("Failed!", "Group couldnot be created", "failure");
            }
        }
    );
}

       
function validateGroup()
{
  
    var supervisor_id = $('#supervisor_id').val().split(' ')[0].slice(1);
    var title = $('#title').val().trim();
    var detail = $('#detail').val().trim();
    var membOne = $('#membOne').val().trim();
    var membTwo = $('#membTwo').val().trim();
    var membThree = $('#membThree').val().trim();
    var divError = $('#divError');

    // nullify divError
    divError.html('<p></p>');

    if(membOne === membTwo ) {
     divError.html("<p style='color:red'> Project member One and Two cannot be the same person </p>");
     return false;
    } else if(membOne === membThree) {
     divError.html("<p style='color:red'> Project member One and Three cannot be the same person </p>");
     return false;
    } else if(membTwo === membThree) {
     divError.html("<p style='color:red'> Project member Two and Three cannot be the same person </p>");
     return false;
    }

    // ajax call to verify 1st student
    $.post('http://localhost/easyproject/index.php/Welcome/check_student_group/'+membOne,
                { },
                function(data, status) {

                   if(data === 'Student doesnot exist') {
                         divError.html("<p style='color:red'>No student with ID:"+ membOne +" exists</p>");
                        
                   } else if(data === 'Student already in a group') {
                         divError.html("<p style='color:red'>student with ID:"+ membOne +" has already been assigned to a group</p>");
                   } else {
                         // ajax call to verify 2nd student
                     $.post('http://localhost/easyproject/index.php/Welcome/check_student_group/'+membTwo,
                         {  },
                         function(data, status) {
    
                                 if(data === 'Student doesnot exist') {
                                     divError.html("<p style='color:red'>No student with ID:"+ membTwo +" exists</p>");
                        
                                 } else if(data === 'Student already in a group') {
                                     divError.html("<p style='color:red'>student with ID:"+ membTwo +" has already been assigned to a group</p>");
                                 }  else {
                                    
                                     if( !(membThree === '') ) {

                                         // ajax call to verify 2nd student
                                     $.post('http://localhost/easyproject/index.php/Welcome/check_student_group/'+membThree,
                                         {  },
                                         function(data, status) {

                                                 if(data === 'Student doesnot exist') {
                                                     divError.html("<p style='color:red'>No student with ID:"+ membThree +" exists</p>");
                        
                                                 } else if(data === 'Student already in a group') {
                                                     divError.html("<p style='color:red'>student with ID:"+ membThree +" has already been assigned to a group</p>");
                                                 } else {
                                                     createGroup(supervisor_id, title, detail);
                                                 }
                                         }
                                     );
                                     } else {
                                    
                                         createGroup(supervisor_id, title, detail);
                                     }   
                                 }
                         }
                     );
                   }
                }
    );

    return false;
}

$(function () {
    $('.js-sweetalert9 button').on('click', function () {

        var $type = $(this).data('type');
        var ongoing_project_id = $type.slice(1, $type.length);

        if($type[0] ==='V') {

            var div_members = $('#members');

             // ajax call to load project members
            $.get('http://localhost/easyproject/index.php/Welcome/load_project_members/'+ ongoing_project_id, {},
                function(data, status) {

                    var value = JSON.parse(data);
                    var fullString ='';

                    for(var i = 0; i < value.length; i++ ) {

                        var str = '<p>Project member' + (i+1) + ': ' + value[i].index_no + ', ' + value[i].fullname + '</p>'; 
                        fullString += str;
                    }

                    div_members.html(fullString);
                }
            );

        } else if($type[0] === 'D') {

        swal({
        title: "Sure?",
        text: "You will not be able to undo this operation",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes",
        closeOnConfirm: false
        }, function () {
        // ajax call to remove ongoing_project group
        $.post("http://localhost/easyproject/index.php/Welcome/remove_ongoing_project/"+ ongoing_project_id, {},
            function(data, status) {

                if(data === 'success') {
                    swal("Removed!", "remove successful", "success");
                    window.location = "http://localhost/easyproject/index.php/Welcome/project_group";
                    
                } else {
                    swal("Failed!", "The Group couldnot be dissolved", "failure");
                }
            }
        );
        
        });

        } else {
            var abstract = $(this).data('name');
            $('#abstract').html('<p>'+abstract+'</p>');
        }
    
    });
});


        
    </script>
</body>

</html>
