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
                <h3 class="box-title" id="box-title"></h3>
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
                  <label for="sel1">Post Title Font Family IOS:</label>
                  <select class="form-control" id="Post_titleFontIOS">
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
                  <label for="sel1">Post Title Font Family IOS:</label>
                  <select class="form-control" id="Post_authorFontIOS">
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
                  <label for="sel1">Post Category Font Family IOS:</label>
                  <select class="form-control" id="Post_categoryFontIOS">
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
                  <label for="sel1">Select Post Date Locale </label>
                  <select class="form-control" id="Date_locale">
                    <option value="en">English</option>
                    <option value="it">Italian</option>
                    <option value="fr">French</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="sel1">Select Post Date Format </label>
                  <select class="form-control" id="Date_format">
                    <option value="LL">November 30, 2017</option>
                    <option value="ll">Nov 30, 2017</option>
                    <option value="DD/MM/YYYY">30/11/2017</option>
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
    document.getElementById("box-title").innerHTML="Configure Layout8 for "+$.cookie("custompost")
    var appname = $.cookie("appname");
    var menuitem = $.cookie("custompost");
    $('#myid17').addClass('active');
    document.getElementById("nameapp").innerHTML = appname;
    $.getJSON("https://wp-react.firebaseio.com/"+appname+"/Layout8/"+menuitem+".json", function(result){
      var obj = result;
      if(obj.PostArchiveTitleColor!==undefined){
          $("#PostArchive_subtitlecolor").val(obj.PostArchiveSubTitleColor); $("#PostArchive_subtitlecolor").trigger('change');
          $("#PostArchive_titlecolor").val(obj.PostArchiveTitleColor); $("#PostArchive_titlecolor").trigger('change');
          $("#PostArchive_categorycolor").val(obj.PostArchiveCategoryColor); $("#PostArchive_categorycolor").trigger('change');
          document.getElementById("Post_authorFont").value=obj.PostAuthorFont;
          document.getElementById("Post_titleFont").value=obj.PostTitleFontFamily;
          document.getElementById("Date_locale").value=obj.PostDateLocale;
          document.getElementById("Date_format").value=obj.PostDateFormat;
          document.getElementById("Post_categoryFont").value=obj.PostCategoryFont;
          document.getElementById("Post_authorFontIOS").value=obj.PostAuthorFontIOS;
          document.getElementById("Post_titleFontIOS").value=obj.PostTitleFontFamilyIOS;
          document.getElementById("Post_categoryFontIOS").text=obj.PostCategoryFontIOS;
      }
    });
   });
</script>
<script src="../controller/layout8.js"></script>
</html>
