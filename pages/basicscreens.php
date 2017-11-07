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
          <div class="col-md-6">
            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Configure Default Screens Layout</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="sel1">Select Screen Type</label>
                  <select class="form-control" id="test">
                    <option>Splash</option>
                    <option>Login</option>
                    <option>ForgotPassword</option>
                    <option>Create Account</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="sel1">Layout</label>
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Layout
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu" style="height: auto;max-height: 350px;overflow-x: hidden;">
                      <li>
                        <a href="#" title="Layout4">
                          <img src="../assets/splayout1.png" style="height:300px;width:300px">
                          Layout4
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Layout2">
                          <img src="../assets/splayout6.png" style="height:300px;width:300px">
                          Layout2
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Layout1">
                          <img src="../assets/splayout3.png" style="height:300px;width:300px">
                          Layout1
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Layout3">
                          <img src="../assets/splayout4.png" style="height:300px;width:300px">
                          Layout3
                        </a>
                      </li>
                    </ul>
                  </div>
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
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php include "footer.php"; ?>
</body>
<script>
  $(document).ready(function(){
    $('#myidla3').addClass('active');
    $(".dropdown-menu li a img").click(function(){
      var img_type = $(this).attr("src");
      $('#preview').empty().append('<label for="sel1">Selected Layout</label><img style="height:200px;weight:200px" src='+img_type+'>');
   });
   $('.dropdown-menu li').on('click', function(){
    document.getElementById('loading').innerHTML = 'Saving Configuration Please Wait.......';
    var img_type = $(this).find('a').attr('title');
    var appname = $.cookie("appname");
    var menuName = $('#test :selected').text();
    var data = { "LayoutNumber": img_type}
    firebase.database().ref(appname+"/DefaultScreensLayout/"+menuName).update(data, function(error) {
      if (error !== null) {
        document.getElementById('loading').innerHTML = 'Some Error Occured....';
      } else {
        document.getElementById('loading').innerHTML = '';
        document.getElementById('alert_template button').innerHTML = '';
        $("#alert_template button").after('<span>Saved Configuration</span>');
        $("#alert_template").fadeTo(500, 500).slideUp(500, function(){
          $("#alert_template").slideUp(500);
        });
      }
    });
    });
   });
</script>
<script src="../controller/menulayout.js"></script>
</html>
