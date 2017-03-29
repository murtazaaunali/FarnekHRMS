<html lang="en">

<head>
    <title>
        <?php echo $title; ?>
    </title>
    <meta name="resource-type" content="document" />
    <meta name="robots" content="all, index, follow" />
    <meta name="googlebot" content="all, index, follow" />
    <?php
	if(!empty($meta))
	foreach($meta as $name=>$content):
        echo meta($name, $content) . PHP_EOL;
    endforeach;
	foreach($css as $file):
        echo link_tag(array('href' => $file, 'rel' => 'stylesheet', 'type' => 'text/css')) . PHP_EOL;
    endforeach;
    ?>
        <!-- styles -->
        <link href="<?php echo base_url(); ?>assets/themes/superhero/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/themes/superhero/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/themes/superhero/css/general.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo base_url('assets/themes/superhero/images/farnek_white.png'); ?>"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <?php echo modules::run('Notifications/Notifications/widget');?>
                            </li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Appraisals</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo site_url('Appraisal/ScoreManagerialAppraisal'); ?>">Score Managerial Appraisal</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('Appraisal/ScoreWorkerAppraisal'); ?>">Score Worker  Appraisals</a>
                                    </li>
                                </ul>
                            </li>
                            <!--<li><a href="<?php //echo site_url('OrganizationChart');?>">Organization Chart</a></li>-->
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo site_url('Reports/Appraisals'); ?>">Performace Rating Report</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('Reports/EmployeesReport'); ?>">Employees List</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="<?php echo site_url('Profile'); ?>"><i class="icon-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Auth/logout'); ?>"><i class="icon-lock"></i> Log Out</a>
                            </li>
                        </ul>
                    </div>

                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php echo $output;?>
                <?php echo $this->load->get_section('sidebar'); ?>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body text-center">
                            Farnek Total Management &copy; Copyrights 2016. All Rights Reserved.
                            <br> Application Version:
                            <?php echo LOADED_VER; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo base_url(); ?>assets/themes/superhero/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/themes/superhero/js/bootstrap.min.js" type="text/javascript"></script>
    <?php foreach($js as $file):?>
        <script src="<?php echo $file; ?>"></script>
        <?php
	endforeach;
    ?>
</body>

</html>
