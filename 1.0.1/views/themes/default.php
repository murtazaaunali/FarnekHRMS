<html lang="en">
	<head>
		<title><?php echo $title; ?></title>
		<meta name="resource-type" content="document" />
		<meta name="robots" content="all, index, follow"/>
		<meta name="googlebot" content="all, index, follow" />
	<?php
	/** -- Copy from here -- */
	if(!empty($meta))
	foreach($meta as $name=>$content){
		echo "\n\t\t";
		?><meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" /><?php
			 }
	echo "\n";

	if(!empty($canonical))
	{
		echo "\n\t\t";
		?><link rel="canonical" href="<?php echo $canonical?>" /><?php

	}
	echo "\n\t";

	foreach($css as $file){
	 	echo "\n\t\t";
		?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
	} echo "\n\t";

	foreach($js as $file){
			echo "\n\t\t";
			?><script src="<?php echo $file; ?>"></script><?php
	} echo "\n\t";

	/** -- to here -- */
?>

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>assets/themes/default/css/bootstrap.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/themes/default/images/favicon.png" type="image/x-icon"/>
	<meta property="og:image" content="<?php echo base_url(); ?>assets/themes/default/images/facebook-thumb.png"/>
	<link rel="image_src" href="<?php echo base_url(); ?>assets/themes/default/images/facebook-thumb.png" />
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
                        <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo site_url('public/img/farnek_white.png'); ?>"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <?php echo modules::run('Notifications/Notifications/widget');?>
                            </li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Appraisals</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Score Appraisal</a>
                                    </li>
                                    <li>
                                        <a href="#">Set Future Appraisal</a>
                                    </li>
                                    <li>
                                        <a href="#">View Archived Appraisals</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="<?php echo site_url('OrganizationChart');?>">Organization Chart</a></li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Performace Rating Report</a>
                                    </li>
                                    <li>
                                        <a href="#">Employee List</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> Settings</a>
                                <ul class="dropdown-menu">
                                    <div class="dropdown-header">Settings <span class="badge pull-right">6</span></div>
                                    <li>
                                        <a href="#">Action</a>
                                    </li>
                                    <li>
                                        <a href="#">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">Something else here</a>
                                    </li>
                                    <li>
                                        <a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Profile'); ?>"><i class="icon-user"></i> Profile</a>
                            </li>
                            <li><a href=""><i class="icon-fullscreen"></i> Toggle Fullscreen</a></li>
                            <li>
                                <a href="#"><i class="icon-lock"></i> Log Out</a>
                            </li>
                        </ul>
                    </div>

                </nav>
            </div>
        </div>
    </div>
    <div class="container">
    <?php if($this->load->get_section('text_header') != '') { ?>
    	<h1><?php echo $this->load->get_section('text_header');?></h1>
    <?php }?>
    <div class="row">
	    <?php echo $output;?>
		<?php echo $this->load->get_section('sidebar'); ?>
    </div>
    </div> <!-- /container -->
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
</body></html>
