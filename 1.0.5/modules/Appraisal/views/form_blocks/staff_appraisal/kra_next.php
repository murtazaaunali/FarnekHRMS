<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Key Result Areas for Next Rating Period</h3>
    </div>
    <div class="panel-body">
        <p>Please set jointly with your Manager the Key Result Areas and targets and appropriate measurement criteria (KPIs) for the next rating period.</p>
        <div class="row">
            <div class="col-md-12 column">
                <table class="table table-sorted table-striped">
                    <thead>
                        <tr>
                            <th>Key Result Areas</th>
                            <th>MEASUREMENT CRITERIA
                                <br>(Key Performance Indicators)</th>
                            <th>WEIGHTING
                                <br>(applicable for the coming review period)
                            </th>
                            <th>
                                <button class="btn btn-primary" id="add_kra_next" type="button">Add</button>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="kras_next">
                        <tr id="kra_next_row">
                            <td>
                                <input type="text" name="kra_next[kra_next][]" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="kra_next[measurement_criteria][]" class="form-control weightings">
                            </td>
                            <td>
                                <input type="text" name="kra_next[weighting][]" class="form-control">
                            </td>
                            <td>
                                <button type="button" class="btn btn-default" id="delete_row">Delete</button>
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
    <div class="panel-footer">
        <a class="btn btn-default next" href="#">Continue</a>
    </div>
</div>