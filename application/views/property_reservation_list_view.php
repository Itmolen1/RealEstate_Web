<script type="text/javascript">
    function get_pdf(val)
    {
        var data = val;
        var baseURL = '<?php echo base_url(); ?>';
        var hitURL = baseURL + "property_reservation_pdf";
        $.ajax({
            type : "POST",
            dataType : "json",
            url : hitURL,
            data : { data : data } 
            }).done(function(data){
                window.open(data,'_blank');       
            });
    }
</script>

<script type="text/javascript">
    function send_mail(val)
    {
        //alert(val);
        var data = val;
        var baseURL = '<?php echo base_url(); ?>';
        var hitURL = baseURL + "property_reservation_email";
        $.ajax({
            type : "POST",
            dataType : "json",
            url : hitURL,
            data : { data : data } 
            }).done(function(data){
                //alert(data);
                //window.open(data,'_blank');
                //var data = JSON.parse(JSON.parse(json).data);
                //console.log(data);                 
            });
    }
</script>

<script type="text/javascript">
    $(function() {
  $("#payment_record_form").validate({
    rules: {
      po_payment_record_due_amt: {
        required: true,
        minlength: 2
      },
      po_payment_record_date: {
        required: true
      },
      po_payment_record_payment_no: {
        required: true
      },
      po_payment_record_type : { required : true, selected : true},
      action: "required"
    },
    messages: {
      po_payment_record_due_amt: {
        required: "Please enter some data",
        minlength: "Your data must be at least 2 characters"
      },
      po_payment_record_date: {
        required: "Please enter date"
      },
      po_payment_record_payment_no: {
        required: "Please enter some value"
      },
      po_payment_record_type : { required : "This field is required", selected : "Please select atleast one option" },
      action: "Please provide some data"
    }
  });
});    
</script>

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
                        <div class="col-md-8">
                            <label for="customer_name">Customer Name</label>
                            <input type="text" name="customer_name" id="customer_name" class="form-control" readonly>
                            <input type="hidden" name="reservation_id" id="reservation_id">
                            <input type="hidden" name="reservation_due_amt" id="reservation_due_amt">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="reservation_from_date">From Date :</label>
                            <input type="date" class="form-control required" id="reservation_from_date" name="reservation_from_date" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="reservation_to_date">To Date :</label>
                            <input type="date" class="form-control required" id="reservation_to_date" name="reservation_to_date" readonly>
                        </div>
                    </div>

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

                    <div class="modal-header">
                        <h3>Previous Payments :</h3>
                    </div>

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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Property Reservation Management
        <small>Add, Edit, Delete</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <?php if(isset($this->session->userdata['myfinal']['property_reservation_listing']['p_add']) && $this->session->userdata['myfinal']['property_reservation_listing']['p_add']==1 || $this->session->userdata['role']==1) { ?>
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>add_new_property_reservation"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
            <?php } ?>
        </div>        
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Reservation List</h3>
                    <div class="box-tools">
                        <form id="modalform" style="display:none">
                             <input type="text" name="something">
                             <input type="text" name="somethingelse">
                        </form> 
                        <form action="<?php echo base_url() ?>property_reservation_listing" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="<?php echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                        <th>Customer Name</th>
                        <th>From Date</th>
                        <th>To Date</th>
                        <th>Amount</th>
                        <th>Paid</th>
                        <th>Due</th>
                        <th>Comment</th>
                        <th>Pay Term</th>                        
                        <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($property_reservation))
                    {
                        foreach($property_reservation as $record)
                        {
                    ?>
                    <tr>
                        <td><?php echo $record->customer_name; ?></td>
                        <td><?php echo $record->reservation_from_date; ?></td>
                        <td><?php echo $record->reservation_to_date; ?></td>
                        <td><?php echo $record->reservation_amount; ?></td>
                        <td><?php echo $record->reservation_paid_amt; ?></td>
                        <td><?php echo $record->reservation_due_amt; ?></td>
                        <td><?php echo $record->reservation_comment; ?></td>
                        <td><?php echo $record->reservation_type; ?></td>
                        <td class="text-center">

                            <?php /*<a class="btn btn-sm btn-info payment_record" href="javascript:void(0)" value="<?php echo $record->reservation_id; ?>" id="<?php echo 'payment_record'.$record->reservation_id; ?>" title="Payment Record" data-toggle="modal" data-target="#contact-modal"><i class="fa fa-money"></i></a>  */ ?>

                            <a class="btn btn-sm btn-info" href="<?php echo base_url().'payment_records/'.$record->reservation_id; ?>" title="Payment Record">Payment Records</a>

                            <?php if(isset($this->session->userdata['myfinal']['property_reservation_listing']['p_update']) && $this->session->userdata['myfinal']['property_reservation_listing']['p_update']==1 || $this->session->userdata['role']==1) { ?>
                            <a class="btn btn-sm btn-info" href="<?php echo base_url().'edit_property_reservation/'.$record->reservation_id; ?>" title="Edit"><i class="fa fa-pencil"></i></a>
                            <?php } ?>

                            <?php /*<a class="btn btn-sm btn-info bg-blue" href="javascript:void(0)" title="PDF"><i class="fa fa-file-pdf-o" id="<?php echo $record->reservation_id; ?>" onclick="return get_pdf('<?php echo $record->reservation_id; ?>')"></i></a> */ ?>

                            <?php if(isset($this->session->userdata['myfinal']['property_reservation_listing']['p_delete']) && $this->session->userdata['myfinal']['property_reservation_listing']['p_delete']==1 || $this->session->userdata['role']==1) { ?>
                            <a class="btn btn-sm btn-danger" href="<?php echo base_url().'delete_property_reservation/'.$record->reservation_id; ?>" title="Delete" onclick="return confirm('Are you sure you want to delete this record?');"><i class="fa fa-trash"></i></a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>
                  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "property_reservation_listing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
