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
                <h3 class="box-title">Configure Url</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Enter Website Url</label>
                  <input id="websiteurl" class="form-control" type="text" placeholder="Enter The Website Url Of App" required>
                </div>
                <div class="form-group">
                  <label>Enter Home Screen Content Url</label>
                  <select class="form-control" id="homeurl">
                    <option>http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/custom-post?type=mostre</option>
                    <option>http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/custom-post?type=i-giovedi</option>
                    <option>http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/custom-post?type=residenze</option>
                    <option>http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/custom-post?type=cataloghi</option>
                    <option>http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/custom-post?type=direttori</option>
                    <option>http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/custom-post?type=actualites</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Enter Home Screen Slider Content Url</label>
                  <select class="form-control" id="sliderurl">
                    <option>http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/custom-post?type=mostre</option>
                    <option>http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/custom-post?type=i-giovedi</option>
                    <option>http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/custom-post?type=residenze</option>
                    <option>http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/custom-post?type=cataloghi</option>
                    <option>http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/custom-post?type=direttori</option>
                    <option>http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/custom-post?type=actualites</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Enter Loader Url</label>
                  <input id="loaderurl" class="form-control" type="text" placeholder="Enter The Website Url Of App" required>
                </div>
                <div class="form-group">
                  <label>Enter Search Placeholder Url</label>
                  <input id="searchplaceholder" class="form-control" type="text" placeholder="Enter The Website Url Of App" required>
                </div>
                <div class="form-group">
                  <label>Enter Taxonomy Grid PlaceLoader Url</label>
                  <input id="taxonomyplaceholder" class="form-control" type="text" placeholder="Enter The Website Url Of App" required>
                </div>
                <div class="form-group">
                  <a class="btn btn-app" onclick="UploadWebSiteUrl()">
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

  $.getJSON("https://wp-react.firebaseio.com/"+appname+"/AppUrl.json", function(result){
    var obj = result;
    if(obj.AppUrl!==undefined){
        document.getElementById("websiteurl").value=obj.AppUrl;
    }
  });

  $.getJSON("https://wp-react.firebaseio.com/"+appname+"/Search.json", function(result){
    var obj = result;
    if(obj.PlaceholderImage!==undefined){
        document.getElementById("searchplaceholder").value=obj.PlaceholderImage;
    }
  });

  $.getJSON("https://wp-react.firebaseio.com/"+appname+"/Layout6.json", function(result){
    var obj = result;
    if(obj.PlaceholderImage!==undefined){
        document.getElementById("taxonomyplaceholder").value=obj.PlaceholderImage;
    }
  });

  $.getJSON("https://wp-react.firebaseio.com/"+appname+"/HomeScreen.json", function(result){
    var obj = result;
    if(obj.HomeUrl!==undefined){
      document.getElementById("homeurl").value=obj.HomeUrl;
      document.getElementById("sliderurl").value=obj.SliderUrl;
      document.getElementById("loaderurl").value=obj.LoaderUrl;
    }
  });
 });
</script>
<script src="../controller/weburl.js"></script>
</html>
