function UploadPostArchiveDetails() {
  let appname = $.cookie("appname");
  let menuitem = $.cookie("custompost");
  let database = firebase.database();
  let PostArchive_subtitlecolor = document.getElementById("PostArchive_subtitlecolor").value;
  let PostArchive_titlecolor = document.getElementById("PostArchive_titlecolor").value;
  let PostArchive_categorycolor = document.getElementById("PostArchive_categorycolor").value;
  let e2 = document.getElementById("Post_categoryFont");
  let Post_categoryfontFamily = e2.options[e2.selectedIndex].text;
  let e4 = document.getElementById("Post_titleFont");
  let Post_titlefontFamily = e4.options[e4.selectedIndex].text;
  var e3 = document.getElementById("Post_authorFont");
  let Post_authorFont = e3.options[e3.selectedIndex].text;
  let e8 = document.getElementById("Post_titleFontIOS");
  let Post_categoryfontFamilyIOS = e8.options[e8.selectedIndex].text;
  let e9 = document.getElementById("Post_categoryFontIOS");
  let Post_titlefontFamilyIOS = e9.options[e9.selectedIndex].text;
  var e10 = document.getElementById("Post_authorFontIOS");
  let Post_authorFontIOS = e10.options[e10.selectedIndex].text;
  let LinkTo = $('#layoutbutton').text();



  if ((PostArchive_subtitlecolor !== '') && ( PostArchive_titlecolor!== '') && (PostArchive_categorycolor !== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "PostArchiveTitleColor": PostArchive_titlecolor,
        "PostArchiveSubTitleColor": PostArchive_subtitlecolor,
        "PostArchiveCategoryColor": PostArchive_categorycolor,
        "PostTitleFontFamily": Post_titlefontFamily,
        "PostAuthorFont": Post_authorFont,
        "PostCategoryFont": Post_categoryfontFamily,
        "PostTitleFontFamilyIOS": Post_titlefontFamilyIOS,
        "PostAuthorFontIOS": Post_authorFontIOS,
        "PostCategoryFontIOS": Post_categoryfontFamilyIOS,
      };
    firebase.database().ref("Test/Layout8/"+menuitem).update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/Layout8/"+menuitem).update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
