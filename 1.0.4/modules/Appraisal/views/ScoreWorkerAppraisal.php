<div class="row">
    <div class="col-md-12">
        <form action="<?php echo site_url('Appraisal/ConfirmWorkerAppraisal');?>" enctype="multipart/form-data" method="post">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Personal Details</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group">
                                <label>Employee's Number</label>
                                <input type="text" class="form-control" id="regnum" name="regnum" class="regnum">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Employee's Name</label>
                                <input type="text" class="form-control" id="empname" name="empname">
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
                                <select class="form-control" name="department" id="department">
                                    <option>Select Department</option>
                                    <option>Technical Services</option>
                                    <option>Cleaning Services</option>
                                    <option>Security</option>
                                    <option>Key Accounts</option>
                                    <option>Burj Khalifa</option>
                                    <option>Dubai Mall</option>
                                    <option>Airport T2</option>
                                    <option>City Walk- Soft</option>
                                    <option>City Walk- Hard</option>
                                    <option>H&G Soft Services</option>
                                    <option>H&G Contracts</option>
                                    <option>H&G Projects</option>
                                    <option>HR</option>
                                    <option>XLNT</option>
                                    <option>Finance</option>
                                    <option>Purchase</option>
                                    <option>Logistics</option>
                                    <option>ICT</option>
                                    <option>Middle East</option>
                                    <option>Call Center</option>
                                    <option>AUH Cleaning</option>
                                    <option>AUH Hard Services</option>
                                </select>
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
                                <input type="text" class="form-control" id="lmjobtitle" name="lmjobtitle" value="<?php echo $user->company;?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-1">
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
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Appraisal</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th>CRITERIA</th>
                                        <th>N/A</th>
                                        <th>5</th>
                                        <th>4</th>
                                        <th>3</th>
                                        <th>2</th>
                                        <th>1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Team work & Cooperation</td>
                                        <td>

                                            <input type="radio" name="criteria[team_work]" id="team_work" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[team_work]" id="team_work" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[team_work]" id="team_work" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[team_work]" id="team_work" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[team_work]" id="team_work" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[team_work]" id="team_work" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Communication</td>
                                        <td>

                                            <input type="radio" name="criteria[communication]" id="communication" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[communication]" id="communication" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[communication]" id="communication" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[communication]" id="communication" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[communication]" id="communication" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[communication]" id="communication" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quality</td>
                                        <td>

                                            <input type="radio" name="criteria[quality]" id="quality" checked value="NA">

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[quality]" id="quality" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[quality]" id="quality" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[quality]" id="quality" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[quality]" id="quality" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[quality]" id="quality" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Documentation</td>
                                        <td>

                                            <input type="radio" name="criteria[documentation]" id="documentation" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[documentation]" id="documentation" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[documentation]" id="documentation" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[documentation]" id="documentation" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[documentation]" id="documentation" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[documentation]" id="documentation" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Initiative</td>
                                        <td>

                                            <input type="radio" name="criteria[initiative]" id="initiative" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[initiative]" id="initiative" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[initiative]" id="initiative" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[initiative]" id="initiative" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[initiative]" id="initiative" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[initiative]" id="initiative" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Technical Knowledge</td>
                                        <td>

                                            <input type="radio" name="criteria[technical_knowledge]" id="technical_knowledge" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[technical_knowledge]" id="technical_knowledge" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[technical_knowledge]" id="technical_knowledge" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[technical_knowledge]" id="technical_knowledge" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[technical_knowledge]" id="technical_knowledge" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[technical_knowledge]" id="technical_knowledge" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Productivity</td>
                                        <td>

                                            <input type="radio" name="criteria[productivity]" id="productivity" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[productivity]" id="productivity" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[productivity]" id="productivity" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[productivity]" id="productivity" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[productivity]" id="productivity" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[productivity]" id="productivity" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Safety & Housekeeping</td>
                                        <td>

                                            <input type="radio" name="criteria[safety]" id="safety" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[safety]" id="safety" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[safety]" id="safety" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[safety]" id="safety" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[safety]" id="safety" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[safety]" id="safety" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Learning Skills</td>
                                        <td>

                                            <input type="radio" name="criteria[learning_skills]" id="learning_skills" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[learning_skills]" id="learning_skills" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[learning_skills]" id="learning_skills" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[learning_skills]" id="learning_skills" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[learning_skills]" id="learning_skills" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[learning_skills]" id="learning_skills" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Teaching Skills</td>
                                        <td>

                                            <input type="radio" name="criteria[teaching_skills]" id="teaching_skills" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[teaching_skills]" id="teaching_skills" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[teaching_skills]" id="teaching_skills" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[teaching_skills]" id="teaching_skills" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[teaching_skills]" id="teaching_skills" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[teaching_skills]" id="teaching_skills" value="1" checked>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Leadership</td>
                                        <td>

                                            <input type="radio" name="criteria[leadership]" id="leadership" value="NA" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[leadership]" id="leadership" value="5" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[leadership]" id="leadership" value="4" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[leadership]" id="leadership" value="3" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[leadership]" id="leadership" value="2" checked>

                                        </td>
                                        <td>

                                            <input type="radio" name="criteria[leadership]" id="leadership" value="1" checked>

                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5">Total Score</th>
                                        <th></th>
                                        <th id="total_score"></th>
                                    </tr>
                                    <tr>
                                        <th colspan="5">Performance (%)</th>
                                        <th></th>
                                        <th id="total_percent"></th>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Manager’s and Employee’s comments </h3>
                </div>
                <div class="panel-body">
                    <p><strong>Manager's Comment</strong>
                        <br>Use the space below to record any other significant achievements outside the immediate role requirements and in addition to specific objectives. Indicate why these were significant.
                    </p>
                    <textarea class="form-control" id="manager_comments" name="manager_comments" rows="5"></textarea>
                    <p><strong>Employee's Comment</strong>
                        <br>Please add any comments or additional information you may wish to include in respect of your performance appraisal and development.

                    </p>
                    <textarea class="form-control" id="employee_comments" name="employee_comments" rows="5"></textarea>
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success pull-right">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
