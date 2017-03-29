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
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>CRITERIA</th>
                                            <th>SCORE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Team work &amp; Cooperation</th>
                                            <td>
                                                <?php echo ($this->input->post('criteria')['team_work'] !== 'NA' ? round($this->input->post('criteria')['team_work']) : 'NA');?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Communication</th>
                                            <td>
                                                <?php echo ($this->input->post('criteria')['communication'] !== 'NA' ? round($this->input->post('criteria')['communication']) : 'NA');?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Quality</th>
                                            <td>
                                                <?php echo ($this->input->post('criteria')['quality'] !== 'NA' ? round($this->input->post('criteria')['quality']) : 'NA');?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Documentation</th>
                                            <td>
                                                <?php echo ($this->input->post('criteria')['documentation'] !== 'NA' ? round($this->input->post('criteria')['documentation']) : 'NA');?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Initiative</th>
                                            <td>
                                                <?php echo ($this->input->post('criteria')['initiative'] !== 'NA' ? round($this->input->post('criteria')['initiative']) : 'NA');?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Technical Knowledge</th>
                                            <td>
                                                <?php echo ($this->input->post('criteria')['technical_knowledge'] !== 'NA' ? round($this->input->post('criteria')['technical_knowledge']) : 'NA');?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Productivity</th>
                                            <td>
                                                <?php echo ($this->input->post('criteria')['productivity'] !== 'NA' ? round($this->input->post('criteria')['productivity']) : 'NA');?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Safety &amp; Housekeeping</th>
                                            <td>
                                                <?php echo ($this->input->post('criteria')['safety'] !== 'NA' ? round($this->input->post('criteria')['safety']) : 'NA');?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Learning Skills</th>
                                            <td>
                                                <?php echo ($this->input->post('criteria')['learning_skills'] !== 'NA' ? round($this->input->post('criteria')['learning_skills']) : 'NA');?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Teaching Skills</th>
                                            <td>
                                                <?php echo ($this->input->post('criteria')['teaching_skills'] !== 'NA' ? round($this->input->post('criteria')['teaching_skills']) : 'NA');?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Leadership</th>
                                            <td>
                                                <?php echo ($this->input->post('criteria')['leadership'] !== 'NA' ? round($this->input->post('criteria')['leadership']) : 'NA');?>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Total </th>
                                            <th>
                                                <?php
                                                    $total = 0;
                                                    $num_criteria = 0;
                                                    foreach($this->input->post('criteria') as $criteria) {
                                                        if($criteria !== 'NA') {
                                                            $num_criteria += 1;
                                                            $total += $criteria;
                                                        }
                                                    }
                                                    echo $total; ?>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Performance %</th>
                                            <th>
                                                <?php
                                                    $criteria = 100/$num_criteria/5;
                                                    $performance_percent = $total*$criteria;
                                                    echo round($performance_percent);
                                                    ?>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <h3>Manager's Comment</h3>
                                <p>
                                    <?php echo $post_back['manager_comments'];?>
                                </p>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <h3>Employee's Comments</h3>
                                <p>
                                    <?php echo $post_back['employee_comments'];?>
                                </p>
                            </div>
                        </div>
                        <div class="row clearfix">
                                <form action="<?php echo site_url('Appraisal/SaveWorkerAppraisal');?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="total_score" value="<?php echo $total;?>">
                                    <input type="hidden" name="performance_percent" value="<?php echo round($performance_percent);?>">
                                    <?php foreach($post_back as $field=>$value): ?>
                                        <?php if($field === 'criteria'):?>
                                            <?php foreach($post_back['criteria'] as $cfield=>$cvalue): ?>
                                                <input type="hidden" name="<?php echo $cfield;?>" value="<?php echo $cvalue;?>">
                                                <?php endforeach; ?>
                                                    <?php else:?>
                                                        <input type="hidden" name="<?php echo $field;?>" value="<?php echo $value;?>">
                                                        <?php endif;?>
                                                            <?php endforeach; ?>
                                                                <button class="btn btn-success pull-right" type="submit">SAVE</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
