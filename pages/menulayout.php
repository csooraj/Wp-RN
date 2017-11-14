<!DOCTYPE html>
<html>
<?php include "header.php"; ?>
<head>
  <script
 src="https://code.jquery.com/jquery-3.2.1.min.js"
 integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
 crossorigin="anonymous"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include "navbar.php"; ?>
    <?php include "sidebar.php"; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Configure Menu Layout</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="usr">Menu Label:</label>
                  <input type="text" class="form-control" id="menu_label">
                </div>
                <div class="form-group">
                  <label for="sel1">Select View To Be Linked</label>
                  <select class="form-control" id="screen_link">
                  </select>
                </div>
                <div class="form-group" id="savechanges">
                  <a class="btn btn-app" onClick="UploadMenuDetails()">
                  <i class="fa fa-save"></i> Save Changes
                  </a>
                </div>
                <div class="form-group" id="radioview">
                  <label for="pwd">Type</label>
                  <label class="radio-inline"><input type="radio" name="menuchild" value=1>With SubMenu</label>
                  <label class="radio-inline"><input type="radio" name="menuchild" value=2>Without SubMenu</label>
                </div>
                <div id="submenu">
                <?php include "panel.php"; ?>
                </div>
                <div class="form-group" >
                  <a class="btn btn-app" id="clearchanges">
                  <i class="fa fa-save" ></i> Add new main menu item
                  </a>
                </div>
                <div class="form-group" id="preview">
                </div>
                <div class="form-group">
                  <label id="loading"></label>
                </div>
                <div class="form-group" id="Error">
                </div>
                <div class="alert alert-success" id="alert_template" style="display: none;">
                    <button type="button" class="close">×</button>
                </div>
                <table class="table table-bordered bg-success">
                  <thead>
                    <tr>
                      <th>Menu Label</th>
                      <th>Connected View</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <div id="loader">
                    <image height="100px" width="100px" src="../assets/loader.gif" />
                  </div>
                  <tbody id="test">
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
</div>
<?php include "footer.php"; ?>
</body>
<script src="../controller/panel.js"></script>
<script src="../controller/menulayout.js"></script>
<script>
$(document).ready(function(){
    $('#myidla1').addClass('active');
    var appname = $.cookie("appname");
    $.getJSON("https://wp-react.firebaseio.com/"+appname+"/Screens/ScreenList.json", function(result){
            $.each(result, function(i, field){
              console.log("field", field)
                $("#screen_link").append('<option value='+field+'>'+field+'</option>');
                $("#submenulayout").append('<option value='+field+'>'+field+'</option>');
            });
    });
  });
</script>
</html>
