<div class="container">
    <div class="row">
        <div class="col-md-12 column">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel"><?php echo lang('login_heading');?></h4>
                        <p>
                            <?php echo lang('login_subheading');?>
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
                        <?php echo form_open("auth/login");?>
                            <div class="form-group">

                                <label for="exampleInputEmail1">
                                    Email address
                                </label>
                                <input type="email" class="form-control" id="identity" name="identity" />
                            </div>
                            <div class="form-group">

                                <label for="exampleInputPassword1">
                                    Password
                                </label>
                                <input type="password" class="form-control" id="password" name="password" />
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label for="remember">
                                        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>Remember Me
                                    </label>
                                </div>
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
