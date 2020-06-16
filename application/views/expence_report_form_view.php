<div class="content-wrapper">
    <section class="content-header">
      <h1>Expences</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Report Details</h3>
                    </div>
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="add_new_item_unit" action="<?php echo base_url().$action?>" method="post" role="form">
                        <?php 
                            if(isset($record_num))
                            {
                                ?><input type="hidden" name="item_unit_id" id="item_unit_id" value="<?php echo $record_num; ?>"><?php
                            }
                        ?>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="building_id">Property *</label>
                                        <select class="form-control required" id="building_id" name="building_id">
                                            <option value="0">Select Property</option>
                                            <?php for($i=0;$i<count($buildings);$i++){ ?>
                                                <option value="<?php echo $buildings[$i]['building_id']; ?>"><?php echo $buildings[$i]['building_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="start_date">Start Date : *</label>
                                        <input type="date" name="start_date" id="start_date" class="form-control required">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="end_date">End Date : *</label>
                                        <input type="date" name="end_date" id="end_date" id="end_date" class="form-control required">
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
        </div>    
    </section>
</div>