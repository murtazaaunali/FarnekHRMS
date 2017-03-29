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
                                <tfoot>
                                    <tr>
                                        <td>Appraiser’s remarks and rating for section :</td>
                                        <td></td>
                                        <td>0.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Appraiser’s level of agreement with the acquisition of new KASH
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <a class="btn btn-default next" href="#">Continue</a>
    </div>
</div>