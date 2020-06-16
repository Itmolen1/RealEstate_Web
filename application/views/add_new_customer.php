<div class="content-wrapper">
    <section class="content-header">
      <h1> Customer Management
        <small><?php 
                    $last = $this->uri->total_segments();
                    $record_num = $this->uri->segment($last);
                    if(is_numeric($record_num))
                        {    echo "Edit";   }
                    else
                    {
                        echo "Add"; } ?> Customer</small>
                    
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Customer Details</h3>
                    </div>
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="add_new_customer" action="<?php echo base_url().$action?>" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="customer_name">Customer Name</label>
                                        <input type="text" class="form-control required" value="<?php echo isset($list['customer_name']) ? $list['customer_name'] : ""; ?>" id="customer_name" name="customer_name" maxlength="200" tabindex="2" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))">
                                    </div>
                                    <?php 
                                        if(isset($record_num))
                                        {
                                            ?><input type="hidden" name="customer_id" id="customer_id" value="<?php echo $record_num; ?>"><?php
                                        }
                                    ?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="customer_mobile">Customer Mobile</label>
                                        <input type="text" class="form-control required" value="<?php echo isset($list['customer_mobile']) ? $list['customer_mobile'] : ""; ?>" id="customer_mobile" name="customer_mobile" maxlength="200" tabindex="2">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="customer_email">Customer Email</label>
                                        <input type="email" class="form-control required" value="<?php echo isset($list['customer_email']) ? $list['customer_email'] : ""; ?>" id="customer_email" name="customer_email" maxlength="200" tabindex="2">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="customer_doc">Document(s) :</label>
                                        <input type="file" class="form-control required" value="<?php echo isset($list['customer_doc']) ? $list['customer_doc'] : ""; ?>" id="customer_doc" name="customer_doc" maxlength="200" tabindex="2">
                                    </div>
                                </div>    
                            </div>
                            <?php if(isset($list)){ ?>
                            <div class="row">
                                <div class="col-md-12">
                                <label for="customer_doc">Current File</label>
                                <?php if($list['customer_doc']!='N.A.') { ?>
                                <img src="<?php echo $list['customer_doc']; ?>" height="200" width="250">
                                <?php } else echo 'N.A.'; ?>
                                <input type="hidden" name="customer_doc_old" value="<?php echo $list['customer_doc']; ?>" id="customer_doc_old">
                                </div>
                            </div>
                            <?php }  ?>
                                

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="customer_desc">Desc./Comments</label>
                                            <textarea class="ckeditor input" id="customer_desc" name="customer_desc"><?php echo isset($list['customer_desc']) ? $list['customer_desc'] : ""; ?></textarea>
                                        </div>
                                        <?php 
                                            if(isset($record_num))
                                            {
                                                ?><input type="hidden" name="customer_id" id="customer_id" value="<?php echo $record_num; ?>"><?php
                                            }
                                        ?>
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
<script src="<?php echo base_url(); ?>assets/js/add_new_customer.js" type="text/javascript"></script>