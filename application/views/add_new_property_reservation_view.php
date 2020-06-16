<?php 
$last = $this->uri->total_segments();
$record_num = $this->uri->segment($last);
$this->session->set_userdata('referred_from', current_url());
?>
<?php 
if(isset($record_num))
{
?>
<script type="text/javascript">
 $(window).bind("load", function() {
    
        var session_id = $('#session_id').val();
        var baseURL = $('#base').val();
        var hitURL = baseURL + "edit_po_boi_session";
       
            $.ajax({
            type : "POST",
            dataType : "json",
            url : hitURL,
            data : { session_id : session_id } 
            }).done(function(data){
                $('#boi_table > tbody').html('');
                $('#boi_table > tbody').html(data.finalresult);
                $('#property_reservation_sub_total').val('');
                $('#property_reservation_sub_total').val(data.subtotal);
                $('#property_reservation_tax_amt').val('');
                $('#property_reservation_tax_amt').val(data.taxamount);
                $('#property_reservation_grand_total').val('');
                $('#property_reservation_grand_total').val(data.grandtotal);  
            });   
});
</script>
<?php 
}
?>
<script type="text/javascript">
function DoTrim(strComp) {
            ltrim = /^\s+/
            rtrim = /\s+$/
            strComp = strComp.replace(ltrim, '');
            strComp = strComp.replace(rtrim, '');
            return strComp;
}


 jQuery(document).ready(function(){
    
    jQuery(document).on("click", "#add_po_boi_session", function(){


        /*validation*/

        var fields;
        fields = "";
        
        if (document.add_new_property_reservation.property_id_session.selectedIndex=="")
        {
            if(fields != 1)
            {
                document.getElementById("property_id_session").focus();
            }
            fields = '1';
            $("#property_id_session").addClass("error");
        }
        if (DoTrim(document.getElementById('rent_session').value).length == 0)
        {
            if(fields != 1)
            {
                document.getElementById("rent_session").focus();
            }
            fields = '1';
            $("#rent_session").addClass("error");
        }

        if (DoTrim(document.getElementById('reservation_from_date').value).length == 0)
        {
            if(fields != 1)
            {
                document.getElementById("reservation_from_date").focus();
            }
            fields = '1';
            $("#reservation_from_date").addClass("error");
        }

        if (DoTrim(document.getElementById('reservation_to_date').value).length == 0)
        {
            if(fields != 1)
            {
                document.getElementById("reservation_to_date").focus();
            }
            fields = '1';
            $("#reservation_to_date").addClass("error");
        }

        if ($('input[name="vat_per_session"]:checked').length == 0)
        {
            if(fields != 1)
            {
                document.getElementById("vat_per_session").focus();
            }
            fields = '1';
            $("#vat_per_session").addClass("error");
        }
        
        if (fields != "") 
        {
            fields = "Please fill in the following details:" + fields;
            return false;
        }
        /*validation*/

        var rent_session = $('#rent_session').val();
        var vat_per_session = $("input[name='vat_per_session']:checked").val();
        var building_id_session = $("#building_id_session").val();
        var property_id_session = $("#property_id_session").val();
        var reservation_from_date = $('#reservation_from_date').val();
        var reservation_to_date = $("#reservation_to_date").val();
        var baseURL = $('#base').val();
        var hitURL = baseURL + "add_po_boi_session";
            $.ajax({
            type : "POST",
            dataType : "json",
            url : hitURL,
            data : { rent_session : rent_session,vat_per_session:vat_per_session,building_id_session:building_id_session,property_id_session:property_id_session,reservation_from_date:reservation_from_date,reservation_to_date:reservation_to_date} 
            }).done(function(data){
                $('#building_id_session').val("0");
                $('#property_id_session').val("0");                
                $('#rent_session').val('');
                $('#boi_table > tbody').html('');
                $('#boi_table > tbody').html(data.finalresult);
                $('#property_reservation_grand_total').val('');
                $('#property_reservation_grand_total').val(data.grandtotal);
            });
    });

   
});
</script>
<script type="text/javascript">
	function del_poi_id(val)
	{
		//alert(val);
		var data = val;
        var baseURL = $('#base').val();
        var hitURL = baseURL + "delete_po_boi_session";
        $.ajax({
            type : "POST",
            dataType : "json",
            url : hitURL,
            data : { data : data } 
            }).done(function(data){
                $('#boi_table > tbody').html('');
                $('#boi_table > tbody').html(data.finalresult);
                $('#property_reservation_sub_total').val('');
                $('#property_reservation_sub_total').val(data.subtotal);
                $('#property_reservation_tax_amt').val('');
                $('#property_reservation_tax_amt').val(data.taxamount);
                $('#property_reservation_grand_total').val('');
                $('#property_reservation_grand_total').val(data.grandtotal);  
            });
	}
</script>
<script type="text/javascript">
    // on selection of property get property units
    $(document).ready(function() {
    $('#building_id_session').change(function(){

        var building_id_session=$('#building_id_session').val();
        var data = {building_id_session:building_id_session}
        var baseURL = 'http://property.wahidfix.com/';
        var hitURL = baseURL + "get_property_units";
    $.ajax({
        url: hitURL,
        data: { data : data },
        dataType:"json",
        type: "post",
        success: function(data){
                var $property_id_session = $('#property_id_session');
                $property_id_session.empty();
                $property_id_session.append('<option  value="0"> Select Unit</option>');
                for (var i = 0; i < data.length; i++) {
                    $property_id_session.append('<option  value=' + data[i].property_id + '>' + data[i].property_title + '</option>');
                }
            }
        });
    });
});
</script>
<script type="text/javascript">
    // on selection of property get rent value
    $(document).ready(function() {
    $('#property_id_session').change(function(){

        var fields;
        fields = "";

        if (DoTrim(document.getElementById('reservation_from_date').value).length == 0)
        {
            if(fields != 1)
            {
                document.getElementById("reservation_from_date").focus();
            }
            fields = '1';
            $("#reservation_from_date").addClass("error");
        }

        if (DoTrim(document.getElementById('reservation_to_date').value).length == 0)
        {
            if(fields != 1)
            {
                document.getElementById("reservation_to_date").focus();
            }
            fields = '1';
            $("#reservation_to_date").addClass("error");
        }

        if (fields != "") 
        {
            fields = "Please fill in the following details:" + fields;
            return false;
        }

        var reservation_from_date=$('#reservation_from_date').val();
        var reservation_to_date=$('#reservation_to_date').val();
        var property_id_session=$('#property_id_session').val();
        var data = {property_id_session:property_id_session,reservation_from_date:reservation_from_date,reservation_to_date:reservation_to_date}
        var baseURL = 'http://property.wahidfix.com/';
        var hitURL = baseURL + "get_rent";
    $.ajax({
        url: hitURL,
        data: { data : data },
        dataType:"json",
        type: "post",
        success: function(data){
            var check=data.data;
            if(check==0)
            {
                alert('Not available');
            }
            else
            {
                $('#rent_session').val('');
                $('#rent_session').val(data.property_rent);
            }            
            }
        });
    });
});
</script>

<script type="text/javascript">
    $(function () {
    $('.selectpicker').selectpicker();
});
</script>
<style type="text/css">
    table, thead,tbody ,td, th {
  border: 1px solid black;
}
</style>
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Property Reservation Management
        <small><?php 
                    if(is_numeric($record_num))
                        {    echo "Edit";   }
                    else
                    {
                        echo "Add"; } ?> Reservation</small>
      </h1>
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"> Reservation Details</h3>
                    </div>
                    <?php $this->load->helper("form"); ?>
                    <form role="form" name="add_new_property_reservation" id="add_new_property_reservation" action="<?php echo base_url().$action; ?>" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <?php
                                if(isset($record_num))
                                {
                                    ?><input type="hidden" id="reservation_id" name="reservation_id" value="<?php echo $record_num; ?>">
                                    <?php
                                }
                                if (isset($session_id)) 
                                {
                                    ?>
                                    <input type="hidden" id="session_id" name="session_id" value="<?php echo $session_id; ?>">
                                    <?php
                                }
                            ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="customer_id">Customer : *</label>
                                        <select class="form-control required" id="customer_id" name="customer_id">
                                            <option value="0">Select Customer</option>
                                            <?php for($i=0;$i<count($customers);$i++){ ?>
                                                <option value="<?php echo $customers[$i]['customer_id']; ?>" <?php if(isset($property_reservation) && $property_reservation['customer_id']==$customers[$i]['customer_id']){ echo 'selected="selected"'; } ?>><?php echo $customers[$i]['customer_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                        <input type="hidden" id="base" value="<?php echo base_url(); ?>">
                                    </div>
                                </div>
                                
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="reservation_type">Payment Type : *</label><br>
                                        <input type="radio" id="monthly" name="reservation_type" value="monthly" <?php if(isset($property_reservation['reservation_type']) && $property_reservation['reservation_type']=='monthly'){ echo 'checked'; } else echo 'checked'; ?>>
                                        <label for="monthly">Monthly</label>
                                        <input type="radio" id="annually" name="reservation_type" value="annually" <?php if(isset($property_reservation['reservation_type']) && $property_reservation['reservation_type']=='annually'){ echo 'checked'; } ?>>
                                        <label for="annually">Annually</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="reservation_from_date">From Date : *</label>
                                        <input type="date" class="form-control required" value="<?php echo isset($property_reservation['reservation_from_date']) ? $property_reservation['reservation_from_date'] : ""; ?>" id="reservation_from_date" name="reservation_from_date" maxlength="200">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="reservation_to_date">To Date : *</label>
                                        <input type="date" class="form-control required" value="<?php echo isset($property_reservation['reservation_to_date']) ? $property_reservation['reservation_to_date'] : ""; ?>" id="reservation_to_date" name="reservation_to_date" maxlength="200">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="building_id">Property *</label>
                                        <select class="form-control required" id="building_id_session" name="building_id_session">
                                            <option value="0">Select Property</option>
                                            <?php for($i=0;$i<count($buildings);$i++){ ?>
                                                <option value="<?php echo $buildings[$i]['building_id']; ?>" <?php if(isset($vehicle) && $vehicle['building_id']==1){ echo 'selected="selected"'; } ?>><?php echo $buildings[$i]['building_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="property_id">Property Unit *</label>
                                        <select class="form-control required" id="property_id_session" name="property_id_session">
                                            <option value="0">Select Property</option>
                                            <?php for($i=0;$i<count($properties);$i++){ ?>
                                                <option value="<?php echo $properties[$i]['property_id']; ?>" <?php if(isset($vehicle) && $vehicle['property_id']==1){ echo 'selected="selected"'; } ?>><?php echo $properties[$i]['property_title']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="po_boi_detail">Rent *</label>
                                        <input class="form-control required" id="rent_session" name="rent_session" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group" id="vat_per_session">
                                        <label for="reservation_type">Vat % : *</label><br>
                                        <input type="radio"  name="vat_per_session" value="0">
                                        <label for="monthly">0</label>
                                        <input type="radio" name="vat_per_session" value="5">
                                        <label for="annually">5</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label for="vehicle_tc_no">+</label>
                                        <input type="button" class="form-control btn btn-primary" id="add_po_boi_session" name="btn" value="Add">
                                    </div>
                                </div>
                            </div>
                          

                            <div class="row">
                                <div class="col-xs-12 table-responsive">
                                      <table class="table table-striped" id="boi_table">
                                        <thead>
                                        <tr>
                                          <th>Sr. No</th>
                                          <th>Property</th>
                                          <th>Property Unit</th>
                                          <th>Rent</th>
                                          <th>VAT(%)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                      </table>
                                    </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <label for="reservation_comment">Comments :</label>
                                             <textarea class="form-control" rows="3" id="reservation_comment" name="reservation_comment"><?php if(isset($property_reservation)){ echo $property_reservation['reservation_comment']; } ?></textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-xs-6">
                                  <div class="table-responsive">
                                    <table class="table">
                                      <tbody>
                                      <tr>
                                        <th>Total:</th>
                                        <td><input type="text" class="form-control required" id="property_reservation_grand_total" value="<?php if(isset($vehicle)){ echo $vehicle['property_reservation_grand_total']; } ?>" name="property_reservation_grand_total" maxlength="128" readonly></td>
                                      </tr>
                                    </tbody></table>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="<?php if(isset($record_num)) echo "Save"; else echo "Submit"; ?>" />
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
<script src="<?php echo base_url(); ?>assets/js/add_new_property_reservation_view.js" type="text/javascript"></script>
<script type="text/javascript">
$(window).on("beforeunload", function() {
            return "Are you sure? You didn't finish the form!";
        });
        
        $(document).ready(function() {
            $("#add_new_property_reservation").on("submit", function(e) {
                //check form to make sure it is kosher
                //remove the ev
                $(window).off("beforeunload");
                return true;
            });
        });
</script>