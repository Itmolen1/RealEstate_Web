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
    
        var po_boi_id = $('#po_boi_id').val();
        var baseURL = $('#base').val();
        var hitURL = baseURL + "edit_pr";
       
            $.ajax({
            type : "POST",
            dataType : "json",
            url : hitURL,
            data : { po_boi_id : po_boi_id } 
            }).done(function(data){
                $('#boi_table > tbody').html('');
                $('#boi_table > tbody').html(data.finalresult);
                $('#property_reservation_grand_total').val('');
                $('#property_reservation_grand_total').val(data.grandtotal);
                var gt=$('#property_reservation_grand_total').val();
                var due=$('#total_amt').val();
                due=due-gt;
                $('#due_amt').val('');
                $('#due_amt').val(due);
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
    jQuery(document).on("click", "#add_pr", function(){
        /*validation*/
        var fields;
        fields = "";
        
        if (document.pay_now.pr_mode.selectedIndex=="")
        {
            if(fields != 1)
            {
                document.getElementById("pr_mode").focus();
            }
            fields = '1';
            $("#pr_mode").addClass("error");
        }
        if (DoTrim(document.getElementById('pr_cheque_date').value).length == 0)
        {
            if(fields != 1)
            {
                document.getElementById("pr_cheque_date").focus();
            }
            fields = '1';
            $("#pr_cheque_date").addClass("error");
        }

        if (DoTrim(document.getElementById('pr_amt').value).length == 0)
        {
            if(fields != 1)
            {
                document.getElementById("pr_amt").focus();
            }
            fields = '1';
            $("#pr_amt").addClass("error");
        }
        
        if (fields != "") 
        {
            fields = "Please fill in the following details:" + fields;
            return false;
        }
        /*validation*/
        var po_boi_id = $('#po_boi_id').val();
        var pr_mode = $('#pr_mode').val();
        var pr_cheque_no = $("#pr_cheque_no").val();
        var pr_cheque_date = $("#pr_cheque_date").val();
        var pr_amt = $('#pr_amt').val();
        var pr_comment = $("#pr_comment").val();
        var baseURL = $('#base').val();
        var hitURL = baseURL + "add_pr";
            $.ajax({
            type : "POST",
            dataType : "json",
            url : hitURL,
            data : { po_boi_id : po_boi_id,pr_mode:pr_mode,pr_cheque_no:pr_cheque_no,pr_cheque_date:pr_cheque_date,pr_amt:pr_amt,pr_comment:pr_comment} 
            }).done(function(data){
                $('#pr_mode').val("0");
                $('#pr_cheque_no').val('');                
                $('#pr_cheque_date').val('');
                $('#pr_amt').val('');
                $('#pr_comment').val('');
                $('#boi_table > tbody').html('');
                $('#boi_table > tbody').html(data.finalresult);
                $('#property_reservation_grand_total').val('');
                $('#property_reservation_grand_total').val(data.grandtotal);
                var gt=$('#property_reservation_grand_total').val();
                var due=$('#total_amt').val();
                due=due-gt;
                $('#due_amt').val('');
                $('#due_amt').val(due);
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
        var hitURL = baseURL + "delete_pr";
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
                var gt=$('#property_reservation_grand_total').val();
                var due=$('#total_amt').val();
                due=due-gt;
                $('#due_amt').val('');
                $('#due_amt').val(due);  
            });
    }
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
      <h1>Pay Now</h1>
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Payment Details</h3>
                    </div>
                    <?php $this->load->helper("form"); ?>
                    <form role="form" name="pay_now" id="pay_now" action="<?php echo base_url().$action; ?>" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <?php
                                if(isset($record_num))
                                {
                                    ?><input type="hidden" id="po_boi_id" name="po_boi_id" value="<?php echo $record_num; ?>">
                                    <input type="hidden" id="base" value="<?php echo base_url(); ?>">
                                    <?php
                                }
                            ?>

                            <div class="row">
                                <div class="col-md-1">
                                    <label>Rent : </label>
                                    <input type="text" disabled value="<?php echo $list['rent']; ?>">
                                </div>
                                <div class="col-md-1">
                                    <label>VAT(%) : </label>
                                    <input type="text" disabled value="<?php echo $list['vat_per']; ?>">
                                </div>
                                <div class="col-md-2">
                                    <label>VAT Amt. : </label>
                                    <input type="text" disabled value="<?php echo $list['vat_amt']; ?>">
                                </div>
                                <div class="col-md-2">
                                    <label>Total : </label>
                                    <input type="text" readonly id="total_amt" value="<?php echo $list['total_amt']; ?>">
                                </div>
                                <div class="col-md-2">
                                    <label>Paid : </label>
                                    <input type="text" disabled value="<?php echo $list['paid_amt']; ?>">
                                </div>
                                <div class="col-md-2">
                                    <label>Due : </label>
                                    <input type="text" id="due_amt" value="<?php echo $list['due_amt']; ?>" style="color: red;" readonly>
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="pr_mode">Payment Mode *</label>
                                    <select class="form-control required" id="pr_mode" name="pr_mode">
                                    <option value="0">Select Mode</option>
                                    <option value="cheque">Cheque</option>
                                    <option value="cash">Cash</option>
                                    <option value="bank">Bank Transfer</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="pr_cheque_no">Cheque #</label>
                                    <input type="text" name="pr_cheque_no" id="pr_cheque_no" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="pr_cheque_date">Cheque Deposite/Date *</label>
                                    <input type="date" name="pr_cheque_date" id="pr_cheque_date" class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="pr_amt">Amount *</label>
                                        <input class="form-control required" id="pr_amt" name="pr_amt" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="pr_comment">Comment</label>
                                        <input class="form-control required" id="pr_comment" name="pr_comment" maxlength="10">
                                    </div>
                                </div>                               
                                
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>+</label>
                                        <input type="button" class="form-control btn btn-primary" id="add_pr" name="btn" value="Add">
                                    </div>
                                </div>
                            </div>
                          

                            <div class="row">
                                <div class="col-xs-12 table-responsive">
                                      <table class="table table-striped" id="boi_table">
                                        <thead>
                                        <tr>
                                          <th>Sr. No</th>
                                          <th>Mode</th>
                                          <th>Cheque#</th>
                                          <th>Cheque Dt.</th>
                                          <th>Amt.</th>
                                          <th>Comment</th>
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
                                    </div>
                                    
                                </div>
                                <div class="col-xs-6">
                                  <div class="table-responsive">
                                    <table class="table">
                                      <tbody>
                                      <tr>
                                        <th>Total Paid:</th>
                                        <td><input type="text" class="form-control required" id="property_reservation_grand_total" value="<?php if(isset($vehicle)){ echo $vehicle['property_reservation_grand_total']; } ?>" name="property_reservation_grand_total" maxlength="128" readonly style="color: green;"></td>
                                      </tr>
                                    </tbody></table>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="<?php echo base_url().'property_reservation_listing'; ?>"><input type="button" class="btn btn-primary" value="Save and Continue" /></a>
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
           
        </div>    
    </section>
</div>
<!-- <script type="text/javascript">
$(window).on("beforeunload", function() {
            return "Are you sure? You didn't finish the form!";
        });
        
        $(document).ready(function() {
            $("#add_new_property_reservation").on("submit", function(e) {
                $(window).off("beforeunload");
                return true;
            });
        });
</script> -->