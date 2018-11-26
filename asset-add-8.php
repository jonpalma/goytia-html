<button type="button" class="btn btn-icon btn-success" data-toggle="modal" data-target="#warranty-modal"><i
        class="mdi mdi-plus"></i></button>
<hr class="mb-4">
<div class="table-responsive">
    <table class="table table-centered mb-0">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Date</th>
            <th>Case Name</th>
            <th>Claim No.</th>
            <th>Advance</th>
            <th>Status</th>
            <th>Job title</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="#">#10</a></td>
            <td>01/11/2018</td>
            <td>Accident 1</td>
            <td>800HOO332</td>
            <td>
                <div class="progress progress-sm">
                    <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%"
                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </td>
            <td><i class="mdi mdi-circle text-success"></i> Complete</td>
            <td>LLD</td>
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
<div class="modal fade" id="warranty-modal" tabindex="-1" role="dialog"
     aria-labelledby="warranty-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="warranty-modal-label">License</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <form action="#" class="needs-validation" novalidate>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Warranty Terms</label>
                            <input type="text" id="warrantyterms" class="form-control" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Warranty Start Date</label>
                            <input type="text" class="form-control date" id="warrantystartdate" data-toggle="date-picker"
                                   data-single-date-picker="true" required>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Warranty Expiration</label>
                            <input type="text" class="form-control date" id="warrantyexpiration" data-toggle="date-picker"
                                   data-single-date-picker="true">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Odometer Reading</label>
                            <input type="text" id="odometerreading" class="form-control" required>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Number of Miles Covered</label>
                            <input type="text" id="numberofmilescovered" class="form-control" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Number of Hours Covered</label>
                            <input type="text" id="numberofhourscovered" class="form-control" required>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Warranty Vendor</label>
                            <select class="form-control" id="warrantyvendor">
                                <option selected disabled></option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Warranty Vendor Phone</label>
                            <input type="text" class="form-control" data-toggle="input-mask"
                                   data-mask-format="(000) 000-0000" maxlength="14">
                            <span class="font-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Purchase Price</label>
                            <input type="text" id="purchaseprice" class="form-control" required>
                        </div>

                        <div class="form-group mt-3 col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="alerton">
                                <label class="custom-control-label" for="alerton">Alert On</label>
                            </div>
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