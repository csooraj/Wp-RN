<!DOCTYPE html>
<html>
<?php include "header.php"; ?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include "navbar.php"; ?>
    <?php include "sidebar.php"; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Configure AWS Keys</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Enter keyPrefix</label>
                  <input id="keyprefix" class="form-control" type="text" placeholder="Enter KeyPrefix" required>
                </div>
                <div class="form-group">
                  <label>Enter Bucket Name</label>
                  <input id="bucket" class="form-control" type="text" placeholder="Enter BucketName" required>
                </div>
                <div class="form-group">
                  <label>Enter Region Name</label>
                  <input id="region" class="form-control" type="text" placeholder="Enter RegionName" required>
                </div>
                <div class="form-group">
                  <label>Enter AccessKey</label>
                  <input id="accessKey" class="form-control" type="password" placeholder="Enter AccessKey" required>
                </div>
                <div class="form-group">
                  <label>Enter SecretKey</label>
                  <input id="secretKey" class="form-control" type="password" placeholder="Enter SecretKey" required>
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
          <?php include "emulator.php"; ?>
        </div>
      </section>
    </div>
    <?php include "footer.php"; ?>
</body>
<script>
$(document).ready(function(){
  var appname = $.cookie("appname");
  //$('#myid9').addClass('active');
  document.getElementById("nameapp").innerHTML = appname;
  $.getJSON("https://wp-react.firebaseio.com/"+appname+"/EditProfile/AwsConfig.json", function(result){
    var obj = result;
    if(obj.keyPrefix!==undefined){
      document.getElementById("keyprefix").value=obj.keyPrefix;
      document.getElementById("bucket").value=obj.bucket;
      document.getElementById("region").value=obj.region;
      document.getElementById("secretKey").value=obj.accessKey;
      document.getElementById("accessKey").value=obj.secretKey;
    }
  });
 });
</script>
<script src="../controller/aws.js"></script>
</html>
