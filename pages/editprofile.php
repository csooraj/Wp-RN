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
                <h3 class="box-title">Configure Edit Profile</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Change Profile Pic Button Background Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="EditProfile_cpBg" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Change Profile Pic Title Size</label>
                  <input id="EditProfile_cpSize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label for="sel1">Change Profile Pic Title Font Family:</label>
                  <select class="form-control" id="EditProfile_cpFont">
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
                  <label for="sel1">Change Profile Pic Title Font Family IOS:</label>
                  <select class="form-control" id="EditProfile_cpFontIOS">
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
                  <label>Change Profile Pic Title Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="EditProfile_cpTitleColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Form Label Font Family</label>
                  <select class="form-control" id="EditProfile_formLabelFont">
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
                  <label for="sel1">Form Label Font Family IOS:</label>
                  <select class="form-control" id="EditProfile_formLabelFontIOS">
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
                  <label>Form Label Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="EditProfile_formColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Submit Button Text Font Family</label>
                  <select class="form-control" id="EditProfile_submitFont">
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
                  <label for="sel1">Submit Button Font Family IOS:</label>
                  <select class="form-control" id="EditProfile_submitFontIOS">
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
                  <label>Submit Button Text Size</label>
                  <input id="EditProfile_submitTextSize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label>Submit Button Background Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="EditProfile_submitBg" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Submit Button Text Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="EditProfile_SubmitTextColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Form BorderColor</label>
                  <div class="input-group my-colorpicker2">
                    <input id="EditProfile_formBorderColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <a class="btn btn-app" onClick="UploadEditProfileDetails()">
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
      $('#myid13').addClass('active');
      document.getElementById("nameapp").innerHTML = appname;
      $.getJSON("https://wp-react.firebaseio.com/"+appname+"/EditProfile.json", function(result){
        var obj = result;
        if(obj.EditProfileChangePicTitleFont!==undefined){
          document.getElementById("EditProfile_cpFont").value = obj.EditProfileChangePicTitleFont;
          document.getElementById("EditProfile_cpFontIOS").value = obj.EditProfileChangePicTitleFontIOS;
          document.getElementById("EditProfile_formLabelFont").value = obj.EditProfileFormLabelFont;
          document.getElementById("EditProfile_formLabelFontIOS").value = obj.EditProfileFormLabelFontIOS;
          document.getElementById("EditProfile_submitFont").value = obj.EditProfileSubmitButtonTextFont;
          document.getElementById("EditProfile_submitFontIOS").value = obj.EditProfileSubmitButtonTextFontIOS;
          document.getElementById("EditProfile_cpSize").value = obj.EditProfileChangePicFontSize;
          document.getElementById("EditProfile_submitTextSize").value = obj.EditProfileSubmitButtonTextSize;
          $("#EditProfile_cpBg").val(obj.EditProfileChangePicTitleColor); $("#EditProfile_cpBg").trigger('change');
          $("#EditProfile_formBorderColor").val(obj.EditProfileChangePicTitleColor); $("#EditProfile_formBorderColor").trigger('change');
          $("#EditProfile_cpTitleColor").val(obj.EditProfileChangePicTitleColor); $("#EditProfile_cpTitleColor").trigger('change');
          $("#EditProfile_formColor").val(obj.EditProfileFormLabelColor); $("#EditProfile_formColor").trigger('change');
          $("#EditProfile_submitBg").val(obj.EditProfileSubmitButtonBgColor); $("#EditProfile_submitBg").trigger('change');
          $("#EditProfile_SubmitTextColor").val(obj.EditProfileSubmitButtonTextColor); $("#EditProfile_SubmitTextColor").trigger('change');
        }
      });
     });
  </script>
  <script src="../controller/editprofile.js"></script>
</html>
