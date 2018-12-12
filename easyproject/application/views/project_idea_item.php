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
                                <li><a href="<?php echo base_url('index.php/Welcome/project_idea/hosp') ?>">Hospitality Management</a></li>
                            </ul>
                        </li>
                                               
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

    <section id="feature"style="background-color: white;" >
        <div class="container">

            <div class="row">
                <div style="background-color: white;">
                     <h3>PROJECT TITLE: <?php echo $data[0]->title ?> </h3>
                     <h5><i>Posted by:</i> <a> <?php echo $data[0]->fullname ?> </a></h5>

                    <p> <?php echo $data[0]->detail ?> </p>

                    <div class="post-tags">
                        <strong>Department:</strong> <a href="#"> <?php echo $data[0]->department?> </a>
                    </div>
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#feature-->


    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2018 <a target="_blank" href="<? echo base_url('index.php/Welcome/index') ?>" >Project Desk</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>