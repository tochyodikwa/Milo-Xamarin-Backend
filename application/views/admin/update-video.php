<div class="app-content">
    <div class="section">
        <!--page-header open-->
        <div class="page-header">
            <h4 class="page-title"><?php echo $title; ?></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-light-color">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
            </ol>
        </div>        
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                <div class="card">
                    <div class="card-header">
                        <h4><?php echo $title; ?>
                            <span class="req"> * All Fields are required</span>
                        </h4>
                        <h4>
                            <span class="req" id="errmsg"><?php echo $this->session->flashdata('errmsg'); ?></span>
                            <span style="color:green"><?php echo $this->session->flashdata('successmsg'); ?></span>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form method="post" class="form-horizontal" action="<?php echo base_url('Post_controller/updatepostsuccess'); ?>" enctype="multipart/form-data" onsubmit="return valid()">
                            <input type="hidden" name="update_id" id="update_id" value="<?= $VideoList[0]->id ?>"/>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sub Category<span style="color:red"> *</span></label>
                                        <select name="sub_category_id" id="sub_category_id" class="form-control">
                                            <option value="">Select</option>
                                            <?php
                                            foreach ($SubCategoryList as $key => $value) {
                                                ?>
                                                <option value="<?= $key ?>" <?= ($VideoList[0]->sub_category_id == $key) ? 'Selected' : '' ?>><?= $value ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Title<span style="color:red"> *</span></label>
                                        <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="<?= $VideoList[0]->title ? $VideoList[0]->title : '' ?>"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>URL Code<span style="color:red"> *</span></label>
                                        <input type="text" name="url" id="url" class="form-control" placeholder="Url Code" value="<?= $VideoList[0]->url ?>"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Image<span style="color:red"> *</span></label>
                                        <input type="file" name="userfile[]" id="userfile" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Details<span style="color:red"> *</span></label>
                                        <textarea class="form-control" name="details" id="details" placeholder="Details"><?= $VideoList[0]->details ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <input type="submit" class="btn btn-success" name="submit" id="submit" value="Save"/>
                                    <a href="#" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--row closed-->
</div>
</div>


<script>
    function valid() {
        if ($("#sub_category_id").val() == '') {
            $("#errmsg").html("Please select a sub category name!");
            $("#sub_category_id").css("border-color", "red");
            return false;
        } else if ($("#title").val() == '') {
            $("#errmsg").html("Please enter a title!");
            $("#title").css("border-color", "red");
            return false;
        } else if ($("#url").val() == '') {
            $("#errmsg").html("Please enter a url link!");
            $("#url").css("border-color", "red");
            return false;
        }
    }
</script>