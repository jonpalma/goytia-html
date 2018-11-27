<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#employee-warning-modal"><i
            class="mdi mdi-plus"></i></button>
<hr class="mb-4">
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Reason for test</th>
            <th>Collection date</th>
            <th>Collection Time</th>
            <th>Lab name</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#10</a></td>
            <td>Warning</td>
            <td>01/11/2018</td>
            <td>01/11/2018</td>
            <td>
                <div class="dropdown">
                    <a href="#" class="" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <i class="mdi mdi-dots-vertical-circle"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button"><i class="mdi mdi-square-edit-outline"></i> Edit
                        </button>
                        <button class="dropdown-item" type="button"><i class="mdi mdi-delete"></i> Delete</button>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<div class="modal fade" id="employee-warning-modal" tabindex="-1" role="dialog"
     aria-labelledby="employee-warning-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="employee-warning-modal-label">Employee Warning</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Review Name</label>
                            <select class="form-control" id="reviewname" required>
                                <option selected disabled></option>
                                <option>Management Review</option>
                                <option>Salary Review</option>
                                <option>Warning</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Review Completed</label>
                            <input type="text" class="form-control date" id="reviewcompleted"
                                   data-toggle="date-picker" data-single-date-picker="true" required>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="reviewcomments">Review Comments</label>
                            <textarea class="form-control" id="reviewcomments" rows="3"></textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Next Review Due</label>
                            <input type="text" class="form-control date" id="nextreviewdue"
                                   data-toggle="date-picker" data-single-date-picker="true" required>
                        </div>

                    </div>

                    <hr class="mb-4">

                    <h4 class="page-title">Employee Warning Notice</h4>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Employee Name</label>
                            <input type="text" id="employeename" class="form-control" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Owner Operator Name</label>
                            <input type="text" id="owneroperatorname" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Date</label>
                            <input type="text" class="form-control date" id="date"
                                   data-toggle="date-picker" data-single-date-picker="true" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Warning #</label>
                            <input type="text" id="warningnumber" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Veral Warning</label>
                            <input type="text" id="verbalwarning" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>First Written Warning</label>
                            <input type="text" id="firstwrittenwarning" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Second Written Warning</label>
                            <input type="text" id="secondwrittenwarning" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Final Written Warning</label>
                            <input type="text" id="finalwrittenwarning" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Tardiness/Leaving Early</label>
                            <input type="text" id="tardiness" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Absenteeism</label>
                            <input type="text" id="absenteeism" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Violation of Safety Rules</label>
                            <input type="text" id="violationofsafetyrules" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Rudeness to Customers</label>
                            <input type="text" id="rudenesstocustomers" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Vehicle Cleanliness</label>
                            <input type="text" id="cehiclecleanliness" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label>DOT Violations (HOS, F+M, etc)</label>
                            <input type="text" id="dotviolations" class="form-control">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="descriptionofinfraction">Description of Infraction</label>
                            <textarea class="form-control" id="descriptionofinfraction" rows="3"></textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="planforimprovement">Plan for Improvement</label>
                            <textarea class="form-control" id="planforimprovement" rows="3"></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="consequencesoffurtherinfractions">Consequences of Further Infractions</label>
                            <textarea class="form-control" id="consequencesoffurtherinfractions" rows="3"></textarea>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-block btn-primary">Save</button>
                        </div>

                    </div>

                </form>

                <?php include('modules/views/fileUpload.php') ?>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


