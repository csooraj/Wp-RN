<!DOCTYPE html>
<html>
<?php include "header.php"; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include "navbar.php"; ?>
  <?php include "sidebar.php"; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="form-group" style="padding:20px">
      <label>Here You Can Generate The Build</label>
    </div>
    <div class="form-group" style="padding:20px">
      <a class="btn btn-app" id="buildapp">
        <i class="fa fa-bolt"></i> Start Building
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
<script src="../controller/buildapp.js"></script>
</html>
