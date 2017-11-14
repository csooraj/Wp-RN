function UploadPostArchiveDetails() {
  let appname = $.cookie("appname");
  let menuname = $.cookie("custompost");
  let database = firebase.database();
  let PostArchive_subtitlecolor = document.getElementById("PostArchive_subtitlecolor").value;
  let PostArchive_titlecolor = document.getElementById("PostArchive_titlecolor").value;
  let PostArchive_categorycolor = document.getElementById("PostArchive_categorycolor").value;
  let e2 = document.getElementById("Post_titleFont");
  let Post_categoryfontFamily = e2.options[e2.selectedIndex].text;
  let Post_categoryfontFamilyIOS = document.getElementById("Post_categoryFontIOS").value;
  let e4 = document.getElementById("Post_categoryFont");
  let Post_titlefontFamily = e4.options[e4.selectedIndex].text;
  let Post_titlefontFamilyIOS = document.getElementById("Post_titleFontIOS").value;
  var e3 = document.getElementById("Post_authorFont");
  let Post_authorFont = e3.options[e3.selectedIndex].text;
  let Post_authorFontIOS = document.getElementById("Post_authorFontIOS").value;



  if ((PostArchive_subtitlecolor !== '') && ( PostArchive_titlecolor!== '') && (PostArchive_categorycolor !== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "PostArchiveTitleColor": PostArchive_titlecolor,
        "PostArchiveSubTitleColor": PostArchive_subtitlecolor,
        "PostArchiveCategoryColor": PostArchive_categorycolor,
        "PostTitleFontFamily": Post_titlefontFamily,
        "PostTitleFontFamilyIOS": Post_titlefontFamilyIOS,
        "PostAuthorFont": Post_authorFont,
        "PostAuthorFontIOS": Post_authorFontIOS,
        "PostCategoryFont": Post_categoryfontFamily,
        "PostCategoryFontIOS": Post_categoryfontFamilyIOS,
      };
    firebase.database().ref("Test/Layout4/"+menuname+"/").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/Layout4/"+menuname+"/").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
