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
                <h3 class="box-title">Configure Post Details Screen</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Post Title Size</label>
                  <input id="Post_titleSize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label>Post Title Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Post_titleColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Post Title Font Family Android:</label>
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
                  <label>Post Date Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Post_dateColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
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
                  <label for="sel1">Post Author Font Family Android: </label>
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
                  <label for="sel1">Post Author Font Family IOS:</label>
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
                  <label>Post Category Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Post_categoryColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Post Category Font Family Android:</label>
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
                  <label>Post Category Size</label>
                  <input id="Post_categorySize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label>Post Content Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Post_contentColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Post Content Size</label>
                  <input id="Post_contentSize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label for="sel1">Post Content Font Family Android:</label>
                  <select class="form-control" id="Post_contentFont">
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
                  <label for="sel1">Post Content Font Family IOS:</label>
                  <select class="form-control" id="Post_contentFontIOS">
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
                  <label>Comment Button Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Post_commentColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Comment Button Text Color</label>
                  <div class="input-group my-colorpicker2">
                    <input id="Post_commentTextColor" type="text" class="form-control" placeholder="Click on right side button to select color">
                    <div class="input-group-addon">
                      <i></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="sel1">Comment Button Text Font Family Android</label>
                  <select class="form-control" id="Post_commentFont">
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
                  <label for="sel1">Comment Button Font Family IOS:</label>
                  <select class="form-control" id="Post_commentFontIOS">
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
                  <label>Comment Button Text Size</label>
                  <input id="Post_commentSize" type="number" class="form-control">
                </div>
                <div class="form-group">
                  <label>Show Comment / Hide Comment</label>
                  <div>
                    <label class="radio-inline">
                    <input type="radio" id="r2" name="optradio" value="show">Show Comment
                    </label>
                    <label class="radio-inline">
                    <input type="radio" id="r1" name="optradio" value="hide">Hide Comment
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <a class="btn btn-app" onClick="UploadPostViewDetails()">
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
      $.getJSON("https://wp-react.firebaseio.com/"+appname+"/PostDetails.json", function(result){
        var obj = result;
        var type = obj.PostShowComment;
        if(obj.PostTitleSize!==undefined){
          document.getElementById("Post_titleSize").value = obj.PostTitleSize;
          document.getElementById("Post_titleFont").value = obj.PostTitleFont;
          document.getElementById("Post_titleFontIOS").value = obj.PostTitleFontIOS;
          $("#Post_titleColor").val(obj.PostTitleColor); $("#Post_titleColor").trigger('change');
          $("#Post_commentColor").val(obj.PostCommentColor); $("#Post_commentColor").trigger('change');
          $("#Post_commentTextColor").val(obj.PostCommentTextColor); $("#Post_commentTextColor").trigger('change');
          $("#Post_dateColor").val(obj.PostDateColor); $("#Post_dateColor").trigger('change');
          $("#Post_categoryColor").val(obj.PostCategoryColor); $("#Post_categoryColor").trigger('change');
          $("#Post_contentColor").val(obj.PostContentColor); $("#Post_contentColor").trigger('change');
          document.getElementById("Post_authorFont").value=obj.PostAuthorFont;
          document.getElementById("Date_locale").value=obj.PostDateLocale;
          document.getElementById("Date_format").value=obj.PostDateFormat;
          document.getElementById("Post_authorFontIOS").value=obj.PostAuthorFontIOS;
          document.getElementById("Post_commentSize").value=obj.PostCommentSize;
          document.getElementById("Post_commentFont").value=obj.PostCommentFont;
          document.getElementById("Post_commentFontIOS").value=obj.PostCommentFontIOS;
          document.getElementById("Post_categorySize").value=obj.PostCategorySize;
          document.getElementById("Post_categoryFont").value=obj.PostCategoryFont;
          document.getElementById("Post_categoryFontIOS").value=obj.PostCategoryFontIOS;
          document.getElementById("Post_contentSize").value=obj.PostContentSize;
          document.getElementById("Post_contentFont").value=obj.PostContentFont;
          document.getElementById("Post_contentFontIOS").value=obj.PostContentFontIOS;
          if(type==='hide'){
            $('#r1').attr("checked","true");
          }else{
            $('#r2').attr("checked","true");
          }
        }
      });
     });
  </script>
  <script src="../controller/postdetails.js"></script>
</html>
