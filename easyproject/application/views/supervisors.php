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
                    <h4 class="page-title">Supervisors</h4>
                    <ol class="breadcrumb">
                        <li class="active">Manage project supervisors here</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- row -->
              
            <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box js-sweetalert9">
                            <button data-name="modal" class="btn btn-info waves-effect waves-light"  data-toggle="modal" data-target="#defaultModal"><i class='ti-plus fa-fw'></i> Add new supervisor</button>
                            <br/><br/>
            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Add new Supervisor</h4>
                             </div>
                         <form class="form-horizontal form-material" action="" method="post" onsubmit="return validateUser()">
                        <div class="modal-body">

                              <div class="form-group">
                                <label class="col-md-12">Fullname</label>
                                <div class="col-md-12">
                                    <input type="text" id="fullname" name="fullname" placeholder="" class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Staff ID</label>
                                <div class="col-md-12">
                                    <input type="text" id="staff_id" name="staff_id" placeholder="" class="form-control form-control-line" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" id="email" name="email" placeholder="e.g obed@gmail.com" class="form-control form-control-line"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Password</label>
                                <div class="col-md-12">
                                    <input type="password" id="password" name="password"  class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Confirm Password</label>
                                <div class="col-md-12">
                                    <input type="password" id="confirm_password" name="confirm_password"  class="form-control form-control-line" required>
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
                                            <th>#</th>
                                            <th>Photo</th>
                                            <th>Staff ID</th>
                                            <th>Fullname</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                          foreach($data2 as $value)
                                          {
                                              $image = base_url($value->image);
                                              $u_id = $value->u_id;
                                            echo '<tr>';

                                                echo "<td>$value->u_id</td>";
                                                echo "<td><img src='$image' width='80' height='80'></td>";
                                                echo "<td>".$value->index_no."</td>";
                                                echo "<td>".$value->fullname."</td>";
                                                echo "<td>
                                                    <button class='btn btn-danger' data-u_id=$u_id >
                                                    <i class='ti-close fa-fw' hidden='shit'></i> Remove</button>
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

       
function validateUser()
{
    var fullname = $('#fullname').val().trim();
    var staff_id = $('#staff_id').val().trim();
    var email = $('#email').val().trim();
    var password = $('#password').val().trim();
    var confirm_password = $('#confirm_password').val().trim();
    var divError = $('#divError');

    divError.html("");

    if(password !== confirm_password) {
        divError.html("<p style='color: red'>Confirm password doesnot match password</p>");
        return false;
    }

    // ajax call to check existing staff ID
    $.get('http://localhost/easyproject/index.php/Welcome/check_staff/'+ staff_id,
        {
            email : email
        },
        function(data, status) {

            if(data === 'Staff doesnot exist') {

                // ajax call to save supervisor details
                $.post('http://localhost/easyproject/index.php/Welcome/insert_supervisor',
                    {
                        fullname : fullname,
                        staff_id : staff_id,
                        email : email,
                        password : password
                    },
                    function(data, status) {

                            if(data === 'success') {
                                swal('supervisor added successfully!');
                                window.location = 'http://localhost/easyproject/index.php/Welcome/supervisors';
                            }
                    }
                );
            } else {
                divError.html("<p style='color: red'>Supervisor already exists</p>");
            }
        }
    );



    return false;
}

$(function () {
    $('.js-sweetalert9 button').on('click', function () {

        u_id = $(this).data('u_id');

        if($(this).data('name') === 'modal') {
            return;
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
        // ajax call to remove ongoing_project group
        $.post("http://localhost/easyproject/index.php/Welcome/remove_supervisor/"+u_id, {},
            function(data, status) {

                if(data === 'remove successful') {
                    swal("Removed!", "remove successful", "success");
                    window.location = "http://localhost/easyproject/index.php/Welcome/supervisors";
                    
                } else {
                    swal("Failed!", "Supervisor could not be removed", "failure");
                }
            }
        );
        
        });
    
    });
});


        
    </script>
</body>

</html>
