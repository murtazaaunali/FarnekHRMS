<div class="container">
    <div class="row">
        <div class="col-md-12 column">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel"><?php echo lang('forgot_password_heading');?></h4>
                        <p>
                            <?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?>
                        </p>
                    </div>
                    <div class="modal-body">
                        <div id="infoMessage">
                            <?php if($message): ?>
                                <div class="alert alert-danger">
                                    <?php echo $message;?>
                                </div>
                                <?php endif; ?>
                        </div>
                        <?php echo form_open("auth/forgot_password");?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">
                                    Email address
                                </label>
                                <input type="email" class="form-control" id="identity" name="identity" />
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                            <?php echo form_close();?>
                    </div>
                    <div class="modal-footer">
                        <a href="forgot_password">
                            <?php echo lang('login_forgot_password');?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
