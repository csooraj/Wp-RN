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
                <h3 class="box-title">Configure Search Screen</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Search Input Background Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Search_inputBg" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Search Input Placeholder Font Family:</label>
                  <select class="form-control" id="Search_placeFont">
                    <option>normal</option>
                    <option>notoserif</option>
                    <option>sans-serif</option>
                    <option>sans-serif-light</option>
                    <option>sans-serif-thin</option>
                    <option>sans-serif-condensed</option>
                    <option>sans-serif-medium</option>
                    <option>serif</option>
                    <option>Roboto</option>
                    <option>monospace</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Delete Button Text Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Search_deleteButtonColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Delete Button Text Font Family </label>
                  <select class="form-control" id="Search_deleteButtonFont">
                    <option>normal</option>
                    <option>notoserif</option>
                    <option>sans-serif</option>
                    <option>sans-serif-light</option>
                    <option>sans-serif-thin</option>
                    <option>sans-serif-condensed</option>
                    <option>sans-serif-medium</option>
                    <option>serif</option>
                    <option>Roboto</option>
                    <option>monospace</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Search Header Background Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Search_headerColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Latest Search Font Family</label>
                  <select class="form-control" id="Search_latestFont">
                    <option>normal</option>
                    <option>notoserif</option>
                    <option>sans-serif</option>
                    <option>sans-serif-light</option>
                    <option>sans-serif-thin</option>
                    <option>sans-serif-condensed</option>
                    <option>sans-serif-medium</option>
                    <option>serif</option>
                    <option>Roboto</option>
                    <option>monospace</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Latest Search Size</label>
                  <input id="Search_latestSize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label>Latest Search Background Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Search_latestBgColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Latest Search Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Search_latestColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Search Item Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Search_itemColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Search Item Border Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Search_itemBorderColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Search Item Font Family</label>
                  <select class="form-control" id="Search_itemFont">
                    <option>normal</option>
                    <option>notoserif</option>
                    <option>sans-serif</option>
                    <option>sans-serif-light</option>
                    <option>sans-serif-thin</option>
                    <option>sans-serif-condensed</option>
                    <option>sans-serif-medium</option>
                    <option>serif</option>
                    <option>Roboto</option>
                    <option>monospace</option>
                  </select>
                </div>
                <div class="form-group">
                  <a class="btn btn-app" onClick="UploadSearchViewDetails()">
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
          <?php include "emulator.php"; ?>
        </div>
      </section>
    </div>
    <?php include "footer.php"; ?>
  </body>
  <script>
    $(document).ready(function(){
      var appname = $.cookie("appname");
      document.getElementById("nameapp").innerHTML = appname;
      $.getJSON("https://wp-react.firebaseio.com/"+appname+"/Search.json", function(result){
        var obj = result;
        if(obj.SearchPlaceholderFont!==undefined){
          document.getElementById("Search_placeFont").text = obj.SearchPlaceholderFont;
          document.getElementById("Search_deleteButtonFont").text = obj.SearchDeleteButtonFont;
          document.getElementById("Search_itemFont").value = obj.SearchItemFont;
          document.getElementById("Search_latestFont").value = obj.SearchLatestFont;
          document.getElementById("Search_latestSize").value = obj.SearchLatestSize;
          $("#Search_latestBgColor").val(obj.SearchLatestBg); $("#Search_latestBgColor").trigger('change');
          $("#Search_latestColor").val(obj.SearchLatestColor); $("#Search_latestColor").trigger('change');
          $("#Search_deleteButtonColor").val(obj.SearchDeleteBg); $("#Search_deleteButtonColor").trigger('change');
          $("#Search_inputBg").val(obj.SearchInputBg); $("#Search_inputBg").trigger('change');
          $("#Search_headerColor").val(obj.SearchHeaderBg); $("#Search_headerColor").trigger('change');
          $("#Search_itemColor").val(obj.SearchItemColor); $("#Search_itemColor").trigger('change');
          $("#Search_itemBorderColor").val(obj.SearchItemBorderColor); $("#Search_itemBorderColor").trigger('change');
        }
      });
     });
  </script>
  <script src="../controller/search.js"></script>
</html>
