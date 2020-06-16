<div class="content-wrapper">
    <section class="content-header">
      <h1>Reports </h1>
    </section>
    <section class="content">

        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                        <th>name</th>
                        <th>email</th>
                        <th>mobile_number</th>
                        <th>Message</th>
                        <th>created_at</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($servicesRecords))
                    {
                        foreach($servicesRecords as $record)
                        {
                            //echo "<pre>";print_r($record);die;
                    ?>
                    <tr>
                        <td><?php echo $record->partner_name ?></td>
                        <td><?php echo $record->partner_email ?></td>
                        <td><?php echo $record->partner_mobile ?></td>
                        <td><?php echo $record->partner_message ?></td>
                        <td><?php echo date("d-m-Y", strtotime($record->partner_careatedat)) ?></td>
                        <td class="text-center">

                            <?php if(isset($this->session->userdata['myfinal']['partner_listing']['p_delete']) && $this->session->userdata['myfinal']['partner_listing']['p_delete']==1 || $this->session->userdata['role']==1) { ?>                            
                            <a class="btn btn-sm btn-danger delete_contact_us" href="<?php echo base_url().'delete_partner/'.$record->partner_id; ?>" title="Delete" onclick="return confirm('Are you sure you want to delete this record?');"><i class="fa fa-trash"></i></a><?php } ?>

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
                  
                </div>
              </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "partner_listing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
