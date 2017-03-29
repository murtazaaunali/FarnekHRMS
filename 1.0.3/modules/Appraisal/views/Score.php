<div class="row">
    <div class="col-md-12">
        <form action="<?php echo site_url('Appraisal/ConfirmAppraisal');?>" enctype="multipart/form-data" method="post">
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
                                <input type="date" class="form-control" id="appraisalperiod" name="appraisalperiod">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Evaluate Achievement of Objectives </h3>
                </div>
                <div class="panel-body">
                    <p>This part accounts for 60% of your overall appraisal rating. For each objective set at the beginning of the review period, as outlined in the Objectives Form, summarise the employee’s performance and achievement both at mid year review as well as the annual review. Assign a percentage rating in multiples of 5%, in line with the rating scale below, to indicate the achievement of each objective.
                    </p>
                    <p><strong>Above 110%:</strong> Achievement of the objective substantially exceeded requirements in all areas.</p>
                    <p><strong>100% - 110%:</strong> Achievement of the objective met the requirements in all areas and sometimes exceeded them.
                    </p>
                    <p><strong>80% - 99%:</strong> Achievement of the objective fell below requirement in some areas.
                    </p>
                    <p><strong>60% - 79%:</strong> Achievement of the objective fell below requirement in most areas.
                    </p>
                    <p><strong>Below 60%:</strong> Achievement of the objective substantially fell below requirements in most areas. </p>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-sorted table-striped">
                                <thead>
                                    <tr>
                                        <th>Objective</th>
                                        <th>Weighting</th>
                                        <th>Rating</th>
                                        <th>Comment</th>
                                        <th>Weighted Rating</th>
                                        <th>
                                            <button class="btn btn-primary" id="add_objective" type="button">Add</button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="objectives">
                                    <tr id="objective_row">
                                        <td>
                                            <input type="text" name="employee_objectives[objectives][]" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="employee_objectives[objective_weightings][]" class="form-control weightings">
                                        </td>
                                        <td>
                                            <input type="text" name="employee_objectives[objective_ratings][]" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="employee_objectives[objective_comments][]" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="employee_objectives[objective_weighted_ratings][]" class="form-control">
                                        </td>
                                        <td>
                                            <button class="btn btn-default" id="delete_row" type="button">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Evaluate Performance against Job related Competencies</h3>
                </div>
                <div class="panel-body">
                    <p>This part accounts for 30% of your overall appraisal.
                        <br>For each competency, summarise the employee’s performance. Assign a percentage rating in multiples of 25% to rate the performance against the competency. Please use the Competency Dictionary to evaluate the Proficiency Levels.
                    </p>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-sorted table-striped">
                                <thead>
                                    <tr>
                                        <th>Competency</th>
                                        <th>Level Required in the Job</th>
                                        <th>Weighting</th>
                                        <th>Comment</th>
                                        <th>Rating</th>
                                        <th>Weighted Rating</th>
                                        <th>
                                            <button class="btn btn-primary" id="add_competency" type="button">Add</button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="competencies">
                                    <tr id="competency_row">
                                        <td>
                                            <input type="text" name="employee_competency[competencies][]" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="employee_competency[competency_levels][]" class="form-control weightings">
                                        </td>
                                        <td>
                                            <input type="text" name="employee_competency[competency_weightings][]" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="employee_competency[competency_comments][]" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="employee_competency[competency_ratings][]" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="employee_competency[competency_weighted_ratings][]" class="form-control">
                                        </td>
                                        <td>
                                            <button class="btn btn-default" id="delete_competency" type="button">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Development</h3>
                </div>
                <div class="panel-body">
                    <p><strong>Strengths and Development Areas</strong>
                        <br>Identify employee’s strengths and possible areas for development below.
                    </p>
                    <div class="row">
                        <div class="col-md-12">
                            <strong>Strengths</strong>
                            <textarea class="form-control" id="employee_strengths" name="employee_strengths" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <strong>Development Areas</strong>
                            <textarea class="form-control" id="employee_developement_areas" name="employee_developement_areas" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <p><strong>Career Objectives</strong>
                                    <br>Please include employee’s career objectives.
                                </p>
                                <textarea class="form-control" id="career_objectives" name="career_objectives" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <p><strong>Training and Development Plan</strong>
                                    <br> The training and development plan should be in line with employee’s objectives and the employee’s potential for advancement within the organisation. Please include any identified training needs:

                                </p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-sorted table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Required Training</th>
                                                    <th>Purpose</th>
                                                    <th>Training Source</th>
                                                    <th>Initiator</th>
                                                    <th>Completion Date</th>
                                                    <th>
                                                        <button class="btn btn-primary" id="add_training" type="button">Add</button>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="trainings">
                                                <tr id="trainings_row">
                                                    <td>
                                                        <input type="text" name="employee_training[required_trainings][]" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="employee_training[training_purposes][]" class="form-control weightings">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="employee_training[training_sources][]" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="employee_training[training_initiators][]" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="employee_training[training_completion_date][]" class="form-control">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-default" id="delete_training">Delete</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <p><strong>New Learning</strong>
                                    <br>Record any new learning during the appraisal period including implementation and resulting performance gain. Assign a percentage rating in multiples of 20% using the following rating scale:
                                    <br>Award 100% if there were at least 2 new learning initiatives and the new learning was relevant to the job, implemented and resulted in tangible performance gain.
                                    <br>Award 80% if the new learning was relevant to the job and implemented but no evidence of gain.
                                    <br>Award 60% if there was evidence of new learning but little evidence of implementation.
                                    <br>Award 0-40% if there was no or minimal evidence of new learning.
                                </p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-sorted table-striped">
                                            <thead>
                                                <tr>
                                                    <th>New Learning</th>
                                                    <th>Demonstrated Evidence</th>
                                                    <th>Rating</th>
                                                    <th>
                                                        <button class="btn btn-primary" id="add_learning" type="button">Add</button>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="learnings">
                                                <tr id="learnings_row">
                                                    <td>
                                                        <input type="text" name="employee_learning[new_learnings][]" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="employee_learning[learning_evidences][]" class="form-control weightings">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="employee_learning[learning_ratings][]" class="form-control">
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-default" id="delete_learning">Delete</button>
                                                    </td>
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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Employee’s and Manager’s comments </h3>
                </div>
                <div class="panel-body">
                    <p><strong>Mid-term evaluation discussion</strong>
                        <br>Use the space below to record any other significant achievements outside the immediate role requirements and in addition to specific objectives. Indicate why these were significant.
                    </p>
                    <textarea class="form-control" id="midterm_evaluation" name="midterm_evaluation" rows="5"></textarea>
                    <p><strong>Other Significant Achievements</strong>
                        <br>Use the space below to record any other significant achievements outside the immediate role requirements and in addition to specific objectives. Indicate why these were significant.
                    </p>
                    <textarea class="form-control" id="other_acheivements" name="other_acheivements" rows="5"></textarea>
                    <p><strong>Employee Comment</strong>
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
