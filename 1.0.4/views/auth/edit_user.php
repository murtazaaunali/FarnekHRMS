<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php echo form_open(uri_string());?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo lang('edit_user_heading');?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row clearfix">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>
                                        <?php echo lang('edit_user_subheading');?>
                                    </p>
                                    <div id="infoMessage">
                                        <?php echo $message;?>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <br>
                                                <?php echo form_input($first_name);?>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>
                                                    <?php echo lang('edit_user_lname_label', 'last_name');?>
                                                </label>
                                                <br>
                                                <?php echo form_input($last_name);?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Designation</label>
                                                <br>
                                                <?php echo form_input($company);?>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>
                                                    Phone
                                                </label>
                                                <br>
                                                <?php echo form_input($phone);?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <br>
                                                <?php echo form_input($password);?>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>
                                                    <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?>
                                                </label>
                                                <br>
                                                <?php echo form_input($password_confirm);?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Selet Member Group</p>
                        <?php if ($this->ion_auth->is_admin()): ?>
                            <div class="row">
                                <div class="col-sm-5 col-sm-offset-1">
                                    <div class="form-group">
                                        <?php foreach ($groups as $group):?>
                                            <label class="checkbox">
                                                <?php
                                            $gID=$group['id'];
                                            $checked = null;
                                            $item = null;
                                            foreach($currentGroups as $grp) {
                                                if ($gID == $grp->id) {
                                                    $checked= ' checked="checked"';
                                                    break;
                                                }
                                            } ?>
                                                    <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>" <?php echo $checked;?>>
                                                    <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                                            </label>
                                            <?php endforeach?>
                                                <?php echo form_hidden('id', $user->id);?>
                                                    <?php echo form_hidden($csrf); ?>
                                    </div>
                                </div>
                            </div>
                            <?php endif ?>
                    </div>
                    <div class="panel-footer">
                        <div class="row clearfix">
                            <div class="col-md-12 column">
                                <input type="submit" class="btn btn-success pull-right" value="Save">
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo form_close();?>
        </div>
    </div>
</div>