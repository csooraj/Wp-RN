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
                <h3 class="box-title">Configure Sidebar</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Menu Item Text Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Menu_textcolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Label Font Family Android</label>
                  <select class="form-control" id="labelfont">
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
                  <label for="sel1">Label Font Family IOS</label>
                  <select class="form-control" id="labelfontIos">
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
                  <label>Username Text Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Menu_usercolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Sidebar Background Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Menu_bgcolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Sidebar Accordion Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Menu_accordioncolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Sidebar Border Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Menu_bordercolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <a class="btn btn-app" onClick="UploadSideBarDetails()">
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
    $('#myid5').addClass('active');
    document.getElementById("nameapp").innerHTML = appname;
    $.getJSON("https://wp-react.firebaseio.com/"+appname+"/SideBar.json", function(result){
      var obj = result;
      if(obj.MenuBgColor!==undefined){
          $("#Menu_textcolor").val(obj.MenuTextColor); $("#Menu_textcolor").trigger('change');
          $("#Menu_bgcolor").val(obj.MenuBgColor); $("#Menu_bgcolor").trigger('change');
          $("#Menu_usercolor").val(obj.MenuUserColor); $("#Menu_usercolor").trigger('change');
          $("#Menu_accordioncolor").val(obj.MenuAccordionColor); $("#Menu_accordioncolor").trigger('change');
          $("#Menu_bordercolor").val(obj.MenuBorderColor); $("#Menu_bordercolor").trigger('change');
          document.getElementById("labelfont").value=obj.MenuFontFamily;
          document.getElementById("labelfontIos").value=obj.MenuFontFamilyIos;
      }
    });
   });
</script>
<script src="../controller/sidebar.js"></script>
</html>
