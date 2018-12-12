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
    <!-- Morris Css -->
    <link href="<?php echo base_url('asset/css/morris.css'); ?>" rel="stylesheet" />
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
                <div class="top-left-part"><a class="logo" href="<?php echo base_url('index.php/Welcome/coordinator') ?>"><i class="glyphicon glyphicon-fire"></i>&nbsp;<span class="hidden-xs">Project Desk</span></a></div>
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
                            <a class="profile-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="<?php echo base_url($data2[0]->image); ?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $data2[0]->fullname ?></b> </a>

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
                   <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="ti-search"></i> </button>
                            </span>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Welcome/project_groups') ?>" class="waves-effect"><i class="ti-folder fa-fw"></i>Project Groups</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('index.php/Welcome/coordinator_profile') ?>" class="waves-effect"><i class="ti-user fa-fw"></i>Profile</a>
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
                <div class="col-xs-12 col-sm-12 col-sm-4 col-sm-4">
                    <div class="white-box">
                        <div class="header">
                            <h2>Project Progress</h2>
                        </div>
                        <div class="body">
                            <div id="donut_chart" class="graph" style="height: 150px;"></div>
                        </div>
                    </div>
                </div>
                <!-- #END# Donut Chart -->
                <!-- /.col-lg-12 -->
            </div>
            <!-- row -->

              
            <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box js-sweetalert3">
                          
            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Upload Project Document</h4>
                             </div>
                         <form enctype="multipart/form-data" class="form-horizontal form-material" method="post" action="http://localhost/Project Desk/index.php/Welcome/upload_proj_doc">
                        <div class="modal-body">
                           
                            <div class="form-group">
                                <label class="col-md-12">Chose file</label>
                                <div class="col-md-12">
                                    <input name="user_file"  type="file" size="5000000" class="form-control form-control-line" required> 
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Title</label>
                                <div class="col-md-12">
                                    <input name="title" type="text" class="form-control form-control-line" required> 
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


                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTables">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Title</th>
                                            <th>Size</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                        $percentage = 0;


                                          foreach($data as $value)
                                          {
                                            echo '<tr>';

                                                echo "<td>".$value->o_p_d_id."</td>";
                                                echo "<td>".$value->datetime."</td>";
                                                echo "<td><span id='category_name'>".$value->title."</span></td>";
                                                echo "<td>".$value->size." KB</td>";
                                                echo "<td>".$value->file_type."</td>";
                                                echo "<td>
                                                    
                                                    <a href='".base_url('index.php/Welcome/download_project_doc/'.$value->o_p_d_id)."'>
                                                    <button class='btn btn-danger' data-type=B'".$value->o_p_d_id."'  data-name='".$value->url."'>
                                                    <i class='ti-pencil-alt fa-fw' hidden='shit'></i> Download</button></a>
                                                                     
                                                  ";

                                              if($value->is_approved_coordinator == 'yes') {

                                                  echo"   
                                                    <button class='btn btn-danger' data-type=D".$value->o_p_d_id."  data-name='".$value->url."'
                                                     data-project_id=$id>
                                                    <i class='ti-pencil-alt fa-fw' hidden='shit'></i> Disapprove</button>
                                                    </td>";

                                              } else {

                                                  echo"   
                                                    <button class='btn btn-danger' data-type=A".$value->o_p_d_id."  data-name='".$value->url."'
                                                     data-project_id=$id>
                                                    <i class='ti-pencil-alt fa-fw' hidden='shit'></i> Approve</button>
                                                    </td>";
                                              }

                                            echo "</tr>";

                                            // compute project progress
                                              if( ($value->title == 'Chapter 1') && ($percentage < 20)){
                                                  $percentage = 20;
                                              } else if( ($value->title == 'Chapter 1 and 2') && ($percentage < 40)){
                                                  $percentage = 40;
                                              } else if( ($value->title == 'Chapter 1, 2 and 3') && ($percentage < 60)){
                                                  $percentage = 60;
                                              } else if( ($value->title == 'Chapter 1, 2, 3 and 4') && ($percentage < 80)){
                                                  $percentage = 80;
                                              } else if( ($value->title == 'Complete Project Document') && ($percentage < 100)){
                                                  $percentage = 100;
                                              }

                                          }

                                        echo "
                                            <div id='percentage' data-percentage=$percentage></div>
                                         ";

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
    <script src="<?php echo base_url('asset/js/proj_doc_coordinator.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/morris.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/morris3.js'); ?>"></script>
</body>

</html>
