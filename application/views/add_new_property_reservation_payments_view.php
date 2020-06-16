<?php 
$last = $this->uri->total_segments();
$record_num = $this->uri->segment($last);
?>

<!--MODAL DIALOG BOX FOR PAYMENT RECORD-->
<script type="text/javascript">
    jQuery(document).on("click", ".payment_record", function(){
    //$(document).ready(function(){
    //alert(this.id);
    var jss =this.id.split('payment_record');
    //alert(jss[1]);
    //var id = val;
        var data = jss[1];
        var baseURL = '<?php echo base_url(); ?>';
        var hitURL = baseURL + "property_reservation_get_payment_record_details";
        $.ajax({
            type : "POST",
            dataType : "json",
            url : hitURL,
            data : { data : data } 
            }).done(function(data){
                //alert(data);
                //window.open(data,'_blank');
                $('#customer_name').val(data.result.customer_name);
                $('#reservation_from_date').val(data.result.reservation_from_date);
                $('#reservation_to_date').val(data.result.reservation_to_date);
                $('#reservation_id').val(data.result.reservation_id);
                $('#po_reservation_amount').val(data.result.reservation_amount);
                $('#po_reservation_paid_amt').val(data.result.reservation_paid_amt);
                $('#po_reservation_payment_amt').val(data.result.reservation_due_amt);
                $('#reservation_due_amt').val(data.result.reservation_due_amt);
                $('#previous_payments').html('');
                $('#previous_payments').html(data.previoust_payments);
                //var data = JSON.parse(JSON.parse(json).data);
                //console.log(data);                 
            });
    $("#payment_record_form").submit(function(event){
        //alert('coming');
        submitForm();
        //alert('coming 222');
        //return false;
    });
});
</script>
<div id="contact-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">×</a>
                <h3>Payment Record</h3>
            </div>
            <form id="payment_record_form" name="contact" role="form" method="post" action="<?php echo base_url().'property_reservation_add_payment_record'; ?>">
                <div class="modal-body">
                    
                    <div class="row">               
                        <div class="col-md-4">
                            <label for="po_payment_record_type">Payment Type</label>
                            <select class="form-control required" id="po_payment_record_type" name="po_payment_record_type">
                            <option value="0">Select Type</option>
                            <option value="Cheque">Cheque</option>
                            <option value="Cash">Cash</option>
                            <option value="bank">Bank Transfer</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="po_payment_record_cheque_no">Cheque #</label>
                            <input type="text" name="po_payment_record_cheque_no" id="po_payment_record_cheque_no" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="po_payment_record_bank">Bank</label>
                            <input type="text" name="po_payment_record_bank" id="po_payment_record_bank" class="form-control">
                        </div>
                    </div>
                    <div class="row">               
                       <div class="col-md-4">
                            <label for="po_reservation_amount">Total Amount</label>
                            <input type="text" name="po_reservation_amount" id="po_reservation_amount" class="form-control" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="po_reservation_paid_amt">Paid Amount</label>
                            <input type="text" name="po_reservation_paid_amt" id="po_reservation_paid_amt" class="form-control" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="po_reservation_payment_amt">Payment Amount</label>
                            <input type="text" name="po_reservation_payment_amt" id="po_reservation_payment_amt" class="form-control">
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-12">
                            <label for="po_payment_record_note">Notes</label>               
                            <textarea class="form-control" rows="3" id="po_payment_record_note" name="po_payment_record_note"></textarea>
                        </div>
                    </div>

                    <!-- <div class="modal-header">
                        <h3>Previous Payments :</h3>
                    </div> -->

                    <div id="previous_payments">
                        
                    </div>
                </div>
                <div class="modal-footer">                  
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" value="save" class="btn btn-success" id="submit" >
                </div>
            </form>
        </div>
    </div>
</div>
<!--MODAL DIALOG BOX FOR PAYMENT RECORD-->

<div class="content-wrapper">
    <section class="content-header">
      <h1>Payment Management</h1>
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"> Payment Details</h3>
                    </div>                    
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="customer_id">Customer:</label>
                                        <input type="text" class="form-control required" value="<?php echo isset($list['customer_name']) ? $list['customer_name'] : ""; ?>" readonly>
                                        <input type="hidden" id="base" value="<?php echo base_url(); ?>">
                                    </div>
                                </div>
                                
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="reservation_type">Payment Type : </label><br>
                                        <input type="text" class="form-control required" value="<?php echo isset($list['reservation_type']) ? $list['reservation_type'] : ""; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="reservation_from_date">From Date :</label>
                                        <input type="text" class="form-control required" value="<?php echo isset($list['reservation_from_date']) ? $list['reservation_from_date'] : ""; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="reservation_to_date">To Date : </label>
                                        <input type="text" class="form-control required" value="<?php echo isset($list['reservation_to_date']) ? $list['reservation_to_date'] : ""; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Property</th>
                                  <th scope="col">Unit</th>
                                  <th scope="col">From</th>
                                  <th scope="col">To</th>
                                  <th scope="col">Rent</th>
                                  <th scope="col">VAT(%)</th>
                                  <th scope="col">VAT Amt</th>
                                  <th scope="col">Total</th>
                                  <th class="text-center">Actions</th>                                  
                                </tr>
                              </thead>
                              <tbody>
                                <?php for($i=0;$i<count($boi);$i++) { ?>
                                <tr>
                                  <td scope="row"><?php echo $i+1; ?></td>
                                  <td><?php echo $boi[$i]['building_name']; ?></td>
                                  <td><?php echo $boi[$i]['property_title']; ?></td>
                                  <td><?php echo $boi[$i]['reservation_from_date']; ?></td>
                                  <td><?php echo $boi[$i]['reservation_to_date']; ?></td>
                                  <td><?php echo $boi[$i]['rent']; ?></td>
                                  <td><?php echo $boi[$i]['vat_per']; ?></td>
                                  <td><?php echo $boi[$i]['rent']*$boi[$i]['vat_per']/100; ?></td>
                                  <td><?php echo $boi[$i]['rent']+($boi[$i]['rent']*$boi[$i]['vat_per']/100); ?></td>
                                  <td class="text-center">
                                      <?php /*<a class="btn btn-sm btn-info payment_record" href="javascript:void(0)" value="<?php echo $boi[$i]['po_boi_id']; ?>" id="<?php echo $boi[$i]['po_boi_id']; ?>" title="Payment Record" data-toggle="modal" data-target="#contact-modal"><i class="fa fa-money"></i>  Pay Now</a> */ ?>
                                      <a class="btn btn-sm btn-info" href="<?php echo base_url().'pay_now/'.$boi[$i]['po_boi_id'] ?>" title="Pay Now">Pay Now</a>
                                  </td>                                  
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                        </div>


                        <div class="box-footer">
                            <a href="<?php echo base_url().'property_reservation_listing'; ?>"><input type="button" class="btn btn-primary" value="Back" /></a>
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