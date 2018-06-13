<!DOCTYPE html>
<html>
<?php include "header.php"; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="form-group" style="padding:20px">
      <label>Welcome to WebSite to Mobile App Converter</label>
    </div>
    <div class="box-body">
      <div class="form-group col-md-6">
        <label>Enter the name of the app</label>
        <input id="appname" type="text" class="form-control" maxlength="10">
      </div>
    </div>
    <div class="form-group" style="padding:20px">
      <a class="btn btn-app" id="createapp">
        <i class="fa fa-bolt"></i> Create Project
      </a>
      <img style="margin-bottom:20px;margin-top:20px" height="400px" width="400px" id="loader" class="img-responsive" src="../images/please-wait.gif" alt="Loader">
    </div>
    <div class="box-body">
      <div class="form-group col-md-6">
        <label>Enter the url of your website</label>
        <input id="websiteurl" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group" style="padding:20px">
      <a class="btn btn-app" id="addurl">
        <i class="fa fa-globe"></i> Add Url
      </a>
    </div>
    <div class="form-group" style="padding:20px">
      <a class="btn btn-app" id="buildapk" style="background-color:#acedc8">
        <i class="fa fa-android"></i> BuildApk
      </a>
      <div>
        <p id="downloadlink"></p>
      </div>
    </div>
    <div class="form-group" style="padding:20px">
      <a class="btn btn-app" id="previewapk" style="background-color:#acedc8">
        <i class="fa fa-android"></i> PreviewBuild
      </a>
    </div>
    <div class="form-group" style="padding:20px" id="list">
    </div>
  </div>
  </div>
  <div class="control-sidebar-bg"></div>
</div>
<?php include "modal.php" ?>
<?php include "footer.php"; ?>
</body>
<script src="../controller/newproject.js"></script>
</html>
