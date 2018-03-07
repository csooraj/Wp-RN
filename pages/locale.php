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
                <h3 class="box-title">Configure Locale Strings</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="sel1">Select the language:</label>
                  <select class="form-control" id="Locale_lan">
                    <option>en-US</option>
                    <option>fr-FR</option>
                    <option>it-IT</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Enter the key name</label>
                  <input id="Locale_Key" type="text" class="form-control">
                </div>
                <table border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                Source Language
            </td>
            <td>
                <select id="ddlSource">
                    <option value="ZH">Chinese (Mandarin)</option>
                    <option value="CS">Czech</option>
                    <option value="DA">Danish</option>
                    <option value="NL">Dutch</option>
                    <option value="EN" selected = "selected">English</option>
                    <option value="ET">Estonian</option>
                    <option value="FR">French</option>
                    <option value="KA">Georgian</option>
                    <option value="DE">German</option>
                    <option value="HI">Hindi</option>
                    <option value="HU">Hungarian</option>
                    <option value="LA">Latin</option>
                    <option value="LV">Latvian</option>
                    <option value="LT">Lithuanian</option>
                    <option value="SR">Serbian</option>
                    <option value="CY">Welsh</option>
                    <option value="XH">Xhosa</option>
                </select>
            </td>
            <td>
            </td>
            <td>
                Target Language
            </td>
            <td>
                <select id="ddlTarget">
                    <option value="ZH">Chinese (Mandarin)</option>
                    <option value="CS">Czech</option>
                    <option value="DA">Danish</option>
                    <option value="NL">Dutch</option>
                    <option value="EN">English</option>
                    <option value="ET">Estonian</option>
                    <option value="FR" selected = "selected">French</option>
                    <option value="KA">Georgian</option>
                    <option value="DE">German</option>
                    <option value="HI">Hindi</option>
                    <option value="HU">Hungarian</option>
                    <option value="LA">Latin</option>
                    <option value="LV">Latvian</option>
                    <option value="LT">Lithuanian</option>
                    <option value="SR">Serbian</option>
                    <option value="CY">Welsh</option>
                    <option value="XH">Xhosa</option>
                </select>
            </td>
            <td>
                <input type="button" id="btnTranslate" value="Translate" />
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <textarea id="txtSource" rows="10" cols="30"></textarea>
            </td>
            <td>
            </td>
            <td colspan="2">
                <textarea id="txtTarget" rows="10" cols="30"></textarea>
            </td>
            <td>
            </td>
        </tr>
    </table>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnTranslate").click(function () {
            var url = "https://translation.googleapis.com/language/translate/v2?key=pz7XtlQC-PYx-jrVMJErTcg";
            url += "&source=" + $("#ddlSource").val();
            url += "&target=" + $("#ddlTarget").val();
            url += "&q=" + escape($("#txtSource").val());
            $.get(url, function (data, status) {
                $("#txtTarget").val(data.data.translations[0].translatedText);
            });
        });
    </script>

                <div class="form-group">
                  <a class="btn btn-app" onClick="UploadLocale()">
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
      $.getJSON("https://wp-react.firebaseio.com/"+appname+"/Locale.json", function(result){

      });
     });
  </script>
  <script src="../controller/locale.js"></script>
</html>
