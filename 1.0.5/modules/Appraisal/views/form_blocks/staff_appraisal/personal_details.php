<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Personal Details</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <div class="form-group">
                    <label>Registration Number</label>
                    <input type="text" class="form-control" id="regnum" name="regnum" class="regnum">
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label>Employee's Name</label>
                    <input type="text" class="form-control" id="empname" name="empname" readonly>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <div class="form-group">
                    <label>Job Title</label>
                    <input type="text" class="form-control" id="jobtitle" name="jobtitle">
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label>Section / Department</label>
                    <input type="text" class="form-control" id="department" name="department">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <div class="form-group">
                    <label>Line Manager's Name</label>
                    <?php 
                            $user = $this->ion_auth->user()->row();
                            ?>
                        <input type="text" class="form-control" id="lmname" name="lmname" value="<?php echo $user->first_name;?> <?php echo $user->last_name;?>" readonly>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label>Job Title</label>
                    <input type="text" class="form-control" id="lmjobtitle" name="lmjobtitle" value="HR Executive" readonly>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <div class="form-group">
                    <label>Performance Appraisal Period</label>
                    <!--<input type="date" class="form-control" id="appraisalperiod" name="appraisalperiod">-->
                    <select class="form-control" id="appraisalperiod" name="appraisalperiod">
                        <option>2015-2016</option>
                        <option>2016-2017</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>