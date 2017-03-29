$("#add_objective").on('click', function (e) {
    $('#objectives').append('<tr id="objective_row"><td><input type="text" name="employee_objectives[objectives][]" class="form-control"></td><td><input type="text" name="employee_objectives[objective_weightings][]" class="form-control weightings"></td><td><input type="text" name="employee_objectives[objective_ratings][]" class="form-control"></td><td><input type="text" name="employee_objectives[objective_comments][]" class="form-control"></td><td><input type="text" name="employee_objectives[objective_weighted_ratings][]" class="form-control"></td><td><button class="btn btn-default" id="delete_row" type="button">Delete</button></td></tr>');
});

$("#objectives").on('click', '#delete_row', function (e) {
    $(this).parent().parent().remove();
});

$("#add_competency").on('click', function (e) {
    $('#competencies').append('<tr id="competency_row"><td><input type="text" name="employee_competency[competencies][]" class="form-control"></td><td><input type="text" name="employee_competency[competency_levels][]" class="form-control weightings"></td><td><input type="text" name="employee_competency[competency_weightings][]" class="form-control"></td><td><input type="text" name="employee_competency[competency_comments][]" class="form-control"></td><td><input type="text" name="employee_competency[competency_ratings][]" class="form-control"></td><td><input type="text" name="employee_competency[competency_weighted_ratings][]" class="form-control"></td><td><button class="btn btn-default" id="delete_competency" type="button">Delete</button></td></tr>');
});

$("#competencies").on('click', '#delete_competency', function (e) {
    $(this).parent().parent().remove();
});

$("#add_training").on('click', function (e) {
    $('#trainings').append('<tr id="trainings_row"><td><input type="text" name="employee_training[required_trainings][]" class="form-control"></td><td><input type="text" name="employee_training[training_purposes][]" class="form-control weightings"></td><td><input type="text" name="employee_training[training_sources][]" class="form-control"></td><td><input type="text" name="employee_training[training_initiators][]" class="form-control"></td><td><input type="text" name="employee_training[training_completion_date][]" class="form-control"></td><td><button class="btn btn-default" id="delete_training">Delete</button></td></tr>');
});

$("#trainings").on('click', '#delete_training', function (e) {
    $(this).parent().parent().remove();
});

$("#add_learning").on('click', function (e) {
    $('#learnings').append('<tr id="learnings_row"><td><input type="text" name="employee_learning[new_learnings][]" class="form-control"></td><td><input type="text" name="employee_learning[learning_evidences][]" class="form-control weightings"></td><td><input type="text" name="employee_learning[learning_ratings][]" class="form-control"></td><td><button type="button" class="btn btn-default" id="delete_learning">Delete</button></td></tr>');
});

$("#learnings").on('click', '#delete_learning', function (e) {
    $(this).parent().parent().remove();
});

$("#regnum").on('keyup', function () {
    if ($("#regnum").val().length >= 4) {
        request = $.ajax({
            url: "/AppraisalSystem/Employee/get_employee/" + $("#regnum").val(),
            type: "post"
        });
        request.done(function (response, textStatus, jqXHR) {
            var emp = JSON.parse(response);
            // Set Values
            $("#empname").val(emp.emp_name);
            $("#jobtitle").val(emp.designation);
            $("#department").val(emp.department.dept_name);
        });
        request.fail(function (jqXHR, textStatus, errorThrown) {
            // Log the error to the console
            alert("Unable to get Employee for the requested code. Try again.");
            //console.error("The following error occurred: " + textStatus, errorThrown);
        });
    }
});

// Staff Appraisal

$("#add_kra").on('click', function (e) {
    $('#kras').append('<div class="row clearfix"> <div class="col-md-12"> <div class="row" id="kra_row"> <div class="col-sm-12"> <div class="col-sm-6"> <div class="form-group"> <label>Key Result Area</label> <textarea name="kra[kra][]" class="form-control"></textarea> </div></div></div><div class="col-sm-12"> <div class="col-sm-6"> <div class="form-group"> <label>Evaluation Detail</label> <textarea name="kra[evaluation_detail][]" class="form-control"></textarea> </div></div></div><div class="col-sm-12"> <div class="col-sm-6"> <div class="form-group"> <label>Manager Comment</label> <textarea name="kra[evaluation_detail][]" class="form-control"></textarea> </div></div><div class="col-sm-6"> <div class="col-sm-2"> <div class="form-group"> <label>KRA Weighting</label> <input name="kra[weighting][]" type="text" class="form-control"> </div></div><div class="col-sm-2"> <div class="form-group"> <label>Self Rating</label> <input type="text" name="kra[emp_rating][]" class="form-control"> </div></div><div class="col-sm-2"> <div class="form-group"> <label>Manager Rating</label> <input type="text" name="kra[manager_rating][]" class="form-control"> </div></div><div class="col-sm-2"> <div class="form-group"> <label>Final Rating</label> <input type="text" name="kra[final_rating][]" class="form-control"> </div></div><div class="col-sm-2"> <div class="form-group"> <label>Weighted Rating</label> <input type="text" name="kra[weighted_rating][]" class="form-control" readonly> </div></div></div></div><div class="col-md-1 col-sm-offset-11"> <button type="button" id="delete_row" class="btn btn-primary">Delete</button> </div></div></div></div>');
});

$("#kras_next").on('click', '#delete_row', function (e) {
    $(this).parent().parent().remove();
});
$("#add_kra_next").on('click', function (e) {
    $('#kras_next').append('<tr id="kra_next_row"> <td> <input type="text" name="kra_next[kra_next][]" class="form-control"> </td><td> <input type="text" name="kra_next[measurement_criteria][]" class="form-control weightings"> </td><td> <input type="text" name="kra_next[weighting][]" class="form-control"> </td><td> <button type="button" class="btn btn-default" id="delete_row">Delete</button> </td></tr>');
});

$("#kras").on('click', '#delete_row', function (e) {
    $(this).parent().parent().remove();
});