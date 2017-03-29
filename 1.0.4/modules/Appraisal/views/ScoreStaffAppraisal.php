<div class="container" id="myWizard">
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo site_url('Appraisal/ConfirmAppraisal');?>" enctype="multipart/form-data" method="post">
                <?php $this->load->view('form_blocks/staff_appraisal/personal_details'); ?>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <div class="navbar navbar-default">
                            <div class="navbar-inner">
                                <ul class="nav nav-pills">
                                    <li class="active"><a href="#step1" data-toggle="tab">Key Result Areas</a></li>
                                    <li><a href="#step2" data-toggle="tab">Competencies</a></li>
                                    <li><a href="#step3" data-toggle="tab">Development</a></li>
                                    <li><a href="#step4" data-toggle="tab">Key Result Areas for Next Period</a></li>
                                    <li><a href="#step5" data-toggle="tab">Comments</a></li>
                                    <li><a href="#step6" data-toggle="tab">Overall Performance</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="step1">
                                <?php $this->load->view('form_blocks/staff_appraisal/kra'); ?>
                            </div>
                            <div class="tab-pane" id="step2">
                                <?php $this->load->view('form_blocks/staff_appraisal/competencies'); ?>
                            </div>
                            <div class="tab-pane" id="step3">
                                <?php $this->load->view('form_blocks/staff_appraisal/development'); ?>
                                
                            </div>
                            <div class="tab-pane" id="step4">
                                <?php $this->load->view('form_blocks/staff_appraisal/kra_next'); ?>
                            </div>
                            <div class="tab-pane" id="step5">
                                <?php $this->load->view('form_blocks/staff_appraisal/comments'); ?>
                            </div>
                            <div class="tab-pane" id="step6">
                                <?php $this->load->view('form_blocks/staff_appraisal/overall_performa'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>