<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Generate Appraisal Report</h3>
            </div>
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data" action="">
                    <div class="row">
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="form-group">
                                <label>Employee's Number</label>
                                <input type="text" class="form-control" id="regnum" name="regnum" class="regnum" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Line Manager's Name</label>
                                <input type="text" class="form-control" id="empname" name="empname">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Performance Appraisal Period</label>
                                <select class="form-control" id="appraisalperiod" name="appraisalperiod">
                                    <option>Select Year</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success pull-right">SEARCH</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Result</h3>
            </div>
            <div class="panel-body">
                <?php if(isset($results)): ?>
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Employee Number</th>
                                        <th>Employee Name</th>
                                        <th>Appraisal Period</th>
                                        <th>Job Title</th>
                                        <th>Department</th>
                                        <th>Line Manager's Name</th>
                                        <th>Total Score</th>
                                        <th>Performance Percentage</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($results as $result):?>
                                        <tr>
                                            <td>
                                                <?php echo $result->id; ?>
                                            </td>
                                            <td>
                                                <?php echo $result->reg_num; ?>
                                            </td>
                                            <td>
                                                <?php echo $result->empname; ?>
                                            </td>
                                            <td>
                                                <?php echo $result->appraisalperiod; ?>
                                            </td>
                                            <td>
                                                <?php echo $result->jobtitle; ?>
                                            </td>
                                            <td>
                                                <?php echo $result->department; ?>
                                            </td>
                                            <td>
                                                <?php echo $result->lmname; ?>
                                            </td>
                                            <td>
                                                <?php echo $result->total_score; ?>
                                            </td>
                                            <td>
                                                <?php echo $result->performance_percent; ?>%
                                            </td>
                                            <td><a href="<?php echo site_url('Reports/Appraisal/'.$result->id); ?>">View</a></td>
                                        </tr>
                                        <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php endif; ?>
                        <?php if(isset($noresult)): ?>
                            <div class="row clearfix">
                                <div class="col-md-12 column">
                                    <?php echo $noresult; ?>
                                </div>
                            </div>
                            <?php endif; ?>
            </div>
        </div>
    </div>
</div>