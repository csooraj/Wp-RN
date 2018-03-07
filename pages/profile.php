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
                <h3 class="box-title">Configure Profile</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>User Name Title Size</label>
                  <input id="EditProfile_cpSize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label for="sel1">Username Font Family Android:</label>
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
                  <label for="sel1">Username Font Family IOS:</label>
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
                  <label>Username Title Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="EditProfile_cpTitleColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Username Subtitle Font Family Android:</label>
                  <select class="form-control" id="EditProfile_sbFont">
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
                  <label for="sel1">Username Subtitle Font Family IOS:</label>
                  <select class="form-control" id="EditProfile_sbFontIOS">
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
                  <label>Username Subtitle Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="EditProfile_sbTitleColor" type="text" class="form-control" placeholder="Click on right side button to select color">
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
                  <label for="sel1">Username Subtitle Font Family IOS:</label>
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
                  <label for="sel1">Editprofile Button Text Font Family</label>
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
                  <label for="sel1">Editprofile Button Text Font Family IOS:</label>
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
                  <label>Editprofile Button Text Size</label>
                  <input id="EditProfile_submitTextSize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label>Editprofile Button Background Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="EditProfile_submitBg" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Editprofile Text Color</label>
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
                <div id="termdiv">
                  <label for="sel1">Select The Fields That Should Be Shown</label>
                  <div class="form-group">
                    <select class="selectpicker" multiple id="terms">
                    </select>
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
      $('#myid12').addClass('active');
      document.getElementById("nameapp").innerHTML = appname;
      $.getJSON("https://wp-react.firebaseio.com/"+appname+"/Profile.json", function(result){
        var obj = result;
        if(obj.UsernameFontFamily!==undefined){
          document.getElementById("EditProfile_cpFont").value = obj.UsernameFontFamily;
          document.getElementById("EditProfile_cpFontIOS").value = obj.UserNameFormFontIOS;
          document.getElementById("EditProfile_sbFont").value = obj.UserNameSubTitleFont;
          document.getElementById("EditProfile_sbFontIOS").value = obj.UserNameSubTitleFontIOS;
          document.getElementById("EditProfile_formLabelFont").value = obj.UserNameFormFont;
          document.getElementById("EditProfile_formLabelFontIOS").value = obj.UserNameFormFontIOS;
          document.getElementById("EditProfile_submitFont").value = obj.EditProfileButtonTextFont;
          document.getElementById("EditProfile_submitFontIOS").value = obj.EditProfileButtonTextFontIOS;
          document.getElementById("EditProfile_cpSize").value = obj.UserNameFontSize;
          document.getElementById("EditProfile_submitTextSize").value = obj.EditProfileButtonTextSize;
          $("#EditProfile_sbTitleColor").val(obj.UserNameSubTitleColor); $("#EditProfile_sbTitleColor").trigger('change');
          $("#EditProfile_formBorderColor").val(obj.UserNameFormBorderColor); $("#EditProfile_formBorderColor").trigger('change');
          $("#EditProfile_cpTitleColor").val(obj.UserNameTextColor); $("#EditProfile_cpTitleColor").trigger('change');
          $("#EditProfile_formColor").val(obj.UserNameFormLabel); $("#EditProfile_formColor").trigger('change');
          $("#EditProfile_submitBg").val(obj.EditProfileButtonBg); $("#EditProfile_submitBg").trigger('change');
          $("#EditProfile_SubmitTextColor").val(obj.EditProfileButtonTextColor); $("#EditProfile_SubmitTextColor").trigger('change');
        }
      });
      $('#terms').empty();
      $.getJSON('http://stage.liquidfactory.it/villamedici/wp-json/wp-react-native-converter/v1/user-meta-fields-key', function(result){
         $.each(result, function(i, field){
           $("#terms").append('<option value='+field+'>'+field+'</option>');
         });
         $('#terms').selectpicker('refresh');
      });
     });
  </script>
  <script src="../controller/profile.js"></script>
</html>
