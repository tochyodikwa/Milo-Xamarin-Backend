<div class="app-content">
    <div class="section">
        <div class="page-header">
            <h4 class="page-title"><?php echo $title; ?></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-light-color">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
            </ol>
        </div>
        <!--page-header closed-->

        <!--row open-->
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
                        <form method="post" class="form-horizontal" action="<?php echo base_url('subscription_controller/addsuccess'); ?>" enctype="multipart/form-data" onsubmit="return valid()">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Subscription Name<span style="color:red"> *</span></label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Subscription Name" value="<?= $this->session->flashdata('name') ? $this->session->flashdata('name') : '' ?>"/>
                                    </div>
                                </div>   
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Valid For (In day)<span style="color:red"> *</span></label>
                                        <input type="number" name="valid_for" id="valid_month" class="form-control" placeholder="Valid Month" value="<?= $this->session->flashdata('price') ? $this->session->flashdata('price') : '' ?>"/>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Price<span style="color:red"> *</span></label>
                                        <input type="number" name="price" id="price" class="form-control" placeholder="Price" value="<?= $this->session->flashdata('price') ? $this->session->flashdata('price') : '' ?>"/>
                                    </div>
                                </div>
                                
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Max Meeting<span style="color:red"> *</span></label>
                                        <input type="number" name="max_meeting" id="max_meeting" class="form-control" placeholder="Max Meeting" value="<?= $this->session->flashdata('max_meeting') ? $this->session->flashdata('max_meeting') : '' ?>"/>
                                    </div>
                                </div>
                                
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Max Participants (at a time) <span style="color:red"> *</span></label>
                                        <input type="number" name="max_participants" id="max_participants" class="form-control" placeholder="Max Participants" value="<?= $this->session->flashdata('max_participants') ? $this->session->flashdata('max_participants') : '' ?>"/>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Details<span style="color:red"> *</span></label>
                                        <textarea class="form-control" name="rules" id="rules" placeholder="Details"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Save"/>
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
<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('rules');
    CKEDITOR.config.autoParagraph = false;
</script>


<script>
    function valid() {
        if ($("#name").val() == '') {
            $("#errmsg").html("Subscription name must be require!");
            $("#name").css("border-color", "red");
            return false;
        } else if ($("#valid_month").val() == '') {
            $("#errmsg").html("Valid month must be require.");
            $("#valid_month").css("border-color", "red");
            return false;
        } else if ($("#price").val() == '') {
            $("#errmsg").html("Subscription price must be require!");
            $("#price").css("border-color", "red");
            return false;
        } else if ($("#max_meeting").val() == '') {
            $("#errmsg").html("Enter the max meeting limit.");
            $("#max_meeting").css("border-color", "red");
            return false;
        } else if ($("#max_participants").val() == '') {
            $("#errmsg").html("Enter the max participants limit!");
            $("#max_participants").css("border-color", "red");
            return false;
        }
    }
</script>
