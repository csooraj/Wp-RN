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
                <h3 class="box-title">Configure Category Post List</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Post Sub Title Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="PostArchive_subtitlecolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Post Title Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="PostArchive_titlecolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Category Text Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="PostArchive_categorycolor" type="text" class="form-control" placeholder="Click on right side button to select color">
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
                  <label for="sel1">Post SubTitle Font Family </label>
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
                  <label for="sel1">Post Category Font Family </label>
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
                  <label for="sel1">Configure Header Layout</label>
                  <select class="form-control" id="Post_layoutType">
                    <option>Select a Header Layout</option>
                    <option>TabBar</option>
                    <option>Thumbnail With Title</option>
                  </select>
                </div>
                <div id="thumbnail">
                  <div class="form-group">
                    <label>Category Title Color</label>
                    <div class="input-group my-colorpicker2">
                      <input id="PostArchive_imageTitleColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                      <div class="input-group-addon">
                        <i></i>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="sel1">Category Title Font Family </label>
                    <select class="form-control" id="Post_imageTitleFont">
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
                </div>
                <div id="tabbar">
                  <div class="form-group">
                    <label>Tab Bar Text Color</label>
                    <div class="input-group my-colorpicker2">
                      <input id="PostArchive_tabTextColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                      <div class="input-group-addon">
                        <i></i>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Tab Bar Border Color</label>
                    <div class="input-group my-colorpicker2">
                      <input id="PostArchive_tabBordercolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                      <div class="input-group-addon">
                        <i></i>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Tab Bar Background Color</label>
                    <div class="input-group my-colorpicker2">
                      <input id="PostArchive_tabBgcolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                      <div class="input-group-addon">
                        <i></i>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="sel1">Tab Bar Title Font Family </label>
                    <select class="form-control" id="Post_tabFont">
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
                </div>
                <div class="form-group">
                  <a class="btn btn-app" onClick="UploadPostArchiveDetails()">
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
    $('#tabbar').hide();
    $('#thumbnail').hide();
    document.getElementById("nameapp").innerHTML = appname;
    $.getJSON("https://wp-react.firebaseio.com/"+appname+"/CategoryPostList.json", function(result){
      var obj = result;
      if(obj.PostArchiveTitleColor!==undefined){
          $("#PostArchive_tabBgcolor").val(obj.PostTabBgColor); $("#PostArchive_tabBgcolor").trigger('change');
          $("#PostArchive_tabTextColor").val(obj.PostArchiveSubTitleColor); $("#PostArchive_tabTextColor").trigger('change');
          $("#PostArchive_tabBordercolor").val(obj.PostTabBorderColor); $("#PostArchive_tabBordercolor").trigger('change');
          $("#PostArchive_imageTitleColor").val(obj.PostArchiveImageTitleColor); $("#PostArchive_imageTitleColor").trigger('change');
          $("#PostArchive_subtitlecolor").val(obj.PostArchiveSubTitleColor); $("#PostArchive_subtitlecolor").trigger('change');
          $("#PostArchive_titlecolor").val(obj.PostArchiveTitleColor); $("#PostArchive_titlecolor").trigger('change');
          $("#PostArchive_categorycolor").val(obj.PostArchiveCategoryColor); $("#PostArchive_categorycolor").trigger('change');
          document.getElementById("Post_authorFont").value=obj.PostAuthorFont;
          document.getElementById("Post_imageTitleFont").value=obj.PostArchiveImageTitleFont;
          document.getElementById("Post_tabFont").value=obj.PostTabFont;
          document.getElementById("Post_titleFont").value=obj.PostTitleFontFamily;
          document.getElementById("Post_categoryFont").value=obj.PostCategoryFont;
      }
    });
   });
   $('#Post_layoutType').on('change',function(){
    var value=$(this).val();
    if(value === 'Thumbnail With Title') {
      $('#tabbar').hide();
      $('#thumbnail').show();
    }else if ( value === 'TabBar' ){
      $('#thumbnail').hide();
      $('#tabbar').show();
    }
});
</script>
<script src="../controller/categorypostlist.js"></script>
</html>
