<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <?php echo modules::run('Clock/Clock/index');?>
                </div>
                <div class="col-md-4">
                    <?php echo modules::run('Calendar/Calendar/index');?>
                </div>
                <div class="col-md-4">
                    <?php echo modules::run('WeatherForecast/WeatherForecast/index');?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <?php echo modules::run('Profile/Profile/widget');?>
                </div>
                <div class="col-md-4">
                    <?php echo modules::run('Polls/Polls/index');?>
                </div>
            </div>
        </div>
    </div>
</div>
