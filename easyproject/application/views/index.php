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
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url('asset/images/ico/favicon.ico') ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('asset/images/ico/apple-touch-icon-144-precomposed.png') ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('asset/images/ico/apple-touch-icon-114-precomposed.png') ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('asset/images/ico/apple-touch-icon-72-precomposed.png') ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('asset/images/ico/apple-touch-icon-57-precomposed.png') ?>">
</head><!--/head-->

<body class="homepage">

    <header id="header">

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Project Ideas <i class="fa"></i></a>
                            <ul class="dropdown-menu" >
                                <li><a href="<?php echo base_url('index.php/Welcome/project_idea/ent') ?>" class="menu-item dropdown dropdown-submenu">Entrepreneurship</a>
                                </li>
                                <li><a href="<?php echo base_url('index.php/Welcome/project_idea/cs_it') ?>">Computer Science & IT</a></li>
                                <li><a href="<?php echo base_url('index.php/Welcome/project_idea/e_e') ?>">Electrical & Comp Eng</a></li>
                                <li><a href="<?php echo base_url('index.php/Welcome/project_idea/natu') ?>">Natural Resources</a></li>
                                <li><a href="<?php echo base_url('index.php/Welcome/project_idea/math') ?>">Mathematical Sciences</a></li>
                                <li><a href="<?php echo base_url('index.php/Welcome/project_idea/mech') ?>">Mechanical & Agric Eng</a></li>
                                <li><a href="<?php echo base_url('index.php/Welcome/project_idea/hosp') ?>">Hospitality Management</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <i class="fa"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="project_ongoing.html" data-toggle="modal" data-target="#defaultModal">Student</a></li>
                                <li><a href="project_done.html" data-toggle="modal" data-target="#defaultModal2">Supervisor</a></li>
                                <li><a href="project_done.html" data-toggle="modal" data-target="#defaultModal4">Coordinator</a></li>
                                <li><a href="404.html" data-toggle="modal" data-target="#defaultModal3">HOD</a></li>
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

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
            
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(<?php echo base_url('asset/img/img.jpg') ?>)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">ProjectDesk allows both lecturer and student to share their final year project ideas</h1>
                                     <h2 class="animation animated-item-2"></h2>
                                    <a class="btn-slide animation animated-item-3" href="<?php echo base_url('index.php/Welcome/project_idea/all') ?>">CHECK OUT PROJECT IDEAS</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->


                <div class="item" style="background-image: url(<?php echo base_url('asset/img/img1.jpg') ?>)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">With ProjectDesk, there are always more final year project titles for students to choose from</h1>
                                    
                                    <a class="btn-slide animation animated-item-3" href="<?php echo base_url('index.php/Welcome/project_idea/all') ?>">CHECK OUT PROJECT IDEAS</a>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Features</h2>
                <p class="lead">The ultimate final year projects hub</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-users"></i>
                            <h2>Students</h2>
                            <h3>Add your project ideas, communicate with your supervisor</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Supervisor</h2>
                            <h3>Approve project ideas, communicate with students</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-info"></i>
                            <h2>HOD</h2>
                            <h3>Create various project groups</h3>
                        </div>
                    </div><!--/.col-md-4-->
                  
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->


    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2018 <a target="_blank" href="#" >Project Desk</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="<?php echo base_url('index.php/Welcome/project_idea/all') ?>">Project ideas</a></li>
                    </ul>
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