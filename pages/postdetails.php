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
                <h3 class="box-title">Configure Post Details Screen</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Post Title Size</label>
                  <input id="Post_titleSize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label>Post Title Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Post_titleColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Post Title Font Family:</label>
                  <select class="form-control" id="Post_titleFont">
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
                  <label>Post Date Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Post_dateColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Post Author Font Family </label>
                  <select class="form-control" id="Post_authorFont">
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
                  <label>Post Category Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Post_categoryColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Post Category Font Family</label>
                  <select class="form-control" id="Post_categoryFont">
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
                  <label>Post Category Size</label>
                  <input id="Post_categorySize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label>Post Content Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Post_contentColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Post Content Size</label>
                  <input id="Post_contentSize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label for="sel1">Post Content Font Family:</label>
                  <select class="form-control" id="Post_contentFont">
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
                  <a class="btn btn-app" onClick="UploadPostViewDetails()">
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
      $.getJSON("https://wp-react.firebaseio.com/"+appname+"/PostDetails.json", function(result){
        var obj = result;
        if(obj.PostTitleSize!==undefined){
          document.getElementById("Post_titleSize").value = obj.PostTitleSize;
          document.getElementById("Post_titleFont").value = obj.PostTitleFont;
          $("#Post_titleColor").val(obj.PostTitleColor); $("#Post_titleColor").trigger('change');
          $("#Post_dateColor").val(obj.PostDateColor); $("#Post_dateColor").trigger('change');
          $("#Post_categoryColor").val(obj.PostCategoryColor); $("#Post_categoryColor").trigger('change');
          $("#Post_contentColor").val(obj.PostContentColor); $("#Post_contentColor").trigger('change');
          document.getElementById("Post_authorFont").value=obj.PostAuthorFont;
          document.getElementById("Post_categorySize").value=obj.PostCategorySize;
          document.getElementById("Post_categoryFont").value=obj.PostCategoryFont;
          document.getElementById("Post_contentSize").value=obj.PostContentSize;
          document.getElementById("Post_contentFont").value=obj.PostContentFont;
        }
      });
     });
  </script>
  <script src="../controller/postdetails.js"></script>
</html>
