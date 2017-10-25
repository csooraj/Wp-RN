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
                <h3 class="box-title">Configure Post List</h3>
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
                  <label for="sel1">Select Layout Type</label>
                  <select class="form-control" id="Post_layoutType">
                    <option>With Calendar</option>
                    <option>Without Calendar</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Calendar Day Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="PostArchive_calDaycolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Calendar Arrow  Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="PostArchive_calArrowcolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Calendar Week  Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="PostArchive_calWeekcolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Calendar Month  Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="PostArchive_calMonthcolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Calendar Day Font Family </label>
                  <select class="form-control" id="Post_calDayFont">
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
                  <label for="sel1">Calendar Month Font Family </label>
                  <select class="form-control" id="Post_calMonthFont">
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
    document.getElementById("nameapp").innerHTML = appname;
    $.getJSON("https://wp-react.firebaseio.com/"+appname+"/PostList.json", function(result){
      var obj = result;
      if(obj.PostArchiveTitleColor!==undefined){
          $("#PostArchive_subtitlecolor").val(obj.PostArchiveSubTitleColor); $("#PostArchive_subtitlecolor").trigger('change');
          $("#PostArchive_titlecolor").val(obj.PostArchiveTitleColor); $("#PostArchive_titlecolor").trigger('change');
          $("#PostArchive_categorycolor").val(obj.PostArchiveCategoryColor); $("#PostArchive_categorycolor").trigger('change');
          $("#PostArchive_calDaycolor").val(obj.CalendarDayColor); $("#PostArchive_calDaycolor").trigger('change');
          $("#PostArchive_calArrowcolor").val(obj.CalendarArrowColor); $("#PostArchive_calArrowcolor").trigger('change');
          $("#PostArchive_calWeekcolor").val(obj.CalendarWeekColor); $("#PostArchive_calWeekcolor").trigger('change');
          $("#PostArchive_calMonthcolor").val(obj.CalendarMonthColor); $("#PostArchive_calMonthcolor").trigger('change');
          document.getElementById("Post_authorFont").value=obj.PostAuthorFont;
          document.getElementById("Post_calDayFont").value=obj.CalendarDayFont;
          document.getElementById("Post_calMonthFont").value=obj.CalendarMonthFont;
          document.getElementById("Post_titleFont").value=obj.PostTitleFontFamily;
          document.getElementById("Post_categoryFont").value=obj.PostCategoryFont;
          document.getElementById("Post_layoutType").value=obj.PostLayout;
      }
    });
   });
</script>
<script src="../controller/postlist.js"></script>
</html>
