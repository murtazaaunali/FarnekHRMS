<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Clock</h3>
    </div>
    <div class="panel-body">
        <!-- Month -->
        <?php echo date('F'); ?>
            <!-- /Month -->
            <!-- Date -->
            <?php echo date('d'); ?>
                <!-- /Date -->
                <br />
                <!-- Year -->
                <?php echo date('Y'); ?>,
                    <!-- /Year -->
                    <!-- Day-->
                    <?php echo date('l'); ?>
                        <!-- /Day-->
                        <!-- Clock -->
                        <ul id="clock">
                            <li id="sec"></li>
                            <li id="hour"></li>
                            <li id="min"></li>
                        </ul>
                        <!-- /Clock -->
    </div>
</div>
