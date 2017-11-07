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
                <h3 class="box-title">Configure Gallery</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Tab Bar Background Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Tabbar_Bg" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Tab Bar Text Font Family Android:</label>
                  <select class="form-control" id="TabBar_Font">
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
                  <label for="sel1">Tab Bar Text Family iOS:</label>
                  <select class="form-control" id="TabBar_FontIOS">
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
                  <label>Tab Bar Text Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Tabbar_textColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Tab Bar Border Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Tabbar_borderColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Tab Bar Text Size</label>
                  <input id="Tabbar_textSize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <a class="btn btn-app" onClick="UploadGalleryView()">
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
      $('#myid15').addClass('active');
      document.getElementById("nameapp").innerHTML = appname;
      $.getJSON("https://wp-react.firebaseio.com/"+appname+"/Gallery.json", function(result){
        var obj = result;
        if(obj.TabBarBg!==undefined){
          document.getElementById("TabBar_Font").value = obj.TabBarFont;
          document.getElementById("TabBar_FontIOS").value = obj.TabBarFontIOS;
          document.getElementById("Tabbar_textSize").value = obj.TabBarTextSize;
          $("#Tabbar_Bg").val(obj.TabBarBg); $("#Tabbar_Bg").trigger('change');
          $("#Tabbar_textColor").val(obj.TabBarTextColor); $("#Tabbar_textColor").trigger('change');
          $("#Tabbar_borderColor").val(obj.TabBarBorderColor); $("#Tabbar_borderColor").trigger('change');
        }
      });
     });
  </script>
  <script src="../controller/gallery.js"></script>
</html>
