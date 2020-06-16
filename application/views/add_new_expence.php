<script type="text/javascript">
    // on selection of property get property units
    $(document).ready(function() {
    $('#building_id').change(function(){

        var building_id=$('#building_id').val();
        var data = {building_id:building_id}
        var baseURL = 'http://property.wahidfix.com/';
        var hitURL = baseURL + "get_property_units_exp";
    $.ajax({
        url: hitURL,
        data: { data : data },
        dataType:"json",
        type: "post",
        success: function(data){
                var $property_id = $('#property_id');
                $('#property_id').empty();
                $property_id.append('<option  value="0"> Select Unit</option>');
                for (var i = 0; i < data.length; i++) {
                    $property_id.append('<option  value=' + data[i].property_id + '>' + data[i].property_title + '</option>');
                }
            }
        });
    });
});
</script>
<script>
   $(function () {
    $('#foobar input[type=radio]').change(function(){
          var val=$(this).val();
          var amt=parseInt($('#expence_amount').val());
          var total=0;
          if(val==='0')
          {
            total=amt+(amt*0/100);
          }
          else if(val==='5')
          {
            total=amt+(amt*5/100);
          }
          $('#expence_total').val(total);
          })
    })

   $( "#expence_amount" ).keypress(function(){
    alert('coming');
    // var val = $("input[name='vat_per']:checked").val();
    // var amt=parseInt($('#expence_amount').val());
    //   var total=0;
    //   if(val==='0')
    //   {
    //     total=amt+(amt*0/100);
    //   }
    //   else if(val==='5')
    //   {
    //     total=amt+(amt*5/100);
    //   }
    //   $('#expence_total').val(total);
});
</script>

<div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-list-alt"></i> Expence Management
        <small><?php 
                    $last = $this->uri->total_segments();
                    $record_num = $this->uri->segment($last);
                    if(is_numeric($record_num))
                        {    echo "Edit";   }
                    else
                    {
                        echo "Add"; } ?> Expence</small>
                    
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Expence Details</h3>
                    </div>
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="add_new_expence" action="<?php echo base_url().$action?>" method="post" enctype="multipart/form-data">
                        <div class="box-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="building_id">Property : *</label>
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
                                        <label for="property_id">Property Unit : *</label>
                                        <select class="form-control required" id="property_id" name="property_id" tabindex="1">
                                            <option value="0">Select Property</option>
                                            <?php
                                            if(!empty($properties))
                                            {
                                                foreach ($properties as $l)
                                                {
                                                    ?>
                                                    <option value="<?php echo $l['property_id']; ?>" <?php if(isset($list) && $l['property_id'] == $list['property_id']) {echo "selected=selected";} ?>><?php echo $l['property_title']; ?></option>
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
                                        <?php
                                            $last = $this->uri->total_segments();
                                            $record_num = $this->uri->segment($last);
                                            if(is_numeric($record_num))
                                            {
                                                ?>
                                                <input type="hidden" name="expence_id" value="<?php echo $list['expence_id']; ?>" id="expence_id" >
                                                <?php
                                            }
                                        ?>
                                        <label for="vendor_id">Vendor : *</label>
                                        <select class="form-control required" id="vendor_id" name="vendor_id" tabindex="1">
                                            <option value="0">Select Vendor</option>
                                            <?php
                                            if(!empty($vendors))
                                            {
                                                foreach ($vendors as $l)
                                                {
                                                    ?>
                                                    <option value="<?php echo $l['vendor_id']; ?>" <?php if(isset($list) && $l['vendor_id'] == $list['vendor_id']) {echo "selected=selected";} ?>><?php echo $l['vendor_name']; ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="expence_bill_no">Bill # : *</label>
                                        <input type="text" class="form-control required" value="<?php echo isset($list['expence_bill_no']) ? $list['expence_bill_no'] : ""; ?>" id="expence_bill_no" name="expence_bill_no" maxlength="20">
                                    </div>
                                </div>
                            </div>
                            <div class="row">                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="expence_amount">Amount : *</label>
                                        <input type="number" class="form-control required" <?php if(isset($list)){ ?> value="<?php echo isset($list['expence_amount']) ? $list['expence_amount'] : ""; ?>" <?php } ?> id="expence_amount" name="expence_amount" maxlength="5">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <fieldset id="foobar">
                                        <label for="reservation_type">VAT(%) : *</label><br>
                                        <input type="radio" id="zero" name="vat_per" value="0" <?php if(isset($list['vat_per']) && $list['vat_per']=='0'){ echo 'checked'; } else echo 'checked'; ?>>
                                        <label for="monthly">0</label>
                                        <input type="radio" id="five" name="vat_per" value="5" <?php if(isset($list['vat_per']) && $list['vat_per']=='5'){ echo 'checked'; } ?>>
                                        <label for="annually">5</label>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Total : </label>
                                        <input type="text" class="form-control" id="expence_total">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="expence_desc">Desc. : </label>
                                        <input type="text" class="form-control required" value="<?php echo isset($list['expence_desc']) ? $list['expence_desc'] : ""; ?>" id="expence_desc" name="expence_desc" maxlength="1000">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="expence_date">Expence Date : </label>
                                        <input type="date" class="form-control required" value="<?php echo isset($list['expence_date']) ? $list['expence_date'] : ""; ?>" id="expence_date" name="expence_date" maxlength="1000">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="expence_doc">Document(s) :</label>
                                        <input type="file" class="form-control required" value="<?php echo isset($list['expence_doc']) ? $list['expence_doc'] : ""; ?>" id="expence_doc" name="expence_doc" maxlength="200" tabindex="2">
                                    </div>
                                </div>
                            </div>
                            <?php if(isset($list)){ ?>
                            <div class="row">
                                <div class="col-md-12">
                                <label for="expence_doc">Current File</label>
                                <?php if($list['expence_doc']!='N.A.') { ?>
                                <img src="<?php echo $list['expence_doc']; ?>" height="200" width="250">
                                <?php } else echo 'N.A.'; ?>
                                <input type="hidden" name="expence_doc_old" value="<?php echo $list['expence_doc']; ?>" id="expence_doc_old">
                                </div>
                            </div>
                            <?php }  ?>
                            
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