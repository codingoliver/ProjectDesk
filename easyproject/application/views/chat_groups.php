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
                <div class="top-left-part"><a class="logo" href="index.html"><i class="glyphicon glyphicon-fire"></i>&nbsp;<span class="hidden-xs">Project Desk</span></a></div>
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
                        <a href="<?php echo base_url('index.php/Welcome/project_ideas_sup') ?>" class="waves-effect"><i class="ti-light-bulb fa-fw"></i>My Project Ideas</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url('index.php/Welcome/student_project_ideas') ?>" class="waves-effect"><i class="ti-light-bulb fa-fw"></i>Student Project Ideas</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Welcome/proj_group_supervisor') ?>" class="waves-effect"><i class="ti-folder fa-fw"></i>Project Documents</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Welcome/chat_groups') ?>" class="waves-effect"><i class="ti-comments-smiley fa-fw"></i>Chat Room</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Welcome/students') ?>" class="waves-effect"><i class="ti-user fa-fw"></i>Students</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/Welcome/supervisor_profile') ?>" class="waves-effect"><i class="ti-user fa-fw"></i>Profile</a>
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
                        <h4 class="page-title">Supervised Groups</h4>
                        <ol class="breadcrumb">
                            <li><a class="active">Choose which group to enter chatroom</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
           

            <?php 
                $len = $num_rows;
                $n = $len / 3;
                $s = 0;
                $counter = 0;

                if(count($data4) > 0) {
                    $group_chat_id = $data4[$counter];
                }

                for($i = 0; $i < $n; $i++) {

                     echo "   
                        <div class='row'>
                            <div class='features'>
                     ";

                     for($j = $s; $j < 3 + $s; $j++) {

                        
                        if(isset( $data2[$j]) ) {

                            $image = base_url('asset/img/group.png');
                            $ongoing_project_id = $data2[$j]->o_p_id;
                            $title = $data2[$j]->title;
                            $url = base_url('index.php/Welcome/proj_doc_supervisor/'.$ongoing_project_id);


                        echo"
                            <div class='col-md-3 col-sm-6 wow fadeInDown' data-wow-duration='1000ms' data-wow-delay='600ms'>
                                <div class='white-box'>
                                    <div class='user-bg'> <img width='100%'' alt='user' 
                                    ".
                                    "src='$image'>"
                                    ."
                                        <div class='overlay-box'>
                                            <div class='user-content'>
                                                <a href='javascript:void(0)'><img src='$image' class='thumb-lg img-circle' alt='img'></a>
                                                <h5 class='text-white'><i>TITLE</h5>
                                                <h6 class='text-white'>$title</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='user-btm-box'>
                                        <div class='col-md-12 col-sm-12 text-center'>
                                        ";

                                            foreach ($data3[$counter] as $members) {
                                                echo "<p>".$members->fullname."</p>";
                                            }

                                        if($group_chat_id) {

                                            $url = base_url('index.php/Welcome/chat_room/'.$ongoing_project_id);
                                            echo "
                                                <a href='$url' style='color: red; text-decoration: underline;'>Enter Chatroom</a>
                                            ";
                                        } else {
                                            $url = base_url('index.php/Welcome/create_chat_group/'.$ongoing_project_id);
                                            echo "
                                                <a href='$url' style='color: red; text-decoration: underline;'>Create Chatroom</a>
                                            ";
                                        }

                                        echo"</div>
                                    </div>
                                </div>
                            </div><!--/.col-md-4-->
                        ";
                        }

                         $counter ++;

                        if($counter < count($data4)) {

                            $group_chat_id = $data4[$counter];
                        }

                     }
                     $s += 3;

                     echo "
                            </div><!--/.features-->
                        </div><!--/.row--> 
                     ";
                } 
             ?>
                
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        <footer class="footer text-center"> 2018 &copy; Project Desk </footer>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
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
</body>

</html>
