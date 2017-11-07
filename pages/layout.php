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
                <h3 class="box-title">Select the custom posts that should appear in app</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="sel1">Select the custom posts</label>
                  <select class="form-control" id="test" onchange="formatState()">
                  </select>
                </div>
                <div class="form-group">
                  <label for="sel1">Select the Layout Type</label>
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Layout
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu" style="height: auto;max-height: 416px;overflow-x: hidden;">
                      <li>
                        <a href="#" title="Layout1">
                          <img src="../assets/layout1.jpg" class="img-responsive" style="height:416px;width:200px">
                          Layout1
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Layout2">
                          <img src="../assets/layout2.jpg" class="img-responsive" style="height:416px;width:200px">
                          Layout2
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Layout3">
                          <img src="../assets/layout3.jpg" class="img-responsive" style="height:416px;width:200px">
                          Layout3
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Layout4">
                          <img src="../assets/layout4.jpg" class="img-responsive" style="height:416px;width:200px">
                          Layout4
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="form-group">
                  <a class="btn btn-app" href="./configurecustompost.php">
                  <i class="fa fa-list"></i> Click Here to see the current selected List
                  </a>
                </div>
                <div class="alert alert-success" id="alert_template" style="display: none;">
                    <button type="button" class="close">×</button>
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
<script>
  $(document).ready(function(){
    $('#myidla1').addClass('active');
    $.getJSON("http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/custom-post-types", function(result){
            $.each(result, function(i, field){
                $("#test").append('<option value='+field+'>'+field+'</option>'+ " ");
            });
            $(document).ready(function() {
            $('#js-example-templating').select2();
           });
    });
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
    firebase.database().ref(appname+"/CustomPostLayout/"+menuName).update(data, function(error) {
      if (error !== null) {
        document.getElementById('loading').innerHTML = 'Some Error Occured....';
      } else {
        document.getElementById('loading').innerHTML = '';
        $("#alert_template button").after('<span>Saved Configuration</span>');
        $("#alert_template").fadeTo(500, 500).slideUp(500, function(){
          $("#alert_template").slideUp(500);
        });
      }
    });
    });
   });
</script>
<script src="../controller/layout.js"></script>
</html>
