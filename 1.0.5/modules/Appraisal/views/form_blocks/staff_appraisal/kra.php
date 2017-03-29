<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Evaluate Achievement of Objectives </h3>
    </div>
    <div class="panel-body">
        <p>This part accounts for 60% of your overall appraisal rating. For each objective set at the beginning of the review period, as outlined in the Objectives Form, summarise the employee’s performance and achievement both at mid year review as well as the annual review. Assign a percentage rating in multiples of 5%, in line with the rating scale below, to indicate the achievement of each objective.
        </p>
        <p><strong>110% - 130%:</strong> Achievement of the objective substantially exceeded requirements in all areas.</p>
        <p><strong>100% - 110%:</strong> Achievement of the objective met the requirements in all areas and sometimes exceeded them.
        </p>
        <p><strong>80% - 99%:</strong> Achievement of the objective fell below requirement in some areas.
        </p>
        <p><strong>60% - 79%:</strong> Achievement of the objective fell below requirement in most areas.
        </p>
        <p><strong>Below 60%:</strong> Achievement of the objective substantially fell below requirements in most areas. </p>
        <br>
        <p>Please ensure that the combine entries and the kra weightage section adds up to 100%</p>
        <div class="row">
            <div class="col-md-1 col-sm-offset-11">
                <button type="button" id="add_kra" value="Add" class="btn btn-primary">Add</button>
            </div>
        </div>
        <div id="kras">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="row" id="kra_row">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Key Result Area</label>
                                    <textarea name="kra[kra][]" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Evaluation Detail</label>
                                    <textarea name="kra[evaluation_detail][]" class="form-control"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Manager Comment</label>
                                    <textarea name="kra[evaluation_detail][]" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>KRA Weighting</label>
                                        <input name="kra[weighting][]" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Self Rating</label>
                                        <input type="text" name="kra[emp_rating][]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Manager Rating</label>
                                        <input type="text" name="kra[manager_rating][]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Final Rating</label>
                                        <input type="text" name="kra[final_rating][]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Weighted Rating</label>
                                        <input type="text" name="kra[weighted_rating][]" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-offset-11">
                            <button type="button" id="delete_row" class="btn btn-primary">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="row" id="kra_row">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Key Result Area</label>
                                    <textarea name="kra[kra][]" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Evaluation Detail</label>
                                    <textarea name="kra[evaluation_detail][]" class="form-control"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Manager Comment</label>
                                    <textarea name="kra[evaluation_detail][]" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>KRA Weighting</label>
                                        <input name="kra[weighting][]" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Self Rating</label>
                                        <input type="text" name="kra[emp_rating][]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Manager Rating</label>
                                        <input type="text" name="kra[manager_rating][]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Final Rating</label>
                                        <input type="text" name="kra[final_rating][]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Weighted Rating</label>
                                        <input type="text" name="kra[weighted_rating][]" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-offset-11">
                            <button type="button" id="delete_row" class="btn btn-primary">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="row" id="kra_row">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Key Result Area</label>
                                    <textarea name="kra[kra][]" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Evaluation Detail</label>
                                    <textarea name="kra[evaluation_detail][]" class="form-control"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Manager Comment</label>
                                    <textarea name="kra[evaluation_detail][]" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>KRA Weighting</label>
                                        <input name="kra[weighting][]" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Self Rating</label>
                                        <input type="text" name="kra[emp_rating][]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Manager Rating</label>
                                        <input type="text" name="kra[manager_rating][]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Final Rating</label>
                                        <input type="text" name="kra[final_rating][]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Weighted Rating</label>
                                        <input type="text" name="kra[weighted_rating][]" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-offset-11">
                            <button type="button" id="delete_row" class="btn btn-primary">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="row" id="kra_row">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Key Result Area</label>
                                    <textarea name="kra[kra][]" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Evaluation Detail</label>
                                    <textarea name="kra[evaluation_detail][]" class="form-control"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Manager Comment</label>
                                    <textarea name="kra[evaluation_detail][]" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>KRA Weighting</label>
                                        <input name="kra[weighting][]" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Self Rating</label>
                                        <input type="text" name="kra[emp_rating][]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Manager Rating</label>
                                        <input type="text" name="kra[manager_rating][]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Final Rating</label>
                                        <input type="text" name="kra[final_rating][]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Weighted Rating</label>
                                        <input type="text" name="kra[weighted_rating][]" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-offset-11">
                            <button type="button" id="delete_row" class="btn btn-primary">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="row" id="kra_row">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Key Result Area</label>
                                    <textarea name="kra[kra][]" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Evaluation Detail</label>
                                    <textarea name="kra[evaluation_detail][]" class="form-control"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Manager Comment</label>
                                    <textarea name="kra[evaluation_detail][]" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>KRA Weighting</label>
                                        <input name="kra[weighting][]" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Self Rating</label>
                                        <input type="text" name="kra[emp_rating][]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Manager Rating</label>
                                        <input type="text" name="kra[manager_rating][]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Final Rating</label>
                                        <input type="text" name="kra[final_rating][]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Weighted Rating</label>
                                        <input type="text" name="kra[weighted_rating][]" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-offset-11">
                            <button type="button" id="delete_row" class="btn btn-primary">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 column">
                <table class="table table-sorted table-striped">
                    <tr>
                        <td>Total Weighting</td>
                        <td id="total_weighting"></td>
                        <td>Rating of Key Result Areas</td>
                        <td id="total_rating_kra"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <a class="btn btn-default next" href="#">Continue</a>
    </div>
</div>