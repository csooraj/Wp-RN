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
                <h3 class="box-title">Configure Main Views</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Enter The Name Of View</label>
                  <input id="screen" type="text" class="form-control">
                </div>
                  <label>Select the Url</label>
                <div id="loader">
                  <image height="100px" width="100px" src="../assets/loader.gif" />
                </div>
                <div class="form-group dropdown">
                  <select class="form-control selectpicker" data-live-search="true" id="url">
                    <option disabled>Select the Url</option>
                    <optgroup label="Select Pages" id="page_urls">
                    </optgroup>
                    <optgroup label="Select Custom Posts" id="custom_post_urls">
                    </optgroup>
                    <optgroup label="Select Taxonomy"  id="taxonomy_urls">
                    </optgroup>
                  </select>
                </div>
                <div class="form-group">
                  <label for="sel1">Select layout</label>
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" id="layoutbutton" type="button" data-toggle="dropdown">Select Layout
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu" style="height: auto;max-height: 416px; width:300px;overflow-x: hidden;" id="layout">
                  </div>
                </div>
                <div id="termdiv">
                  <label for="sel1">Select The Terms That Should Be Shown</label>
                  <div class="form-group">
                    <select class="selectpicker" multiple id="terms">
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <a class="btn btn-app" onClick="UploadScreenDetails()">
                  <i class="fa fa-save"></i> Save
                  </a>
                  <a class="btn btn-app" onClick="ReloadPreview(1)">
                  <i class="fa fa-android"></i>Preview
                  </a>
                  <a class="btn btn-app" onClick="ReloadPreview(2)">
                  <i class="fa fa-apple"></i>Preview
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
    <script src="../controller/routehandler.js"></script>
    <script>
      $(document).ready(function() {
         $('#termdiv').hide();
         $.getJSON('http://stage.liquidfactory.it/villamedici/wp-json/wp-react-native-converter/v1/list-endpoints/', function(result){
            $.each( result.page_url, function(i, field ) {
              $("#page_urls").append('<option value='+field.url+'>'+field.label+'</option>');
            })
            $.each( result.custom_post_url, function(i, field ) {
              $("#custom_post_urls").append('<option value="CustomPost">'+field+'</option>');
            })
            $.each( result.taxonomy_url, function(i, field ) {
              $("#taxonomy_urls").append('<option value="Taxonomy">'+field+'</option>');
            })
            $("#url").selectpicker("refresh");
            $('#loader').remove();
         });
      });
    </script>
  </body>
</html>
