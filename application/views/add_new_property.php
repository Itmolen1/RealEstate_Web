<div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-list-alt"></i> Property Unit Management
        <small><?php 
                    $last = $this->uri->total_segments();
                    $record_num = $this->uri->segment($last);
                    if(is_numeric($record_num))
                        {    echo "Edit";   }
                    else
                    {
                        echo "Add"; } ?> Property Unit</small>
                    
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Property Unit Details</h3>
                    </div>
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="add_new_property" action="<?php echo base_url().$action?>" method="post" enctype="multipart/form-data">
                        <div class="box-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="building_id">Property</label>
                                        <select class="form-control required" id="building_id" name="building_id" tabindex="1">
                                            <option value="0">Select Property</option>
                                            <?php
                                            if(!empty($buildings))
                                            {
                                                foreach ($buildings as $l)
                                                {
                                                    ?>
                                                    <option value="<?php echo $l['building_id']; ?>" <?php if(isset($list) && $l['building_id'] == $list['building_id']) {echo "selected=selected";} ?>><?php echo $l['building_name']; ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="property_type_id">Property Type</label>
                                        <select class="form-control required" id="property_type_id" name="property_type_id" tabindex="1">
                                            <option value="0">Select Property Type</option>
                                            <?php
                                            if(!empty($types))
                                            {
                                                foreach ($types as $l)
                                                {
                                                    ?>
                                                    <option value="<?php echo $l['property_type_id']; ?>" <?php if(isset($list) && $l['property_type_id'] == $list['property_type_id']) {echo "selected=selected";} ?>><?php echo $l['property_type_name']; ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Property Title</label>
                                        <?php
                                            $last = $this->uri->total_segments();
                                            $record_num = $this->uri->segment($last);
                                            if(is_numeric($record_num))
                                            {
                                                ?>
                                                <input type="hidden" name="property_id" value="<?php echo $list['property_id']; ?>" id="property_id" >
                                                <?php
                                            }
                                        ?>
                                        <input type="text" class="form-control required" value="<?php echo isset($list['property_title']) ? $list['property_title'] : ""; ?>" id="property_title" name="property_title" maxlength="200">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="property_rent">Rent : </label>
                                        <input type="number" class="form-control required" value="<?php echo isset($list['property_rent']) ? $list['property_rent'] : ""; ?>" id="property_rent" name="property_rent" maxlength="5">
                                    </div>
                                </div>
                            </div>

                            <div class="row">                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="property_unit_size_id">Property Size</label>
                                        <select class="form-control required" id="property_unit_size_id" name="property_unit_size_id" tabindex="1">
                                            <option value="0">Select Property Size</option>
                                            <?php
                                            if(!empty($sizes))
                                            {
                                                foreach ($sizes as $l)
                                                {
                                                    ?>
                                                    <option value="<?php echo $l['property_unit_size_id']; ?>" <?php if(isset($list) && $l['property_unit_size_id'] == $list['property_unit_size_id']) {echo "selected=selected";} ?>><?php echo $l['property_unit_size_name']; ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Property Status</label><br>
                                        <input type="radio" id="open" name="property_status" value="open" <?php if(isset($list['property_status']) && $list['property_status']=='open'){ echo 'checked'; } else echo 'checked'; ?>>
                                        <label for="open">Open</label>
                                        <input type="radio" id="reserved" name="property_status" value="reserved" <?php if(isset($list['property_status']) && $list['property_status']=='reserved'){ echo 'checked'; } ?>>
                                        <label for="reserved">Reserved</label>
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                        </div>
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" tabindex="3" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/add_new_subservice.js" type="text/javascript"></script>