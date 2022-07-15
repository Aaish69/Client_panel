<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?php echo base_url(); ?>img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> 
                    </div>
                    <div class="logo-element">
                        AS
                    </div>
                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to Bellix Client Page</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <div class="media-body">
                                    <strong>No messages</strong> 
                                </div>

                            </div>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Clients</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a>App Views</a>
                        </li>
                        <li class="active">
                            <strong>Clients</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-sm-8">
                    <div class="ibox">
                        <div class="ibox-content">
                            <h2>Clients</h2>
                            <div class="alert alert-danger">
                                <strong>Success!</strong> Client added successfully
                            </div>
                            <a href="<?php echo base_url(); ?>index.php/site/add_client">Click to add another client</a>
                            <a href="<?php echo base_url(); ?>index.php/site/client">Click to redirect back to client page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
            </div>
        </div>

        </div>
        </div>



    <!-- Mainly scripts -->
    <!-- <script src="js/jquery-2.1.1.js"></script> -->
    <script type='text/javascript' src="<?php echo base_url(); ?>js/jquery-2.1.1.js"></script>

    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script type='text/javascript' src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

    <!-- <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script> -->
    <script type='text/javascript' src="<?php echo base_url(); ?>js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script> -->
    <script type='text/javascript' src="<?php echo base_url(); ?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>


    <!-- Custom and plugin javascript -->
    <!-- <script src="js/inspinia.js"></script> -->
    <script type='text/javascript' src="<?php echo base_url(); ?>js/inspinia.js"></script>

    <!-- <script src="js/plugins/pace/pace.min.js"></script> -->
    <script type='text/javascript' src="<?php echo base_url(); ?>js/plugins/pace/pace.min.js"></script>


</body>
