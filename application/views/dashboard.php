<div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>Control panel</small>
      </h1>
    </section>
    
    <section class="content">
        <div class="row">

            <?php if(isset($data['total_properties'])) { ?>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $data['total_properties']; ?></h3>
                  <p>Total Properties</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                <a href="<?php echo base_url(); ?>building_listing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <?php } ?>


            <?php if(isset($data['total_property_units'])) {  ?>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $data['total_property_units']; ?><sup style="font-size: 20px"></sup></h3>
                  <p>Total Property Units</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                <a href="<?php echo base_url(); ?>property_listing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <?php } ?>

            <?php if(isset($data['total_customers'])) {  ?>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $data['total_customers']; ?></h3>
                  <p>Total Customers</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                <a href="<?php echo base_url(); ?>customer_listing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <?php } ?>

            <?php if(isset($data['total_vendors'])) {  ?>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $data['total_vendors']; ?></h3>
                  <p>Total Vendors</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                <a href="<?php echo base_url(); ?>vendor_listing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <?php } ?>

            <?php if(isset($data['sum_of_vat'])) {  ?>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $data['sum_of_vat']; ?></h3>
                  <p>Total of output VAT</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
              </div>
            </div>
            <?php } ?>

            <?php if(isset($data['sum_of_expence_inc_vat'])) {  ?>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $data['sum_of_expence_inc_vat']; ?></h3>
                  <p>Total Expence inc. VAT</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
              </div>
            </div>
            <?php } ?>

            <?php if(isset($data['sum_of_expence_amount_exc_vat'])) {  ?>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $data['sum_of_expence_amount_exc_vat']; ?></h3>
                  <p>Total Expence Exc. VAT</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
              </div>
            </div>
            <?php } ?>


            <div class="col-lg-3 col-xs-6" >
              <div class="small-box" style="color: #ECF0F5;">
                <div class="inner">
                  <h3>N.A.</h3>
                  <p>VAT</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
              </div>
            </div>

            <?php if(isset($data['sum_of_input_vat'])) {  ?>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $data['sum_of_input_vat']; ?></h3>
                  <p>Total of input VAT</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
              </div>
            </div>
            <?php } ?>

            <?php if(isset($data['sum_of_income_inc_vat'])) {  ?>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $data['sum_of_income_inc_vat']; ?></h3>
                  <p>Total Income inc. VAT</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
              </div>
            </div>
            <?php } ?>

            <?php if(isset($data['sum_of_income_amount_exc_vat'])) {  ?>
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $data['sum_of_income_amount_exc_vat']; ?></h3>
                  <p>Total Income Exc. VAT</p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
              </div>
            </div>
            <?php } ?>

          </div>
    </section>
</div>