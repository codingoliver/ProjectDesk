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
            <div class="top-left-part"><a class="logo" href="<?php echo base_url('index.php/Welcome/student') ?>"><i class="glyphicon glyphicon-fire"></i>&nbsp;<span class="hidden-xs">Project Desk</span></a></div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li><a href="javascript:void(0)" class="open-close hidden-xs hidden-lg
 waves-effect waves-light"><i class="ti-arrow-circle-left ti-menu"></i>
                    </a></li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">

                <li>

                    <div class="btn-group user-helper-dropdown">
                        <a class="profile-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img width="40" height=40" src="<?php echo base_url($data2[0]->image); ?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $data2[0]->fullname ?></b> </a>

                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo base_url('index.php/Welcome/student_profile') ?>"><i class="ti-user fa-fw"></i>Profile</a></li>
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
                <li>
                    <a href="<?php echo base_url('index.php/Welcome/project_ideas') ?>" class="waves-effect"><i class="ti-light-bulb fa-fw"></i>Project Ideas</a>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Welcome/proj_doc_stud') ?>" class="waves-effect"><i class="ti-folder fa-fw"></i>Project Documents</a>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Welcome/chatroom_student') ?>" class="waves-effect"><i class="ti-comments-smiley fa-fw"></i>Chat Room</a>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Welcome/proj_doc_stud') ?>" class="waves-effect menu-toggle"><i class="material-icons ti-folder fa-fw"></i>Ongoing Projects</a>
                    <ul class="ml-menu">
                        <li>
                            <a href="<?php echo base_url('index.php/Welcome/ongoing_project/all') ?>" class="menu-toggle">
                                <span>all</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Welcome/ongoing_project/cs_it') ?>" class="menu-toggle">
                                <span>Computer Science & IT</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Welcome/ongoing_project/e_e') ?>" class="menu-toggle">
                                <span>Electrical & Comp Eng</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Welcome/ongoing_project/natu') ?>" class="menu-toggle">
                                <span>Natural Resources</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Welcome/ongoing_project/math') ?>" class="menu-toggle">
                                <span>Mathematical Sciences</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Welcome/ongoing_project/mech') ?>" class="menu-toggle">
                                <span>Mechanical & Agric Eng</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Welcome/ongoing_project/hosp') ?>" class="menu-toggle">
                                <span>Hospitality Management</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Welcome/proj_doc_stud') ?>" class="waves-effect"><i class="ti-folder fa-fw"></i>Finished Projects</a>
                    <ul class="ml-menu">
                        <li>
                            <a href="<?php echo base_url('index.php/Welcome/finished_project/all') ?>" class="menu-toggle">
                                <span>all</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Welcome/finished_project/cs_it') ?>" class="menu-toggle">
                                <span>Computer Science & IT</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Welcome/finished_project/e_e') ?>" class="menu-toggle">
                                <span>Electrical & Comp Eng</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Welcome/finished_project/natu') ?>" class="menu-toggle">
                                <span>Natural Resources</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Welcome/finished_project/math') ?>" class="menu-toggle">
                                <span>Mathematical Sciences</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Welcome/finished_project/mech') ?>" class="menu-toggle">
                                <span>Mechanical & Agric Eng</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Welcome/finished_project/hosp') ?>" class="menu-toggle">
                                <span>Hospitality Management</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Welcome/student_profile') ?>" class="waves-effect"><i class="ti-user fa-fw"></i>Profile</a>
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
                    <h4 class="page-title">Project Ideas</h4>
                    <ol class="breadcrumb">

                        <li class="active">List of your project ideas</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box js-sweetalert5">
                            <button class="btn btn-info waves-effect waves-light"  data-toggle="modal" data-target="#defaultModal"><i class='ti-plus fa-fw'></i> Add Project Idea</button>
                            <br/><br/>
            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Add New Project Idea</h4>
                             </div>
                         <form class="form-horizontal form-material" method="post" action="http://localhost/easyproject/index.php/Welcome/insert_project_idea">
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
                                <label class="col-sm-12">Select department</label>
                                <div class="col-sm-12">
                                    <select id="programme" name="programme" class="form-control form-control-line">
                                     <option>Computer Science & IT</option>
                                     <option>Electrical & Comp Eng</option>
                                     <option>Natural Resources</option>
                                     <option>Mathematical Sciences</option>
                                     <option>Mechanical & Agric Eng</option>
                                     <option>Hospitality Management</option>
                                     </select>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                             <div class="form-group ">
                                <div class="col-sm-12 ">
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="SAVE" >

                                </div>
                            </div>
                        </div>
                         </form>

                    </div>
                </div>
            </div>

            <!-- EDIT MODAL Project Desk -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Project Idea</h4>
                             </div>
                         <form id="form" class="form-horizontal form-material" method="post" action="http://localhost/easyproject/index.php/Welcome/update_project_idea">
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="col-md-12">Project Title</label>
                                <div class="col-md-12">
                                    <input type="text" id="editTitle" name="title" placeholder="" class="form-control form-control-line" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Project Abstract</label>
                                <div class="col-md-12">
                                    <textarea type ="text" id="editDetail" name="detail" hint="Enter project detail" class="form-control form-control-line" required> </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Select department</label>
                                <div class="col-sm-12">
                                    <select id="editProgramme" name="programme" class="form-control form-control-line">
                                    <option>Computer Science & IT</option>
                                    <option>Electrical & Comp Eng</option>
                                     <option>Natural Resources</option>
                                     <option>Mathematical Sciences</option>
                                     <option>Mechanical & Agric Eng</option>
                                     <option>Hospitality Management</option>
                                     </select>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                             <div class="form-group ">
                                <div class="col-sm-12 ">
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="UPDATE" >

                                </div>
                            </div>
                        </div>
                         </form>

                    </div>
                </div>
            </div>

        <!-- ABSTRACT MODAL Project Desk -->
            <div class="modal fade" id="abstractModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Project Abstract</h4>
                             </div>
                         <form id="form" class="form-horizontal form-material" action="<?php echo base_url('index.php/Welcome/project_ideas/') ?>">
                        <div class="modal-body">

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label id="lblAbstract" name="title" placeholder="" class="form-control form-control-line" ></label>
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
                                            <th>Department</th>
                                            <th>Title</th>
                                            <th>Abstract</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                          foreach($data as $value)
                                          {
                                            echo '<tr>';

                                                echo "<td>".$value->p_i_id."</td>";
                                                echo "<td><span id='category_name'>".$value->department."</span></td>";
                                                echo "<td>".$value->title."</td>";
                                                echo "<td>".substr($value->detail, 0, 30)."...</td>";
                                                echo "<td>
                                                    <button class='btn btn-danger' data-type=A'".$value->p_i_id."' data-toggle='modal' data-target='#abstractModal' data-name='".$value->p_i_id."'><i class='ti-layers fa-fw' hidden='shit'></i> View Abstract</button>
                                                    <button class='btn btn-danger' data-type=E'".$value->p_i_id."' data-toggle='modal' data-target='#editModal' data-name='".$value->p_i_id."'><i class='ti-pencil-alt fa-fw' hidden='shit'></i> Edit</button>
                                                    <button class='btn btn-danger' data-type='D".$value->p_i_id."'><i class='ti-trash fa-fw' ></i> Remove</button>
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
            <!-- /.container-fluid Project Desk -->
        </div>
            <!-- /.row Project Desk -->
        </div>
        <!-- /.container-fluid Project Desk -->
    </div>
        <!-- /#page-wrapper Project Desk -->
        <footer class="footer text-center"> 2018 &copy; Project Desk </footer>
    </div>
    <!-- /#wrapper Project Desk -->


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
    <script src="<?php echo base_url('asset/js/project_ideas2.js'); ?>"></script>

</body>

</html>
