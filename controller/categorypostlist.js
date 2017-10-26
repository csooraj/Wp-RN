function UploadPostArchiveDetails() {
  let appname = $.cookie("appname");
  let database = firebase.database();
  let PostArchive_subtitlecolor = document.getElementById("PostArchive_subtitlecolor").value;
  let PostArchive_titlecolor = document.getElementById("PostArchive_titlecolor").value;
  let PostArchive_categorycolor = document.getElementById("PostArchive_categorycolor").value;
  let PostArchive_imageTitleColor = document.getElementById("PostArchive_imageTitleColor").value;
  let PostArchive_tabTextColor = document.getElementById("PostArchive_tabTextColor").value;
  let PostArchive_tabBordercolor = document.getElementById("PostArchive_tabBordercolor").value;
  let PostArchive_tabBgcolor = document.getElementById("PostArchive_tabBgcolor").value;
  let e2 = document.getElementById("Post_titleFont");
  let Post_categoryfontFamily = e2.options[e2.selectedIndex].text;
  let e4 = document.getElementById("Post_categoryFont");
  let Post_titlefontFamily = e4.options[e4.selectedIndex].text;
  var e3 = document.getElementById("Post_authorFont");
  let Post_authorFont = e3.options[e3.selectedIndex].text;
  var e5 = document.getElementById("Post_layoutType");
  let Post_layout = e5.options[e5.selectedIndex].text;
  var e6 = document.getElementById("Post_imageTitleFont");
  let Post_imageTitleFont = e6.options[e6.selectedIndex].text;
  var e7 = document.getElementById("Post_tabFont");
  let Post_TabTitleFont = e7.options[e7.selectedIndex].text;



  if ((PostArchive_subtitlecolor !== '') && ( PostArchive_titlecolor!== '') && (PostArchive_categorycolor !== '')) {
    document.getElementById("Error").innerHTML = "";
      var data = {
        "PostArchiveTitleColor": PostArchive_titlecolor,
        "PostArchiveImageTitleColor": PostArchive_imageTitleColor,
        "PostArchiveImageTitleFont": Post_imageTitleFont,
        "PostTabTextColor": PostArchive_tabTextColor,
        "PostTabBorderColor": PostArchive_tabBordercolor,
        "PostArchiveSubTitleColor": PostArchive_subtitlecolor,
        "PostArchiveCategoryColor": PostArchive_categorycolor,
        "PostTitleFontFamily": Post_titlefontFamily,
        "PostAuthorFont": Post_authorFont,
        "PostLayout": Post_layout,
        "PostCategoryFont": Post_categoryfontFamily,
        "PostTabFont": Post_TabTitleFont,
        "PostTabBgColor": PostArchive_tabBgcolor,
      };
    firebase.database().ref("Test/CategoryPostList").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      } else {
        document.getElementById("loading").innerHTML = 'Loading Preview...';
        var iframe = document.getElementById('mine');
        iframe.src = iframe.src;
      }
    });
    firebase.database().ref(appname+"/CategoryPostList").update(data, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
