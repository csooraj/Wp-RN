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
                <h3 class="box-title">Configure Login Screen</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Login Background Url</label>
                  <input id="fileUpload" type="file" class="form-control" accept="image/*">
                  <image alt="Image Preview" src="" id="image1" height="100" width="100" style="border:1px solid"></image>
                </div>
                <div class="form-group">
                  <label>Login Logo Url</label>
                  <input id="fileUpload1" type="file" class="form-control" accept="image/*">
                  <image alt="Image Preview" src="" id="image2" height="100" width="100" style="border:1px solid"></image>
                </div>
                <div class="form-group">
                  <label>Label Size</label>
                  <input id="Login_labelSize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label>Label Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Login_textColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Select Login Label Font Family Android:</label>
                  <select class="form-control" id="Login_labelFont">
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
                  <label for="sel1">Select Login Label Font Family iOS:</label>
                  <select class="form-control" id="Login_fontIOSFamily">
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
                  <label>Input Box Background Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Login_inputColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Button Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Login_buttonColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Button Label Size</label>
                  <input id="Login_buttonTextSize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label for="sel1">Select Login Button Label Font Family Android:</label>
                  <select class="form-control" id="Login_buttonFont">
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
                  <label for="sel1">Select Login Button Font Family iOS:</label>
                  <select class="form-control" id="Login_buttonFontIOSFamily">
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
                  <a class="btn btn-app" onClick="UploadLogin()">
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
      $('#myid2').addClass('active');
      var appname = $.cookie("appname");
      document.getElementById("nameapp").innerHTML = appname;
      $.getJSON("https://wp-react.firebaseio.com/"+appname+"/Login.json", function(result){
        var obj = result;
        if(obj.LoginBgUrl!==undefined){
          var logourl = "https://wp-reactdemo.s3.ap-south-1.amazonaws.com/Assets/"+obj.LoginBgUrl;
          var backgroundurl = "https://wp-reactdemo.s3.ap-south-1.amazonaws.com/Assets/"+obj.LoginLogo;
          $("#Login_textColor").val(obj.LoginLabelColor); $("#Login_textColor").trigger('change');
          $("#Login_buttonColor").val(obj.LoginButtonColor); $("#Login_buttonColor").trigger('change');
          $("#Login_inputColor").val(obj.LoginButtonColor); $("#Login_inputColor").trigger('change');
          document.getElementById("Login_labelSize").value=obj.LoginLabelSize;
          document.getElementById("Login_labelFont").value=obj.LoginLabelFont;
          document.getElementById("Login_buttonFont").value=obj.LoginButtonLabelFont;
          document.getElementById("Login_fontIOSFamily").value=obj.LoginLabelIosFont;
          document.getElementById("Login_buttonFontIOSFamily").value=obj.LoginButtonLabelIosFont;
          document.getElementById("image1").src=logourl;
          document.getElementById("image2").src=backgroundurl;
          document.getElementById("Login_buttonTextSize").value=obj.LoginButtonTextSize;
        }
      });
     });
     $("#fileUpload").change(function(){
       var reader = new FileReader();
       reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("image1").src = e.target.result;
        };

        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
     });
     $("#fileUpload1").change(function(){
       var reader = new FileReader();
       reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("image2").src = e.target.result;
        };

        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
     });
  </script>
</html>
