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
                <div class="form-group dropdown">
                  <select class="form-control selectpicker" data-live-search="true" id="url">
                    <optgroup label="Pages">
                      <option value=""></option>
                      <option value="Page">http://stage.liquidfactory.it/villamedici/wp-json/wp-react/v1/pages?id=375</option>
                      <option value="Page">http://stage.liquidfactory.it/villamedici/wp-json/wp-react/v1/pages?id=49645</option>
                      <option value="Page">http://stage.liquidfactory.it/villamedici/wp-json/wp-react/v1/pages?id=176</option>
                    </optgroup>
                    <optgroup label="Custom Posts">
                      <option value="CustomPost">http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/custom-post?type=mostre</option>
                      <option value="CustomPost">http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/custom-post?type=i-giovedi</option>
                      <option value="CustomPost">http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/custom-post?type=altri-eventi</option>
                      <option value="CustomPost">http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/custom-post?type=actualites</option>
                    </optgroup>
                    <optgroup label="Taxonomy">
                      <option value="Taxonomy">http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/terms?name=categoria-consigli</option>
                      <option value="Taxonomy">http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/terms?name=categoria-residenze</option>
                      <option value="Taxonomy">http://stage.liquidfactory.it/villamedici/fr/wp-json/wp-react/v1/terms?name=categoria-giovedi</option>
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
      $(document).ready(function(){
         $('#termdiv').hide();
         $('#layout li a').on('click', function(){
            alert(1);
        });
      });
    </script>
  </body>
</html>
