<!DOCTYPE html>
<html>
<?php include "header.php"; ?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Configure Notification</h3>
              </div>
              <div class="box-header">
                <h3 class="box-title">Test - amount.updated - Notifications</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Enter Amount</label>
                  <input id="prev_amount" class="form-control" type="text" placeholder="Enter Amount" required>
                </div>
                <div class="form-group">
                  <label>Enter next_amount</label>
                  <input id="next_amount" class="form-control" type="text" placeholder="Enter next_amount" required>
                </div>
                <div class="form-group">
                  <label>Enter Exchange Rate</label>
                  <input id="rate" class="form-control" type="text" placeholder="Enter Rate" required>
                </div>
                <div class="form-group">
                  <label>Enter Client Id</label>
                  <input id="clientid" class="form-control" type="text" placeholder="Enter Client ID" required>
                </div>
                <div class="form-group">
                  <label>Enter Address</label>
                  <input id="address" class="form-control" type="text" placeholder="Enter Address" required>
                </div>
                <div class="form-group">
                  <label>Enter Created At</label>
                  <input id="createdat" class="form-control" type="date" placeholder="Enter Created At" required>
                </div>
                <div class="form-group">
                  <label>Low Risk Transaction Status</label>
                  <div>
                    <label class="radio-inline">
                    <input type="radio" id="r2" name="optradio" value="true" checked="checked">True
                    </label>
                    <label class="radio-inline">
                    <input type="radio" id="r1" name="optradio" value="false">False
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <a class="btn btn-app" onclick="UploadAwsDetails()">
                    <i class="fa fa-save"></i> Save
                  </a>
                </div>
                <div class="form-group">
                  <label id="loading"></label>
                </div>
                <div class="form-group" id="Error">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php include "footer.php"; ?>
</body>
<script src="../controller/amountNotifiy.js"></script>
</html>
