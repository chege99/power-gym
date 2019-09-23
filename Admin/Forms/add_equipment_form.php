<form action="php/exec_form_equipment.php" method="POST" enctype="multipart/form-data">
<fieldset>

    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right pull-right-pro">Equipment Name</label>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="eq_name" name="eq_name" class="form-control" />
            </div>
        </div>
    </div>

    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right pull-right-pro">Description</label>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <input type="text"id="eq_description" name="eq_description" class="form-control" />
            </div>
        </div>
    </div>


    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right pull-right-pro">Quality</label>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="form-select-list">
                    <select class="form-control custom-select-value" name="eq_quality" id="eq_quality">
                            <option value="1">Select 1</option>
                            <option value="2">Select 2</option>
                            <option value="3">Select 3</option>
                        </select>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <label class="login2 pull-right pull-right-pro">Picture</label>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="file-upload-inner file-upload-inner-right ts-forms">
                    <div class="input append-big-btn">
                        <label class="icon-left" for="append-big-btn">
                                <i class="fa fa-download"></i>
                        </label>
                        <div class="file-button">
                            Browse
                            <input type="file" id="eq_image" name="eq_image" onchange="document.getElementById('append-big-btn').value = this.value;">
                        </div>
                            <input type="text" id="append-big-btn" placeholder="no file selected">
                    </div>
                </div>
            </div>
        </div>
    </div>
       <div class="form-group-inner">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <label class="login2 pull-right pull-right-pro">Status</label>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="form-select-list">
                    <select class="form-control custom-select-value" id="eq_status" name="eq_status">
                            <option value="1">Select 1</option>
                            <option value="2">Select 2</option>
                            <option value="3">Select 3</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
     <div class="form-group-inner">
        <div class="login-btn-inner">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
                    <div class="login-horizental cancel-wp pull-left">
                        <button class="btn btn-white"  data-dismiss="modal">Cancel</button>
                        <button class="btn btn-sm btn-primary login-submit-cs"name="submitnew" id="submitnew" type="submit">Save Change</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>
</form>