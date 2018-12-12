<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Project Desk</title>
	
    <!-- core CSS -->
    <link href="<?php echo base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/animate.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/prettyPhoto.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/main.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/responsive.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/navbar.css') ?>" rel="stylesheet">
    <link  rel="stylesheet" href="<?php echo base_url('asset/css/style-dashboard.css') ?>">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url('asset/images/ico/favicon.ico') ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('asset/images/ico/apple-touch-icon-144-precomposed.png') ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('asset/images/ico/apple-touch-icon-114-precomposed.png') ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('asset/images/ico/apple-touch-icon-72-precomposed.png') ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('asset/images/ico/apple-touch-icon-57-precomposed.png') ?>">
	<!-- core CSS -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->      
    
</head><!--/head-->

<body class="homepage">

    <header id="header">

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-nav">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url('index.php/Welcome/index') ?>">Project Desk</a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url('index.php/Welcome/index') ?>">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Project Ideas <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" >
                                 <li><a href="<?php echo base_url('index.php/Welcome/project_idea/ent') ?>" class="menu-item dropdown dropdown-submenu">Entrepreneurship</a>
                                </li>
                                <li><a href="<?php echo base_url('index.php/Welcome/project_idea/cs_it') ?>">Computer Science & IT</a></li>
                                <li><a href="<?php echo base_url('index.php/Welcome/project_idea/e_e') ?>">Electrical & Comp Eng</a></li>
                                <li><a href="<?php echo base_url('index.php/Welcome/project_idea/natu') ?>">Natural Resources</a></li>
                                <li><a href="<?php echo base_url('index.php/Welcome/project_idea/math') ?>">Mathematical Sciences</a></li>
                                <li><a href="<?php echo base_url('index.php/Welcome/project_idea/mech') ?>">Mechanical & Agric Eng</a></li>
                                <li><a href="<?php echo base_url('index.php/Welcome/project_idea/hosp') ?>">Hospitality
                                    Management</a></li>
                            </ul>
                        </li>


                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

    </header><!--/header-->

    <!-- STUDENT LOGIN MODAL -->
    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">STUDENT LOGIN</h4>
                </div>
                <form class="form-horizontal form-material" method="post" action="http://localhost/olmart/index.php/Welcome/insert_category_details" onsubmit="return verify_user('student')">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="Email" id="txtStudentEmail" name="category_name" placeholder="" class="form-control form-control-line" required> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Password</label>
                            <div class="col-md-12">
                                <input type="Password" id="txtStudentPassword" name="category_name" placeholder="" class="form-control form-control-line" required> </div>
                        </div>
                        <div id="divStudentError">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group ">
                            <div class="col-sm-12 ">
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="LOGIN" >

                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- SUPERVISOR LOGIN MODAL -->
    <div class="modal fade" id="defaultModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">SUPERVISOR LOGIN</h4>
                </div>
                <form class="form-horizontal form-material" method="post" action="http://localhost/olmart/index.php/Welcome/insert_category_details" onsubmit="return verify_user('supervisor')">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="Email" id="txtSupervisorEmail" name="category_name" placeholder="" class="form-control form-control-line" required> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Password</label>
                            <div class="col-md-12">
                                <input type="Password" id="txtSupervisorPassword" name="category_name" placeholder="" class="form-control form-control-line" required> </div>
                        </div>
                        <div id="divSupervisorError">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group ">
                            <div class="col-sm-12 ">
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="LOGIN" >

                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- COORDINATOR LOGIN MODAL -->
    <div class="modal fade" id="defaultModal4" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">PROJECT COORDINATOR LOGIN</h4>
                </div>
                <form class="form-horizontal form-material" method="post" action="http://localhost/olmart/index.php/Welcome/insert_category_details" onsubmit="return verify_user('coordinator')">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="Email" id="txtCEmail" name="category_name" placeholder="" class="form-control form-control-line" required> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Password</label>
                            <div class="col-md-12">
                                <input type="Password" id="txtCPassword" name="category_name" placeholder="" class="form-control form-control-line" required> </div>
                        </div>
                        <div id="divCError">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group ">
                            <div class="col-sm-12 ">
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="LOGIN" >

                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- HOD LOGIN MODAL -->
    <div class="modal fade" id="defaultModal3" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">HOD LOGIN</h4>
                </div>
                <form class="form-horizontal form-material" method="post" action="http://localhost/olmart/index.php/Welcome/insert_category_details" onsubmit="return verify_user('hod')">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="Email" id="txtHodEmail" name="category_name" placeholder="" class="form-control form-control-line" required> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Password</label>
                            <div class="col-md-12">
                                <input type="Password" id="txtHodPassword" name="category_name" placeholder="" class="form-control form-control-line" required> </div>
                        </div>
                        <div id="divHodError">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group ">
                            <div class="col-sm-12 ">
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="LOGIN" >
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>PROJECT IDEAS</h2>
            </div>


            <?php 
                $len = $num_rows;
                $n = $len / 4;
                //$m = $len % 4 != 0 ? 1 : 0;
                //$n += $m;
                $s = 0;

                for($i = 0; $i < $n; $i++) {

                     echo "   
                        <div class='row'>
                            <div class='features'>
                     ";

                     for($j = $s; $j < 4 + $s; $j++) {

                        
                        if(isset( $data[$j]) ) {

                            $project_id = $data[$j]->p_i_id;
                            $image = base_url( $data[$j]->image);
                            $fullname = $data[$j]->fullname;
                            $title = $data[$j]->title;
                            $detail = $data[$j]->detail;
                            $url = base_url('index.php/Welcome/project_idea_item/'.$project_id);


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
                                                <h6 class='text-white'><i>Posted by</i> $fullname</h4>
                                                <h5 class='text-white'>TITLE: $title</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='user-btm-box'>
                                        <div class='col-md-12 col-sm-12 text-center'>
                                            <p>$detail</p>
                                            <a href='$url' style='color: red; text-decoration: underline;'>Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.col-md-4-->
                        ";
                        }

                     }
                     $s += 4;

                     echo "
                            </div><!--/.features-->
                        </div><!--/.row--> 
                     ";
                } 
             ?>


        </div><!--/.container-->
    </section><!--/#feature-->


    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2018 <a target="_blank" href="<?php echo base_url('index.php/Welcome/index')?>" >Project Desk</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo base_url('asset/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('asset/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/js/jquery.prettyPhoto.js') ?>"></script>
    <script src="<?php echo base_url('asset/js/jquery.isotope.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/css/js/main.js') ?>"></script>
    <script src="<?php echo base_url('asset/js/wow.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/js/customized.js') ?>"></script>
</body>
</html>