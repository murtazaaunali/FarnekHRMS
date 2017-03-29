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
	foreach($js as $file):
    ?>
        <script src="<?php echo $file; ?>"></script>
        <?php
	endforeach;
    ?>
            <!-- styles -->
            <link href="<?php echo base_url(); ?>assets/themes/superhero/css/bootstrap.min.css" rel="stylesheet">
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
                <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo base_url('assets/themes/superhero/images/farnek_white.png'); ?>"></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php echo $output;?>
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
</body>

</html>
