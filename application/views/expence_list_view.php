<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Expence Management
        <small>Add, Edit, Delete</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <?php if(isset($this->session->userdata['myfinal']['expence_listing']['p_add']) && $this->session->userdata['myfinal']['expence_listing']['p_add']==1 || $this->session->userdata['role']==1) { ?>
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>add_new_expence"><i class="fa fa-plus"></i> Add New</a>
                </div>

            </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Expence List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>expence_listing" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="<?php echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search" />
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
                        <th>Property</th>
                        <th>Property Unit</th>
                        <th>Venodor</th>
                        <th>Bill #</th>
                        <th>Amount</th>
                        <th>VAT(%)</th>
                        <th>VAT Amt.</th>
                        <th>Total</th>
                        <th>Desc.</th>
                        <th>Created On</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($servicesRecords))
                    {
                        foreach($servicesRecords as $record)
                        {
                    ?>
                    <tr>
                        <td><?php echo $record->building_name ?></td>
                        <td><?php echo $record->property_title ?></td>
                        <td><?php echo $record->vendor_name ?></td>
                        <td><?php echo $record->expence_bill_no ?></td>
                        <td><?php echo $record->expence_amount ?></td>
                        <td><?php echo $record->vat_per ?></td>
                        <td><?php echo $record->vat_amt ?></td>
                        <td><?php echo $record->total_amt ?></td>
                        <td><?php echo $record->expence_desc ?></td>
                        <td><?php echo date("d-m-Y", strtotime($record->created_at)) ?></td>
                        <td class="text-center">
                            
                            <?php if(isset($this->session->userdata['myfinal']['expence_listing']['p_update']) && $this->session->userdata['myfinal']['expence_listing']['p_update']==1 || $this->session->userdata['role']==1) { ?>
                            <a class="btn btn-sm btn-info" href="<?php echo base_url().'edit_expence/'.$record->expence_id; ?>" title="Edit"><i class="fa fa-pencil"></i></a>
                            <?php } ?>

                            <?php if(isset($this->session->userdata['myfinal']['expence_listing']['p_delete']) && $this->session->userdata['myfinal']['expence_listing']['p_delete']==1 || $this->session->userdata['role']==1) { ?>
                            <a class="btn btn-sm btn-danger deleteServices" href="<?php echo base_url().'delete_expence/'.$record->expence_id; ?>" title="Delete" onclick="return confirm('Are you sure you want to delete this record?');"><i class="fa fa-trash"></i></a>
                            <?php } ?>

                        </td>
                    </tr>
                    <?php
                        }
                    }
                    else{ ?>
                        <td><?php echo "no recodrs found"; ?></td>
                    <?php
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
            jQuery("#searchList").attr("action", baseURL + "expence_listing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#service_id").attr("action", baseURL + "expence_listing/" + value);
            jQuery("#service_id").submit();
        });
    });
</script>
