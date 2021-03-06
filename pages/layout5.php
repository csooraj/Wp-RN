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
                <h3 class="box-title" id="box-title">Configure Category Archive</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Category Label Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="CatArchive_titlecolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Border Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="CatArchive_bordercolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Select Category Title Font Family:</label>
                  <select class="form-control" id="CatArchive_fontFamily">
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
                  <label for="sel1">Sub Title Font Family iOS:</label>
                  <select class="form-control" id="CatArchive_fontFamilyIOS">
                    <option>San Francisco</option>
                    <option>Academy Engraved LET</option>
                    <option>AcademyEngravedLetPlain</option>
                    <option>Al Nile</option>
                    <option>AlNile-Bold</option>
                    <option>Avenir-Heavy</option>
                    <option>Avenir-HeavyOblique</option>
                    <option>SinhalaSangamMN</option>
                    <option>SinhalaSangamMN-Bold</option>
                    <option>Snell Roundhand</option>
                    <option>SnellRoundhand-Black</option>
                    <option>SnellRoundhand-Bold</option>
                    <option>Verdana</option>
                    <option>Verdana-Bold</option>
                    <option>Verdana-BoldItalic</option>
                    <option>Verdana-Italic</option>
                    <option>Zapf Dingbats</option>
                    <option>ZapfDingbatsITC</option>
                    <option>Zapfino</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="sel1">Select layout for internal view</label>
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" id="layoutbutton" type="button" data-toggle="dropdown">Select Layout
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu" style="height: auto;max-height: 416px; width:300px;overflow-x: hidden;" id="layout">
                      <li style='margin-bottom:10px'><a title="CategoryPostListWithImage"><img src=../assets/Post_ImageList.png></a></li>
                      <li style='margin-bottom:10px'><a title="CategoryPostWithTab"><img src=../assets/Post_Tabbar.png></a></li>
                      <li style='margin-bottom:10px'><a title="CategoryPostWithImage"><img src=../assets/Post_Image.png></a></li>
                      <li style='margin-bottom:10px'><a title="CategoryPostList"><img src=../assets/Post_List.png></a></li>
                    </ul>
                  </div>
                </div>
                <div class="form-group">
                  <button type="button" class="btn btn-success" onclick="handleEditLayout()">Configure Layout</button>
                </div>
                <div class="form-group">
                  <a class="btn btn-app" onClick="UploadCategoryArchiveDetails()">
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
    document.getElementById("box-title").innerHTML="Configure Layout for "+$.cookie("custompost")
    var appname = $.cookie("appname");
    var menuitem = $.cookie("custompost");
    $('#myid8').addClass('active');
    document.getElementById("nameapp").innerHTML = appname;
    $.getJSON("https://wp-react.firebaseio.com/"+appname+"/Layout5/"+menuitem+".json", function(result){
      var obj = result;
      if(obj.CategoryArchiveTitleColor!==undefined){
          $('#layoutbutton').text(obj.LinkTo);
          document.getElementById("CatArchive_fontFamily").value=obj.CategoryArchiveFont;
          document.getElementById("CatArchive_fontFamilyIOS").value=obj.CategoryArchiveFontIOS;
          $("#CatArchive_titlecolor").val(obj.CategoryArchiveTitleColor); $("#CatArchive_titlecolor").trigger('change');
          $("#CatArchive_bordercolor").val(obj.CategoryArchiveBorderColor); $("#CatArchive_bordercolor").trigger('change');
      }
    });
   });
</script>
<script src="../controller/layout5.js"></script>
</html>
