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
                        <!-- <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul> -->
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
            <!-- <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form> -->
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
                    <h2>Client Panel</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url()?>index.php/site/client">Home</a>
                        </li>
                        <!-- <li class="active">
                            <strong>Clients</strong>
                        </li> -->
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
                            <span class="text-muted small pull-right">Last modification: <i class="fa fa-clock-o"></i> 2:10 pm - 12.06.2014</span>
                            <h2>Clients</h2>
                            <p>
                                All clients need to be verified.
                            </p>
                            <form action="search_result" method='post'>
                                <div class="input-group">
                                    <input name="keyword" type="text" placeholder="Search client " required="required" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>" class="input form-control">
                                    <span class="input-group-btn">
                                            <button type="button" class="btn btn btn-primary"> <i class="fa fa-search"></i> Search</button>
                                    </span>
                                </div>
                            </form>
                            
                            <div class="clients-list">
                            <ul class="nav nav-tabs">
                                <span class="pull-right small text-muted">Undefined Elements</span>
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i> Contacts</a></li>
                                <!-- <li class=""><a data-toggle="tab" href="#tab-2"><i class="fa fa-briefcase"></i> Companies</a></li> -->
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>
                                                <?php
                                                foreach ($h->result() as $row)
                                                {
                                                    ?>
                                                    <tr>
                                                        <td class="client-avatar"><img alt="image" src="img/a2.jpg"> </td>
                                                        <td><a data-toggle="tab" href="#contact-1" class="client-link"><?php echo $row->name; ?></a></td>
                                                        <td> <?php echo $row->company; ?> </td>
                                                        <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                                        <td> <?php echo $row->email; ?> </td>
                                                        <td> <?php echo $row->address; ?> </td>
                                                        <td> <?php echo $row->gender; ?> </td>
                                                        
                                                        <td><?php echo anchor('site/update_client?id='.$row->id, 'UPDATE', 'id="$row->id"'); ?></td>
                                                    </tr>
                                                           
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-1" class="client-link">Tellus Institute</a></td>
                                                    <td>Rexton</td>
                                                    <td><i class="fa fa-flag"></i> Angola</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-2" class="client-link">Velit Industries</a></td>
                                                    <td>Maglie</td>
                                                    <td><i class="fa fa-flag"></i> Luxembourg</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-3" class="client-link">Art Limited</a></td>
                                                    <td>Sooke</td>
                                                    <td><i class="fa fa-flag"></i> Philippines</td>
                                                    <td class="client-status"></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-1" class="client-link">Tempor Arcu Corp.</a></td>
                                                    <td>Eisden</td>
                                                    <td><i class="fa fa-flag"></i> Korea, North</td>
                                                    <td class="client-status"><span class="label label-warning">Waiting</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-2" class="client-link">Penatibus Consulting</a></td>
                                                    <td>Tribogna</td>
                                                    <td><i class="fa fa-flag"></i> Montserrat</td>
                                                    <td class="client-status"></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-3" class="client-link"> Ultrices Incorporated</a></td>
                                                    <td>Basingstoke</td>
                                                    <td><i class="fa fa-flag"></i> Tunisia</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-2" class="client-link">Et Arcu Inc.</a></td>
                                                    <td>Sioux City</td>
                                                    <td><i class="fa fa-flag"></i> Burundi</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-1" class="client-link">Tellus Institute</a></td>
                                                    <td>Rexton</td>
                                                    <td><i class="fa fa-flag"></i> Angola</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-2" class="client-link">Velit Industries</a></td>
                                                    <td>Maglie</td>
                                                    <td><i class="fa fa-flag"></i> Luxembourg</td>
                                                    <td class="client-status"></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-3" class="client-link">Art Limited</a></td>
                                                    <td>Sooke</td>
                                                    <td><i class="fa fa-flag"></i> Philippines</td>
                                                    <td class="client-status"></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-1" class="client-link">Tempor Arcu Corp.</a></td>
                                                    <td>Eisden</td>
                                                    <td><i class="fa fa-flag"></i> Korea, North</td>
                                                    <td class="client-status"><span class="label label-warning">Waiting</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-2" class="client-link">Penatibus Consulting</a></td>
                                                    <td>Tribogna</td>
                                                    <td><i class="fa fa-flag"></i> Montserrat</td>
                                                    <td class="client-status"></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-3" class="client-link"> Ultrices Incorporated</a></td>
                                                    <td>Basingstoke</td>
                                                    <td><i class="fa fa-flag"></i> Tunisia</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-2" class="client-link">Et Arcu Inc.</a></td>
                                                    <td>Sioux City</td>
                                                    <td><i class="fa fa-flag"></i> Burundi</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-1" class="client-link">Tellus Institute</a></td>
                                                    <td>Rexton</td>
                                                    <td><i class="fa fa-flag"></i> Angola</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-2" class="client-link">Velit Industries</a></td>
                                                    <td>Maglie</td>
                                                    <td><i class="fa fa-flag"></i> Luxembourg</td>
                                                    <td class="client-status"></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-3" class="client-link">Art Limited</a></td>
                                                    <td>Sooke</td>
                                                    <td><i class="fa fa-flag"></i> Philippines</td>
                                                    <td class="client-status"></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-1" class="client-link">Tempor Arcu Corp.</a></td>
                                                    <td>Eisden</td>
                                                    <td><i class="fa fa-flag"></i> Korea, North</td>
                                                    <td class="client-status"><span class="label label-warning">Waiting</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-2" class="client-link">Penatibus Consulting</a></td>
                                                    <td>Tribogna</td>
                                                    <td><i class="fa fa-flag"></i> Montserrat</td>
                                                    <td class="client-status"></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-3" class="client-link"> Ultrices Incorporated</a></td>
                                                    <td>Basingstoke</td>
                                                    <td><i class="fa fa-flag"></i> Tunisia</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a data-toggle="tab" href="#company-2" class="client-link">Et Arcu Inc.</a></td>
                                                    <td>Sioux City</td>
                                                    <td><i class="fa fa-flag"></i> Burundi</td>
                                                    <td class="client-status"><span class="label label-primary">Active</span></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
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
