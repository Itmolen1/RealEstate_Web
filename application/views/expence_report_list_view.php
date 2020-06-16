<div class="content-wrapper">
    <section class="content-header">
      <h1>Expence Report</h1>
    </section>
    <section class="content">
       
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Expence List</h3>
                </div>
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>                        
                        <th>Date</th>
                        <th>Property</th>
                        <th>Unit</th>
                        <th>Bill#</th>
                        <th>Amount</th>
                        <th>VAT%</th>
                        <th>VAT Amt.</th>
                        <th>Total</th>
                        <th>Desc.</th>
                        <th>Vendor</th>
                    </tr>
                    <?php
                    if(!empty($servicesRecords))
                    {
                        foreach($servicesRecords as $record)
                        {
                    ?>
                    <tr>
                        <td><?php echo $record->expence_date ?></td>
                        <td><?php echo $record->building_name ?></td>
                        <td><?php echo $record->property_title ?></td>
                        <td><?php echo $record->expence_bill_no ?></td>
                        <td><?php echo $record->expence_amount ?></td>
                        <td><?php echo $record->vat_per ?></td>
                        <td><?php echo $record->vat_amt ?></td>
                        <td><?php echo $record->total_amt ?></td>
                        <td><?php echo $record->expence_desc ?></td>
                        <td><?php echo $record->vendor_name ?></td>
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
                </div>
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div>
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
            jQuery("#searchList").attr("action", baseURL + "property_unit_size_listing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
