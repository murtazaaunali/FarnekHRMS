<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Appraisal for <?php echo $post_back['empname']; ?> <?php echo $post_back['regnum']; ?></h3>
            </div>
            <div class="panel-body">
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <table class="table table-hover table-bordered">
                            <tr>
                                <td>
                                    Employee Name
                                </td>
                                <td>
                                    <?php echo $post_back['empname']; ?>
                                </td>
                                <td>
                                    Employee Code
                                </td>
                                <td>
                                    <?php echo $post_back['regnum']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Employee Job Title
                                </td>
                                <td>
                                    <?php echo $post_back['jobtitle']; ?>
                                </td>
                                <td>
                                    Department
                                </td>
                                <td>
                                    <?php echo $post_back['department']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Line Manager's Name
                                </td>
                                <td>
                                    <?php echo $post_back['lmname']; ?>
                                </td>
                                <td>
                                    Line Manager's Job Title
                                </td>
                                <td>
                                    <?php echo $post_back['lmjobtitle']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Appraisal Period
                                </td>
                                <td>
                                    <?php echo $post_back['appraisalperiod']; ?>
                                </td>
                                <!--<td>
                                    Total Score
                                </td>
                                <td>
                                    <?php //echo $post_back['lmjobtitle']; ?>
                                </td>-->
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <h3>Objectives</h3>
                        <?php $num_objectives = count($post_back['employee_objectives']['objectives']);?>
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Objective</th>
                                        <th>Weighting</th>
                                        <th>Rating</th>
                                        <th>Comment</th>
                                        <th>Weighted Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=1; $i <= $num_objectives; $i++): ?>
                                        <tr>
                                            <td>
                                                <?php echo $post_back['employee_objectives']['objectives'][$i-1]; ?>
                                            </td>
                                            <td>
                                                <?php echo $post_back['employee_objectives']['objective_weightings'][$i-1]; ?>
                                            </td>
                                            <td>
                                                <?php echo $post_back['employee_objectives']['objective_ratings'][$i-1]; ?>
                                            </td>
                                            <td>
                                                <?php echo $post_back['employee_objectives']['objective_comments'][$i-1]; ?>
                                            </td>
                                            <td>
                                                <?php echo $post_back['employee_objectives']['objective_weighted_ratings'][$i-1]; ?>
                                            </td>
                                        </tr>
                                        <?php endfor; ?>
                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <h3>Competencies</h3>
                        <?php $num_competencies = count($post_back['employee_competency']['competencies']);?>
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Competency</th>
                                        <th>Level Requried</th>
                                        <th>Weighting</th>
                                        <th>Comment</th>
                                        <th>Rating</th>
                                        <th>Weighted Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=1; $i <= $num_objectives; $i++): ?>
                                        <tr>
                                            <td>
                                                <?php echo $post_back['employee_competency']['competencies'][$i-1]; ?>
                                            </td>
                                            <td>
                                                <?php echo $post_back['employee_competency']['competency_levels'][$i-1]; ?>
                                            </td>
                                            <td>
                                                <?php echo $post_back['employee_competency']['competency_weightings'][$i-1]; ?>
                                            </td>
                                            <td>
                                                <?php echo $post_back['employee_competency']['competency_comments'][$i-1]; ?>
                                            </td>
                                            <td>
                                                <?php echo $post_back['employee_competency']['competency_ratings'][$i-1]; ?>
                                            </td>
                                            <td>
                                                <?php echo $post_back['employee_competency']['competency_weighted_ratings'][$i-1]; ?>
                                            </td>
                                        </tr>
                                        <?php endfor; ?>
                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <h3>Strengths</h3>
                        <p>
                            <?php echo $post_back['employee_strengths'];?>
                        </p>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <h3>Development Areas</h3>
                        <p>
                            <?php echo $post_back['employee_developement_areas'];?>
                        </p>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <h3>Career Objectives</h3>
                        <p>
                            <?php echo $post_back['career_objectives'];?>
                        </p>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <h3>Training and Development Plan</h3>
                        <?php $num_competencies = count($post_back['employee_training']['required_trainings']);?>
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Required Trainings</th>
                                        <th>Training Purpose</th>
                                        <th>Training Source</th>
                                        <th>Training Initiator</th>
                                        <th>Completion Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=1; $i <= $num_objectives; $i++): ?>
                                        <tr>
                                            <td>
                                                <?php echo $post_back['employee_training']['required_trainings'][$i-1]; ?>
                                            </td>
                                            <td>
                                                <?php echo $post_back['employee_training']['training_purposes'][$i-1]; ?>
                                            </td>
                                            <td>
                                                <?php echo $post_back['employee_training']['training_sources'][$i-1]; ?>
                                            </td>
                                            <td>
                                                <?php echo $post_back['employee_training']['training_initiators'][$i-1]; ?>
                                            </td>
                                            <td>
                                                <?php echo $post_back['employee_training']['training_completion_date'][$i-1]; ?>
                                            </td>
                                        </tr>
                                        <?php endfor; ?>
                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <h3>New Learning</h3>
                        <?php $num_competencies = count($post_back['employee_learning']['new_learnings']);?>
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>New Learnings</th>
                                        <th>Learning Evidences</th>
                                        <th>Ratings</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=1; $i <= $num_objectives; $i++): ?>
                                        <tr>
                                            <td>
                                                <?php echo $post_back['employee_learning']['new_learnings'][$i-1]; ?>
                                            </td>
                                            <td>
                                                <?php echo $post_back['employee_learning']['learning_evidences'][$i-1]; ?>
                                            </td>
                                            <td>
                                                <?php echo $post_back['employee_learning']['learning_ratings'][$i-1]; ?>
                                            </td>
                                        </tr>
                                        <?php endfor; ?>
                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <h3>Mid-term evaluation discussion</h3>
                        <p>
                            <?php echo $post_back['midterm_evaluation'];?>
                        </p>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <h3>Other Significant Achievements</h3>
                        <p>
                            <?php echo $post_back['other_acheivements'];?>
                        </p>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <h3>Employee Comments</h3>
                        <p>
                            <?php echo $post_back['employee_comments'];?>
                        </p>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <form action="<?php echo site_url('Appraisal/SaveAppraisal');?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="appraisal_values" value='<?php echo json_encode($post_back);?>'>
                            <button type="submit" class="btn btn-success pull-right">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
