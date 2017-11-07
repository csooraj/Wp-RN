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
                <h3 class="box-title">Configure Create Account Screen</h3>
              </div>
              <div class="form-group">
                <label> Background Url</label>
                <input id="fileUpload" type="file" class="form-control" accept="image/*">
                <image alt="Image Preview" src="" id="image" height="100" width="100" style="border:1px solid"></image>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Title Size</label>
                  <input id="titlesize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label>Title Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="titlecolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Select Title Font Family Android:</label>
                  <select class="form-control" id="titleFont">
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
                  <label for="sel1">Select Title Font Family iOS:</label>
                  <select class="form-control" id="titleFontIOS">
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
                  <label>Text Input Label Size</label>
                  <input id="labelsize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label for="sel1">Select Input Label Font Family Android:</label>
                  <select class="form-control" id="inputlabelfont">
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
                  <label for="sel1">Select Title Font Family iOS:</label>
                  <select class="form-control" id="inputlabelfontIOS">
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
                  <label>Text Input Label Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="labelcolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Input Box Background Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="inputcolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Continue Button Label Size</label>
                  <input id="continuebuttonlabelsize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label>Continue Button Label Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="continuebuttonlabelcolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Continue Button BackgroundColor</label>
                  <div class="input-group my-colorpicker2">
                    <input id="continuebuttoncolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Continue Button Label Font Family Android:</label>
                  <select class="form-control" id="buttonlabelfont">
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
                  <label for="sel1">Continue Button Label Font Family iOS:</label>
                  <select class="form-control" id="buttonlabelfontIOS">
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
                  <label>Back Button Text Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="backbuttoncolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Back Button Text Size</label>
                  <input id="backbuttontextsize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label>Terms and Conditions Text Size</label>
                  <input id="termstextsize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label>Terms and Conditions Text Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="termstextcolor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <a class="btn btn-app" onClick="UploadAccountDetails()">
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
      $('#myid3').addClass('active');
      var appname = $.cookie("appname");
      document.getElementById("nameapp").innerHTML = appname;
      $.getJSON("https://wp-react.firebaseio.com/"+appname+"/CreateAccount.json", function(result){
        var obj = result;
        if(obj.AccountBgUrl!==undefined){
            var backgroundurl = "https://wp-reactdemo.s3.ap-south-1.amazonaws.com/Assets/"+obj.AccountBgUrl;
            document.getElementById("image").src=backgroundurl;
            document.getElementById("titlesize").value=obj.AccountTitleSize;
            document.getElementById("inputlabelfont").value=obj.AccountInputFont;
            document.getElementById("inputlabelfontIOS").value=obj.AccountInputFontIos;
            document.getElementById("buttonlabelfont").value=obj.AccountButtonTextFont;
            document.getElementById("buttonlabelfontIOS").value=obj.AccountButtonTextFontIos;
            document.getElementById("titleFont").value=obj.AccountTitleFont;
            document.getElementById("titleFontIOS").value=obj.AccountTitleFontIos;
            document.getElementById("labelsize").value=obj.AccountLabelSize;
            document.getElementById("continuebuttonlabelsize").value=obj.AccountButtonTextSize;
            document.getElementById("backbuttontextsize").value=obj.AccountBackLabelSize;
            document.getElementById("termstextsize").value=obj.AccountTermsSize;
            $("#titlecolor").val(obj.AccountTitleColor); $("#titlecolor").trigger('change');
            $("#labelcolor").val(obj.AccountLabelColor); $("#labelcolor").trigger('change');
            $("#continuebuttoncolor").val(obj.AccountButtonColor); $("#continuebuttoncolor").trigger('change');
            $("#continuebuttonlabelcolor").val(obj.AccountButtonTextColor); $("#continuebuttonlabelcolor").trigger('change');
            $("#backbuttoncolor").val(obj.AccountBackLabelColor); $("#backbuttoncolor").trigger('change');
            $("#inputcolor").val(obj.AccountInputColor); $("#inputcolor").trigger('change');
            $("#termstextcolor").val(obj.AccountTermsColor); $("#termstextcolor").trigger('change');
        }
      });
     });
    $("#fileUpload").change(function(){
      var reader = new FileReader();
      reader.onload = function (e) {
         document.getElementById("image").src = e.target.result;
       };
      reader.readAsDataURL(this.files[0]);
    });
  </script>
  <script src="../controller/createaccount.js"></script>
</html>
